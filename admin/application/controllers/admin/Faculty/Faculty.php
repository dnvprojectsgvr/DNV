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

		public function setting()
	{
		$data['title'] = "Change Password";
		if($this->input->post('submit'))
		{
			$data['alert'] = $this->admin_m->ChangePassword();
		}
		$this->load->view('Admin/setting',$data);
	}

	/*public function index()
	{   
		$data['title'] = "View Faculty";
		$this->db->select('*');
		$this->db->from('faculty_details');
		$this->db->where('status', 'ACTIVE');
		$data['faculty_details'] = $this->db->get()->result_array();
		$this->load->view('Admin/faculty/index', $data);
	}*/
/*
	public function add_faculty()
	{

		$data['title'] = "Add Employee";
		if($this->input->post('submit'))
		{
			
			$employee = $this->input->post('employee');
			$this->Employee_m->validations($employee);
			$employee['password'] = $this->general_m->encryptIt($employee['username'], $employee['password']);
			$this->db->insert('employee', $employee);

			$employee_id = $this->db->insert_id();

			$user['login_type'] = 'employee';
			$user['username'] = $employee['username'];
			$user['password'] = $employee['password'];

			$this->db->insert('admin', $user);

			$this->Employee_m->uploadpicture($employee_id);
			$this->Employee_m->upload_id($employee_id);

			echo"success";
			exit;
			
			//redirect('Employee/view_employee/');
		}
		
		$this->load->view('Admin/Employee/add_emp',$data);

	}*/

	public function view_faculty($search_column = 'all', $search_data='all', $result_per_page = 10, $sort_column = 'all', $sort_order = 'all', $page_no = 0)
	{

		$data['url'] = site_url('faculty/view_faculty/'.$search_column.'/'.$search_data.'/'.$result_per_page);


		if($this->input->post('filter'))
		{
			redirect('faculty/view_faculty/'.$this->input->post('column').'/'.$this->input->post('keyword').'/'.$result_per_page.'/'.$sort_column);
		}

		$data['title'] = "View Faculty";

		$data['sort_column'] = $sort_column;
		$data['sort_order'] = $sort_order;
		$data['login_data'] =  $this->session->login_data;

		if($search_column != 'all' && $search_data != 'all')
		{
			$this->db->like($search_column, $search_data);
		}
		$this->db->where('status != ', 'deleted');
		if($sort_column != 'all' && $sort_order != 'all')
		{
			$this->db->order_by($sort_column, $sort_order);
		}
		$num_rows = $this->db->get('faculty_details')->num_rows();
		$this->load->library('pagination');
		$config['base_url'] = $data['url'].'/'.$sort_column.'/'.$sort_order;
		$config['total_rows'] = $num_rows;
		$config['per_page'] = $result_per_page;
		$config['uri_segment'] = 8;
		$config['full_tag_open'] = '<div class="ci_pagination pull-right">';
		$config['full_tag_close'] = '</div>';
		$config['cur_tag_open'] = '<a href="javascript:;" class="active">';
		$config['cur_tag_close'] = '</a>';
		$this->pagination->initialize($config);

		if($search_column != 'all' && $search_data != 'all')
		{
			$this->db->like($search_column, $search_data);
		}
		$this->db->where('status != ', 'deleted');
		if($sort_column != 'all' && $sort_order != 'all')
		{
			$this->db->order_by($sort_column, $sort_order);
		}
		$this->db->limit($config['per_page'], $page_no);
		$data['faculty'] = $this->db->get('faculty_details')->result_array();

		$data['num_rows'] = $num_rows;
		$data['from_result'] = $page_no+1;
		$data['to_result'] = ($num_rows > $page_no+$config['per_page'])?$page_no+$config['per_page']:$num_rows;

		$data['count'] = $page_no;
		$data['pageval'] = $result_per_page;
		$this->load->view('Admin/Faculty/Details/view_faculty', $data);	
	}

	public function delete($employee_id)
	{
		$username = $this->general_m->get_one_value('employee', 'username', array('id' => $employee_id));
		$this->db->where('username', $username);
		$this->db->delete('admin');

		$this->db->where('employee_id',$this->uri->segment(3));
		$this->db->delete('employee_leaves');

		$this->db->where('id', $this->uri->segment(3));
		$this->db->delete('employee');


		redirect('faculty/view_faculty');
	}

public function detail($faculty_id)
  	{

  		$data['title'] = "Facuty Master";
  		$this->db->where('faculty_id', $faculty_id);
		$data['faculty_details'] = $this->db->get('faculty_details')->result_array();
		// $data['employee'][0]['password'] = $this->general_m->decryptIt($data['employee'][0]['username'], $data['employee'][0]['password']);

		if($this->input->post('submit'))
		{
			
			$faculty_details = $this->input->post('faculty_details');
			// $old_username = $this->general_m->get_one_value('employee', 'username', array('id' => $employee_id));
			// $this->Employee_m->validations($employee, $old_username);

			// $employee['password'] = $this->general_m->encryptIt($employee['username'], $employee['password']);

			$this->db->where('faculty_id', $faculty_id);
			$this->db->update('faculty_details', $faculty_details);

			// $user['username'] = $employee['username'];
			// $user['password'] = $employee['password'];


			// $this->db->where('username', $old_username);
			// $this->db->update('admin', $user);

			// $this->Faculty_m->uploadpicture($faculty_id);
			// $this->faculty_m->upload_id($faculty_id);

			// echo"success";
			// exit;
		}

		$this->load->view('Admin/faculty/details/detail_fac', $data);
  	}	

  	public function deleteprofileimg($employee_id)
	{
		if(file_exists('assets/images/employees/picture'.$employee_id.'.jpg'))
		{
			unlink('assets/images/employees/picture'.$employee_id.'.jpg');
		}  
		redirect('Employee/detail/'.$employee_id);
	}

}

?>