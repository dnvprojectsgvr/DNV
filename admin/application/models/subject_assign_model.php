<?php
class subject_assign_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function get_course()
    {
        $result = $this->db->get('course_details')->result();;
        $id = array('0');
        $name = array('Select Course');
        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($name, $result[$i]->course_name);
        }
        return array_combine($id, $name);
    }
    
    function get_semester($cid=NULL)
    {
        $result = $this->db->where('course_id', $cid)->get('semester_details')->result();
        $id = array('0');
        $name = array('Select Semester');
        for ($i=0; $i<count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($name, $result[$i]->semester_name);
        }
        return array_combine($id, $name);
    }

    function get_subject($sid=NULL)
    {
        $free = "FREE";
        $result = $this->db->where('semester_id', $sid & 'status' , $free)->get('subjects_details')->result();
        $id = array('0');
        $name = array('Select subject');
        for ($i=0; $i<count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($name, $result[$i]->subjects_name);
        }
        return array_combine($id, $name);
    }
}
?>