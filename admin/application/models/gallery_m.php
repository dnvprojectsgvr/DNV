<?php
class gallery_m extends CI_Model
{
 public function __construct()
 {
  parent::__construct();
   $this->load->database();
}

public function upload_image($inputdata,$filename)
{
  $this->db->insert('gallery', $inputdata); 
  $insert_id = $this->db->insert_id();
  if($filename!='' ){
    $filename1 = explode(',',$filename);
    foreach($filename1 as $file){
      $file_data = array( 'image' => $file, 'user_id' => $insert_id );
      $this->db->insert('gallery_photos', $file_data);
    }
  }
}

public function view_data(){
  $data['title'] = "View gallery";

    $data=$this->db->query("SELECT ud.* FROM gallery ud  ORDER BY ud.u_id DESC");

  return $data->result_array();
}

public function edit_data($id){
  $query=$this->db->query("SELECT ud.* FROM gallery ud WHERE ud.u_id = $id");
  return $query->result_array();
}

public function edit_data_image($id){
  $query=$this->db->query("SELECT gallery_photos.* FROM gallery ud RIGHT JOIN gallery_photos as gallery_photos ON ud.u_id = gallery_photos.user_id WHERE ud.u_id = $id");
  return $query->result_array();
}

public function edit_upload_image($user_id,$inputdata,$filename ='')
{

  $data = array('name' => $inputdata['name'], 'class' => $inputdata['class']);
  $this->db->where('u_id', $user_id);
  $this->db->update('gallery', $data);

  if($filename!='' ){
    $filename1 = explode(',',$filename);
    foreach($filename1 as $file){
      $file_data = array( 'image' => $file, 'user_id' => $user_id);
      $this->db->insert('gallery_photos', $file_data);
    }
  }
}

}