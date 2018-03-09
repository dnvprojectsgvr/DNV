<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class setting extends CI_Controller {

	function __construct() 
	{

		parent::__construct();
		if(!($this->session->login_data))
		{
			redirect('login');
		}
		$data['login_data'] =  $this->session->login_data;
		if($data['login_data']['user_type'] != 'faculty')
		{
			redirect('login');
		}
		$this->load->model('general_m');
				$this->load->model('admin_m');
		$this->general_m->portal_session();
        date_default_timezone_set('Asia/Kolkata');
	}

	public function setting()
	{

		$data['title'] = "Change Password";
		if($this->input->post('submit'))
		{
			$data['alert'] = $this->admin_m->ChangePassword();
		}
		$this->load->view('faculty/setting',$data);
	}

}
