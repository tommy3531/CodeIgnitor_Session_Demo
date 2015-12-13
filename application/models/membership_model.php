<?php 

class Membership_model extends CI_Model 
{

// ----------------------------------------------------------------------------------------------------------------

	public function check_user($username, $password)
	{
		// $username = $this->input->post()
		// $this->db->where('user_name', $username);

		// $query = $this->db->get('users');

		// if($query->num_rows() > 0 ){

		// 	$row = $query->row('password');

		// 	$db_password = $row->password;

		// }

		// if(password_verify($password, $db_password))
		// {
		// 	return $result->row(0)->user_id;

		// } else {

		// 	$data['error'] = 'Did not match password';
		// 	return $data;
		// }

		// ----------------------------------------------------------------------------------------------------------------
		
		$this->db->where('user_name', $username);

		$result = $this->db->get('users');

		$db_password = $result->row(9)->password;

		if(password_verify($password, $db_password))
		{
			return $result->row(0)->user_id;

		} else {

			$data['error'] = 'Did not match password';
			return $data;
		}

		// ----------------------------------------------------------------------------------------------------------------

	}

// ----------------------------------------------------------------------------------------------------------------

	public function create_member()
	{

		$options = ['cost' => 12];

		$encrypted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);
		$data = array(

			'first_name' 	=> $this->input->post('firstname'),
			'last_name' 	=> $this->input->post('lastname'),
			'email' 		=> $this->input->post('email'),
			'address'		=> $this->input->post('address'),
			'city'			=> $this->input->post('city'),
			'state'			=> $this->input->post('state'),
			'zip_code'		=> $this->input->post('zipcode'),
			'user_name' 	=> $this->input->post('username'),
			'password' 		=> $encrypted_pass

			);

		$insert_data = $this->db->insert('users', $data);
		return $insert_data;
	}

// ----------------------------------------------------------------------------------------------------------------

	public function get_users($user_id)
	{
		$query = $this->db->query("SELECT * FROM users");
		return $query->num_fields();
	}

	public function update()
	{

	}

	public function delete()
	{
		
	}
}
