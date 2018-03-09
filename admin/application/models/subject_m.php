<?php
class subject_m extends CI_Model
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
        // $result = $this->db->query("select  sd.id, sd.semester_name from `semester_details`  sd INNER JOIN `course_details` cd on sd.course_id = cd.id and cd.id='$cid' ")->result();

        $id = array('0');
        $name = array('Select Semester');
        for ($i=0; $i<count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($name, $result[$i]->semester_name);

         // array_push($id, $result[$i]->sd_id);
         // array_push($name, $result[$i]->sd_name);
     }
     return array_combine($id, $name);
 }


    function get_subject($sid=NULL)
    {
        $result = $this->db->where('semester_id', $sid)->get('subjects_details')->result();
        $id = array('0');
        $name = array('Select Subject');
        for ($i=0; $i<count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($name, $result[$i]->subjects_name);
        }
        return array_combine($id, $name);
    }

}
?>