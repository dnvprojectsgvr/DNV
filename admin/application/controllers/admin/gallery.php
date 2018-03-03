<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gallery extends CI_Controller {

  function __construct() 
  {
    parent::__construct();
    $this->load->library('excel');
    if(!($this->session->login_data))
    {
      redirect('login');
    }
    $this->load->model('general_m');
    // $this->load->model('gallery_m');
    $this->load->model('gallery_m','gallery');
    $this->general_m->portal_session();
    date_default_timezone_set('Asia/Kolkata');
  }

  public function index()
  {   

    // echo "string";
    // exit();

    $data['title'] = "Add Pictures to Gallery";
    $this->load->view('Admin/gallery/add', $data);
  }

  public function file_upload()
  {
    $data['title'] = "View gallery";

    $files = $_FILES;
    $count = count($_FILES['userfile']['name']);
    for($i=0; $i<$count; $i++)
    {
      $_FILES['userfile']['name']= time().$files['userfile']['name'][$i];
      $_FILES['userfile']['type']= $files['userfile']['type'][$i];
      $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
      $_FILES['userfile']['error']= $files['userfile']['error'][$i];
      $_FILES['userfile']['size']= $files['userfile']['size'][$i];
      $config['upload_path'] = './uploads/gallery/';
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
    $this->gallery->upload_image($this->input->post(),$fileName);
    redirect('admin/gallery/view');
  }

  public function view()
  {
   $data['title'] = "View gallery";
   $this->dataa['view_data']= $this->gallery->view_data();
   $this->load->view('Admin/gallery/view', $this->dataa, $data, FALSE);


 }

 public function edit($edit_id)
 {
  $data['title'] = "View gallery";
  $this->data['edit_data']= $this->gallery->edit_data($edit_id);
  $this->data['edit_data_image']= $this->gallery->edit_data_image($edit_id);
  $this->load->view('admin/gallery/edit', $this->data, FALSE);
}

public function deleteimage(){
  $deleteid  = $this->input->post('image_id');
  $this->db->delete('gallery_photos', array('id' => $deleteid)); 
  $verify = $this->db->affected_rows();
  echo $verify;
  redirect('admin/gallery/edit');

}


public function edit_file_upload()
{
  $data['title'] = "View gallery";
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
      $config['upload_path'] = './uploads/gallery/';
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
    $this->gallery->edit_upload_image($user_id,$this->input->post(),$fileName);
  }else
  {
    $user_id = $this->input->post('user_id');
    $this->gallery->edit_upload_image($user_id,$this->input->post());
  }
  redirect('admin/gallery/view');
}
}



?>