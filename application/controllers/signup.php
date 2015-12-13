<?php
class Signup extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('membership_model');
	}

	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('signup/top_nav_signup');
		$this->load->view('signup/signup_form');
		$this->load->view('include/footer');
	}

	public function create_member()
	{
		// Auto Load Form validation library
		// Set validation rules with callbacks
		// If validation fails load view with error
		// else 

		//Set Rules
		$this->form_validation->set_rules('firstname', 'firstname', 'trim|required');
		$this->form_validation->set_rules('lastname', 'lastname', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('address', 'address', 'trim|required');
		$this->form_validation->set_rules('city', 'city', 'trim|required');
		$this->form_validation->set_rules('state', 'state', 'trim|required');
		$this->form_validation->set_rules('zipcode', 'zipcode', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_rules('confirmpass', 'confirm password', 'trim|required');


		// validate form according to rules if false show errors
		if($this->form_validation->run() == FALSE){

			// load signup view
			$this->load->view('include/header');
			$this->load->view('signup/top_nav_signup');
			$this->load->view('signup/signup_form');
			$this->load->view('include/footer');

		} else {

			// If validation is ok create memeber
			if($this->membership_model->create_member())
			{
				// set flashdata and show message on redirect page 'login'
				$this->session->set_flashdata('user_registered', 'Account Created Succfully!!');
				redirect('login');

			} 

			else {
				
				$this->session->set_flashdata('mess', 'something went wrong');
				redirect('login');


			}
		}
	}
}