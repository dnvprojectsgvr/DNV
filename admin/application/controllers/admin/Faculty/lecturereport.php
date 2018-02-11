<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lecturereport extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->library('excel');
		if(!($this->session->login_data))
		{
			redirect('login');
		}
		$this->load->model('general_m');
		$this->load->model('Faculty_m');
		$this->general_m->portal_session();
        date_default_timezone_set('Asia/Kolkata');
	}

	public function index()
	{   
		$data['title'] = "View Faculty";
		$this->db->select('*');
		$this->db->from('faculty_details');
		$this->db->where('status', 'ACTIVE');
		$data['faculty_details'] = $this->db->get()->result_array();
		$this->load->view('Admin/faculty/index', $data);
	}

  	public function reports($faculty_id = 'all', $date = 'all', $subject = 'all', $status = 'all', $sort_column = 'all', $sort_order = 'all', $page_no = 0)
  	{
  		$data['url'] = site_url('faculty/FacultyLeave/reports/'.$faculty_id.'/'.$date.'/'.$subject.'/'.$status);

  		//REDIRECT IF FILTER IS ENABLED
  		if($this->input->post('submit'))
  		{
  			$url = 'admin/faculty/FacultyLeave/reports/'.$this->input->post('faculty_id').'/'.$this->input->post('date').'/'.$this->input->post('subject').'/'.$this->input->post('status');
  			redirect($url);
  		}


		$data['title'] = "Lecture Report";

		$data['faculty_id'] = $faculty_id;
		$data['date'] = $date;
		$data['subject'] = $subject;
		$data['status'] = $status;
		$data['sort_column'] = $sort_column;
		$data['sort_order'] = $sort_order;

		$data['faculty'] = $this->db->get('faculty_details')->result_array();
		$data['login_data'] =  $this->session->login_data;

		if($faculty_id != 'all')
		{
			$this->db->where('faculty_id', $faculty_id);
		}
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
		$this->db->where('status != ', 'deleted');
		if($sort_column != 'all' && $sort_order != 'all')
		{
			$this->db->order_by($sort_column, $sort_order);
		}
		$num_rows = $this->db->get('lecture_report')->num_rows();
		$this->load->library('pagination');
		$config['base_url'] = $data['url'].'/'.$sort_column.'/'.$sort_order;
		$config['total_rows'] = $num_rows;
		$config['per_page'] = 10;
		$config['uri_segment'] = 7;
		$config['full_tag_open'] = '<div class="ci_pagination pull-right">';
		$config['full_tag_close'] = '</div>';
		$config['cur_tag_open'] = '<a href="javascript:;" class="active">';
		$config['cur_tag_close'] = '</a>';
		$this->pagination->initialize($config);

		if($faculty_id != 'all')
		{
			$this->db->where('faculty_id', $faculty_id);
		}
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
		$this->db->where('status != ', 'deleted');
		if($sort_column != 'all' && $sort_order != 'all')
		{
			$this->db->order_by($sort_column, $sort_order);
		}
		$this->db->limit($config['per_page'], $page_no);
		$data['reports'] = $this->db->get('lecture_report')->result_array();

		$data['num_rows'] = $num_rows;
		$data['from_result'] = $page_no+1;
		$data['to_result'] = ($num_rows > $page_no+$config['per_page'])?$page_no+$config['per_page']:$num_rows;
		
		$this->load->view('Admin/Faculty/reports', $data);	
  	}

  	public function report_status($status, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('lecture_report', array('status' => $status));
		redirect('admin/Faculty/lecturereport/reports');

  	}


}

?>