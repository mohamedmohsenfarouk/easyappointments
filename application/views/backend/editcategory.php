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
        category: <?= json_encode($category) ?>,
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

<div class="container backend-page page-wrapper" id="services-page">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h4 class="page-title"> <?= lang('add') . ' ' . lang('categories') ?></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form id="addcategory_form">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="category-name">
                                <?= lang('name') ?>
                                <span class="text-danger">*</span>
                            </label>
                            <input id="category-name" value="<?= $category['name'] ?>" class="form-control required">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="category-description">
                                <?= lang('description') ?>
                            </label>
                            <textarea id="category-description" rows="4" class="form-control"><?= $category['description'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="btn-group">
                    <button id="save-category" type="button" class="btn btn-primary">
                        <i class="fas fa-check-square mr-2"></i>
                        <?= lang('save') ?>
                    </button>
                    <button id="cancel-category" type="button" class="btn btn-outline-secondary">
                        <i class="fas fa-ban mr-2"></i>
                        <?= lang('cancel') ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div><script>

/**
 * Event: Cancel Category Button "Click"
 */
$("#cancel-category").on("click", function() {
    var id = $("#category-id").val();
    $("#category-name").val("");
    $("#category-description").val("");
});
</script>
