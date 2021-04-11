
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>AdminLTE 3 | Registration Page</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Font Awesome -->
		<link rel="stylesheet" href=".<?php echo base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- icheck bootstrap -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/adminlte.min.css">
		<!-- Google Font: Source Sans Pro -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	</head>
	<body class="hold-transition register-page">
		<div class="register-box">
			<div class="register-logo">
				<a href="<?php echo base_url().'register/index'; ?>"><b>Admin</b>LTE</a>
			</div>

			<div class="card">
				<div class="card-body register-card-body">
					<p class="login-box-msg">Register a new membership</p>
					<?php
						if($this->session->flashdata('message')){
							echo "<div class='alert alert-success'>".$this->session->flashdata('message')."</div>";
						}
					?>
					<form action="<?php echo base_url().'register/validation'; ?>" method="POST">
						<div class="input-group">
							<input type="text" name="fullname" class="form-control" placeholder="Full name" value="<?php echo set_value('fullname');?>">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="far fa-user"></span>
								</div>
							</div>
						</div>
						<small class="text-danger"><?php echo form_error('fullname');?></small>
						<div class="mb-3"></div>
						<div class="input-group">
							<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('email');?>">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="far fa-envelope"></span>
								</div>
							</div>
						</div>
						<small class="text-danger"><?php echo form_error('email');?></small>
						<div class="mb-3"></div>
						<div class="input-group">
							<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password');?>">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="far fa-lock"></span>
								</div>
							</div>
						</div>
						<small class="text-danger"><?php echo form_error('password');?></small>
						<div class="mb-3"></div>
						<div class="input-group">
							<input type="password" name="password2" class="form-control" placeholder="Retype password">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="far fa-lock"></span>
								</div>
							</div>
						</div>
						<small class="text-danger"><?php echo form_error('password2');?></small>
						<div class="mb-3"></div>
						<div class="row">
							<div class="col-8">
								<!-- <div class="icheck-primary">
									<input type="checkbox" id="agreeTerms" name="terms" value="agree">
									<label for="agreeTerms">I agree to the <a href="#">terms</a></label>
								</div> -->
							</div>
							<!-- /.col -->
							<div class="col-4">
								<button type="submit" class="btn btn-primary btn-block">Register</button>
							</div>
							<!-- /.col -->
						</div>
					</form>

					<!-- <div class="social-auth-links text-center">
						<p>- OR -</p>
						<a href="#" class="btn btn-block btn-primary">
							<i class="fab fa-facebook mr-2"></i>
							Sign up using Facebook
						</a>
						<a href="#" class="btn btn-block btn-danger">
							<i class="fab fa-google-plus mr-2"></i>
							Sign up using Google+
						</a>
					</div> -->

					<a href="<?php echo base_url().'login/index'; ?>" class="text-center">I have a membership id</a>
				</div>
				<!-- /.form-box -->
			</div><!-- /.card -->
		</div>
		<!-- /.register-box -->

		<!-- jQuery -->
		<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
	</body>
</html>
