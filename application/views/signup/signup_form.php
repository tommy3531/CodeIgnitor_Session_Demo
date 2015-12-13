<div id="formContainer" class="container"> <!-- Start #formContainer -->
	<?php $attributes = array('id' => 'register_form', 'class' => 'form_horizontal'); ?>
	<?php echo form_open('signup/create_member', $attributes); ?>
	<div id="loginbox" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
		<div class="panel panel-info">
			<div class="panel-heading">
				<div id="register_title" class="form_title">Register Form</div>
			</div> <!-- .panel-heading -->
			<div class="panel-body">
				<div id="firstname" class="form-group"> <!-- Start of #firstname-->
					<div class="inner-addon left-addon">
			            <i class="glyphicon glyphicon-user"></i>
			        	<input type="text" name="firstname" id="firstname" value="" class="form-control" placeholder="First Name" />
			        </div>

			        <!-- Form Error for firstname -->
			        <?php echo form_error('firstname', '<div id="has-error has-feedback" class="alert alert-danger contact-warning">','</div>'); ?>	
				</div> <!-- End of #firstname -->

				<div id="lastname" class="form-group"> <!-- Start of #lastname -->
					<div class="inner-addon left-addon">
			            <i class="glyphicon glyphicon-user"></i>
			        	<input type="text" name="lastname" id="lastname" value="" class="form-control" placeholder="Last Name" />
			        </div>

			        <!-- Form Error for lastname -->
			        <?php echo form_error('lastname', '<div id="has-error has-feedback" class="alert alert-danger contact-warning">','</div>'); ?>
				</div><!-- End of #lastname-->

				<div id="address" class="form-group"> <!-- Start of #address-->
					<div class="inner-addon left-addon">
			            <i class="glyphicon glyphicon-home"></i>
			        	<input type="text" name="address" id="address" value="" class="form-control" placeholder="Address" />
			        </div>
					
					<!-- Form Error for adress -->
			        <?php echo form_error('address', '<div id="has-error has-feedback" class="alert alert-danger contact-warning">','</div>'); ?>
				</div><!-- End of #address-->

				<div id="city" class="form-group"> <!-- Start of #city-->
					<div class="inner-addon left-addon">
			            <i class="glyphicon glyphicon-paperclip"></i>
			        	<input type="text" name="city" id="city" value="" class="form-control" placeholder="City" />
			        </div>
					
					<!-- Form Error for city -->
			        <?php echo form_error('city', '<div id="has-error has-feedback" class="alert alert-danger contact-warning">','</div>'); ?>
				</div><!-- End of #city-->

				<div id="state" class="form-group"> <!-- Start of #state-->
					<div class="inner-addon left-addon">
			            <i class="glyphicon glyphicon-pushpin"></i>
			        	<input type="text" name="state" id="state" value="" class="form-control" placeholder="State" />
			        </div>
					
					<!-- Form Error for state -->
			        <?php echo form_error('state', '<div id="has-error has-feedback" class="alert alert-danger contact-warning">','</div>'); ?>
				</div><!-- End of #state-->

				<div id="zipcode" class="form-group"> <!-- Start of #zipcode-->
					<div class="inner-addon left-addon">
			            <i class="glyphicon glyphicon-user"></i>
			        	<input type="text" name="zipcode" id="zipcode" value="" class="form-control" placeholder="Zipcode" />
			        </div>
					
					<!-- Form Error for zipcode -->
			        <?php echo form_error('zipcode', '<div id="has-error has-feedback" class="alert alert-danger contact-warning">','</div>'); ?>
				</div><!-- End of #zipcode-->

				<div id="email" class="form-group"> <!-- Start of #email-->
					<div class="inner-addon left-addon">
			            <i class="glyphicon glyphicon-envelope"></i>
			        	<input id="email" type="email" class="form-control" name="email" value="" placeholder="email" />
			        </div>

			        <!-- Form Error for email -->
			        <?php echo form_error('email', '<div id="has-error has-feedback" class="alert alert-danger contact-warning">','</div>'); ?>	
				</div><!-- End of #email-->

				<div id="username" class="form-group"> <!-- Start of #username-->
					<div class="inner-addon left-addon">
			            <i class="glyphicon glyphicon-user"></i>
			        	<input type="text" name="username" id="username" value="" class="form-control" placeholder="UserName" />
			        </div>
					
					<!-- Form Error for username -->
			        <?php echo form_error('username', '<div id="has-error has-feedback" class="alert alert-danger contact-warning">','</div>'); ?>
				</div><!-- End of #username-->

				<div id="password" class="form-group"> <!-- Start of #password -->
					<div class="inner-addon left-addon">
			            <i class="glyphicon glyphicon-certificate"></i>
			        	<input type="password" name="password" id="password" value="" class="form-control" placeholder="Password" />
			        </div>

			        <!-- Form Error for password -->
			        <?php echo form_error('password', '<div id="has-error has-feedback" class="alert alert-danger contact-warning">','</div>'); ?>
				</div><!-- End of #password-->

				<div id="confirmpass" class="form-group"> <!-- Start of #confirpassword -->
					<div class="inner-addon left-addon">
			            <i class="glyphicon glyphicon-certificate"></i>
			        	<input type="password" name="confirmpass" id="confirmpass" value="" class="form-control" placeholder="Confirm Password" />
			        </div>
					
					<!-- Form Error for confirpassword -->
			        <?php echo form_error('confirmpass', '<div id="has-error has-feedback" class="alert alert-danger contact-warning">','</div>'); ?>
				</div><!-- End of #confirmpassword-->

				<div id="logingroup" class="form-group">
					<div id="logincontrol" class="col-sm-12 controls">
						<button id='register_button' class="btn btn-primary center-block" type="submit">Register</button>
					</div>
				</div>
				<br ><br />
				<div id="signup" class="form-group">
					<div id="signupControl" class="col-md-12 control">Don't have an account
						<a href='<?php site_url("signup"); ?>'>Sign Up Here</a>
					</div>
				</div>
			</div> <!-- End of #panel-body -->
		</div> <!-- End of .panel panel-info -->
	</div> <!-- End of #loginbox -->
	<?php echo form_close(); ?>
</div> <!-- End of #formContainer -->
</body>
