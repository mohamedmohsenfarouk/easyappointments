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

<div class="container backend-page page-wrapper" id="appointments-page">
    <div class="row" id="appointments">
        <div class="col-sm-4 col-3">
            <h4 class="page-title">
                <?= lang('appointments') ?>
            </h4>
        </div>
       
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table id="example" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Appointment ID</th>
                            <th>Patient Name</th>
                            <th>Age</th>
                            <th>Doctor Name</th>
                            <th>Department</th>
                            <th>Appointment Date</th>
                            <th>Appointment Time</th>
                            <th>Status</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>APT0001</td>
                            <td>Denise Stevens</td>
                            <td>35</td>
                            <td>Henry Daniels</td>
                            <td>Cardiology</td>
                            <td>30 Dec 2018</td>
                            <td>10:00am - 11:00am</td>
                            <td><span class="custom-badge status-red">Inactive</span></td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="edit-appointment.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_appointment"><i class="fas fa-trash m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>APT0002</td>
                            <td>Denise Stevens</td>
                            <td>35</td>
                            <td>Henry Daniels</td>
                            <td>Cardiology</td>
                            <td>30 Dec 2018</td>
                            <td>10:00am - 11:00am</td>
                            <td><span class="custom-badge status-green">Active</span></td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="edit-appointment.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_appointment"><i class="fas fa-trash m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>