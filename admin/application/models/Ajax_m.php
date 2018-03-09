<?php
class Ajax_m extends CI_Model { 

    public function __construct() 
    {
        parent::__construct(); 
    }


     public function recurring_fees_generate() //Recurring Fees Generation
     {
        $this->db->limit(1);
        $this->db->order_by('financial_year_id',  'DESC');
        $financial_year = $this->db->get('financial_years')->result_array();

        if($financial_year[0]['to_date'] < date('Y-m-d'))
        {

            $this->db->select('membership_id, doj, current_maintenance_charges, current_utilisation_charges');
            $this->db->from('members');
            $this->db->where('status', 'ACTIVE');
            $this->db->where('doj <=', $financial_year[0]['to_date']);
            $members = $this->db->get()->result_array();

            for($i = 0; $i < count($members); $i++)
            {
                $ispaid = $this->db->get_where('outstanding_recurring_fees', array('membership_id' => $members[$i]['membership_id'], 'financial_year_id' => $financial_year[0]['from_date']))->num_rows();
                if($ispaid == 0)
                {
                    if($members[$i]['doj'] > $financial_year[0]['from_date'])
                    {
                        $days =  floor((strtotime($financial_year[0]['to_date']) - strtotime($members[$i]['doj'])) / (60 * 60 * 24));
                        $members[$i]['current_utilisation_charges'] = ($members[$i]['current_utilisation_charges'] / 365) * $days;
                        $members[$i]['current_maintenance_charges'] = ($members[$i]['current_maintenance_charges'] / 365) * $days;
                    }
                    $this->db->from('attendance');
                    $this->db->where('membership_id', $members[$i]['membership_id']);
                    $this->db->where('date >=', $financial_year[0]['from_date']);
                    $this->db->where('date <=', $financial_year[0]['to_date']);
                    $isattend = $this->db->get()->num_rows();
                    if($isattend != 0)
                    {
                        $data['membership_id'] = $members[$i]['membership_id'];
                        $data['financial_year_id'] = $financial_year[0]['financial_year_id'];
                        $data['fees_type'] = 'Utilisation Charges';
                        $data['amount'] = $members[$i]['current_utilisation_charges'];
                        $this->db->insert('outstanding_recurring_fees', $data);
                    }

                    $data['membership_id'] = $members[$i]['membership_id'];
                    $data['financial_year_id'] = $financial_year[0]['financial_year_id'];
                    $data['fees_type'] = 'Maintenance Charges';
                    $data['amount'] = $members[$i]['current_maintenance_charges'];
                    $this->db->insert('outstanding_recurring_fees', $data);
                }
            }
            unset($data);
            $data['from_date'] = date("Y-m-d", strtotime(date("Y-m-d", strtotime($financial_year[0]['from_date'])). " + 1 year"));
            $data['to_date'] = date("Y-m-d", strtotime(date("Y-m-d", strtotime($financial_year[0]['to_date'])). " + 1 year"));
            $this->db->insert('financial_years', $data);

        }
        
    }

    public function outstanding_amenities_fees()
    {
        $this->db->select('member_amenities.membership_id, member_amenities.amenity_id, member_amenities.date_of_joining, amenities.fees_amount, fees_payment_duration.php_code, member_amenities.amenity_joining_id, member_amenities.last_calculated_fees');
        $this->db->from('member_amenities');
        $this->db->join('amenities', 'amenities.amenity_id = member_amenities.amenity_id', 'inner');
        $this->db->join('fees_payment_duration', 'amenities.fees_payment_duration = fees_payment_duration.duration_id', 'inner');
        $this->db->where('member_amenities.status','In Use');
        $this->db->where('member_amenities.last_calculated_fees !=', date('Y-m-d'));
        $member_amenities = $this->db->get()->result_array();
        for($i = 0; $i < count($member_amenities); $i++)
        {
            $from_period_date = $member_amenities[$i]['date_of_joining'];
            $to_period_date = date("Y-m-d", strtotime(date("Y-m-d", strtotime($member_amenities[$i]['date_of_joining'])). " + ".$member_amenities[$i]['php_code']. " - 1 day"));

            while(date('Y-m-d', strtotime('+'.$member_amenities[$i]['php_code'])) > $to_period_date)
            {
                    $ispaid = $this->db->get_where('outstanding_amenities_fees', array('membership_id' => $member_amenities[$i]['membership_id'], 'from_period' => $from_period_date, 'to_period' => $to_period_date))->num_rows();
                    if($ispaid == 0)
                    {
                        $data['amenity_id'] = $member_amenities[$i]['amenity_id'];
                        $data['membership_id'] = $member_amenities[$i]['membership_id'];
                        $data['from_period'] = $from_period_date;
                        $data['to_period'] = $to_period_date;
                        $data['amount'] = $member_amenities[$i]['fees_amount'];
                        $this->db->insert('outstanding_amenities_fees', $data);
                        unset($data);
                    }
                
                $from_period_date = date("Y-m-d", strtotime(date("Y-m-d", strtotime($to_period_date)). " + 1 day"));
                $to_period_date = date("Y-m-d", strtotime(date("Y-m-d", strtotime($from_period_date)). " + ".$member_amenities[$i]['php_code']. " - 1 day"));
            }

            $this->db->where('amenity_joining_id', $member_amenities[$i]['amenity_joining_id']);
            $this->db->set('last_calculated_fees', date('Y-m-d'));
            $this->db->update('member_amenities');

        }
    }

    public function total_outstanding_fees()
    {
        $this->db->select_sum('registration_fees');
        $this->db->select_sum('received_amount');
        $this->db->from('members');
        $onetime_oustanding = $this->db->get()->result_array();
        $onetime_oustanding = $onetime_oustanding[0]['registration_fees'] - $onetime_oustanding[0]['received_amount'];

        $this->db->select_sum('amount');
        $this->db->select_sum('received_amount');
        $this->db->from('outstanding_recurring_fees');
        $recurring_outstanding = $this->db->get()->result_array();
        $recurring_outstanding = $recurring_outstanding[0]['amount'] - $recurring_outstanding[0]['received_amount'];

        $this->db->select_sum('amount');
        $this->db->select_sum('received_amount');
        $this->db->from('outstanding_amenities_fees');
        $amenities_outstanding = $this->db->get()->result_array();
        $amenities_outstanding = $amenities_outstanding[0]['amount'] - $amenities_outstanding[0]['received_amount'];

        return "<i class='fa fa-inr'></i>. ".number_format($onetime_oustanding + $recurring_outstanding + $amenities_outstanding);


    }

}
?>