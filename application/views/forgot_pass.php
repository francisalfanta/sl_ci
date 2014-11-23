<!-- Created by  : Lemuel 
     Date        : November 23, 2014
     Script Lines: All unless noted otherwise
-->
	<!-- Begin page -->
	<div class="container">
		<div class="full-content-center">
			<p class="text-center"><a href="#"><img src="<?php echo base_url ('assets/img/login-logo.png'); ?>" alt="Logo"></a></p>
			<div class="login-wrap animated flipInX">
				<div class="login-block">
					<img src="<?php echo base_url ('images/users/default-user.png'); ?>" class="img-circle not-logged-avatar">
					<form role="form" action="<?php echo base_url(); ?>login">
						<div class="form-group login-input">
						<i class="fa fa-user overlay"></i>
						<input type="text" class="form-control text-input" placeholder="Username">
						</div>
						
						<div class="row">
							<div class="col-sm-6">							
							<a href="index" class="btn btn-default btn-block">BACK</a>
							</div>
							<div class="col-sm-6">
							<button type="submit" class="btn btn-success btn-block">SUBMIT</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			
		</div>
	</div>