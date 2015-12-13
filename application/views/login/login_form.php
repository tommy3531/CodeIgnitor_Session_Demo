

	<div id="formContainer" class="container"> <!-- Start #formContainer -->

		<!-- Form Attributes -->
		<?php $attributes = array('id' => 'login_form', 'class' => 'login_form'); ?>
		
		<!-- Open form -->
		<?php echo form_open('login/validate_creditals', $attributes); ?>
		
		<div id="loginbox" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2"> <!-- Start of #loginbox -->
			<!-- Account Created Succesfully Message -->
			<?php if ($this->session->flashdata('user_registered')): ?>
        		<div class="alert alert-success"> <?php echo $this->session->flashdata('user_registered') ?> </div>
    		<?php endif; ?>
			<!-- End of Account Created Succesfully Message -->
			<?php if ($this->session->flashdata('loggin_error')): ?>
				<div class="alert alert-danger"> <?php echo $this->session->flashdata('loggin_error') ?> </div>
			<?php endif; ?>
			<?php if ($this->session->flashdata('logout_sucess')): ?>
				<div class="alert alert-danger"> <?php echo $this->session->flashdata('loggin_error') ?> </div>
			<?php endif; ?>
			<?php if(isset($logout_sucess)) :?>
                <div id="success" class="alert alert-success">
               		<?php echo $logout_sucess; ?>
                </div>
            <?php endif; ?>
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="form_title">Sign In</div>
					<div id="forgotpassword"><a href="#">Forgot Password</a></div>
				</div> <!-- .panel-heading -->
				<div class="panel-body">
					<div id="inputusername" class="form-group"> <!-- Start of #username-->
						<div class="inner-addon left-addon">
				            <i class="glyphicon glyphicon-user"></i>
				        	<input type="text" name="username" id="username" value="" class="form-control" placeholder="UserName" />
				        </div>
					<?php echo form_error('username', '<div id="has-error has-feedback" class="alert alert-danger contact-warning">','</div>'); ?>
					</div><!-- End of #username-->
					<div id="inputpassword" class="form-group"> <!-- Start of #inputpassword-->
						<div class="inner-addon left-addon">
				            <i class="glyphicon glyphicon-user"></i>
				        	<input type="password" name="password" id="password" value="" class="form-control" placeholder="Password" />
				        </div>
					<?php echo form_error('password', '<div id="has-error has-feedback" class="alert alert-danger contact-warning">','</div>'); ?>	
					</div><!-- End of #inputpassword-->
					<div id="logingroup" class="form-group">
						<div id="logincontrol" class="col-sm-12 controls">
							<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
						</div>
					</div>
					<br ><br />
					<div id="signup" class="form-group">
						<div id="signupControl" class="col-md-12 control">Don't have an account, 
							<a href="<?php echo site_url('signup'); ?>">Sign up Here!!</a>
						</div>
					</div>
				</div> <!-- End of #panel-body -->
			</div> <!-- End of .panel panel-info -->
		</div> <!-- End of #loginbox -->
		<?php echo form_close(); ?>
	</div> <!-- End of #formContainer -->
