<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class semester extends CI_Controller 
{
function __construct() 
  {
    parent::__construct();
    $this->load->library('excel');
    if(!($this->session->login_data))
    {
      redirect('login');
    }
    $this->load->model('general_m');
    $this->general_m->portal_session();
    date_default_timezone_set('Asia/Kolkata');
  }

  public function add()
  {   

    // echo "string";
    // exit();

    $data['title'] = "Add Semester";
    $data['login_data'] =  $this->session->login_data;
    $data['course'] = $this->db->get('course_details')->result_array();
    
    if($this->input->post('submit'))
    {
      $post_data = $this->input->post('data');

      // print_r($post_data);
      // exit();

      $this->db->insert('semester_details', $post_data);
      redirect('admin/semester/index');
    }


    $this->load->view('Admin/semester/add', $data);
  }


  public function index($stream_name = 'all', $sort_column = 'all', $sort_order = 'all', $page_no = 0)
  {
    $data['url'] = site_url('admin/semester/index/'.$stream_name);

    //REDIRECT IF FILTER IS ENABLED
    if($this->input->post('submit'))
    {
      $url = 'admin/semester/index/'.$this->input->post('stream_name');
      redirect($url);
    }

    $data['title'] = "View All semester";

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
    $num_rows = $this->db->get('semester_details')->num_rows();


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
    // $data['semester'] = $this->db->get('semester_details')->result_array();

    $data['semester'] = $this->db->query('select  sd.id as sd_id, sd.semester_name as sd_semname, sd.course_id as sd_cid, cd.course_name as cd_cname from `semester_details` sd INNER JOIN `course_details` cd on sd.course_id = cd.id')->result_array();

    $data['num_rows'] = $num_rows;
    $data['from_result'] = $page_no+1;
    $data['to_result'] = ($num_rows > $page_no+$config['per_page'])?$page_no+$config['per_page']:$num_rows;
    
    $this->load->view('admin/semester/index', $data);
  }

  public function edit($id)
  {
    $data['title'] = "Edit Course";
    $data['login_data'] =  $this->session->login_data;
    $data['course'] = $this->db->get('course_details')->result_array();
    
    if($this->input->post('submit'))
    {
      $post_data = $this->input->post('data');
      $this->db->where('id', $id);
      $this->db->update('semester_details', $post_data);
      redirect('admin/semester/index');
    }
    
    $data['semester'] = $this->db->get_where('semester_details', array('id' => $id), 1, 0)->result_array();
    $this->load->view('admin/semester/edit', $data);
  }

  public function delete($id)
  {
    // $this->db->where('id', $id);
    $this->db->where('id', $id);
    $this->db->delete('semester_details');     
    redirect('admin/semester/index');
  }

}