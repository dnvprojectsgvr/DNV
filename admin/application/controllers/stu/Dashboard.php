<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() 
	{

		parent::__construct();
		if(!($this->session->login_data))
		{
			redirect('login');
		}
		$data['login_data'] =  $this->session->login_data;
		if($data['login_data']['user_type'] != 'student')
		{
			redirect('login');
		}
		$this->load->model('general_m');
		$this->general_m->portal_session();
        date_default_timezone_set('Asia/Kolkata');
	}

	public function index() //Dashboard
	{
		$data['login_data'] =  $this->session->login_data;
		$data['title'] = 'student Dashboard';
		$today = date('Y-m-d');


		$query = $this->db->query("UPDATE `assignment` SET `status`='closed' WHERE `lst_date` < '$today' ");
		$data['assignment'] = $this->db->get_where('assignment', array('status' => 'open'))->num_rows();


		$this->load->view('stu/dashboard', $data);
	}

}
