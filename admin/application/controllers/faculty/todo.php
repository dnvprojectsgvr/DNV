<?php class Todo extends CI_Controller {
	
	function __construct() {
		parent::__construct();	
		
		//make sure the model is loaded
		$this->load->model('todo_model');
	}
	
	//listing page
	function index() {
	
		//get all of the todo items from the model for the listing page
		$data['todos'] = $this->todo_model->getAll();
		
		//load list_view and pass in the todo list array
		$this->load->view('list_view', $data);
		
	}
	
	function detail($id) {
		
		//get the todo item from the model based on the id passed to this controller function
		$data['todo'] = $this->todo_model->getOne($id);
		
		//load detail_view and pass in the todo data variable
		$this->load->view('detail_view', $data);
		
	}
	
	function create() {
		
		//if the form has been submitted, insert the todo item and redirect
		if(!empty($_POST)) {
		
			//run the insert function in the model to create the todo item in the database
			$id = $this->todo_model->insert($_POST['name'], $_POST['description']);
			
			//redirect to the new todo item in the detail view
			redirect('todo/detail/'.$id);
			
		}
		
		//load create_view if not submitted
		$this->load->view('create_view');
		
	}
}