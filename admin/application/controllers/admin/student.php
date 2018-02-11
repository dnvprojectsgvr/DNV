<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

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

	public function index($page_no = '0') 
	{
		$num_rows = $this->db->get('student_details')->num_rows();
		$this->load->library('pagination');
		$config['base_url'] = site_url('Student/');
		$config['total_rows'] = $num_rows;
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data['title'] = "View service Provider";
		$data['student_details'] = $this->db->get('student_details')->result_array();


		$this->db->select("*");
		$this->db->from("student_details");

		$this->db->limit($config['per_page'], $page_no);

		$data['student_details'] = $this->db->get()->result_array();


			// $data['v_details'] = $this->db->get('vehicle_details')->result_array();
			// $data['vehicle_details'] = $this->db->get('vehicle_details')->result_array();

		$data['num_rows'] = $num_rows;
		$data['from_result'] = $page_no+1;
		$data['to_result'] = ($num_rows > $page_no+$config['per_page'])?$page_no+$config['per_page']:$num_rows;

		$this->load->view('Admin/Student/index', $data);
	}

	public function add()
	{
		$data['title'] = "Add Student";
		$this->load->view('Admin/Student/add',$data);
	}


	public function delete()
	{

		$this->db->set('status', 'Removed');
		$this->db->where('id', $this->uri->segment(3));
		$this->db->where('status', 'ACTIVE');
		$this->db->update('student_details'); 

		$this->db->where('id', $this->uri->segment(3));
		$this->db->delete('student_details');
		redirect('Student/index');
	}

	public function detail(){

  		$data['title'] = "Student Details";
		$data['student_details'] = $this->db->get('student_details')->result_array();

		if($this->input->post('submit')){
			$this->db->where('id', $this->uri->segment(3));
			$this->db->update('student_details',$this->input->post('student_details'));
			$tyre_id = $this->db->insert_id();
			$data['student_details'] = $this->db->get('student_details')->result_array();
						
			$abc = $this->input->post('student_details');
		}

		$this->load->view('Admin/Student/detail', $data);
  	}

}
