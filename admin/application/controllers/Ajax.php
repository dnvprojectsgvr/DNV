<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		if(!($this->session->login_data))
		{
			redirect('login');
		}
		$this->load->model('general_m');
		$this->load->model('ajax_m');
		$this->general_m->portal_session();
        date_default_timezone_set('Asia/Kolkata');
	}

	public function recurring_fees_generate() //Ajax Recurring Fees Generation
	{
		$this->ajax_m->recurring_fees_generate();
	}

	public function amenity_fees_generate() //Ajax Amenity Fees Generation
	{
		$this->ajax_m->outstanding_amenities_fees();
	}

	public function outstanding_fees() //Ajax Total Outstanding Fees (Onetime + Recurring + Amenity)
	{
		echo $this->ajax_m->total_outstanding_fees();
	}

	function fillattendance()
	{
		$this->db->insert('attendance', $this->input->post());
	}

	function deleteattendance()
	{
		$this->db->delete('attendance', $this->input->post());
	}

	function associates()
	{
		$this->db->select('*');
		$this->db->from('member_associates');
		$this->db->where($this->input->post());
		$associates = $this->db->get()->result_array();
			echo"<option disabled='' selected>--SELECT ASSOCIATE--</option>";
		for($i=0; $i<count($associates); $i++)
		{
			echo"<option value='".$associates[$i]['associate_id']."'>".$associates[$i]['associate_name']."</option>";
		}
	}

	function updateattendancetoassociate()
	{
		$this->db->where($this->input->post('key'));
		$this->db->update('attendance',$this->input->post('data'));
	}

	function updateattendancetoself()
	{
		$this->db->where($this->input->post('key'));
		$this->db->update('attendance',$this->input->post('data'));
	}

	function members()
	{
		$membership_type = $this->input->post('membership_type');
		$this->db->select('member_name, membership_id, member_no');
		$this->db->from('members');
		if($membership_type!='ALL')
		{
			$this->db->where('membership_type', $membership_type);
		}
		
		$members = $this->db->get()->result_array();
		for($i = 0; $i < count($members); $i++)
		{
			echo"<option value='".$members[$i]['membership_id']."'> ".$members[$i]['member_name']." (".$members[$i]['member_no'].") </option>";
		}
	}

	function fetch_tyres()
	{
		$membership_type = $this->input->post('membership_type');
		$this->db->select('assign_id, tyre_id, position, status');
		$this->db->from('assign_tyre');
		$this->db->where('vehicle_id', $membership_type);
		$this->db->where('status', 'ACTIVE');
		$members = $this->db->get()->result_array();

		print_r($members);

		// for($i = 0; $i < count($members); $i++)
		// {
		// 	echo"<option value='".$members[$i]['membership_id']."'> ".$members[$i]['member_name']." (".$members[$i]['member_no'].") </option>";
		// }
	}

	public function check_km(){
		$tyrepos = array();
		$tyrekm = array();
		
		$refralno = $this->input->post('refralno');
		//echo "string";
		//echo $refralno;
		$vid = $this->input->post('vid');
		//echo "Vid".$vid;

		$this->db->select('*');
		$this->db->from('assign_tyre');
		$this->db->where('vehicle_id',$vid);
		$this->db->where('status','ACTIVE');
		$tyred = $this->db->get()->result_array();

		for($i=0;$i<count($tyred);$i++){

			$running = $refralno - $tyred[$i]['assign_tyre_km'];
			array_push($tyrekm, $running);
			array_push($tyrepos, $tyred[$i]['position']);
			
		}

		$data = ''; 

		for($i=0;$i<count($tyrekm);$i++){
			//echo "Tyre Running = ".$tyrekm[$i]."<br>";
			//echo "Tyre Position = ".$tyrepos[$i]."<br>";
			$data = $data.$tyrekm[$i]."!".$tyrepos[$i]."!";
		}
		//$data = $tyrekm[0]."!".$tyrepos[0];
		$data = $data . count($tyrekm);
		echo $data;

	}


	function fetch_free_tyre()
	{
		$membership_type = $this->input->post('membership_type');

		$this->db->select('position');
		$this->db->from('vehicle_tyre_position');
		$this->db->where('vehicle_id', $membership_type);
		$this->db->where('status','free');
		$members = $this->db->get()->result_array();
		for($i = 0; $i < count($members); $i++)
		{
			echo"<option value='".$members[$i]['position']."'> ".$members[$i]['position']." </option>";
		}
	}

	function fetch_mantainance()
	{
		$membership_type = $this->input->post('membership_type');

		$this->db->select('name,id');
		$this->db->from('mainten_item');
		$this->db->where('man_type', $membership_type);
		$members = $this->db->get()->result_array();
		for($i = 0; $i < count($members); $i++)
		{
			echo"<option value='".$members[$i]['id']."'> ".$members[$i]['name']." </option>";
		}
	}

	function fetch_last_km(){
		$vid = $this->input->post('membership_type');
		$this->db->select('km');
		$this->db->from('daily_km');
		$this->db->order_by('km_date', 'desc');
		$this->db->where('vid',$vid);
		$this->db->limit(1);
		$km = $this->db->get()->result_array();
		if(count($km)>0){
		echo $km[0]['km'];
		}
	}

	public function fetch_last_date_km(){
		$dt = $this->input->post('membership_type');
		$this->db->select('*');
		$this->db->from('daily_km');
		$this->db->where('km_date',$dt);
		$dkm = $this->db->get()->result_array();
		$vehicle_list = $this->db->get_where('assign_vehicle', array('status' => 'ACTIVE'))->result_array();
		?>
							 <?php echo form_open('Vehicle/add_daily_km'); ?>
		                             <table class="table table-bordered table-hover">
                              <thead>
                                <tr>
                                  <th>Sr No.</th>
                                  <th>Vehicle Reg. No</th>
                                  <th>KM</th>
                                </tr>
                              </thead>
                              <tbody>
                                
                              	
                              <?php for($i=0; $i<count($dkm); $i++)
                              {
                                ?>
                                <tr>
                                  <td><?php echo $i + 1; ?></td>
                                  <td><?php echo $this->general_m->get_one_value('vehicle_details', 'vehicle_no', array('id' => $dkm[$i]['vid'])); ?></td>
                                  <td><input type="text" class="form-control" name="km<?php echo $i; ?>" placeholder="Enter Vehicle KM" value="<?php echo $dkm[$i]['km']; ?>" maxlength="128"></td>
                                  <input type="hidden" name="vid<?php echo $i; ?>" value="<?php echo $vehicle_list[$i]['vehcle_id']; ?>">
                                  <input type="hidden" name="vkdate" value="<?php echo $dt; ?>">
                                   <input type="hidden" name="count" value="<?php echo count($vehicle_list); ?>">
                                </tr>
                                <?php
                                }
                              ?>
                              </tbody>
                            </table> 
                            <div class="col-md-12 form-group">
                                  <button type="type" class="btn btn-primary pull-right" name="submit" value="Submit">SUBMIT</button>
                                </div>
                            <?php echo form_close(); ?>

                            <?php 


	} 



	public function fetch_duplicate_stno(){
		$refralno = $this->input->post('refralno');

		$this->db->select('model_no');
		$this->db->from('tyre_stock');
		$this->db->where('model_no',$refralno);
		$abc = $this->db->get()->result_array();

		if (!empty($abc)) {
			echo "This Stencil No is Already Exists..";
		}

	}

	public function fetch_duplicate_stno_assign(){
		$refralno = $this->input->post('refralno');

		echo "string";
		echo $refralno;
	}


}