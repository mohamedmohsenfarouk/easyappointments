<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#35A768">
    <title><?=lang('forgot_your_password')?> | 7keema</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=asset_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=asset_url('assets/plugins/fontawesome/css/fontawesome.min.css')?>">
    <link rel="stylesheet" href="<?=asset_url('assets/plugins/fontawesome/css/all.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=asset_url('assets/css/style.css')?>">
    <link rel="icon" type="image/x-icon" href="<?=asset_url('assets/img/favicon.ico')?>">
    <link rel="icon" sizes="192x192" href="<?=asset_url('assets/img/logo-dark.png')?>">
    <!--[if lt IE 9]>
		<script src="<?=asset_url('assets/js/html5shiv.min.js')?>"></script>
		<script src="<?=asset_url('assets/js/respond.min.js')?>"></script>
	<![endif]-->

    <script>
    var GlobalVariables = {
        csrfToken: <?=json_encode($this->security->get_csrf_hash())?>,
        baseUrl: <?=json_encode(config('base_url'))?>,
        AJAX_SUCCESS: 'SUCCESS',
        AJAX_FAILURE: 'FAILURE'
    };

    var EALang = <?=json_encode($this->lang->language)?>;
    </script>
</head>

<body>
    <div id="forgot-password-frame" class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <h2 class="text-center"><?=lang('forgot_your_password')?></h2>
                <p class="text-center"><?=lang('type_username_and_email_for_new_password')?></p>
                <div class="account-box">
                    <div class="alert d-none"></div>
                    <form class="form-signin">
                        <div class="account-logo">
                            <a href="<?php echo base_url(); ?>"><img
                                    src="<?=asset_url('assets/img/logo-dark.png')?> alt=" EasyAppointments"></a>
                        </div>
                        <div class="form-group">
                            <label for="username"><?=lang('username')?></label>
                            <input type="text" id="username" class="form-control" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="email"><?=lang('email')?></label>
                            <input type="text" id="email" class="form-control" />
                        </div>
                        <br>

                        <div class="form-group text-center">
                            <button id="get-new-password" class="btn btn-primary account-btn"
                                type="submit"><?=lang('regenerate_password')?></button>
                        </div>
                        <div class="text-center register-link">
                            <a href="<?=site_url('user/login')?>">
                                <?=lang('go_to_login')?></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=asset_url('assets/js/jquery-3.5.1.min.js')?>"></script>
    <script src="<?=asset_url('assets/js/popper.min.js')?>"></script>
    <script src="<?=asset_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?=asset_url('assets/js/app.js')?>"></script>
    <script src="<?=asset_url('assets/ext/fontawesome/js/fontawesome.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/fontawesome/js/solid.min.js')?>"></script>
    <script src="<?=asset_url('assets/js/polyfill.js')?>"></script>
    <script src="<?=asset_url('assets/js/general_functions.js')?>"></script>
    <script src="<?=asset_url('assets/js/forgot_password.js')?>"></script>
</body>

</html>