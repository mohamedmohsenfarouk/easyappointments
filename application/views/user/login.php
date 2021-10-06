<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="<?=asset_url('assets/img/favicon.ico')?>">
    <title><?=lang('login')?> | 7keema</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=asset_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=asset_url('assets/plugins/fontawesome/css/fontawesome.min.css')?>">
    <link rel="stylesheet" href="<?=asset_url('assets/plugins/fontawesome/css/all.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=asset_url('assets/css/style.css')?>">
    <!--[if lt IE 9]>
		<script src="<?=asset_url('assets/js/html5shiv.min.js')?>"></script>
		<script src="<?=asset_url('assets/js/respond.min.js')?>"></script>
		<![endif]-->

    <script src="<?=asset_url('assets/js/jquery-3.5.1.min.js')?>"></script>
    <script>
    var GlobalVariables = {
        csrfToken: <?=json_encode($this->security->get_csrf_hash())?>,
        baseUrl: <?=json_encode($base_url)?>,
        destUrl: <?=json_encode($dest_url)?>,
        AJAX_SUCCESS: 'SUCCESS',
        AJAX_FAILURE: 'FAILURE'
    };

    var EALang = <?=json_encode($this->lang->language)?>;

    var availableLanguages = <?=json_encode(config('available_languages'))?>;

    $(function() {
        GeneralFunctions.enableLanguageSelection($('#select-language'));
    });
    </script>
</head>

<body>
    <div id="login-frame" class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <h2 class="text-center"><?=lang('backend_section')?></h2>
                <p class="text-center"><?=lang('you_need_to_login')?></p>
                <div class="account-box">
                    <div class="alert d-none"></div>
                    <form id="login-form" class="form-signin">
                        <div class="account-logo">
                            <a href="<?php echo base_url(); ?>"><img src="<?=asset_url('assets/img/logo-dark.png')?>"
                                    alt="EasyAppointments"></a>
                        </div>
                        <div class="form-group">
                            <label for="username"><?=lang('username')?></label>
                            <input type="text" id="username" autofocus="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password"><?=lang('password')?></label>
                            <input type="password" id="password" class="form-control">
                        </div>
                        <div class="form-group text-right">
                            <a href="<?=site_url('user/forgot_password')?>"><?=lang('forgot_your_password')?></a>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" id="login"
                                class="btn btn-primary account-btn"><?=lang('login')?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=asset_url('assets/js/popper.min.js')?>"></script>
    <script src="<?=asset_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?=asset_url('assets/js/app.js')?>"></script>
    <script src="<?=asset_url('assets/ext/fontawesome/js/fontawesome.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/fontawesome/js/solid.min.js')?>"></script>
    <script src="<?=asset_url('assets/js/polyfill.js')?>"></script>
    <script src="<?=asset_url('assets/js/general_functions.js')?>"></script>
    <script src="<?=asset_url('assets/js/login.js')?>"></script>
</body>

</html>