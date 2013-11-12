<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class join_sign extends CI_Controller
{
	public function index()
	{
		$this->load->view('index');
	}

	public function sign_up()
	{
		$this->load->helper('url');
		$this->load->model('sign_up_in_model');
		if( $this->sign_up_in_model->sign_up_user() )
		{
			
			$this->load->view('step1');
		}

		else
		{
			$this->index();
		}
	}
     public function sign_up_2(){
	$this->load->helper('url');
	$this->load->model('sign_up_in_model');
	if($this->sign_up_in_model->sign_up_user2()){
	$this->load->view('step2');
	}
	else 
	$this->load->view('step1');
	}
	public function loadScreen4(){
	$this->load->view('screen4');
	
	}
	public function loadForget_pass()
	{
	$this->load->view('forgetPassword')
	}
	public function load_sign_in_page()
	{
		$this->load->view('sign_in');
	}

	public function members()
	{
		if ($this->session->userdata('is_logged_in'))
		{

			$this->load->view('log_out');
	
		}
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
			$this->members();	
		}	
		else
		{
			$this->load_sign_in_page();
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

	public function logout()
	{
			
		$this->session->sess_destroy();
		$this->index();
	}



}