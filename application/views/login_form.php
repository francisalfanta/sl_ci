	<!-- Begin page -->
	<div class="container">
		<div class="full-content-center">
			<p class="text-center"><a href="#"><img src="assets/img/login-logo.png" alt="Logo"></a></p>
			<div class="login-wrap animated flipInX">
				<div class="login-block">
					<img src="images/users/default-user.png" class="img-circle not-logged-avatar">
					<form role="form" action="<?php echo base_url(); ?>dashboard">
						<div class="form-group login-input">
						<i class="fa fa-user overlay"></i>
						<input type="text" class="form-control text-input" placeholder="Username">
						</div>
						<div class="form-group login-input">
						<i class="fa fa-key overlay"></i>
						<input type="password" class="form-control text-input" placeholder="********">
						</div>
						
						<div class="row">
							<div class="col-sm-6">
							<button type="submit" class="btn btn-success btn-block">LOGIN</button>
							</div>
							<div class="col-sm-6">
							<a href="register.html" class="btn btn-default btn-block">Register</a>
							</div>
						</div>
					</form>
				</div>
			</div>
			
		</div>
	</div>