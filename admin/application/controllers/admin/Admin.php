<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() 
	{

		parent::__construct();
		if(!($this->session->login_data))
		{
			redirect('login');
		}
		$this->load->model('general_m');
		$this->load->model('admin_m');
		$this->general_m->portal_session();
		date_default_timezone_set('Asia/Kolkata');
	}

	public function index() //Dashboard
	{
		$data['title'] = "Dashboard";

		$data['faculty'] = $this->db->get_where('faculty_details', array('status' => 'ACTIVE'))->num_rows();

		// $data['faculty'] = $this->db->get('faculty_details')->num_rows(); //total faculty
		
		$data['student'] = $this->db->get_where('student_details', array('status' => 'ACTIVE'))->num_rows();

		// $data['student'] = $this->db->get('student_details')->num_rows(); //total student

		$this->load->view('Admin/dashboard', $data);

	}

	public function setting()
	{
		$data['title'] = "Change Password";
		if($this->input->post('submit'))
		{
			$data['alert'] = $this->admin_m->ChangePassword();
		}
		$this->load->view('Admin/setting',$data);
	}

}
