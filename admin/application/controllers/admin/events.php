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
    // $this->load->model('events_m');
    $this->load->model('events_m','events');
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

  public function file_upload()
  {
    $data['title'] = "View Events";

    $files = $_FILES;
    $count = count($_FILES['userfile']['name']);
    for($i=0; $i<$count; $i++)
    {
      $_FILES['userfile']['name']= time().$files['userfile']['name'][$i];
      $_FILES['userfile']['type']= $files['userfile']['type'][$i];
      $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
      $_FILES['userfile']['error']= $files['userfile']['error'][$i];
      $_FILES['userfile']['size']= $files['userfile']['size'][$i];
      $config['upload_path'] = './uploads/events/';
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
    $this->events->upload_image($this->input->post(),$fileName);
    redirect('admin/events/view');
  }

  public function view()
  {
   $data['title'] = "View Events";
   $this->dataa['view_data']= $this->events->view_data();
   $this->load->view('Admin/events/view', $this->dataa, $data, FALSE);


 }

 public function edit($edit_id)
 {
  $data['title'] = "View Events";
  $this->data['edit_data']= $this->events->edit_data($edit_id);
  $this->data['edit_data_image']= $this->events->edit_data_image($edit_id);
  $this->load->view('admin/events/edit', $this->data, FALSE);
}

public function deleteimage(){
  $deleteid  = $this->input->post('image_id');
  $this->db->delete('events_photos', array('id' => $deleteid)); 
  $verify = $this->db->affected_rows();
  echo $verify;
  redirect('admin/events/edit');

}


public function edit_file_upload()
{
  $data['title'] = "View Events";
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
      $config['upload_path'] = './uploads/events/';
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
    $this->events->edit_upload_image($user_id,$this->input->post(),$fileName);
  }else
  {
    $user_id = $this->input->post('user_id');
    $this->events->edit_upload_image($user_id,$this->input->post());
  }
  redirect('admin/events/view');
}
}



?>