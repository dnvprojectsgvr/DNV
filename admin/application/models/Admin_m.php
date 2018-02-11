<?php
class Admin_m extends CI_Model { 

    public function __construct() 
    {
        parent::__construct(); 
    }

    public function ChangePassword()
    {
        // $encrypted = $this->general_m->encryptIt($this->session->login_data['user_id'], $this->input->post('currentPassword'));

        $encrypted =  $this->input->post('currentPassword');
        if($encrypted == $this->session->login_data['password'])
        {
            if($this->input->post('newPassword') == $this->input->post('confirmPassword'))
            {
                // $encrypted = $this->general_m->encryptIt($this->session->login_data['username'], $this->input->post('newPassword'))
                $encrypted = $this->input->post('newPassword');
                $this->db->set('password', $encrypted);
                $this->db->where('user_id', $this->session->login_data['user_id']);
                $this->db->update('users_details');
                $alert = 1;
            }
            else
            {
                $alert = 2;
            }
        }
        else
        {
            $alert = 0;
        }
        return $alert;
                    
    }

}
?>