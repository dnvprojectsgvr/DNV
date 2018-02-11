<?php
class Login_m extends CI_Model {

        public function __construct()
        {
            parent::__construct();
        }

        function login($user_id, $password)
        {   
            $this->db->select('*'); 
            $this->db->from('users_details');
            $this->db->where(array("user_id" => $user_id, "password" => $password));
            if($this->db->count_all_results()==1)
            {
                $this->db->select('*'); 
                $this->db->from('users_details');
                $this->db->where(array("user_id" => $user_id, "password" => $password, "status" => "ACTIVE"));
                $login_data = $this->db->get()->result_array(); 
                // if($login_data[0]['login_type'] == 'faculty')
                // {
                //     $login_data[0]['employee_id'] = $this->general_m->get_one_value('employee', 'id', array('user_id' => $login_data[0]['user_id']));
                // }
                $this->session->login_data = $login_data[0]; 
                return "true";
            }
            else
            {
                return "false";
            }
        }

     /*   function registration($detail)
        { 
            $this->db->select('*'); 
            $this->db->from('devise_user_details');
            $this->db->where(array("user_name" => $detail['user_name']));
            if($this->db->count_all_results()==1)
            {
                return "user_id";
            }  
            $this->db->select('*'); 
            $this->db->from('devise_user_details');
            $this->db->where(array("user_email" => $detail['user_email']));
            if($this->db->count_all_results()==1)
            {
                return "email";
            }
            $this->db->insert('devise_user_details', $detail);
            return "success";
        }*/

}
?>