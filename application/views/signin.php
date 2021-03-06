<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/signinvendor/vendor/bootstrap/css/bootstrap.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/signinvendor/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/signinvendor/fonts/iconic/css/material-design-iconic-font.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/signinvendor/vendor/animate/animate.css') ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/signinvendor/vendor/css-hamburgers/hamburgers.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/signinvendor/vendor/animsition/css/animsition.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/signinvendor/vendor/select2/select2.min.css') ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/signinvendor/vendor/daterangepicker/daterangepicker.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/signinvendor/css/util.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/signinvendor/css/main.css') ?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?= base_url() ?>/assets/signinvendor/images/bg-01.jpeg');">
			<div class="wrap-login100">
				<form method="post" action="<?= base_url('/C_Auth/login') ?>" class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" gdata-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="<?= base_url('/assets/signinvendor/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
	<script src="<?= base_url('/assets/signinvendor/vendor/animsition/js/animsition.min.js') ?>"></script>
	<script src="<?= base_url('/assets/signinvendor/vendor/bootstrap/js/popper.js') ?>"></script>
	<script src="<?= base_url('/assets/signinvendor/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('/assets/signinvendor/vendor/select2/select2.min.js') ?>"></script>
	<script src="<?= base_url('/assets/signinvendor/vendor/daterangepicker/moment.min.js') ?>"></script>
	<script src="<?= base_url('/assets/signinvendor/vendor/daterangepicker/daterangepicker.js') ?>"></script>
	<script src="<?= base_url('/assets/signinvendor/vendor/countdowntime/countdowntime.js') ?>"></script>
	<script src="<?= base_url('/assets/signinvendor/js/main.js') ?>"></script>

</body>
</html>