<div id="wrapper">
	<div id='headerinfo'>
		<h1>All information is taken from CodeIgniter User Guide Version 3.0</h1>
		<a id='linktag' href ="http://www.codeigniter.com/user_guide/index.html">Codeigniter 3</a>
	</div>
	<div id="view_info">
		<h1> Controller Information</h1>
		<div class="jumbotron">
			<p id='viewtext'>Controllers are considered the middle man when talking about views and models. On mysite the model 
							 communicates with the Database when a user logins to verify there password.  If you the passwords match
							 the model sends the user_id to the controller.  The controller uses the user_id in a session to see if the 
							 user is logged in or not.  If the user presses the logout button the session is destory and the controller
							 tells the view to redirect the user to the home page.

							 Controllers are great for doing form validation becasue the controller can send flashdata to view
							 (which is an error message) to display form errors to the user.  If you plan on using flashdata make sure
							 $this-load->view('controller/method'), becasue error messages go away on redirect.  You can find more information
							 about controller below.
			</p>
			<p id="learning link">
				<a href="http://www.codeigniter.com/user_guide/general/controllers.html?highlight=controller">Learn about Controller</a>
			</p>
		</div>
	</div>
</div>
