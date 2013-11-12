<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sign_in extends CI_Controller
{
	public function login_validation()
	{
		
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email_id','Email','required|trim|xss_clean|callback_validate_user');
		$this->form_validation->set_rules('password','Password','required|md5|trim');
		if( $this->form_validation->run() )
		{
			$data = array(
				'username' => $this->input->post('email_id'),
				'is_logged_in' =>1
				
			
			);
			$this->session->set_userdata($data);
			$this->load_main_page();	
		}	
		else
		{
			//$data['msg'] = "Incorrect username password";
			$this->load->library('../controller/Join');
			$this->join->index();	
		}
	}
	
	public function validate_user()
	{
			$this->load->model('sign_in_model');
			
			if( $this->sign_in_model->can_login() )
			{
				return true;
			}
			
			else
			{
					$this->form_validation->set_message('validate_user','Incorrect username/password!');
					return false;	
			}
			
		
	}

	public function load_main_page()
	{
		if( $this->session->userdata('is_logged_in') == 1  )
		{
			$this->load->view('log_out');
		}
		else
		{
			$this->load->view('sign_in');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->load_main_page();
	}
}