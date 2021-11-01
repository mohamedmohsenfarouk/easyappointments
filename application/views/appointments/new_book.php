<?php $this->load->view('appointments/header');?>
<title>Services | 7keema</title>

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

            ?>
    <section class="content service-list">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header text-center">
                        <h3 class="header-title"><?php echo $group_label; ?></h3>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php
foreach ($group as $service) {
                echo '<div class="col-md-4">
                                          <div class="services-box">
                                             <div class="service-icon">
                                                <i class="fas fa-medkit" aria-hidden="true"></i>
                                             </div>
                                             <h4>
                                                <a href="javascript:void(0);" class="service_select" id="' . $service['id'] . '">' . $service['name'] . '</a>
                                             </h4>
                                          </div>
                                       </div>';
            }
        }
        ?>
            </div>
        </div>
    </section>
    <?php
}
} else {
    ?>
    <section class="content service-list">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header text-center">
                        <h3 class="header-title">Uncategorized</h3>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
foreach ($available_services as $service) {
        echo '<div class="col-md-4">
                          <div class="services-box">
                             <div class="service-icon">
                                <i class="fas fa-medkit" aria-hidden="true"></i>
                             </div>
                             <h4>
                                <a href="javascript:void(0);" class="service_select" id="' . $service['id'] . '">' . $service['name'] . '</a>
                             </h4>
                          </div>
                       </div>';
    }
    ?>
            </div>
        </div>
    </section>
    <?php
}
?>
</div>
<!-- Content /-->

<?php $this->load->view('appointments/footer');?>

<!-- Sidebar Overlay -->
<!-- <div class="sidebar-overlay" data-reff="#side_menu"></div> -->
<?php if ($display_cookie_notice === '1'): ?>
<?php require 'cookie_notice_modal.php'?>
<?php endif?>
<?php if ($display_terms_and_conditions === '1'): ?>
<?php require 'terms_and_conditions_modal.php'?>
<?php endif?>
<?php if ($display_privacy_policy === '1'): ?>
<?php require 'privacy_policy_modal.php'?>
<?php endif?>
<script src="<?=asset_url('assets/ext/jquery/jquery.min.js')?>"></script>

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
<script>
$(function() {
    FrontendBook.initialize(true, GlobalVariables.manageMode);
    GeneralFunctions.enableLanguageSelection($('#select-language'));
});

$(".service_select").click(function(event) {
    $.ajax({
        url: GlobalVariables.baseUrl + '/index.php/appointments/providers_select',
        type: "POST",
        data: {
            "service_id": this.id
        }
    }).done(function(data) {
        $("body").html(data);
    })
});
</script>
</body>

</html>