<?php
class Faculty_m extends CI_Model { 

     public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }

     public function validations($faculty, $old_user_id = null)
     {
        if($old_user_id != $faculty['user_id'] || $old_user_id == null)
        {
                $this->db->where('user_id', $faculty['user_id']);
                $num_rows = $this->db->get('users_details')->num_rows();

                if($num_rows > 0)
                {
                    echo "username should must be unique";
                    exit;
                }
        }
        
     }


     public function uploadpicture($faculty_id)
     {
        if(isset($_FILES['picture']['tmp_name']))
        {
            if(file_exists('assets/images/faculty/picture'.$employee_id.'.jpg'))
            {
                unlink('assets/images/faculty/picture'.$employee_id.'.jpg');
            }   
            $config['upload_path'] = './assets/images/faculty';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['file_name'] = 'picture'.$employee_id.'.jpg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if($this->upload->do_upload('picture'))
            {
                unset($config);
                $config['image_library'] = 'gd2';
                $config['source_image'] = 'assets/images/members/picture'.$employee_id.'.jpg';
                $config['maintain_ratio'] = TRUE;
                $config['width']         = 200;
                $config['height']       = 200;
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                unset($config);
            }
            else
            {
             echo $this->upload->display_errors();      
                exit;
            }
        }
     }


    public function upload_id($employee_id)
     {
        if(isset($_FILES['id_proff']['tmp_name']))
        {
            if(file_exists('assets/images/faculty/id_proff'.$employee_id.'.jpg'))
            {
                unlink('assets/images/faculty/id_proff'.$employee_id.'.jpg');
            }   
            $config['upload_path'] = './assets/images/employees';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['file_name'] = 'id_proff'.$employee_id.'.jpg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if($this->upload->do_upload('id_proff'))
            {
                unset($config);
                $config['image_library'] = 'gd2';
                $config['source_image'] = 'assets/images/members/id_proff'.$employee_id.'.jpg';
                $config['maintain_ratio'] = TRUE;
                //$config['width']         = 200;
                //$config['height']       = 200;
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                unset($config);
            }
            else
            {
             echo $this->upload->display_errors();      
                exit;
            }
        }
     }


}
?>