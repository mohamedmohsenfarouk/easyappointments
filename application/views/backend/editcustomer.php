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
						<div class="col-md-8 offset-md-2">
							<h4 class="page-title"> <?= lang('edit').' '.lang('customers') ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<form>
							<input id="customer-id" type="hidden">

								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label><?= lang('first_name') ?> <span class="text-danger">*</span></label>
											<input class="form-control required" id="first-name" value="<?= $customers['first_name'] ?>" type="text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label><?= lang('last_name') ?> <span class="text-danger">*</span></label>
											<input class="form-control required"  value="<?= $customers['last_name'] ?>" id="last-name" type="text">
										</div>
									</div>
				
									<div class="col-sm-6">
										<div class="form-group">
											<label><?= lang('email') ?> <span class="text-danger">*</span></label>
											<input class="form-control required" id="email" value="<?= $customers['email'] ?>" type="email">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
										<label class="control-label" for="phone-number">
											<?= lang('phone_number') ?>
											<?= $require_phone_number === '1' ? '<span class="text-danger">*</span>' : ''; ?></label>
											<input id="phone-number" class="form-control
											<?= $require_phone_number === '1' ? 'required' : '' ?>" value="<?= $customers['phone_number'] ?>">
										</div>
									</div>
									
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<label><?= lang('address') ?></label>
													<input type="text" id="address" value="<?= $customers['address'] ?>" class="form-control ">
												</div>
											</div>
											
											<div class="col-sm-6 col-md-6 col-lg-6">
												<div class="form-group">
													<label><?= lang('city') ?></label>
													<input type="text" id="city" value="<?= $customers['city'] ?>" class="form-control">
												</div>
											</div>
											
											<div class="col-sm-6 col-md-6 col-lg-6">
												<div class="form-group">
													<label><?= lang('zip_code') ?></label>
													<input type="text" id="zip-code" value="<?= $customers['zip_code'] ?>" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6 ">
										<div class="form-group">
											<label><?= lang('language') ?> <span class="text-danger">*</span></label>
											<select id="language" class="form-control select required"></select>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												<?= lang('timezone') ?>
												<span class="text-danger">*</span>
											</label>
											<?= render_timezone_dropdown('id="timezone" class="form-control required" value="'. $customers["timezone"] .'"') ?>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label><?= lang('notes') ?></label>
											<textarea id="notes" rows="4" class="form-control"><?= $customers['notes'] ?></textarea>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-12 col-sm-12">
									<h3><?= lang('appointments') ?></h3>
									<div id="customer-appointments" class="card bg-light border-light"></div>
									<div id="appointment-details" class="card bg-light border-light d-none"></div>
								</div>
								<!-- <div class="m-t-20 text-center">
									<button class="btn btn-primary submit-btn">Create Patient</button>
								</div> -->

								<div class="btn-group">
									<button id="save-customer" type="button" class="btn btn-primary">
										<i class="fas fa-check-square mr-2"></i>
										<?= lang('save') ?>
									</button>
									<button id="cancel-customer" type="button" class="btn btn-outline-secondary">
										<i class="fas fa-ban mr-2"></i>
										<?= lang('cancel') ?>
									</button>
								</div>
							</form>
						</div>
					</div>
</div>