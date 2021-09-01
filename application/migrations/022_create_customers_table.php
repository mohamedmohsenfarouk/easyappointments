<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
class Migration_Create_customers_table extends CI_Migration { 
    public function up() { 
            $this->dbforge->add_field(array(
            'id' => array(
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE,
                    'null' => false,
            ),
            'first_name' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                    'null' => false,
            ),
            'last_name' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                    'null' => false,
            ),
            'email' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                    'null' => false,
            ),
            'password' => array(
                    'type' => 'TEXT',
                    'null' => false,
            ),
            'verification_key' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                    'null' => false,
            ),
            'phone_number' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                    'default' => NULL,
            ),
            'address' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                    'default' => NULL,
            ),
            'city' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                    'default' => NULL,
            ),
            'state' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                    'default' => NULL,
            ),
            'zip_code' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                    'default' => NULL,
            ),
            'notes' => array(
                    'type' => 'TEXT',
            ),
            'timezone' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                    'default' => 'UTC',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('customers');
    }

    public function down()
    {
        $this->dbforge->drop_table('customers');
    }
}