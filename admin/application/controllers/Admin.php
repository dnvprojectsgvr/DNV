<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() 
	{

		parent::__construct();
		if(!($this->session->login_data))
		{
			redirect('login');
		}
		$this->load->model('general_m');
		$this->load->model('admin_m');
		$this->general_m->portal_session();
        date_default_timezone_set('Asia/Kolkata');
	}

	public function index() //Dashboard
	{
		$data['title'] = "Dashboard";

		// $data['driver'] = $this->db->get('drivers')->num_rows(); //total drivers
		$data['faculty_details'] = $this->db->get_where('faculty_details', array('status' => 'ACTIVE'))->num_rows();
		$data['faculty_details'] = $this->db->get('faculty_details')->num_rows(); //total Vehicle
		$data['student_details'] = $this->db->get_where('student_details', array('status' => 'ACTIVE'))->num_rows();
		$data['student_details'] = $this->db->get('student_details')->num_rows(); //total Tyres

		// $data['total_assign_driver'] = $this->db->get_where('assign_vehicle', array('status' => 'ACTIVE'))->num_rows();
		
		// $data['vehicles'] = $this->db->get('vehicle_details')->result_array();

		// $this->db->select('SUM(emi) AS emi');
		// $this->db->from('loan_installment');
		// $this->db->where('emi_date >=', date('Y-m-d'));
		// $data['loan_amt'] = $this->db->get()->result_array();


		// $this->db->where('emi_date >', date('Y-m-d'));
		// $this->db->order_by('emi_date', 'asc');
		// $this->db->limit(1);
		// $data['next_installment'] = $this->db->get('loan_installment')->result_array();

		// $this->db->select('SUM(emi) AS emit');
		// $this->db->from('loan_installment');
		// $this->db->where('emi_date', $data['next_installment'][0]['emi_date']);
		// $data['loan_today'] = $this->db->get()->result_array();
	


		$this->load->view('Admin/dashboard', $data);




	}
     
    public function setting()
    {
		$data['title'] = "Change Password";
		if($this->input->post('submit'))
		{
        	$data['alert'] = $this->admin_m->ChangePassword();
		}
        $this->load->view('Admin/setting',$data);
    }

    public function check_km(){

    	$data['title'] = "Check Current KM.";

    	if($this->input->post('submit')){
    		$runningkm = array();
    	$rvehicle = array();
    		$vid = $this->input->post('vehicle_id');
    		$km = $this->input->post('tyre_km');

    	$this->db->select('*');
		$this->db->from('assign_tyre');
		$this->db->where('vehicle_id',$vid);
		$this->db->where('status','ACTIVE');
		$data['tyred'] = $this->db->get()->result_array();

		
		
		for($i=0;$i<count($data['tyred']);$i++){

			$running = $km - $data['tyred'][$i]['assign_tyre_km'];
			array_push($runningkm, $running);
			$this->db->select('vehicle_id');
			$this->db->from('assign_tyre');
			$this->db->where('tyre_id',$data['tyred'][$i]['tyre_id']);
			$this->db->where('status','Removed');
			$rdata = $this->db->get()->result_array();
			if(isset($rdata[0])){
			array_push($rvehicle, $rdata[0]);
			}
		}
		$data['km'] = $runningkm;
		$data['rvehicle'] = $rvehicle;
		$data['vid'] = $vid;
		$data['tyre_km'] = $km;
		//$data['vehicles'] = $this->db->get('vehicle_details')->result_array();
    	//$this->load->view('Admin/check_km', $data);
    	}

    	$data['vehicles'] = $this->db->get('vehicle_details')->result_array();
    	$this->load->view('Admin/check_km', $data);
    }

    public function test(){
    	$data['title'] = "Check Current KM.";
    	$runningkm = array();
    	$rvehicle = array();
    		$vid = $this->input->post('vehicle_id');
    		$km = $this->input->post('tyre_km');

    	$this->db->select('*');
		$this->db->from('assign_tyre');
		$this->db->where('vehicle_id',$vid);
		$this->db->where('status','ACTIVE');
		$data['tyred'] = $this->db->get()->result_array();

		
		
		for($i=0;$i<count($data['tyred']);$i++){

			$running = $km - $data['tyred'][$i]['assign_tyre_km'];
			array_push($runningkm, $running);
			$this->db->select('vehicle_id');
			$this->db->from('assign_tyre');
			$this->db->where('tyre_id',$data['tyred'][$i]['tyre_id']);
			$this->db->where('status','Removed');
			$rdata = $this->db->get()->result_array();
			if(isset($rdata[0])){
			array_push($rvehicle, $rdata[0]);
			}
		}
		$data['km'] = $runningkm;
		$data['rvehicle'] = $rvehicle;
		
		$data['vehicles'] = $this->db->get('vehicle_details')->result_array();
    	$this->load->view('Admin/check_km', $data);
    }

    	public function print_cheque_demo()
	{
		$this->load->helper('pdf_helper');
		$this->load->view('Admin/print_demo_cheque');
	}

}
