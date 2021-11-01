<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?=asset_url('assets/img/favicon.ico')?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=asset_url('assets/css/bootstrap.min.css')?>">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?=asset_url('assets/css/fontawesome/css/fontawesome.min.css')?>">
    <link rel="stylesheet" href="<?=asset_url('assets/css/fontawesome/css/all.min.css')?>">
    <!-- Main Css -->
    <link rel="stylesheet" href="<?=asset_url('assets/css/blue-style.css')?>">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?=asset_url('assets/js/html5shiv.min.js')?>"></script>
      <script src="<?=asset_url('assets/js/respond.min.js')?>"></script>
      <![endif]-->
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 float-left">
                        <div class="logo">
                            <a title="7keema" href="#">
                                <img alt="Logo" src="<?=asset_url('assets/img/medifab-logo.png')?>" width="308"
                                    height="61">
                            </a>
                        </div>
                    </div>
                    <!-- <div class="col-md-10">
                        <nav class="navbar navbar-expand-md p-0">
                            <div class="navbar-collapse collapse" id="navbar">
                                <ul class="nav navbar-nav main-nav float-right ml-auto">
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about-us.html" class="nav-link">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="departments.html" class="nav-link">Departments</a>
                                    </li>
                                    <li class="active nav-item">
                                        <a href="services.html" class="nav-link">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="doctors.html" class="nav-link">Doctors</a>
                                    </li>
                                    <li class="dropdown nav-item">
                                        <a class="dropdown-toggle nav-link" data-toggle="dropdown">Blog <b
                                                class="caret"></b></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="blog.html">Right Sidebar</a>
                                            <a class="dropdown-item" href="blog-left-sidebar.html">Left Sidebar</a>
                                            <a class="dropdown-item" href="blog-full-width.html">Full Width</a>
                                            <a class="dropdown-item" href="blog-grid.html">Blog Grid</a>
                                            <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact-us.html" class="nav-link">Contact Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn btn-primary appoint-btn nav-link"
                                            href="appointment.html">Appointment</a>
                                    </li>
                                    <li class="dropdown nav-item">
                                        <a class="dropdown-toggle settings-icon nav-link" data-toggle="dropdown"><i
                                                class="fas fa-cog"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="login.html">Login</a>
                                            <a class="dropdown-item" href="register.html">Register</a>
                                            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                                            <a class="dropdown-item" href="404.html">404</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div> -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header /-->
    <!-- Mobile Header -->
    <header class="mobile-header">
        <!-- <div class="panel-control-left">
            <a class="toggle-menu" href="#side_menu">
                <i class="fas fa-bars"></i>
            </a>
        </div> -->
        <div class="page_title">
            <a href="#">
                <img src="<?=asset_url('assets/img/medifab-logo.png')?>" alt="Logo" class="img-fluid" width="60"
                    height="60">
            </a>
        </div>
    </header>
    <!-- Mobile Header /-->
    <!-- Mobile Sidebar -->
    <!-- <div class="sidebar sidebar-menu" id="side_menu">
        <div class="sidebar-inner slimscroll">
            <a id="close_menu" href="#">
                <i class="fas fa-times"></i>
            </a>
            <ul class="mobile-menu-wrapper" style="display: block;">
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="index.html">Home</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="about-us.html">About Us</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="departments.html">Departments</a>
                    </div>
                </li>
                <li class="active">
                    <div class="mobile-menu-item clearfix">
                        <a href="services.html">Services</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="doctors.html">Doctors</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="" class="menu-toggle">Blog <i class="fas fa-sort-down  menu-toggle"></i></a>
                    </div>
                    <ul class="mobile-submenu-wrapper" style="display: none;">
                        <li>
                            <a href="blog.html">Right Sidebar</a>
                        </li>
                        <li>
                            <a href="blog-left-sidebar.html">Left Sidebar</a>
                        </li>
                        <li>
                            <a href="blog-full-width.html">Full Width</a>
                        </li>
                        <li>
                            <a href="blog-grid.html">Blog Grid</a>
                        </li>
                        <li>
                            <a href="blog-details.html">Blog Details</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="contact-us.html">Contact Us</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="appointment.html">Appointment</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="login.html">Login</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="register.html">Register</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="forgot-password.html">Forgot Password</a>
                    </div>
                </li>
                <li>
                    <div class="mobile-menu-item clearfix">
                        <a href="404.html">404</a>
                    </div>
                </li>
            </ul>
        </div>
    </div> -->
    <!-- Mobile Sidebar /-->