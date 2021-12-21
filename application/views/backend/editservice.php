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

<div class="container backend-page page-wrapper" id="services-page">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h4 class="page-title"> <?= lang('add') . ' ' . lang('services') ?></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form id="editservice_form">
            <input type="hidden" id="service-id">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="service-name">
                                <?= lang('name') ?>
                                <span class="text-danger">*</span>
                            </label>
                            <input id="service-name" value="<?= $services['name'] ?>" class="form-control required" maxlength="128">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="service-duration">
                                <?= lang('duration_minutes') ?>
                                <span class="text-danger">*</span>
                            </label>
                            <input id="service-duration" value="<?= $services['duration'] ?>" class="form-control required" type="number" min="<?= EVENT_MINIMUM_DURATION ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="one-eye-service-price">
                                <?= lang('one_eye_price') ?>
                                <span class="text-danger">*</span>
                            </label>
                            <input id="one-eye-service-price" value="<?= $services['one_eye_price'] ?>" class="form-control required">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="both-eyes-service-price">
                                <?= lang('both_eyes_price') ?>
                                <span class="text-danger">*</span>
                            </label>
                            <input id="both-eyes-service-price" value="<?= $services['both_eyes_price'] ?>" class="form-control required">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="service-currency">
                                <?= lang('currency') ?>
                            </label>
                            <input id="service-currency" value="<?= $services['currency'] ?>" class="form-control" maxlength="32">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="service-category">
                                <?= lang('category') ?>
                            </label>
                            <select id="service-category" class="form-control"></select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="service-availabilities-type">
                                <?= lang('availabilities_type') ?>

                            </label>
                            <select id="service-availabilities-type" class="form-control">
                                <option value="<?= AVAILABILITIES_TYPE_FLEXIBLE ?>">
                                    <?= lang('flexible') ?>
                                </option>
                                <option value="<?= AVAILABILITIES_TYPE_FIXED ?>">
                                    <?= lang('fixed') ?>
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="service-attendants-number">
                                <?= lang('attendants_number') ?>
                                <span class="text-danger">*</span>
                            </label>
                            <input id="service-attendants-number" value="<?= $services['attendants_number'] ?>" class="form-control required" type="number" min="1">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="service-location">
                                <?= lang('location') ?>
                            </label>
                            <input id="service-location" value="<?= $services['location'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="service-description">
                                <?= lang('description') ?>
                            </label>
                            <textarea id="service-description" rows="4" class="form-control"><?= $services['description'] ?> </textarea>
                        </div>
                    </div>
                </div>
                <div class="btn-group">
                    <button id="save-service" type="button" class="btn btn-primary">
                        <i class="fas fa-check-square mr-2"></i>
                        <?= lang('save') ?>
                    </button>
                    <button id="cancel-service" type="button" class="btn btn-outline-secondary">
                        <i class="fas fa-ban mr-2"></i>
                        <?= lang('cancel') ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    /**
     * Event: Cancel Category Button "Click"
     */
    $("#cancel-service").on("click", function() {
        var id = $("#category-id").val();
       $('#editservice_form').trigger('reset'); 
    });
</script>