<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Customer Registration | 7keema</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?=asset_url('assets/img/favicon.ico')?>">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=asset_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=asset_url('assets/plugins/fontawesome/css/fontawesome.min.css')?>">
    <link rel="stylesheet" href="<?=asset_url('assets/plugins/fontawesome/css/all.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=asset_url('assets/css/style.css')?>">
    <!--[if lt IE 9]>
		<script src="<?=asset_url('assets/js/html5shiv.min.js')?>"></script>
		<script src="<?=asset_url('assets/js/respond.min.js')?>"></script>
		<![endif]-->
</head>

<body>
    <div id="login-frame" class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <h2 class="text-center">Customer Registration</h2>
                <div class="account-box">
                    <?php
                    if ($this->session->flashdata('message')) {
                        echo '
                        <div class="alert alert-success">
                            ' . $this->session->flashdata("message") . '
                        </div>
                        ';
                    }
                    session_destroy();
                    ?>
                    <form method="post" action="<?php echo base_url(); ?>index.php/register/validation">
                    <div class="account-logo">
                            <a href="<?php echo base_url(); ?>"><img src="<?=asset_url('assets/img/logo-dark.png')?>"
                                    alt="EasyAppointments"></a>
                        </div>
                        <div class="form-group">
                            <label for="first_name">Enter Your First Name</label>
                            <input type="text" name="first_name" class="form-control"
                                value="<?php echo set_value('first_name'); ?>" />
                            <span class="text-danger"><?php echo form_error('first_name'); ?></span>
                        </div>

                        <div class="form-group">
                            <label for="last_name">Enter Your Last Name</label>
                            <input type="text" name="last_name" class="form-control"
                                value="<?php echo set_value('last_name'); ?>" />
                            <span class="text-danger"><?php echo form_error('last_name'); ?></span>
                        </div>
                        <div class="form-group">
                            <label for="user_email">Enter Your Valid Email Address</label>
                            <input type="text" name="user_email" class="form-control"
                                value="<?php echo set_value('user_email'); ?>" />
                            <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                        </div>
                        <div class="form-group">
                            <label for="user_password">Enter Password</label>
                            <input type="password" name="user_password" class="form-control"
                                value="<?php echo set_value('user_password'); ?>" />
                            <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Enter Phone Number</label>
                            <input type="number" name="phone_number" class="form-control"
                                value="<?php echo set_value('phone_number'); ?>" />
                            <span class="text-danger"><?php echo form_error('phone_number'); ?></span>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" name="register" value="Register" class="btn btn-primary account-btn" />
                        </div>
                        <div class="text-center login-link">
                            Already have an account? <a href="<?php echo base_url(); ?>index.php/login">Login</a>
                        </div>

                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                            value="<?php echo $this->security->get_csrf_hash(); ?>">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="<?=asset_url('assets/js/jquery-3.5.1.min.js')?>"></script>
    <script src="<?=asset_url('assets/js/popper.min.js')?>"></script>
    <script src="<?=asset_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?=asset_url('assets/js/app.js')?>"></script>
</body>

</html>