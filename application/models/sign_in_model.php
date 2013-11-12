<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sign_in_model extends CI_Model
{
	public function can_login()
	{
		$email = $this->input->post('email_id');
		$pwd = $this->input->post('password');



		$data = array('username' => $email , 'password' => $pwd ); 

		$query = $this->db->select('username')->from('users')->where($data)->get();

		if( $query->num_rows() > 0 )
		{ 
			return true;
		}

		else
		{
			return false;
		}
	}

}