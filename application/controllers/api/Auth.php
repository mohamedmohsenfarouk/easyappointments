<?php defined('BASEPATH') or exit('No direct script access allowed');

/* ----------------------------------------------------------------------------
 * 7keema - Open Source Web Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2020, Alex Tselegidis
 * @license     https://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        https://easyappointments.org
 * @since       v1.2.0
 * ---------------------------------------------------------------------------- */

/**
 * API V1 Controller
 *
 * Parent controller class for the API v1 resources. Extend this class instead of the CI_Controller
 * and call the parent constructor.
 *
 * @package Controllers
 */
class Auth extends EA_Controller
{
    /**
     * Class Constructor
     *
     * This constructor will handle the common operations of each API call.
     *
     * Important: Do not forget to call the this constructor from the child classes.
     *
     * Notice: At the time being only the basic authentication is supported. Make sure
     * that you use the API through SSL/TLS for security.
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('register_model');
    }

    public function index()
    {
        $coming_data = json_decode(file_get_contents('php://input'), true);

        $email = $coming_data['email'];
        $password = $coming_data['password'];
        $first_name = $coming_data['first_name'];
        $last_name = $coming_data['last_name'];
        $phone_number = $coming_data['phone_number'];

        $user_exists = $this->login_model->can_login($email, $password);
        if ($user_exists == '') {
            $token = $this->db->select('*')->from('ea_customers')->where('email', $email)->get();
            echo json_encode([
                'status' => '200',
                'data' => $token->result()[0]->token,
            ]);
        } else {
            $jwt = new JWT();
            $Jwt_secret_key = Config::JWT_SECRET_KEY;
            $user_credentials = array(
                'email' => $email,
                'password' => $password,
            );
            $token = $jwt->encode($user_credentials, $Jwt_secret_key, 'HS256');
            $verification_key = md5(rand());
            $encrypted_password = password_hash($password, PASSWORD_BCRYPT);
            $data = array(
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password' => $encrypted_password,
                'phone_number' => $phone_number,
                'token' => $token,
                'verification_key' => $verification_key,
            );

            $this->register_model->insert($data);
            echo json_encode([
                'status' => '200',
                'data' => $token,
            ]);
        }
    }

    public function login_with_token()
    {
        $token = $this->input->get('token');
        $user = $this->db->select('*')->from('ea_customers')->where('token', $token)->get();
        $user_id = $user->result()[0]->id;

        if ($user_id == null) {
            echo json_encode([
                'status' => '200',
                'msg' => 'This token is invalid',
            ]);
        } else {
            $this->session->set_userdata('user_id', $user_id);
            redirect('/');
        }
    }
}
