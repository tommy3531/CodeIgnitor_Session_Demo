<?php

require __DIR__.'../../vendor.autoload.php';

class Contact extends CI_Controller {

	public function index()
	{
		$this->load->view('main/contact/contact_header');
		$this->load->view('main/contact/contact_form');
		$this->load->view('main/contact/top_nav_contact');
	}

	public function process()
	{
		//$this->output->enable_profiler(TRUE);

		//set form rules, use form_eror to display error message on view
		$this->form_validation->set_rules('name', 'full name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
		$this->form_validation->set_rules('message', 'Message', 'trim|required');

		// Validate form According to rules if false redirect to contact form
		if($this->form_validation->run() == FALSE)
		{

			// If validation fails send variable to view for JSON to post 'email_form_validation_errors'
			$data = array(
				
				'result' => 0,
				'email_form_validation_errors' => 'Please fix the below errors',

			);

			// Send Error Message to view for ajax request 'email_form_validation_errors'
			$this->load->view('main/contact/contact_header');
			$this->load->view('main/contact/contact_form', $data);
			$this->load->view('main/contact/top_nav_contact');

		} 
		else 
		{

			// Set post data 
			$name    = $this->input->post('name');
            $email   = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this ->input->post('message');

            // Send Grid
            $this->email->initialize(array(
            		'protocol' => 'smtp',
            		'smtp_host' => 'smtp.sendgrid.net',
            		'smtp_user' => 'azure_5882f139fb30b8ada4b7fc69792bde42@azure.com',
            		'smtp_pass' => 'yk5xyIGQ3Bt0iBW',
            		'smtp_port' => '587',
            		'crlf' => "\r\n",
            		'newline' => "\r\n"
            	));

			// Fill Contact_form with post data
			$this->email->from($name, $email);
            $this->email->to('thomas.j.marler@gmail.com');
            $this->email->subject($subject);
            $this->email->message($message);


            // If validation is good send variable to view for JSON to post ''
           	$data['email_form_validation_success'] = 'Message has been sent';

            if($this->email->send())
            {
            	// If send is good send variable to view for JSON to post 'send_email_success'
				$data = array(

					'result' => 1,
					'send_email_success' => 'Email Sent',
				);

				// Send Error message to view for ajax request 'send_email_success'
				$this->load->view('main/contact/contact_header');
				$this->load->view('main/contact/contact_form', $data);
				$this->load->view('main/contact/top_nav_contact');
				echo $this->email->print_debugger();

			} else {

            	// If send fails send variable to view for JSON to post 'send_email_error'
            	$data = array(

            		'result' => 0,
            		'send_email_error' => 'Email did not send', 
            	);

            	// Send Error Message to view for ajax request 'send_email_error'
				$this->load->view('main/contact/contact_header');
				$this->load->view('main/contact/contact_form', $data);
				$this->load->view('main/contact/top_nav_contact');
				echo $this->email->print_debugger();
			}
		}
	}

	public function ajax_return_data()
	{

	}

	// public function process()
	// {
	// 	$this->email->from($this->input->post('email'), $this->input->post('name'));
	// 	$this->email->to('thomas.j.marler@gmail.com');
	// 	$this->email->subject($this->input->post('subject'));
	// 	$this->email->message($this->input->post('message'));

	// 	if($this->email->send())
	// 	{
	// 		echo "We have succesfully received you email. We will contact you ASAP";
	// 	}
	// 	else
	// 	{
	// 		echo "Some problem occurred.";
	// 	}
	// }
}