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

	public function index(  $page_no = 0 , $sort_column = 'all', $sort_order = 'all') //Dashboard
	{
		$data['login_data'] =  $this->session->login_data;
		$data['title'] = 'Faculty Dashboard';
		$today = date('Y-m-d');
		$data['url'] = site_url('faculty/todo/view/');
		$data['sort_column'] = $sort_column;
		$data['sort_order'] = $sort_order;

		$user_id = $data['login_data']['user_id'];
		// echo $user_id;
		// exit(); 

		$query = $this->db->query("UPDATE `assignment` SET `status`='closed' WHERE `lst_date` < '$today' ");
		
		$data['faculty_leaves'] = $this->db->get_where('faculty_leaves', array('status' => 'pending'))->num_rows();

		 // $data['faculty_leaves'] = $this->db->get('faculty_leaves')->num_rows(); //total faculty
		
		$data['assignment'] = $this->db->get_where('assignment', array('status' => 'open'))->num_rows();

		$data['lecture_report'] = $this->db->get_where('lecture_report', array('status' => 'pending'))->num_rows();

		$data['todos'] =  $this->db->query("select * FROM todos WHERE `user_id` = '$user_id' " )->num_rows();

		// $data['student'] = $this->db->get('student_details')->num_rows(); //total student


















		$this->db->where('status != ', 'deleted');
		$this->db->where('user_id', $data['login_data']['user_id']);
		
		
		
		
		
		$num_rows = $this->db->get('todos')->num_rows();	


		$this->load->library('pagination');
		// $config['base_url'] = $data['url'].'/'.$sort_column.'/'.$sort_order;
		$config['base_url'] = $data['url'].'/';
		$config['total_rows'] = $num_rows;
		$config['per_page'] = 5;
		$config['full_tag_open'] = '<div class="ci_pagination pull-right">';
		$config['full_tag_close'] = '</div>';
		$config['cur_tag_open'] = '<a href="javascript:;" class="active">';
		$config['cur_tag_close'] = '</a>';
		$this->pagination->initialize($config);
		
		

		$this->db->where('status != ', 'deleted');
		$this->db->where('user_id', $data['login_data']['user_id']);
		
		
		
		
		$this->db->limit($config['per_page'], $page_no);
		$data['todos'] = $this->db->get('todos')->result_array();

		$data['num_rows'] = $num_rows;
		$data['from_result'] = $page_no+1;
		$data['to_result'] = ($num_rows > $page_no+$config['per_page'])?$page_no+$config['per_page']:$num_rows;
		



















		$this->load->view('Faculty/dashboard', $data);
	}


}
