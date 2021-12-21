<script src="<?= asset_url('assets/ext/jquery-ui/jquery-ui-timepicker-addon.min.js') ?>"></script>
<script src="<?= asset_url('assets/js/backend_customers_helper.js') ?>"></script>
<script src="<?= asset_url('assets/js/backend_customers.js') ?>"></script>
<script>
    var GlobalVariables = {
        csrfToken: <?= json_encode($this->security->get_csrf_hash()) ?>,
        availableProviders: <?= json_encode($available_providers) ?>,
        availableServices: <?= json_encode($available_services) ?>,
        secretaryProviders: <?= json_encode($secretary_providers) ?>,
        dateFormat: <?= json_encode($date_format) ?>,
        timeFormat: <?= json_encode($time_format) ?>,
        baseUrl: <?= json_encode($base_url) ?>,
        customers: <?= json_encode($customers) ?>,
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
        BackendCustomers.initialize(true);
    });
</script>

<div class="container backend-page page-wrapper" id="customers-page">
    <div class="row" id="customers">
        <!-- <div id="filter-customers" class="filter-records col col-12 col-md-5"> -->



        <div class="col-sm-4 col-3">
            <h4 class="page-title">
                <?= lang('customers') ?>
            </h4>
        </div>
        <div class="col-sm-8 col-9 text-right m-b-20">
            <?php if ($privileges[PRIV_CUSTOMERS]['add'] === TRUE) : ?>

                <a href="<?= site_url('backend/addcustomer') ?>" class="btn btn btn-primary btn-rounded float-right"><i class="fas fa-plus"></i> <?= lang('add') ?></a>
            <?php endif ?>
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

                        <?php foreach ($customers as $customer) { ?>
                            <tr>
                                <td><?= $customer["id"] ?></td>
                                <td><img width="28" height="28" src="<?= asset_url('assets/backend/img/user.jpg') ?>" class="rounded-circle m-r-5">
                                    <?= $customer["first_name"] . ' ' . $customer["last_name"] ?>
                                </td>
                                <td>
                                    <?= $customer["email"] ?>
                                </td>
                                <td>
                                    <?= $customer["phone_number"] ?>
                                </td>
                                <td>
                                    <?= $customer["address"] ?>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <?php if ($privileges[PRIV_CUSTOMERS]['edit'] === TRUE) : ?>
                                                <a class="dropdown-item" href="<?= site_url('backend/editcustomer/').$customer["id"] ?>">
                                                    <i class="fas fa-pencil-alt m-r-5"></i> <?= lang('edit') ?></a>
                                            <?php endif ?>

                                            <?php if ($privileges[PRIV_CUSTOMERS]['delete'] === TRUE) : ?> 
                                                <a class="dropdown-item delete-customer" data-title="<?= $customer['id']?>" href="javascript:void(0)" >
                                                    <i class="fas fa-trash m-r-5"></i> <?= lang('delete') ?></a>
                                            <?php endif ?>
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