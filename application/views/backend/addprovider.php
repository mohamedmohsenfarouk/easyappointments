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

<div class="container backend-page page-wrapper" id="users-page">
	<div class="row" id="customers">
		<div class="col-md-8 offset-md-2">
			<h4 class="page-title"> Add provider</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<form id="addcustomer_form">
				<input type="hidden" id="provider-id" class="record-id">

				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="provider-first-name">
								<?= lang('first_name') ?>
								<span class="text-danger">*</span>
							</label>
							<input id="provider-first-name" class="form-control required" maxlength="256">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="provider-last-name">
								<?= lang('last_name') ?>
								<span class="text-danger">*</span>
							</label>
							<input id="provider-last-name" class="form-control required" maxlength="512">
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
							<label for="provider-email">
								<?= lang('email') ?>
								<span class="text-danger">*</span>
							</label>
							<input id="provider-email" class="form-control required" max="512">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="provider-phone-number">
								<?= lang('phone_number') ?>
								<span class="text-danger">*</span>
							</label>
							<input id="provider-phone-number" class="form-control required" max="128">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="provider-mobile-number">
								<?= lang('mobile_number') ?>

							</label>
							<input id="provider-mobile-number" class="form-control" maxlength="128">
						</div>
					</div>

					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label for="provider-address">
										<?= lang('address') ?>
									</label>
									<input id="provider-address" class="form-control" maxlength="256">
								</div>
							</div>

							<div class="col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="provider-city">
										<?= lang('city') ?>

									</label>
									<input id="provider-city" class="form-control" maxlength="256">
								</div>
							</div>

							<div class="col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="provider-state">
										<?= lang('state') ?>
									</label>
									<input id="provider-state" class="form-control" maxlength="256">
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="provider-zip-code">
										<?= lang('zip_code') ?>

									</label>
									<input id="provider-zip-code" class="form-control" maxlength="64">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 ">
						<div class="form-group">
							<label for="provider-notes">
								<?= lang('notes') ?>
							</label>
							<textarea id="provider-notes" class="form-control" rows="3"></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="provider-username">
								<?= lang('username') ?>
								<span class="text-danger">*</span>
							</label>
							<input id="provider-username" class="form-control required" maxlength="256">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<label for="provider-password">
								<?= lang('password') ?>
								<span class="text-danger">*</span>
							</label>
							<input type="password" id="provider-password" class="form-control required" maxlength="512" autocomplete="new-password">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<label for="provider-password-confirm">
								<?= lang('retype_password') ?>
								<span class="text-danger">*</span>
							</label>
							<input type="password" id="provider-password-confirm" class="form-control required" maxlength="512" autocomplete="new-password">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<label for="provider-calendar-view">
								<?= lang('calendar') ?>
								<span class="text-danger">*</span>
							</label>
							<select id="provider-calendar-view" class="form-control required">
								<option value="default">Default</option>
								<option value="table">Table</option>
							</select>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<label for="provider-timezone">
								<?= lang('timezone') ?>
								<span class="text-danger">*</span>
							</label>
							<?= render_timezone_dropdown('id="provider-timezone" class="form-control required"') ?>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-sm-12">
					<h3><?= lang('appointments') ?></h3>
					<div id="customer-appointments" class="card bg-light border-light"></div>
					<div id="appointment-details" class="card bg-light border-light d-none"></div>
				</div>


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