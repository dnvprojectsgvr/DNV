<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class assignment extends CI_Controller {


	function __construct() 
	{

		parent::__construct();
		if(!($this->session->login_data))
		{
			redirect('login');
		}
		$data['login_data'] =  $this->session->login_data;
		if($data['login_data']['user_type'] != 'faculty')
		{
			redirect('login');
		}
		$this->load->model('general_m');
		$this->load->model('user');
		$this->general_m->portal_session();
		date_default_timezone_set('Asia/Kolkata');
	}





	public function index($srt_date = 'all', $subject = 'all', $status = 'all', $sort_column = 'all', $sort_order = 'all', $page_no = 0)
	{
		$data['url'] = site_url('faculty/assignment/index/'.$srt_date.'/'.$subject.'/'.$status);

		//REDIRECT IF FILTER IS ENABLED
		if($this->input->post('submit'))
		{
			$url = 'faculty/assignment/index/'.$this->input->post('srt_date').'/'.$this->input->post('subject').'/'.$this->input->post('status');
			redirect($url);
		}

		$data['title'] = "List of Assignments";
		$data['login_data'] =  $this->session->login_data;
		$fac_id = $data['login_data']['user_id'];
		$data['srt_date'] = $srt_date;
		$data['subject'] = $subject;
		$data['status'] = $status;
		$data['sort_column'] = $sort_column;
		$data['sort_order'] = $sort_order;

		$data['login_data'] =  $this->session->login_data;

		$this->db->where('status != ', 'deleted');
		$this->db->where('faculty_id', $data['login_data']['user_id']);
		if($srt_date != 'all' && $srt_date != '')
		{
			$this->db->where('srt_date >=', $srt_date);
		}
		if($subject != 'all' && $subject != '')
		{
			$this->db->where('subject <=', $subject);
		}
		if($status != 'all')
		{
			$this->db->where('status', $status);
		}
		if($sort_column != 'all' && $sort_order != 'all')
		{
			$this->db->order_by($sort_column, $sort_order);
		}
		$num_rows = $this->db->get('assignment')->num_rows();


		$this->load->library('pagination');
		$config['base_url'] = $data['url'].'/'.$sort_column.'/'.$sort_order;
		$config['total_rows'] = $num_rows;
		$config['per_page'] = 10;
		$config['full_tag_open'] = '<div class="ci_pagination pull-right">';
		$config['full_tag_close'] = '</div>';
		$config['cur_tag_open'] = '<a href="javascript:;" class="active">';
		$config['cur_tag_close'] = '</a>';
		$this->pagination->initialize($config);
		
		

		$this->db->where('status != ', 'deleted');
		$this->db->where('faculty_id', $data['login_data']['user_id']);
		if($srt_date != 'all' && $srt_date != '')
		{
			$this->db->where('srt_date >=', $srt_date);
		}
		if($subject != 'all' && $subject != '')
		{
			$this->db->where('subject <=', $subject);
		}
		if($status != 'all')
		{
			$this->db->where('status', $status);
		}
		if($sort_column != 'all' && $sort_order != 'all')
		{
			$this->db->order_by($sort_column, $sort_order);
		}
		$this->db->limit($config['per_page'], $page_no);
		
		$data['assignmentt'] = $this->db->get('assignment')->result_array();



		$data['num_rows'] = $num_rows;
		$data['from_result'] = $page_no+1;
		$data['to_result'] = ($num_rows > $page_no+$config['per_page'])?$page_no+$config['per_page']:$num_rows;
		$data['subject'] = $this->db->query("select  sd.id as sd_id, sd.subjects_name as sd_name, fs.faculty_id as fs_facid from `subjects_details`  sd INNER JOIN `faculty_subjects` fs on sd.id = fs.subject_id and fs.faculty_id= '$fac_id' ")->result_array();


		$data['assignment'] = $this->db->query("select  ag.id as ass_id, ag.srt_date as ass_sratdate, ag.lst_date as ass_lstdate, ag.name as ass_name, ag.note as asss_note, ag.status as ass_status, ag.subject_id as ass_subid, sd.subjects_name as ass_subname from `assignment` ag INNER JOIN `subjects_details` sd on ag.subject_id=sd.id and ag.faculty_id= '$fac_id'")->result_array();


		// $dataa=$this->db->query("select  ag.id as ass_id, ag.srt_date as ass_sratdate, ag.lst_date as ass_lstdate, ag.name as ass_name, ag.note as asss_note, ag.status as ass_status, ag.subject_id as ass_subid, sd.subjects_name as ass_subname from `assignment` ag INNER JOIN `subjects_details` sd on ag.subject_id=sd.id") ->result_array();  


		$this->load->view('faculty/assignment/index',$data);
	}

	function add()
	{
		$data['title'] = "Add Assignment";
		$data['login_data'] =  $this->session->login_data;

		$fac_id = $data['login_data']['user_id'];
		
		//$data['subject'] = $this->db->query("select  sd.id as sd_id, sd.subjects_name as sd_name, fs.faculty_id as fs_facid from `subjects_details`  sd INNER JOIN `faculty_subjects` fs on sd.id = fs.subject_id  ")->result_array();
		
		$data['subject'] = $this->db->query("select  sd.id as sd_id, sd.subjects_name as sd_name, fs.faculty_id as fs_facid from `subjects_details`  sd INNER JOIN `faculty_subjects` fs on sd.id = fs.subject_id and fs.faculty_id= '$fac_id' ")->result_array();
		if($this->input->post('userSubmit'))
		{
            //Check whether user upload picture
			if(!empty($_FILES['picture']['name'])){
				$config['upload_path'] = 'uploads/assignment/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
				$config['file_name'] = $_FILES['picture']['name'];

                //Load upload library and initialize configuration
				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if($this->upload->do_upload('picture')){
					$uploadData = $this->upload->data();
					$picture = $uploadData['file_name'];
				}else{
					$picture = '';
				}
			}else{
				$picture = '';
			}
            //Prepare array of user data
			$userData = array(
				'faculty_id' => $data['login_data']['user_id'],
				'name' => $this->input->post('name'),
				'note' => $this->input->post('note'),
				'srt_date' => $this->input->post('srt_date'),
				'lst_date' => $this->input->post('lst_date'),
				'subject_id' => $this->input->post('subject_id'),

				'picture' => $picture
			);
            //Pass user data to model
			$insertUserData = $this->user->insert($userData);

            //Storing insertion status message.
			if($insertUserData){
				$this->session->set_flashdata('success_msg', 'User data have been added successfully.');
			}else{
				$this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
			}
			redirect('faculty/assignment/index');
		}
        //Form for adding user data
		$this->load->view('faculty/assignment/add', $data);
	}

	public function edit($id)
	{
		$data['title'] = "Edit Assignment";
		$data['login_data'] =  $this->session->login_data;

		$faculty_id = $data['login_data']['user_id'];
		echo $faculty_id;
		exit();

		$data['subject'] = $this->db->query('select  sd.id as sd_id, sd.subjects_name as sd_name, fs.faculty_id as fs_facid from `subjects_details`  sd INNER JOIN `faculty_subjects` fs on sd.id = fs.subject_id AND fs.faculty_id = $faculty_id')->result_array();
		if($this->input->post('userSubmit')){	

            //Check whether user upload picture
			if(!empty($_FILES['picture']['name'])){
				$config['upload_path'] = 'uploads/assignment/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
				$config['file_name'] = $_FILES['picture']['name'];

                //Load upload library and initialize configuration
				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if($this->upload->do_upload('picture')){
					$uploadData = $this->upload->data();
					$picture = $uploadData['file_name'];
				}else{
					$picture = '';
				}
			}else{
				$picture = '';
			}

            //Prepare array of user data
			$userData = array(
				'id' => $this->input->post('id'),
				'faculty_id' => $data['login_data']['user_id'],
				'name' => $this->input->post('name'),
				'note' => $this->input->post('note'),
				'srt_date' => $this->input->post('srt_date'),
				'lst_date' => $this->input->post('lst_date'),
				'subject' => $this->input->post('subject'),

				'picture' => $picture
			);
			$id = $this->input->post('id');
			
            //Pass user data to model
			$insertUserData = $this->user->edit($userData, $id);


            //Storing insertion status message.
			if($insertUserData){
				$this->session->set_flashdata('success_msg', 'User data have been added successfully.');
			}else{
				$this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
			}
			redirect('faculty/assignment/index');
		}

		$data['assignment'] = $this->db->get_where('assignment', array('id' => $id), 1, 0)->result_array();
		$this->load->view('faculty/assignment/edit', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->update('assignment', array('status' => 'deleted'));
		redirect('faculty/assignment/index');
	}


}
?>