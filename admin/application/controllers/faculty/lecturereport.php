<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lecturereport extends CI_Controller {


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

	public function index($date = 'all', $subject = 'all', $status = 'all', $sort_column = 'all', $sort_order = 'all', $page_no = 0)
	{
		$data['url'] = site_url('faculty/lecturereport/index/'.$date.'/'.$subject.'/'.$status);

		//REDIRECT IF FILTER IS ENABLED
		if($this->input->post('submit'))
		{
			$url = 'faculty/lecturereport/index/'.$this->input->post('date').'/'.$this->input->post('subject').'/'.$this->input->post('status');
			redirect($url);
		}

		$data['title'] = "Lecture Repots";

		$data['date'] = $date;
		$data['subject'] = $subject;
		$data['status'] = $status;
		$data['sort_column'] = $sort_column;
		$data['sort_order'] = $sort_order;

		$data['login_data'] =  $this->session->login_data;

		$this->db->where('status != ', 'deleted');
		$this->db->where('faculty_id', $data['login_data']['user_id']);
		if($date != 'all' && $date != '')
		{
			$this->db->where('date >=', $date);
		}
		if($subject != 'all' && $subject != '')
		{
			$this->db->where('subject <=', $subject);
		}
		if($status != 'all')
		{
			$this->db->where('status', $status);
		}
		if($sort_column != 'all' && $sort_order != 'all')
		{
			$this->db->order_by($sort_column, $sort_order);
		}
		$num_rows = $this->db->get('lecture_report')->num_rows();


		$this->load->library('pagination');
		$config['base_url'] = $data['url'].'/'.$sort_column.'/'.$sort_order;
		$config['total_rows'] = $num_rows;
		$config['per_page'] = 10;
		$config['full_tag_open'] = '<div class="ci_pagination pull-right">';
		$config['full_tag_close'] = '</div>';
		$config['cur_tag_open'] = '<a href="javascript:;" class="active">';
		$config['cur_tag_close'] = '</a>';
		$this->pagination->initialize($config);
		
		

		$this->db->where('status != ', 'deleted');
		$this->db->where('faculty_id', $data['login_data']['user_id']);
		if($date != 'all' && $date != '')
		{
			$this->db->where('date >=', $date);
		}
		if($subject != 'all' && $subject != '')
		{
			$this->db->where('subject <=', $subject);
		}
		if($status != 'all')
		{
			$this->db->where('status', $status);
		}
		if($sort_column != 'all' && $sort_order != 'all')
		{
			$this->db->order_by($sort_column, $sort_order);
		}
		$this->db->limit($config['per_page'], $page_no);
		$data['reports'] = $this->db->get('lecture_report')->result_array();

		$data['num_rows'] = $num_rows;
		$data['from_result'] = $page_no+1;
		$data['to_result'] = ($num_rows > $page_no+$config['per_page'])?$page_no+$config['per_page']:$num_rows;
		
		$this->load->view('faculty/lecturereport/index', $data);
	}

	public function add()
	{
		$data['title'] = "Add Lecture Repot";
		$data['login_data'] =  $this->session->login_data;

		// var_dump($data['login_data']);
		// exit();


		if($this->input->post('submit'))
		{
			$post_data = $this->input->post('data');
			$post_data['faculty_id'] = $data['login_data']['user_id'];
			$this->db->insert('lecture_report', $post_data);
			redirect('faculty/lecturereport/index');
		}
		$this->load->view('faculty/lecturereport/add', $data);
	}

	public function edit($id)
	{
		$data['title'] = "Edit Lecture Repot";
		$data['login_data'] =  $this->session->login_data;

		if($this->input->post('submit'))
		{
			$post_data = $this->input->post('data');
			$this->db->where('id', $id);
			$this->db->update('lecture_report', $post_data);
			redirect('faculty/lecturereport/index');
		}

		$data['report'] = $this->db->get_where('lecture_report', array('id' => $id), 1, 0)->result_array();
		$this->load->view('faculty/lecturereport/edit', $data);
	}

	public function delete($faculty_leaveid)
	{
		$this->db->where('id', $id);
		$this->db->update('lecture_report', array('status' => 'deleted'));
		redirect('faculty/lecturereport/index');
	}

}
