<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		// Load main view
		$this->load->view('main');
	}

	public function contact()
	{
		$this->load->view('main/contact/contact_header');
		$this->load->view('main/contact/contact_form');
		$this->load->view('main/contact/top_nav_contact');
	}

	public function about(){

		$this->load->view('main/about/about_header');
		$this->load->view('main/about/about');
		$this->load->view('include/top_nav_view.php');

	}
}