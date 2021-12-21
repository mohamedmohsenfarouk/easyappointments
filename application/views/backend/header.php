<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title><?=isset($page_title) ? $page_title : lang('backend_section')?> | 7keema</title>

    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=asset_url('assets/backend/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=asset_url('assets/backend/plugins/fontawesome/css/fontawesome.min.css')?>">
    <link rel="stylesheet" href="<?=asset_url('assets/backend/plugins/fontawesome/css/all.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=asset_url('assets/backend/css/fullcalendar.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=asset_url('assets/backend/css/select2.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=asset_url('assets/backend/css/datatables.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=asset_url('assets/backend/css/bootstrap-datetimepicker.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=asset_url('assets/backend/css/style.css')?>">

    <link rel="icon" type="image/x-icon" href="<?=asset_url('assets/backend/img/favicon.ico')?>">
    <link rel="icon" sizes="192x192" href="<?=asset_url('assets/backend/img/logo-dark.png')?>">

    <script>
        // Global JavaScript Variables - Used in all backend pages.
        var availableLanguages = <?=json_encode(config('available_languages'))?>;
        var EALang = <?=json_encode($this->lang->language)?>;
    </script>

    <script src="<?=asset_url('assets/ext/jquery/jquery.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/popper/popper.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/tippy/tippy-bundle.umd.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/jquery-ui/jquery-ui.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/jquery-ui/jquery-ui.touch-punch.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/moment/moment.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/moment/moment-timezone-with-data.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/datejs/date.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/trumbowyg/trumbowyg.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/select2/select2.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/fontawesome/js/fontawesome.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/fontawesome/js/solid.min.js')?>"></script>

        <!--[if lt IE 9]>
		<script src="<?=asset_url('assets/backend/js/html5shiv.min.js')?>"></script>
		<script src="<?=asset_url('assets/backend/js/respond.min.js')?>"></script>
		<![endif]-->
        <style>
            .page-wrapper {
    background-color: white;
    left: 0;
    margin-left: 230px;
    padding-right: 35px;
    padding-top: 50px;
    position: relative;
    -webkit-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.sidebar {
    top: 50px;
    height: 680px;
    width: 220px;
    z-index: 1038;
    background-color: #fff;
    bottom: 0;
    margin-top: 0px;
    position: absolute;
    left: 0;
    -webkit-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    transition: all 0.4s ease;
    box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
}
        </style>
</head>

<body>
<div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <div class="logo">
                    <img src="<?=base_url('assets/backend/img/Logo_Hospital.png')?>" width="30" height="30" alt="">
                </div>
            </div>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fas fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="<?=base_url('assets/backend/img/user.jpg')?>" width="40" alt="<?=$user_display_name?>">
						<span class="status online"></span></span>
                        <span><?=$user_display_name?></span>
                    </a>
                    <div class="dropdown-menu">
                        <?php $hidden = ($privileges[PRIV_SYSTEM_SETTINGS]['view'] == true
    || $privileges[PRIV_USER_SETTINGS]['view'] == true) ? '' : 'd-none'?>
                        <?php $active = ($active_menu == PRIV_SYSTEM_SETTINGS) ? 'active' : ''?>
                        <a class="dropdown-item" href="<?=site_url('backend/settings')?>" data-tippy-content="<?=lang('settings_hint')?>" <?=$active . $hidden?>><?=lang('settings')?></a>
                        <a class="dropdown-item" href="<?=site_url('user/logout')?>" data-tippy-content="<?=lang('log_out_hint')?>">
                            <?=lang('log_out')?>
                        </a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <?php $hidden = ($privileges[PRIV_SYSTEM_SETTINGS]['view'] == true
    || $privileges[PRIV_USER_SETTINGS]['view'] == true) ? '' : 'd-none'?>
                    <?php $active = ($active_menu == PRIV_SYSTEM_SETTINGS) ? 'active' : ''?>
                    <a class="dropdown-item" href="<?=site_url('backend/settings')?>" data-tippy-content="<?=lang('settings_hint')?>" <?=$active . $hidden?>><?=lang('settings')?></a>
                    <a class="dropdown-item" href="<?=site_url('user/logout')?>" data-tippy-content="<?=lang('log_out_hint')?>">
                        <?=lang('log_out')?>
                    </a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <?php $hidden = ($privileges[PRIV_APPOINTMENTS]['view'] == true) ? '' : 'd-none'?>
                        <?php $active = ($active_menu == PRIV_APPOINTMENTS) ? 'active' : ''?>
                        <li <?=$active . $hidden?>>
                            <a href="<?=site_url('backend')?>" data-tippy-content="<?=lang('manage_appointment_record_hint')?>"><i class="far fa-calendar-check"></i> <?=lang('calendar')?></a>
                        </li>
                        <?php $hidden = ($privileges[PRIV_APPOINTMENTS]['view'] == true) ? '' : 'd-none'?>
                        <?php $active = ($active_menu == PRIV_APPOINTMENTS) ? 'active' : ''?>
                        <li <?=$active . $hidden?>>
                            <a href="<?=site_url('backend/customers')?>" data-tippy-content="<?=lang('manage_customers_hint')?>"><i class="fas fa-wheelchair"></i> <?=lang('customers')?></a>
                        </li>
                        <?php $hidden = ($privileges[PRIV_APPOINTMENTS]['view'] == true) ? '' : 'd-none'?>
                        <?php $active = ($active_menu == PRIV_APPOINTMENTS) ? 'active' : ''?>
                        <li <?=$active . $hidden?>>
                            <a href="<?=site_url('backend/services')?>" data-tippy-content="<?=lang('manage_services_hint')?>"><i class="far fa-hospital"></i> <?=lang('services')?></a>
                        </li>
                        <?php $hidden = ($privileges[PRIV_APPOINTMENTS]['view'] == true) ? '' : 'd-none'?>
                        <?php $active = ($active_menu == PRIV_APPOINTMENTS) ? 'active' : ''?>
                        <li <?=$active . $hidden?>>
                            <a href="<?=site_url('backend/users')?>" data-tippy-content="<?=lang('manage_users_hint')?>"><i class="fas fa-user"></i> <?=lang('users')?></a>
                        </li>
                        <?php $hidden = ($privileges[PRIV_APPOINTMENTS]['view'] == true) ? '' : 'd-none'?>
                        <?php $active = ($active_menu == PRIV_APPOINTMENTS) ? 'active' : ''?>
                        <li <?=$active . $hidden?>>
                            <a href="<?=site_url('backend/appointments')?>" data-tippy-content="<?=lang('manage_appointments_hint')?>"><i class="far fa-calendar-alt"></i> <?=lang('appointments')?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<div id="notification" style="display: none;"></div>

<div id="loading" style="display: none;">
    <div class="any-element animation is-loading">
        &nbsp;
    </div>
</div>
<div class="sidebar-overlay" data-reff=""></div>