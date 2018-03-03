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
		if($data['login_data']['user_type'] != 'faculty')
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
		$data['title'] = 'Faculty Dashboard';
		$today = date('Y-m-d');

		$query = $this->db->query("UPDATE `assignment` SET `status`='closed' WHERE `lst_date` < '$today' ");
		
		$data['faculty_leaves'] = $this->db->get_where('faculty_leaves', array('status' => 'pending'))->num_rows();

		 // $data['faculty_leaves'] = $this->db->get('faculty_leaves')->num_rows(); //total faculty
		
		$data['assignment'] = $this->db->get_where('assignment', array('status' => 'open'))->num_rows();

		$data['lecture_report'] = $this->db->get_where('lecture_report', array('status' => 'pending'))->num_rows();

		// $data['student'] = $this->db->get('student_details')->num_rows(); //total student

		$this->load->view('Faculty/dashboard', $data);
	}


}
