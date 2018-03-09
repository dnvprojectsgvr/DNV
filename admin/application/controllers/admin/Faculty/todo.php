<?php class Todo extends CI_Controller {
	
	function __construct() {
		parent::__construct();	
		
		//make sure the model is loaded
		$this->load->model('todo_model');
	}
	
	//listing page
	function index() {

		//get all of the todo items from the model for the listing cairo_pattern_get_extend(pattern)
		$data['todos'] = $this->todo_model->getAll();
		
		//load list_view and pass in the todo list array
		$this->load->view('faculty/todo/view', $data);
		
	}
	
	public function index1($from_date = 'all', $to_date = 'all', $status = 'all', $sort_column = 'all', $sort_order = 'all', $page_no = 0)
	{
		$data['url'] = site_url('faculty/leaves/index/'.$from_date.'/'.$to_date.'/'.$status);

		//REDIRECT IF FILTER IS ENABLED
		if($this->input->post('submit'))
		{
			$url = 'faculty/leaves/index/'.$this->input->post('from_date').'/'.$this->input->post('to_date').'/'.$this->input->post('status');
			redirect($url);
		}

		$data['title'] = "To-Do List";

		$data['from_date'] = $from_date;
		$data['to_date'] = $to_date;
		$data['status'] = $status;
		$data['sort_column'] = $sort_column;
		$data['sort_order'] = $sort_order;

		$data['login_data'] =  $this->session->login_data;

		$this->db->where('status != ', 'deleted');
		$this->db->where('faculty_id', $data['login_data']['user_id']);
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
		if($sort_column != 'all' && $sort_order != 'all')
		{
			$this->db->order_by($sort_column, $sort_order);
		}
		$num_rows = $this->db->get('todos')->num_rows();


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
		if($sort_column != 'all' && $sort_order != 'all')
		{
			$this->db->order_by($sort_column, $sort_order);
		}
		$this->db->limit($config['per_page'], $page_no);
		$data['todos'] = $this->db->get('todos')->result_array();

		$data['num_rows'] = $num_rows;
		$data['from_result'] = $page_no+1;
		$data['to_result'] = ($num_rows > $page_no+$config['per_page'])?$page_no+$config['per_page']:$num_rows;
		
		$this->load->view('faculty/todo/view', $data);
	}
	
	function add() 
	{


		$data['title'] = "Add To-Do";
		$data['login_data'] =  $this->session->login_data;

		//if the form has been submitted, insert the todo item and redirect
		if($this->input->post('submit')) 
		{

			$post_data = $this->input->post('todo');
			$post_data['user_id'] = $data['login_data']['user_id'];
			$this->db->insert('todos', $post_data);

			//redirect to the new todo item in the detail view
			redirect('faculty/todo/add/');
			
		}		
		
		//load create_view if not submitted
		$this->load->view('faculty/todo/add', $data);
		
	}

}