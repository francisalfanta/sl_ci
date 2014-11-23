	<!-- Begin page --> 
	<!-- edited line 5,8 & 24 : Lemuel -->
	<!-- commented line 10, & 28 : Lemuel -->
	<div class="container">
		<div class="full-content-center">
			<p class="text-center"><a href="#"><img src="<?php echo base_url (); ?>assets/img/login-logo.png" alt="Logo"></a></p>
			<div class="login-wrap animated flipInX">
				<div class="login-block">
					<img src="<?php echo base_url (); ?>images/users/default-user.png" class="img-circle not-logged-avatar">
					
					<?php echo form_open('login/login_validation');
						  echo validation_errors();?>
						  
					<!-- <form role="form" action="<?php echo base_url(); ?>dashboard"> -->
					
						<div class="form-group login-input">
						<i class="fa fa-user overlay"></i>
						<input type="text" class="form-control text-input" placeholder="Username" name="username" value="<?php echo set_value('username'); ?>">
						</div>
						<div class="form-group login-input">
						<i class="fa fa-key overlay"></i>
						<input type="password" class="form-control text-input" placeholder="********" name="password" value="<?php echo set_value('password'); ?>">
						</div>
						
						<div class="row">
							<div class="col-sm-6">
							<button type="submit" class="btn btn-success btn-block" value="Submit">LOGIN</button>
							</div>
							<div class="col-sm-6">
							<a href="forgotpass" class="btn btn-default btn-block">FORGOT PASSWORD</a>
							</div>
						</div>
					<!-- </form> -->
					<?php echo form_close(); ?>
				</div>
			</div>
			
		</div>
	</div>