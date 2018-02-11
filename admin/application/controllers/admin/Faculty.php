<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty extends CI_Controller {

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
		$data['title'] = "Add Faculty";
		$this->db->select('id,vehicle_no,model,no_wheels, status');
		$this->db->from('vehicle_details');
		$this->db->where('status', 'ACTIVE');
		$data['vehicle_details'] = $this->db->get()->result_array();
		$this->load->view('Admin/Employee/index', $data);
	}

  	public function leaves($faculty_id = 'all', $from_date = 'all', $to_date = 'all', $status = 'all', $sort_column = 'all', $sort_order = 'all', $page_no = 0)
  	{
  		$data['url'] = site_url('faculty/leaves/'.$faculty_id.'/'.$from_date.'/'.$to_date.'/'.$status);

  		//REDIRECT IF FILTER IS ENABLED
  		if($this->input->post('submit'))
  		{
  			$url = 'admin/faculty/leaves/'.$this->input->post('faculty_id').'/'.$this->input->post('from_date').'/'.$this->input->post('to_date').'/'.$this->input->post('status');
  			redirect($url);
  		}


		$data['title'] = "Leave Requestes";

		$data['faculty_id'] = $faculty_id;
		$data['from_date'] = $from_date;
		$data['to_date'] = $to_date;
		$data['status'] = $status;
		$data['sort_column'] = $sort_column;
		$data['sort_order'] = $sort_order;

		$data['faculty'] = $this->db->get('faculty_details')->result_array();
		$data['login_data'] =  $this->session->login_data;

		if($faculty_id != 'all')
		{
			$this->db->where('faculty_id', $faculty_id);
		}
		if($from_date != 'all' && $from_date != '')
		{
			$this->db->where('leave_fromdate >=', $from_date);
		}
		if($to_date != 'all' && $to_date != '')
		{
			$this->db->where('leave_todate <=', $to_date);
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
		$num_rows = $this->db->get('faculty_leaves')->num_rows();
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
		if($from_date != 'all' && $from_date != '')
		{
			$this->db->where('leave_fromdate >=', $from_date);
		}
		if($to_date != 'all' && $to_date != '')
		{
			$this->db->where('leave_todate <=', $to_date);
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
		$data['requests'] = $this->db->get('faculty_leaves')->result_array();

		$data['num_rows'] = $num_rows;
		$data['from_result'] = $page_no+1;
		$data['to_result'] = ($num_rows > $page_no+$config['per_page'])?$page_no+$config['per_page']:$num_rows;
		
		$this->load->view('Admin/Faculty/leaves', $data);	
  	}

  	public function leave_status($status, $faculty_leaveid)
	{
		$this->db->where('faculty_leaveid', $faculty_leaveid);
		$this->db->update('faculty_leaves', array('status' => $status));
		redirect('admin/faculty/leaves');

  	}


}

?>