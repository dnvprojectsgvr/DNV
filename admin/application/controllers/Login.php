<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() 
	{

		parent::__construct();
		$this->load->model('general_m');
		$this->load->model('login_m');
		$this->general_m->portal_session();
        date_default_timezone_set('Asia/Kolkata');
	}

	public function index()
	{
		// $username = $this->db->get('admin')->result_array();
		// echo $this->general_m->decryptIt($username[0]['username'], $username[0]['password']);
		// exit;
		if($this->session->login_data)
		{
			$login_data =  $this->session->login_data;

			if($login_data['login_type'] == 'admin')
			{
				redirect('admin');
			}
			if($login_data['login_type'] == 'employee')
			{
				redirect('employees/dashboard');
			}
		}
		$data['status'] = '';
		if($this->input->post('login'))
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$password = $this->general_m->encryptIt($username, $password);


			$data['status'] = $this->login_m->login($username, $password);
			if($data['status'] == "true")
			{
				$login_type = $this->db->get_where('admin', array('username' => $username), 1, 0)->result_array();
				if($login_type[0]['login_type'] == 'admin')
				{
					redirect('admin');
				}
				if($login_type[0]['login_type'] == 'employee')
				{
					redirect('employees/dashboard');
				}
				
			}
		}
		echo $data['status'];
		$this->load->view('login', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function registration()
	{	
		$data['message'] = '';
		if($this->input->post('register'))
		{  
            $detail = $this->input->post('detail');
            $detail['user_password'] = $this->general_m->encryptIt($detail['user_name'], $detail['user_password']);
			$data['message'] = $this->login_m->registration($detail);
		}
		$this->load->view('Login/registration', $data);
	}

	public function pagenotfound()
	{
		$this->load->view('404');
	}



}
