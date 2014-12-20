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
					<?php echo form_open('login/fp_random_gen');?>
						<h6><?php echo form_error('randomgen'); 
								  echo form_error('pword');
								  echo form_error('repword');
							?>
						</h6>
						<div class="form-group login-input">
						<i class="fa fa-qrcode overlay"></i>
						<input type="text" class="form-control text-input" placeholder="Enter your random generated code here." name="randomgen" value="<?php echo set_value('randomgen'); ?>">
						</div>
						
						<div class="form-group login-input">
						<i class="fa fa-key overlay"></i>
						<input type="password" class="form-control text-input" placeholder="New Password" name="pword" value="">
						</div>
						
						<div class="form-group login-input">
						<i class="fa fa-keyboard-o overlay"></i>
						<input type="password" class="form-control text-input" placeholder="Re-type New Password" name="repword" value="">
						</div>
						
						<div class="row">
							<div class="col-sm-6">							
							<a href="index" class="btn btn-default btn-block">BACK TO LOGIN</a>
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