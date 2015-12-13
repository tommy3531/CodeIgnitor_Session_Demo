<body id="bootstrap-override">
	<!-- Fixed Navbar -->
	<nav id="mainnavbar" class="navbar navbar-default navbar-fixed-top"> <!-- Start #mainnavbar -->
		<div class="container"> <!-- Start of Container -->
			<div class="navbar-header"> <!-- Start div.navhar-header -->
		        <a class="navbar-brand" href="?php echo site_url('home'); ?>">Missouri Politics</a>
			</div> <!-- End div.navbar-header -->
			<div id="topnavbar" class="navbar-collapse collapse"> <!-- Start #topnavbar -->
				<ul id ="leftnav" class="nav navbar-nav"> <!-- Start #leftnav -->
					<li class="active">
						<a href="<?php echo site_url('home'); ?>">Home</a>
					</li>
					<li>
						<a href="<?php echo site_url('member/info'); ?>">Member area</a>
					</li>
					<li>
						<a href="<?php echo site_url('member/'); ?>">Members Area</a>
					</li>
				</ul> <!-- End #leftnav -->
				<ul id="rightnav" class="nav navbar-nav navbar-right"> <!-- Start #rightnav -->
					<li>
						<a href="<?php echo site_url('member/account'); ?>">Account</a>
					</li>
					<li class="active">
						<a href="<?php echo site_url('member/logout'); ?>">Logout</a>
						<span class="sr-only">(Current)</span>
					</li>
				</ul> <!-- End #rightnav -->
			</div> <!-- End #topnavbar -->
		</div> <!-- End Container -->
	</nav> <!-- End #mainnavbar -->