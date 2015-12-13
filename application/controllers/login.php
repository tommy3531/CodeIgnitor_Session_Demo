<?php
class Login extends CI_Controller {

// ----------------------------------------------------------------------------------------------------------------

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('membership_model');

	}

// ----------------------------------------------------------------------------------------------------------------

	public function index()
	{
		$this->load->view('login/login_header');
		$this->load->view('login/login_form');
		$this->load->view('login/top_nav_login');
		$this->load->view('include/footer');
	}

// ----------------------------------------------------------------------------------------------------------------

	// Validate user input from login form
	public function validate_creditals()
	{

		$this->output->enable_profiler(TRUE);

		// Set up form rules for login form
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() == FALSE){

			$this->load->view('login/login_header');
			$this->load->view('login/login_form');
			$this->load->view('login/top_nav_login');
			$this->load->view('include/footer');

		} else {

			// Get post data from form if validation is true
			$username = $this->input->post('username');
			$password = $this->input->post('password');


			// Check db to verify
			$user_id = $this->membership_model->check_user($username, $password);


			// If user is true set session
			if($user_id){

				$user_data = array(

					'user_id' => $user_id,
					'user_name' => $username,
					'logged_in' => true
				);

				// Set the set session
				$this->session->set_userdata($user_data);

				// Set Message to notify user logged in sucessfully
				$this->session->set_flashdata('loggin_success', 'Welcome to the members area');

				
				// load members views
				redirect('member');

			} else {

				$this->session->set_flashdata('loggin_error', 'Not In Members Area');
				$this->load->view('did_not_work');
			}
		}
	}

// ----------------------------------------------------------------------------------------------------------------

	public function test_get(){

		$data['result'] = $this->membership_model->get_users(1);
		$this->load->view('works', $data);

	}

	// public function logout()
	// {
	// 	session_destroy();
	// 	redirect('home');
	// }

// ----------------------------------------------------------------------------------------------------------------

	// This will post a message to the login page from the register controller
	public function success($data)
	{
		$message = $this->session->flashdata('user_registered');
		echo $message;

		$this->load->view('login/login_form');
		$this->load->view('login/login_header');
		$this->load->view('login/top_nav_login');
		$this->load->view('include/footer');
	}
}
