<?php
class subject_assign extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->helper(array('form', 'url'));
        $this->load->database();
        $this->load->model('subject_assign_model');

        $this->load->library('excel');
        if(!($this->session->login_data))
        {
          redirect('login');
      }
      $this->load->model('general_m');
      $this->general_m->portal_session();
      date_default_timezone_set('Asia/Kolkata');
  }

  function index()
  {

    $data['title'] = "Assign Subject";
    $data['course'] = $this->subject_assign_model->get_course();
    $data['semester'] = $this->subject_assign_model->get_semester();
    $data['subject'] = $this->subject_assign_model->get_subject();
    $data['academic'] = $this->db->get('academic_year')->result_array();
    $data['faculty'] = $this->db->get('faculty_details')->result_array();
    $this->load->view('admin/subject/assign', $data);
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




public function add()
{   


    if($this->input->post('submit'))
    {
      $post_data = $this->input->post('data');
      $pos_data['status'] = "alloted";
      $sub_id = $post_data['subject_id'];
      // print_r($pos_data);
      // echo $sub_id;
      // exit();

      $this->db->insert('faculty_subjects', $post_data);
      $this->db->where('id', $sub_id);
      $this->db->update('subjects_details', $pos_data);
      redirect('admin/subject_assign/detail');
  }
}

public function detail($stream_name = 'all', $sort_column = 'all', $sort_order = 'all', $page_no = 0)
{
    $data['url'] = site_url('admin/subject_assign/detail/'.$stream_name);

    //REDIRECT IF FILTER IS ENABLED
    if($this->input->post('submit'))
    {
      $url = 'admin/subject_assign/detail/'.$this->input->post('stream_name');
      redirect($url);
  }

  $data['title'] = "View All Assigned Subjects";

  $data['stream_name'] = $stream_name;
  $data['sort_column'] = $sort_column;
  $data['sort_order'] = $sort_order;

  $data['login_data'] =  $this->session->login_data;


  if($stream_name != 'all' && $stream_name != '')
  {
      $this->db->where('stream_name >=', $stream_name);
  }
  if($sort_column != 'all' && $sort_order != 'all')
  {
      $this->db->order_by($sort_column, $sort_order);
  }
  $num_rows = $this->db->get('faculty_subjects')->num_rows();


  $this->load->library('pagination');
  $config['base_url'] = $data['url'].'/'.$sort_column.'/'.$sort_order;
  $config['total_rows'] = $num_rows;
  $config['per_page'] = 10;
  $config['full_tag_open'] = '<div class="ci_pagination pull-right">';
  $config['full_tag_close'] = '</div>';
  $config['cur_tag_open'] = '<a href="javascript:;" class="active">';
  $config['cur_tag_close'] = '</a>';
  $this->pagination->initialize($config);



  if($stream_name != 'all' && $stream_name != '')
  {
      $this->db->where('stream_name >=', $stream_name);
  }
  if($sort_column != 'all' && $sort_order != 'all')
  {
      $this->db->order_by($sort_column, $sort_order);
  }
  $this->db->limit($config['per_page'], $page_no);

  $data['subject_assign'] = $this->db->get('faculty_subjects')->result_array();

  print_r($data);
   // exit();
  // $this->db->select("faculty_subjects.faculty_id as fac_id ,faculty_subjects.subject_id as fac_subid,faculty_subjects.academic_id as fac_acaid,subjects_details.subjects_name as fac_subname, subjects_details.criteria_marks as fac_crimarks, subjects_details.is_practical as fac_subpract, semester_details.semester_name as fac_semname, course_details.course_name as fac_couname,academic_year.from_date as fac_acastartdate, academic_year.to_date as fac_acalastdate");    
  // $this->db->from('faculty_subjects');
  // $this->db->join('subjects_details', 'faculty_subjects.subject_id = subjects_details.id');
  // $this->db->join('semester_details', 'subjects_details.semester_id = semester_details.id');
  // $this->db->join('course_details', 'semester_details.course_id = course_details.id');
  // $this->db->join('academic_year', 'faculty_subjects.academic_id = academic_year.id');
  // $data['subject'] = $this->db->get()->result_array();

  $data['num_rows'] = $num_rows;
  $data['from_result'] = $page_no+1;
  $data['to_result'] = ($num_rows > $page_no+$config['per_page'])?$page_no+$config['per_page']:$num_rows;

  $this->load->view('admin/subject/index_assign', $data);
}

public function edit($sub_id)
{
    $data['title'] = "Edit Course";
    $data['login_data'] =  $this->session->login_data;
    $data['academic'] = $this->db->get('academic_year')->result_array();
    $data['course'] = $this->subject_m->get_course();
    $data['semester'] = $this->subject_m->get_semester();
    
    if($this->input->post('submit'))
    {
      $post_data = $this->input->post('data');
      $this->db->where('id', $sub_id);
      $this->db->update('faculty_subjects', $post_data);
      redirect('admin/subject_assign/detail');
  }

  $data['faculty'] = $this->db->get_where('faculty_subjects', array('id' => $sub_id), 1, 0)->result_array();

  // $this->db->select('subjects_details.id as sub_id, subjects_details.subjects_name as sub_name, subjects_details.criteria_marks as sub_crimarks,subjects_details.is_practical as sub_pract,semester_details.semester_name as sem_name,course_details.course_name as cur_name,academic_year.from_date as aca_startdate, academic_year.to_date as aca_lastdate');    
  // $this->db->from('subjects_details');
  // $this->db->join('semester_details', 'subjects_details.semester_id = semester_details.id');
  // $this->db->join('academic_year', 'subjects_details.academic_id = academic_year.id');
  // $this->db->join('course_details', 'semester_details.course_id = course_details.id');
  // $data['subject'] = $this->db->get()->result_array();

  $this->load->view('admin/subject/edit_assign', $data);
}

public function delete($subject_id)
{
    // $this->db->where('id', $id);
    $this->db->where('subject_id', $subject_id);
    $this->db->delete('faculty_subjects');
    $this->db->where('id', $subject_id);
    $this->db->update('subjects_details', array('status' => 'FREE'));     
    redirect('admin/subject_assign/detail');
}


}
?>