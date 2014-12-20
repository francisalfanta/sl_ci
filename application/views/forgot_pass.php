<!-- Created by  : Lemuel 
     Date        : November 23, 2014
     Script Lines: All unless noted otherwise
-->
	<!-- Begin page -->
	<div class="container">
		<div class="full-content-center">
			<div class="login-wrap animated flipInX">
				<div class="login-block">
					<center><img src="<?php echo base_url (); ?>assets/img/slrelogo.png"></center>
					<?php echo form_open('login/forgot_pass_validation');?>
						<h6><?php echo form_error('username');?></h6>
						<div class="form-group login-input">
						<i class="fa fa-user overlay"></i>
						<input type="text" class="form-control text-input" placeholder="Username" name="username" value="<?php echo set_value('username'); ?>">
						</div>
						
						<div class="row">
							<div class="col-sm-6">							
							<a href="index" class="btn btn-default btn-block">BACK</a>
							</div>
							<div class="col-sm-6">
							<input type="hidden" name="submitted" value="true">
							<button type="submit" class="btn btn-success btn-block" value="Submit">SUBMIT</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			
		</div>
	</div>