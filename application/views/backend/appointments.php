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
                <table class="table table-border table-striped custom-table datatable m-b-0">
                    <thead>
                        <tr>
                            <th>Appointment ID</th>
                            <th>Appointment Hash</th>
                            <th>Patient Name</th>
                            <th>Doctor Name</th>
                            <th>Appointment Booking Date</th>
                            <th>Appointment Start Time</th>
                            <th>Appointment End Time</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($appointments as $appointment) {
                            foreach ($appointment as $k => $appoint) {
                        ?>
                                <tr>
                                    <td><?= $appoint['id'] ?></td>
                                    <td><?= $appoint['hash'] ?></td>
                                    <td><?= $appoint['customer']['first_name'] . ' ' . $appoint['customer']['last_name'] ?></td>
                                    <td><?= $appoint['provider']['first_name'] . ' ' . $appoint['provider']['last_name'] ?></td>
                                    <td><?= $appoint['book_datetime'] ?></td>
                                    <td><?= $appoint['start_datetime'] ?></td>
                                    <td><?= $appoint['end_datetime'] ?></td>
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
                        <?php }
                        } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>