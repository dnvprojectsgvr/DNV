<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class academic extends CI_Controller 
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

    $data['title'] = "Add academic";
    $data['login_data'] =  $this->session->login_data;

    if($this->input->post('submit'))
    {
      $post_data = $this->input->post('data');

      print_r($post_data);
      // exit();

      $this->db->insert('academic_year', $post_data);
      redirect('admin/academic/index');
    }


    $this->load->view('Admin/academic/add', $data);
  }


  public function index($academic_name = 'all', $sort_column = 'all', $sort_order = 'all', $page_no = 0)
  {
    $data['url'] = site_url('admin/academic/index/'.$academic_name);

    //REDIRECT IF FILTER IS ENABLED
    if($this->input->post('submit'))
    {
      $url = 'admin/academic/index/'.$this->input->post('academic_name');
      redirect($url);
    }

    $data['title'] = "View All Academic Years";

    $data['academic_name'] = $academic_name;
    $data['sort_column'] = $sort_column;
    $data['sort_order'] = $sort_order;

    $data['login_data'] =  $this->session->login_data;

    
    if($academic_name != 'all' && $academic_name != '')
    {
      $this->db->where('academic_name >=', $academic_name);
    }
    if($sort_column != 'all' && $sort_order != 'all')
    {
      $this->db->order_by($sort_column, $sort_order);
    }
    $num_rows = $this->db->get('academic_year')->num_rows();


    $this->load->library('pagination');
    $config['base_url'] = $data['url'].'/'.$sort_column.'/'.$sort_order;
    $config['total_rows'] = $num_rows;
    $config['per_page'] = 10;
    $config['full_tag_open'] = '<div class="ci_pagination pull-right">';
    $config['full_tag_close'] = '</div>';
    $config['cur_tag_open'] = '<a href="javascript:;" class="active">';
    $config['cur_tag_close'] = '</a>';
    $this->pagination->initialize($config);
    
    

    if($academic_name != 'all' && $academic_name != '')
    {
      $this->db->where('academic_name >=', $academic_name);
    }
    if($sort_column != 'all' && $sort_order != 'all')
    {
      $this->db->order_by($sort_column, $sort_order);
    }
    $this->db->limit($config['per_page'], $page_no);
    $data['academic'] = $this->db->get('academic_year')->result_array();

    $data['num_rows'] = $num_rows;
    $data['from_result'] = $page_no+1;
    $data['to_result'] = ($num_rows > $page_no+$config['per_page'])?$page_no+$config['per_page']:$num_rows;
    
    $this->load->view('admin/academic/index', $data);
  }

  public function edit($id)
  {
    $data['title'] = "Edit Academic Year";
    $data['login_data'] =  $this->session->login_data;

    if($this->input->post('submit'))
    {
      $post_data = $this->input->post('data');
      $this->db->where('id', $id);
      $this->db->update('academic_year', $post_data);
      redirect('admin/academic/index');
    }

    $data['academic'] = $this->db->get_where('academic_year', array('id' => $id), 1, 0)->result_array();
    $this->load->view('admin/academic/edit', $data);
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('academic_year');     
    redirect('admin/academic/index');
  }

}