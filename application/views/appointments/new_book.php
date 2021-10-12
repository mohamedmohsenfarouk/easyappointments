<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Services | 7keema</title>
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
                            <a title="Medifab" href="index.html">
                                <img alt="Logo" src="<?=asset_url('assets/img/medifab-logo.png')?>" width="308"
                                    height="61">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-10">
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
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header /-->
    <!-- Mobile Header -->
    <header class="mobile-header">
        <div class="panel-control-left">
            <a class="toggle-menu" href="#side_menu">
                <i class="fas fa-bars"></i>
            </a>
        </div>
        <div class="page_title">
            <a href="index.html">
                <img src="<?=asset_url('assets/img/medifab-logo.png')?>" alt="Logo" class="img-fluid" width="60"
                    height="60">
            </a>
        </div>
    </header>
    <!-- Mobile Header /-->
    <!-- Mobile Sidebar -->
    <div class="sidebar sidebar-menu" id="side_menu">
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
    </div>
    <!-- Mobile Sidebar /-->
    <!-- Content -->
    <div class="main-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title">
                            <span>Our Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header /-->
        <section class="content service-list">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-header text-center">
                            <h3 class="header-title">Services</h3>
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="row service-row">
                    <?php if (empty($this->session->user_id)) {?>
                    <!-- SELECT SERVICE AND PROVIDER -->
                    <?php
// Group services by category, only if there is at least one service with a parent category.
    $has_category = false;
    foreach ($available_services as $service) {
        if ($service['category_id'] != null) {
            $has_category = true;
            break;
        }
    }

    if ($has_category) {
        $grouped_services = [];

        foreach ($available_services as $service) {
            if ($service['category_id'] != null) {
                if (!isset($grouped_services[$service['category_name']])) {
                    $grouped_services[$service['category_name']] = [];
                }

                $grouped_services[$service['category_name']][] = $service;
            }
        }

        // We need the uncategorized services at the end of the list so we will use
        // another iteration only for the uncategorized services.
        $grouped_services['uncategorized'] = [];
        foreach ($available_services as $service) {
            if ($service['category_id'] == null) {
                $grouped_services['uncategorized'][] = $service;
            }
        }

        foreach ($grouped_services as $key => $group) {
            $group_label = ($key != 'uncategorized')
            ? $group[0]['category_name'] : 'Uncategorized';

            if (count($group) > 0) {
                echo '<optgroup label="' . $group_label . '">';
                foreach ($group as $service) {
                    echo '<option value="' . $service['id'] . '">'
                        . $service['name'] . '</option>';
                }
                echo '</optgroup>';
            }
        }
    } else {
        foreach ($available_services as $service) {
            echo '<div class="col-md-4">
                              <div class="services-box">
                                 <div class="service-icon">
                                    <i class="fas fa-user-md" aria-hidden="true"></i>
                                 </div>
                                 <h4>
                                    <a href="javascript:void(0);" class="service_select" id="' . $service['id'] . '">' . $service['name'] . '</a>
                                 </h4>
                              </div>
                           </div>';
        }
    }
    ?>
                    <!-- </select> -->
                </div>
                <?php } else {?>
                <!-- SELECT SERVICE AND PROVIDER -->
                <?php
$user_customer_query = $this->db->select('*')->from('ea_users')->where('id', $this->session->user_id)->get();

    if (empty($user_customer_query->result())) {
        $user_customer_query = $this->db->select('*')->from('ea_customers')->where('id', $this->session->user_id)->get();

    }

                 foreach ($available_services as $service) {
            echo '<div class="col-md-4">
                              <div class="services-box">
                                 <div class="service-icon">
                                    <i class="fas fa-user-md" aria-hidden="true"></i>
                                 </div>
                                 <h4>
                                    <a href="javascript:void(0);" class="service_select" id="' . $service['id'] . '">' . $service['name'] . '</a>
                                 </h4>
                              </div>
                           </div>';
        }
// Group services by category, only if there is at least one service with a parent category.
    $has_category = false;
    foreach ($available_services as $service) {
        if ($service['category_id'] != null) {
            $has_category = true;
            break;
        }
    }

    if ($has_category) {
        $grouped_services = [];

        foreach ($available_services as $service) {
            if ($service['category_id'] != null) {
                if (!isset($grouped_services[$service['category_name']])) {
                    $grouped_services[$service['category_name']] = [];
                }

                $grouped_services[$service['category_name']][] = $service;
            }
        }

        // We need the uncategorized services at the end of the list so we will use
        // another iteration only for the uncategorized services.
        $grouped_services['uncategorized'] = [];
        foreach ($available_services as $service) {
            if ($service['category_id'] == null) {
                $grouped_services['uncategorized'][] = $service;
            }
        }

        foreach ($grouped_services as $key => $group) {
            $group_label = ($key != 'uncategorized')
            ? $group[0]['category_name'] : 'Uncategorized';

            if (count($group) > 0) {
                echo '<optgroup label="' . $group_label . '">';
                foreach ($group as $service) {
                    echo '<option value="' . $service['id'] . '">'
                        . $service['name'] . '</option>';
                }
                echo '</optgroup>';
            }
        }
    } 
   //  else {
   //      foreach ($available_services as $service) {
   //          echo '<option value="' . $service['id'] . '">' . $service['name'] . '</option>';
   //      }
   //  }
    ?>
                <?php }?>
            </div>
    </div>
    </section>
    </div>
    <!-- Content /-->
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="footer-widget">
                            <h4 class="footer-title">Location</h4>
                            <div class="about-clinic">
                                <p><strong>Address:</strong>
                                    <br>1603 Old York Rd,
                                    <br>Houma, LA, 75429
                                </p>
                                <p class="m-b-0"><strong>Phone</strong>:
                                    <a href="tel:+8503867896">(850) 386-7896</a>
                                    <br> <strong>Fax</strong>: <a href="tel:+8503867896">(850) 386-7896</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="footer-widget">
                            <h4 class="footer-title">Sitemap</h4>
                            <ul class="footer-menu">
                                <li>
                                    <a href="about-us.html">About Us</a>
                                </li>
                                <li>
                                    <a href="departments.html">Departments</a>
                                </li>
                                <li>
                                    <a href="services.html">Services</a>
                                </li>
                                <li>
                                    <a href="doctors.html">Doctors</a>
                                </li>
                                <li>
                                    <a href="contact-us.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="footer-widget">
                            <h4 class="footer-title">Blog</h4>
                            <ul class="footer-menu">
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
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="footer-widget">
                            <h4 class="footer-title">Appointment</h4>
                            <div class="appointment-btn">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                <ul class="social-icons clearfix">
                                    <li>
                                        <a href="#" target="_blank" title="Facebook"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" title="Linkedin"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" title="Google Plus"><i
                                                class="fab fa-google-plus-g"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-12">
                            <div class="copy-text text-center">
                                <p>&#xA9; <a href="#">7keema</a>. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer /-->
    <!-- Sidebar Overlay -->
    <div class="sidebar-overlay" data-reff="#side_menu"></div>
    <?php if ($display_cookie_notice === '1'): ?>
    <?php require 'cookie_notice_modal.php'?>
    <?php endif?>
    <?php if ($display_terms_and_conditions === '1'): ?>
    <?php require 'terms_and_conditions_modal.php'?>
    <?php endif?>
    <?php if ($display_privacy_policy === '1'): ?>
    <?php require 'privacy_policy_modal.php'?>
    <?php endif?>
    <script>
    var GlobalVariables = {
        availableServices: <?=json_encode($available_services)?>,
        availableProviders: <?=json_encode($available_providers)?>,
        baseUrl: <?=json_encode(config('base_url'))?>,
        manageMode: <?=$manage_mode ? 'true' : 'false'?>,
        customerToken: <?=json_encode($customer_token)?>,
        dateFormat: <?=json_encode($date_format)?>,
        timeFormat: <?=json_encode($time_format)?>,
        firstWeekday: <?=json_encode($first_weekday)?>,
        displayCookieNotice: <?=json_encode($display_cookie_notice === '1')?>,
        appointmentData: <?=json_encode($appointment_data)?>,
        providerData: <?=json_encode($provider_data)?>,
        customerData: <?=json_encode($customer_data)?>,
        displayAnyProvider: <?=json_encode($display_any_provider)?>,
        csrfToken: <?=json_encode($this->security->get_csrf_hash())?>
    };

    var EALang = <?=json_encode($this->lang->language)?>;
    var availableLanguages = <?=json_encode(config('available_languages'))?>;
    </script>
    <script src="<?=asset_url('assets/js/general_functions.js')?>"></script>
    <script src="<?=asset_url('assets/ext/jquery/jquery.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/jquery-ui/jquery-ui.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/cookieconsent/cookieconsent.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/popper/popper.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/tippy/tippy-bundle.umd.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/datejs/date.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/moment/moment.min.js')?>"></script>
    <script src="<?=asset_url('assets/ext/moment/moment-timezone-with-data.min.js')?>"></script>
    <script src="<?=asset_url('assets/js/frontend_book_api.js')?>"></script>
    <script src="<?=asset_url('assets/js/frontend_book.js')?>"></script>
    <script>
    $(function() {
        FrontendBook.initialize(true, GlobalVariables.manageMode);
        GeneralFunctions.enableLanguageSelection($('#select-language'));
    });


    $("#loginUser").click(function(event) {
        $('#show_login_form').show();
        $('#register_user').hide();
    });

    $("#button-back-3").click(function(event) {
        $('#show_login_form').hide();
        $('#register_user').show();
    });


    $("#login_btn").click(function(event) {
        $.ajax({
            url: GlobalVariables.baseUrl + `/index.php/login/validation`,
            type: "POST",
            dataType: "json",
            data: $("#login_user").serialize(),
        }).done(function(data) {
            if (data.msg == 'success') {
                $("#first_name").val(data.data.first_name);
                $("#last_name").val(data.data.last_name);
                $("#phone_number").val(data.data.phone_number);
                $("#email").val(data.data.email);
                // If we are on the 3rd tab then we will need to validate the user's input before proceeding to the next
                // step.
                $("#button-next-3").click();
            }

        });
        event.preventDefault();
    });

    $("#register_btn").click(function(event) {

        $.ajax({
            url: GlobalVariables.baseUrl + `/index.php/register/validation`,
            type: "POST",
            dataType: "json",
            data: $("#register_user").serialize(),
        }).done(function(data) {
            if (data == 'success') {
                // If we are on the 3rd tab then we will need to validate the user's input before proceeding to the next
                // step.

                $("#button-next-3").click();
            }

        });
        event.preventDefault();
    });

    $("#login_btn").click(function(event) {
        $.ajax({
            url: GlobalVariables.baseUrl + `/index.php/login/validation`,
            type: "POST",
            dataType: "json",
            data: $("#login_user").serialize(),
        }).done(function(data) {
            if (data.msg == 'success') {
                $("#first_name").val(data.data.first_name);
                $("#last_name").val(data.data.last_name);
                $("#phone_number").val(data.data.phone_number);
                $("#email").val(data.data.email);
                // If we are on the 3rd tab then we will need to validate the user's input before proceeding to the next
                // step.
                $("#button-next-3").click();
            }

        });
        event.preventDefault();
    });

    $('#button-next-4').click(function() {
        // Customer Details
        var firstName = GeneralFunctions.escapeHtml($("#first_name").val());
        var lastName = GeneralFunctions.escapeHtml($("#last_name").val());
        var phoneNumber = GeneralFunctions.escapeHtml($("#phone_number").val());
        var email = GeneralFunctions.escapeHtml($("#email").val());
        var address = GeneralFunctions.escapeHtml($("#address").val());
        var city = GeneralFunctions.escapeHtml($("#city").val());
        var zipCode = GeneralFunctions.escapeHtml($("#zip_code").val());

        $("#customer-details").empty();

        $("<div/>", {
            html: [
                $("<h4/>)", {
                    text: EALang.customer,
                }),
                $("<p/>", {
                    html: [
                        $("<span/>", {
                            text: EALang.customer + ": " + firstName + " " + lastName,
                        }),
                        $("<br/>"),
                        $("<span/>", {
                            text: EALang.phone_number + ": " + phoneNumber,
                        }),
                        $("<br/>"),
                        $("<span/>", {
                            text: EALang.email + ": " + email,
                        }),
                        $("<br/>"),
                        $("<span/>", {
                            text: address ? EALang.address + ": " + address : "",
                        }),
                        $("<br/>"),
                        $("<span/>", {
                            text: city ? EALang.city + ": " + city : "",
                        }),
                        $("<br/>"),
                        $("<span/>", {
                            text: zipCode ? EALang.zip_code + ": " + zipCode : "",
                        }),
                        $("<br/>"),
                    ],
                }),
            ],
        }).appendTo("#customer-details");

    });

    $(".service_select").click(function(event) {
                $.ajax({
                        url: GlobalVariables.baseUrl + '/index.php/appointments/booking',
                        type: "POST",
                        data: {"service_id": this.id}
                     }).done(function(data) {
                              console.log('done');
                              $("body").html(data);
                            })
                });
    </script>
    <!-- jQuery -->
    <script src="<?=asset_url('assets/js/jquery-3.5.1.min.js')?>"></script>
    <!-- Bootstrap Core JS -->
    <script src="<?=asset_url('assets/js/popper.min.js')?>"></script>
    <script src="<?=asset_url('assets/js/bootstrap.min.js')?>"></script>
    <!-- Custom JS -->
    <script src="<?=asset_url('assets/js/theme.js')?>"></script>
    <?php google_analytics_script();?>
</body>

</html>