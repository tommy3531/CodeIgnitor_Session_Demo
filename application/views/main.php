<!-- Head, footer, nav bar breakup into paritals -->
<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Learn Codeigniter</title>

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>formvalidation/dist/js/formValidation.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/contact.js"></script>

	<!-- Load jquery and bootstrap css files -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" >

	<!-- Load formValidation js -->

	<script type="text/javascript" src="<?php echo base_url(); ?>formvalidation/dist/js/formValidation.popular.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>formvalidation/dist/js/framework/bootstrap.min.js"></script>

	<!-- Load formvalidation css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>formvalidation/dist/css/formValidation.css" >
	
	<!-- Load custom css and js files to overwrite boostrap if neccesary -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css" >

</head>
<body id="bootstrap-override">
	<!-- Fixed Navbar -->
	<nav id="mainnavbar" class="navbar navbar-default navbar-fixed-top"> <!-- Start #mainnavbar -->
		<div class="container"> <!-- Start of Container -->
			<div class="navbar-header"> <!-- Start div.navhar-header -->
		        <a class="navbar-brand" href="<?php echo site_url('home'); ?>">Learn Codeigniter</a>
			</div> <!-- End div.navbar-header -->
			<div id="topnavbar" class="navbar-collapse collapse"> <!-- Start #topnavbar -->
				<ul id ="leftnav" class="nav navbar-nav"> <!-- Start #leftnav -->
					<li class="active">
						<a href="<?php echo site_url('home'); ?>">Home</a>
					</li>
					<li>
						<a href="<?php echo site_url('home/about'); ?>">About</a>
					</li>
					<li>
						<a href="<?php echo site_url('contact'); ?>">Contact</a>
					</li>
				</ul> <!-- End #leftnav -->
				<ul id="rightnav" class="nav navbar-nav navbar-right"> <!-- Start #rightnav -->
					<li>
						<a href="<?php echo site_url('signup'); ?>">Register</a>
					</li>
					<?php if($this->session->userdata('logged_in')): ?>
						<li>
							<a href="<?php echo site_url('member/logout'); ?>">Logout</a>
						</li>
					<?php else: ?>
						<li>
							<a href="<?php echo site_url('login'); ?>">Login</a>
						</li>
					<?php endif; ?>
					<li class="active">
						<a href="#">Default</a>
						<span class="sr-only">(Current)</span>
					</li>
				</ul> <!-- End #rightnav -->
			</div> <!-- End #topnavbar -->
		</div> <!-- End Container -->
	</nav> <!-- End #mainnavbar -->

	<div class="jumbotron"> <!-- Start .jumbotron -->
		<div id="jumboContainer" class="container"> <!-- Start #jumboContainer -->
			<div class="row"> <!-- Start .row -->
				<div class="col-lg-12"> <!-- Start .col-lg-12 -->
					<h1>Learn about Codeigniter</h1>
					<p>Explore how Codeigniter works and use PHP, JQUERY to bring life to a Codeigniter project</p>
					<p>
						<a class="btn btn-lg btn-primary" href="<?php echo site_url('signup'); ?>" role="button">Sign up!</a>
					</p>
				</div> <!-- End .col-lg-12 -->
			</div> <!-- End .row -->
		</div> <!-- End .jumbotron -->
	</div> <!-- End #jumboContainer -->
	<div>
	<?php 
  	  if(isset($logout_sucess)){
    	    echo '<div id="success" class="alert alert-success">';
        	echo $logout_sucess;
        	echo '</div>';
    	}
	?>
	</div>
</body>
</html>