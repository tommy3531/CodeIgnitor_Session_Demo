<?php
class Member extends CI_Controller {

// ----------------------------------------------------------------------------------------------------------------

	public function index()
	{
		if($this->session->userdata('logged_in')) {
			$this->load->view('include/header');
			$this->load->view('member/member');
			$this->load->view('member/top_nav_member');
			$this->load->view('include/footer');

		} else {

			redirect('home');
		}
	}

// ----------------------------------------------------------------------------------------------------------------

	public function logout()
	{
		$this->session->sess_destroy();
		$data['logout_sucess'] = 'You have been logged out';
		$this->load->view('login/login_header');
		$this->load->view('login/login_form', $data);
		$this->load->view('login/top_nav_login');
		$this->load->view('include/footer');

	}
}
// ----------------------------------------------------------------------------------------------------------------