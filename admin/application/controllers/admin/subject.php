<?php
class subject extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
        // $this->load->helper(array('form', 'url'));
    $this->load->database();
    $this->load->model('subject_m');


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
    $data['title'] = "Add Subject";
    $data['academic'] = $this->db->get('academic_year')->result_array();
    $data['course'] = $this->subject_m->get_course();
    $data['semester'] = $this->subject_m->get_semester();

        // $this->load->view('admin/subject/dropdown_demo_view', $data);
    $this->load->view('admin/subject/add',$data);
  }

  function add_semester()
  {
    $id = $this->input->post('id');
    echo(json_encode($this->subject_m->get_semester($id)));
  }

  public function add()
  {   


    if($this->input->post('submit'))
    {
      $post_data = $this->input->post('data');

      // print_r($post_data);
      // exit();

      $this->db->insert('subjects_details', $post_data);
      redirect('admin/subject/detail');
    }
  }

  public function detail($stream_name = 'all', $sort_column = 'all', $sort_order = 'all', $page_no = 0)
  {
    $data['url'] = site_url('admin/subject/detail/'.$stream_name);

    //REDIRECT IF FILTER IS ENABLED
    if($this->input->post('submit'))
    {
      $url = 'admin/subject/detail/'.$this->input->post('stream_name');
      redirect($url);
    }

    $data['title'] = "View All Subjects";

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
    $num_rows = $this->db->get('subjects_details')->num_rows();


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

  // $data['subject'] = $this->db->get('subjects_details')->result_array();

    $this->db->select('subjects_details.id as sub_id, subjects_details.subjects_name as sub_name, subjects_details.criteria_marks as sub_crimarks,subjects_details.is_practical as sub_pract,semester_details.semester_name as sem_name,course_details.course_name as cur_name,academic_year.from_date as aca_startdate, academic_year.to_date as aca_lastdate');    
    $this->db->from('subjects_details');
    $this->db->join('semester_details', 'subjects_details.semester_id = semester_details.id');
    $this->db->join('academic_year', 'subjects_details.academic_id = academic_year.id');
    $this->db->join('course_details', 'semester_details.course_id = course_details.id');
    $data['subject'] = $this->db->get()->result_array();

    $data['num_rows'] = $num_rows;
    $data['from_result'] = $page_no+1;
    $data['to_result'] = ($num_rows > $page_no+$config['per_page'])?$page_no+$config['per_page']:$num_rows;

    $this->load->view('admin/subject/index', $data);
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
      $this->db->update('subjects_details', $post_data);
      redirect('admin/subject/detail');
    }

    $data['subject'] = $this->db->get_where('subjects_details', array('id' => $sub_id), 1, 0)->result_array();

  // $this->db->select('subjects_details.id as sub_id, subjects_details.subjects_name as sub_name, subjects_details.criteria_marks as sub_crimarks,subjects_details.is_practical as sub_pract,semester_details.semester_name as sem_name,course_details.course_name as cur_name,academic_year.from_date as aca_startdate, academic_year.to_date as aca_lastdate');    
  // $this->db->from('subjects_details');
  // $this->db->join('semester_details', 'subjects_details.semester_id = semester_details.id');
  // $this->db->join('academic_year', 'subjects_details.academic_id = academic_year.id');
  // $this->db->join('course_details', 'semester_details.course_id = course_details.id');
  // $data['subject'] = $this->db->get()->result_array();

    $this->load->view('admin/subject/edit', $data);
  }

  public function delete($sd)
  {
    // $this->db->where('id', $id);
    $this->db->where('id', $sid);
    $this->db->delete('subjects_details');     
    redirect('admin/subject/detail');
  }



}
?>