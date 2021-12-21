<script src="<?= asset_url('assets/js/backend_services_helper.js') ?>"></script>
<script src="<?= asset_url('assets/js/backend_categories_helper.js') ?>"></script>
<script src="<?= asset_url('assets/js/backend_services.js') ?>"></script>
<script>
    var GlobalVariables = {
        csrfToken: <?= json_encode($this->security->get_csrf_hash()) ?>,
        baseUrl: <?= json_encode($base_url) ?>,
        dateFormat: <?= json_encode($date_format) ?>,
        timeFormat: <?= json_encode($time_format) ?>,
        services: <?= json_encode($services) ?>,
        categories: <?= json_encode($categories) ?>,
        timezones: <?= json_encode($timezones) ?>,
        user: {
            id: <?= $user_id ?>,
            email: <?= json_encode($user_email) ?>,
            timezone: <?= json_encode($timezone) ?>,
            role_slug: <?= json_encode($role_slug) ?>,
            privileges: <?= json_encode($privileges) ?>
        }
    };

    $(function() {
        BackendServices.initialize(true);
    });
</script>
<style>
    .card-box {
        background-color: unset;
        border-radius: 55px;
        margin-bottom: 30px;
        padding: 0;
        position: relative;
        box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
    }
    .profile-widget {
        background-color: #ecf5fa;
    }
    .dropdown-menu.show {
    display: block;
    left: -30px !important;
}
</style>
<div class="container backend-page page-wrapper" id="services-page">
    <div class="row">
        <div class="col-sm-4 col-3">
            <div class="card-box">
                <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" href="#services" data-toggle="tab">
                            <?= lang('services') ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#categories" data-toggle="tab">
                            <?= lang('categories') ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <!-- SERVICES TAB -->
        <div class="tab-pane active" id="services">
        <div class="row">
                <div class="col-sm-12 col-12 text-right ">
                    <a href="<?= site_url('backend/addservice')?>" class="btn btn-primary btn-rounded float-right"><i class="fas fa-plus"></i> Add Service</a>
                </div>
                </div>
                <div class="row">
                    <?php foreach($services as $service){
                        ?>
                        <div class="doctor-grid col-4">
                            <div class="profile-widget">
                                <div class="dropdown profile-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="<?= site_url('backend/editservice/').$service["id"] ?>"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fas fa-trash m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                                <h4 class="doctor-name text-ellipsis"><?= $service['name'] ?></h4>
                                <div class="user-country"><i class="fas fa-map-marker-alt"></i><?= $service['location'] ?></div>
                                <div class="doc-prof">
                                     <?= $service['description'] ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
        </div>

        <!-- CATEGORIES TAB -->

        <div class="tab-pane" id="categories">
        <div class="row">
                <div class="col-sm-12 col-12 text-right">
                    <a href="<?= site_url('backend/addcategory')?>" class="btn btn-primary btn-rounded float-right"><i class="fas fa-plus"></i> Add Category</a>
                </div>
                </div>
                <div class="row">
                    <?php foreach($categories as $category){?>
                        <div class="doctor-grid col-4">
                            <div class="profile-widget">
                                <div class="dropdown profile-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="<?= site_url('backend/editcategory/').$category["id"] ?>"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fas fa-trash m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                                <h4 class="doctor-name text-ellipsis"><?= $category['name'] ?></h4>
                                <div class="doc-prof"><?= $category['description'] ?></div>

                            </div>
                        </div>
                    <?php } ?>
                </div>
        </div>
    </div>
</div>