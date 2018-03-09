<?php
class dropdown_demo extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->database();
        $this->load->model('subject_assign_model');
    }
    
    function index()
    {
        $data['course'] = $this->subject_assign_model->get_course();
        $data['semester'] = $this->subject_assign_model->get_semester();
        $data['subject'] = $this->subject_assign_model->get_subject();
        $this->load->view('dropdown_demo_view', $data);
    }
    
    function add_semester()
    {
        $id = $this->input->post('id');
        echo(json_encode($this->subject_assign_model->get_semester($id)));
    }

    function add_subject()
    {
        $id = $this->input->post('id');
        echo(json_encode($this->subject_assign_model->get_subject($id)));
    }
}
?>