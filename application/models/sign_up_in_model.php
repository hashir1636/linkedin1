<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sign_up_in_model extends CI_Model
{
	public function sign_up_user()
	{
		$fname = $this->input->post('firstname');
		$lname = $this->input->post('lastname');
		$email = $this->input->post('email');
		$pwd = $this->input->post('password');
		

		$data = array('fname'=>$fname, 'lname' => $lname, 'email' => $email, 'password'=> $pwd );
		$query = $this->db->select('email')->where('email',$email)->get('user');
		
		if( $query->num_rows() == 0 )
		{
			$this->db->insert('user',$data);

			if( $this->db->affected_rows() > 0 )
			{
				$query=$this->db->select('ID')->where('email',$email)->get('user');
				echo $query; @die;
				$data = array('fname'=> $this->input->post('firstname'), 'email' => $this->input->post('email') );
				$this->session->set_userdata($data);
				return true;
			}
		}	
		else
		{
			return false;
		}
	}

	public function sign_up_user2()
	{
		$country = $this->input->post('country');
		$postal_code = $this->input->post('post_code');
		$job_type = $this->input->post('job_type');
		$job_title = $this->input->post('job_title');
		$self_employee = $this->input->post('self_employee');
		$company_name = $this->input->post('company_name');

		$data = array('country'=> $country, 'postalCode' => $postal_code, 'currently' => $job_type, 'title'=> $job_title, 'selfEmp' => $self_employee, 'company' => $company_name);

		$this->db->where('username',$this->session->userdata('username'))->update('users',$data);

		if ($this->db->affected_rows() > 0 ) 
		{
			return true;	
		}

		else
		{
			return false;
		}

	}

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