<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class events extends CI_Controller {

  function __construct() 
  {
    parent::__construct();
    $this->load->library('excel');
    if(!($this->session->login_data))
    {
      redirect('login');
    }
    $this->load->model('general_m');
    $this->load->model('events_m');
    // $this->load->model('Welcome_model','welcome');
    $this->general_m->portal_session();
    date_default_timezone_set('Asia/Kolkata');
  }

  public function index()
  {   

    // echo "string";
    // exit();

    $data['title'] = "Add Event";
    $this->load->view('Admin/events/add', $data);
  }


  public function add()
  {

    $files = $_FILES;
    $count = count($_FILES['userfile']['name']);
    for($i=0; $i<$count; $i++)
    {
      $_FILES['userfile']['name']= time().$files['userfile']['name'][$i];
      $_FILES['userfile']['type']= $files['userfile']['type'][$i];
      $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
      $_FILES['userfile']['error']= $files['userfile']['error'][$i];
      $_FILES['userfile']['size']= $files['userfile']['size'][$i];
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = '2000000';
      $config['remove_spaces'] = true;
      $config['overwrite'] = false;
      $config['max_width'] = '';
      $config['max_height'] = '';
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      $this->upload->do_upload();
      $fileName = $_FILES['userfile']['name'];
      $images[] = $fileName;
    }
    $fileName = implode(',',$images);
    $this->events_m->upload_image($this->input->post(),$fileName);

    // $this->load->view('Admin/events/add', $data); 
    redirect('Admin/events/view');
  }

  public function view(){
    $this->data['view_data']= $this->welcome->view_data();
    $this->load->view('view', $this->data, FALSE);
  }

  public function edit($edit_id){
    $this->data['edit_data']= $this->welcome->edit_data($edit_id);
    $this->data['edit_data_image']= $this->welcome->edit_data_image($edit_id);
    $this->load->view('edit', $this->data, FALSE);
  }

  public function deleteimage(){
    $deleteid  = $this->input->post('image_id');
    $this->db->delete('photos', array('id' => $deleteid)); 
    $verify = $this->db->affected_rows();
    echo $verify;

  }


  public function edit_file_upload(){
    $files = $_FILES;
    if(!empty($files['userfile']['name'][0])){
      $count = count($_FILES['userfile']['name']);
      $user_id = $this->input->post('user_id');
      for($i=0; $i<$count; $i++)
      {
        $_FILES['userfile']['name']= time().$files['userfile']['name'][$i];
        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
        $_FILES['userfile']['size']= $files['userfile']['size'][$i];
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000000';
        $config['remove_spaces'] = true;
        $config['overwrite'] = false;
        $config['max_width'] = '';
        $config['max_height'] = '';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload();
        $fileName = $_FILES['userfile']['name'];
        $images[] = $fileName;
      }
      $fileName = implode(',',$images);
      $this->welcome->edit_upload_image($user_id,$this->input->post(),$fileName);
    }else
    {
      $user_id = $this->input->post('user_id');
      $this->welcome->edit_upload_image($user_id,$this->input->post());
    }
    redirect('welcome/view');
  }

}

?>