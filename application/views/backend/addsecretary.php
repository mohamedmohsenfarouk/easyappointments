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
			<h4 class="page-title"> Add secretary</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<form id="addcustomer_form">
				<input type="hidden" id="secretary-id" class="record-id">

				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="secretary-first-name">
								<?= lang('first_name') ?>
								<span class="text-danger">*</span>
							</label>
							<input id="secretary-first-name" class="form-control required" maxlength="256">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="secretary-last-name">
								<?= lang('last_name') ?>
								<span class="text-danger">*</span>
							</label>
							<input id="secretary-last-name" class="form-control required" maxlength="512">
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
							<label for="secretary-email">
								<?= lang('email') ?>
								<span class="text-danger">*</span>
							</label>
							<input id="secretary-email" class="form-control required" max="512">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="secretary-phone-number">
								<?= lang('phone_number') ?>
								<span class="text-danger">*</span>
							</label>
							<input id="secretary-phone-number" class="form-control required" max="128">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="secretary-mobile-number">
								<?= lang('mobile_number') ?>

							</label>
							<input id="secretary-mobile-number" class="form-control" maxlength="128">
						</div>
					</div>

					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label for="secretary-address">
										<?= lang('address') ?>
									</label>
									<input id="secretary-address" class="form-control" maxlength="256">
								</div>
							</div>

							<div class="col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="secretary-city">
										<?= lang('city') ?>

									</label>
									<input id="secretary-city" class="form-control" maxlength="256">
								</div>
							</div>

							<div class="col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="secretary-state">
										<?= lang('state') ?>
									</label>
									<input id="secretary-state" class="form-control" maxlength="256">
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="secretary-zip-code">
										<?= lang('zip_code') ?>

									</label>
									<input id="secretary-zip-code" class="form-control" maxlength="64">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 ">
						<div class="form-group">
							<label for="secretary-notes">
								<?= lang('notes') ?>
							</label>
							<textarea id="secretary-notes" class="form-control" rows="3"></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="secretary-username">
								<?= lang('username') ?>
								<span class="text-danger">*</span>
							</label>
							<input id="secretary-username" class="form-control required" maxlength="256">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<label for="secretary-password">
								<?= lang('password') ?>
								<span class="text-danger">*</span>
							</label>
							<input type="password" id="secretary-password" class="form-control required" maxlength="512" autocomplete="new-password">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<label for="secretary-password-confirm">
								<?= lang('retype_password') ?>
								<span class="text-danger">*</span>
							</label>
							<input type="password" id="secretary-password-confirm" class="form-control required" maxlength="512" autocomplete="new-password">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<label for="secretary-calendar-view">
								<?= lang('calendar') ?>
								<span class="text-danger">*</span>
							</label>
							<select id="secretary-calendar-view" class="form-control required">
								<option value="default">Default</option>
								<option value="table">Table</option>
							</select>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<label for="secretary-timezone">
								<?= lang('timezone') ?>
								<span class="text-danger">*</span>
							</label>
							<?= render_timezone_dropdown('id="secretary-timezone" class="form-control required"') ?>
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