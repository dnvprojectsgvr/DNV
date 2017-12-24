<?php
class Admin_m extends CI_Model { 

    public function __construct() 
    {
        parent::__construct(); 
    }

    public function todays_receipts()
    {
        $this->db->select_sum('total_amount');
        $this->db->from('member_receipts');
        $this->db->where('date', date('Y-m-d'));
        $member_receipts =  $this->db->get()->result_array();

        return $member_receipts[0]['total_amount'];
    }

    public function todays_all_receipts()
    {
        $this->db->select_sum('total_amount');
        $this->db->from('member_receipts');
        $this->db->where('date', date('Y-m-d'));
        $member_receipts =  $this->db->get()->result_array();

        $this->db->select_sum('total_amount');
        $this->db->from('incomes');
        $this->db->where('date', date('Y-m-d'));
        $income_receipts =  $this->db->get()->result_array();

        $this->db->select_sum('amount');
        $this->db->from('guests_receipts');
        $this->db->where('date', date('Y-m-d'));
        $guest_receipts =  $this->db->get()->result_array();

        return $member_receipts[0]['total_amount'] + $income_receipts[0]['total_amount'] + $guest_receipts[0]['amount'];
    }

    public function todays_guests_receipts()
    {
       

        $this->db->select_sum('amount');
        $this->db->from('guests_receipts');
        $this->db->where('date', date('Y-m-d'));
        $guest_receipts =  $this->db->get()->result_array();


        return  $guest_receipts[0]['amount'];
    }
    public function joindmembers(){
        $this->db->get('member_amenities')->num_rows();
        $this->db->select('*');
        $this->db->from('member_amenities');
        $this->db->group_by('membership_id');
        $joindmember =  $this->db->get()->result_array();
        return $joindmember;
    }

    public function todays_payments()
    {
        $this->db->select_sum('total_amount');
        $this->db->from('expenses');
        $this->db->where('date', date('Y-m-d'));
        return $this->db->get()->result_array();
    }

    public function total_outstanding()
    {
        $this->db->select_sum('amount');
        $this->db->select_sum('received_amount');
        $this->db->from('outstanding_amenities_fees');
        $amenities = $this->db->get()->result_array();
        $outstanding_amenities_fees = $amenities[0]['amount'] - $amenities[0]['received_amount'];

        $this->db->select_sum('registration_fees');
        $this->db->select_sum('received_amount');
        $this->db->from('members');
        $registration_fees = $this->db->get()->result_array();
        $outstanding_registration_fees = $registration_fees[0]['registration_fees'] - $registration_fees[0]['received_amount'];

        $this->db->select_sum('amount');
        $this->db->select_sum('received_amount');
        $this->db->from('outstanding_recurring_fees');
        $recurring_fees = $this->db->get()->result_array();
        $outstanding_recurring_fees = $recurring_fees[0]['amount'] - $recurring_fees[0]['received_amount'];

        return $outstanding_amenities_fees + $outstanding_registration_fees + $outstanding_recurring_fees;
    }

    public function membership_renewals()
    {
        $this->db->where('status', 'ACTIVE');
        $this->db->where('next_renewal <=', date('Y-m-d', strtotime('+ 1 month')));
        $this->db->from('members');
        return $this->db->count_all_results();
    }

    public function amenity_renewals()
    {
        $this->db->where('status', 'ACTIVE');
        $this->db->where('renewal_date <=', date('Y-m-d', strtotime('+ 15 days')));
        $this->db->from('member_amenities');
        return $this->db->count_all_results();
    }

    public function ChangePassword()
    {
        $encrypted = $this->general_m->encryptIt($this->session->login_data['username'], $this->input->post('currentPassword'));

        if($encrypted == $this->session->login_data['password'])
        {
            if($this->input->post('newPassword') == $this->input->post('confirmPassword'))
            {
                $encrypted = $this->general_m->encryptIt($this->session->login_data['username'], $this->input->post('newPassword'));
                $this->db->set('password', $encrypted);
                $this->db->where('admin_id', $this->session->login_data['admin_id']);
                $this->db->update('admin');
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