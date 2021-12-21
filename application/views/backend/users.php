<script src="<?= asset_url('assets/js/backend_users_admins.js') ?>"></script>
<script src="<?= asset_url('assets/js/backend_users_providers.js') ?>"></script>
<script src="<?= asset_url('assets/js/backend_users_secretaries.js') ?>"></script>
<script src="<?= asset_url('assets/js/backend_users.js') ?>"></script>
<script src="<?= asset_url('assets/js/working_plan.js') ?>"></script>
<script src="<?= asset_url('assets/js/working_plan_exceptions_modal.js') ?>"></script>
<script src="<?= asset_url('assets/ext/jquery-ui/jquery-ui-timepicker-addon.min.js') ?>"></script>
<script src="<?= asset_url('assets/ext/jquery-jeditable/jquery.jeditable.min.js') ?>"></script>
<script>
    var GlobalVariables = {
        csrfToken: <?= json_encode($this->security->get_csrf_hash()) ?>,
        baseUrl: <?= json_encode($base_url) ?>,
        dateFormat: <?= json_encode($date_format) ?>,
        firstWeekday: <?= json_encode($first_weekday); ?>,
        timeFormat: <?= json_encode($time_format) ?>,
        admins: <?= json_encode($admins) ?>,
        providers: <?= json_encode($providers) ?>,
        secretaries: <?= json_encode($secretaries) ?>,
        services: <?= json_encode($services) ?>,
        timezones: <?= json_encode($timezones) ?>,
        workingPlan: <?= json_encode(json_decode($working_plan)) ?>,
        workingPlanExceptions: <?= json_encode(json_decode($working_plan_exceptions)) ?>,
        user: {
            id: <?= $user_id ?>,
            email: <?= json_encode($user_email) ?>,
            timezone: <?= json_encode($timezone) ?>,
            role_slug: <?= json_encode($role_slug) ?>,
            privileges: <?= json_encode($privileges) ?>
        }
    };

    $(function() {
        BackendUsers.initialize(true);
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
<div class="container backend-page page-wrapper" id="users-page">
    <div class="row">
        <div class="col-sm-4 col-3">
            <div class="card-box">
                <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" href="#providers" data-toggle="tab">
                            <?= lang('providers') ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#secretaries" data-toggle="tab">
                            <?= lang('secretaries') ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#admins" data-toggle="tab">
                            <?= lang('admins') ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <!-- providers TAB -->
        <div class="tab-pane active" id="providers">
                <div class="row">
                    <div class="col-sm-12 col-12 text-right">
                        <a href="<?= site_url('backend/addprovider')?>" class="btn btn-primary btn-rounded float-right"><i class="fas fa-plus"></i> Add Provider</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-border table-striped custom-table datatable m-b-0">
                                <thead>
                                    <tr>
                                        <th>
                                        ID
                                        </th>
                                        <th>
                                            <?= lang('name') ?>
                                        </th>
                                        <th>
                                            <?= lang('email') ?>
                                        </th>
                                        <th>
                                            <?= lang('phone_number') ?>
                                        </th>
                                        <th>
                                            <?= lang('address') ?>
                                        </th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($providers as $provider) { ?>
                                        <tr>
                                            <td><?= $provider["id"] ?></td>
                                            <td><img width="28" height="28" src="<?= asset_url('assets/backend/img/user.jpg') ?>" class="rounded-circle m-r-5">
                                                <?= $provider["first_name"] . ' ' . $provider["last_name"] ?>
                                            </td>
                                            <td>
                                                <?= $provider["email"] ?>
                                            </td>
                                            <td>
                                                <?= $provider["phone_number"] ?>
                                            </td>
                                            <td>
                                                <?= $provider["address"] ?>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#>">
                                                                <i class="fas fa-pencil-alt m-r-5"></i> <?= lang('edit') ?></a>

                                                            <a class="dropdown-item delete-customer" data-title="<?= $provider['id']?>" href="javascript:void(0)" >
                                                                <i class="fas fa-trash m-r-5"></i> <?= lang('delete') ?></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>

        <!-- secretaries TAB -->

        <div class="tab-pane" id="secretaries">
            <div class="row">
                <div class="col-sm-12 col-12 text-right">
                    <a href="<?= site_url('backend/addsecretary')?>" class="btn btn-primary btn-rounded float-right"><i class="fas fa-plus"></i> Add secretary</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-border table-striped custom-table datatable m-b-0">
                            <thead>
                                <tr>
                                    <th>
                                    ID
                                    </th>
                                    <th>
                                        <?= lang('name') ?>
                                    </th>
                                    <th>
                                        <?= lang('email') ?>
                                    </th>
                                    <th>
                                        <?= lang('phone_number') ?>
                                    </th>
                                    <th>
                                        <?= lang('address') ?>
                                    </th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($secretaries as $secretary) { ?>
                                    <tr>
                                        <td><?= $secretary["id"] ?></td>
                                        <td><img width="28" height="28" src="<?= asset_url('assets/backend/img/user.jpg') ?>" class="rounded-circle m-r-5">
                                            <?= $secretary["first_name"] . ' ' . $secretary["last_name"] ?>
                                        </td>
                                        <td>
                                            <?= $secretary["email"] ?>
                                        </td>
                                        <td>
                                            <?= $secretary["phone_number"] ?>
                                        </td>
                                        <td>
                                            <?= $secretary["address"] ?>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#>">
                                                            <i class="fas fa-pencil-alt m-r-5"></i> <?= lang('edit') ?></a>

                                                        <a class="dropdown-item delete-customer" data-title="<?= $secretary['id']?>" href="javascript:void(0)" >
                                                            <i class="fas fa-trash m-r-5"></i> <?= lang('delete') ?></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- admins TAB -->

        <div class="tab-pane" id="admins">
            <div class="row">
                <div class="col-sm-12 col-12 text-right">
                    <a href="<?= site_url('backend/addadmin')?>" class="btn btn-primary btn-rounded float-right"><i class="fas fa-plus"></i> Add admin</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-border table-striped custom-table datatable m-b-0">
                            <thead>
                                <tr>
                                    <th>
                                    ID
                                    </th>
                                    <th>
                                        <?= lang('name') ?>
                                    </th>
                                    <th>
                                        <?= lang('email') ?>
                                    </th>
                                    <th>
                                        <?= lang('phone_number') ?>
                                    </th>
                                    <th>
                                        <?= lang('address') ?>
                                    </th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($admins as $admin) { ?>
                                    <tr>
                                        <td><?= $admin["id"] ?></td>
                                        <td><img width="28" height="28" src="<?= asset_url('assets/backend/img/user.jpg') ?>" class="rounded-circle m-r-5">
                                            <?= $admin["first_name"] . ' ' . $admin["last_name"] ?>
                                        </td>
                                        <td>
                                            <?= $admin["email"] ?>
                                        </td>
                                        <td>
                                            <?= $admin["phone_number"] ?>
                                        </td>
                                        <td>
                                            <?= $admin["address"] ?>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#>">
                                                            <i class="fas fa-pencil-alt m-r-5"></i> <?= lang('edit') ?></a>

                                                        <a class="dropdown-item delete-customer" data-title="<?= $admin['id']?>" href="javascript:void(0)" >
                                                            <i class="fas fa-trash m-r-5"></i> <?= lang('delete') ?></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>