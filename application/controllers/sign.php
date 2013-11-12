<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Join extends CI_Controller
{
	public function index()
	{
		$this->load->view('index');
	}

	public function sign_up()
	{
		$this->load->helper('url');
		$this->load->model('sign_up_model');
		if( $this->sign_up_model->sign_up_user() )
		{
			redirect('sign_in');
		}

		else
		{
			$this->index();
		}
	}

	public function load_sign_in_page()
	{
		$this->load->view('sign_in');
	}


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
			redirect('logout');	
		}	
		else
		{
			redirect('sign_in');
		}
	}

	public function validate_user()
	{
			$this->load->model('sign_up_in_model');
			
			if( $this->sign_up_in_model->can_login() )
			{
				return true;
			}
			
			else
			{
					$this->form_validation->set_message('validate_user','Incorrect username/password!');
					return false;	
			}
			
		
	}

	


}