<?php
class General_m extends CI_Model { 

     public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }

        function portal_session()
        {
            $this->db->select('*'); 
            $this->db->from('portal_config');
            $this->db->where('club_id', 1);
            $portal_config = $this->db->get()->result_array(); 
            $this->session->portal_config = $portal_config[0]; 
            $this->db->last_query();
        }

        function encryptIt($key, $data)
        {
            $cryptKey  = $key;
            $qEncoded  = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $data, MCRYPT_MODE_CBC, md5( md5( $cryptKey) ) ) );
            return( $qEncoded );
        }

        function decryptIt($key, $data)
        {
            $key = md5($key);
            $data = base64_decode($data);
            $decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $data, MCRYPT_MODE_CBC, md5($key));
            $decrypted = rtrim($decrypted, "\0");
            return $decrypted;
        }

        function get_one_value($table, $feild, $where)
        {
            $this->db->select($feild);
            $this->db->from($table);
            $this->db->where($where);
            $result = $this->db->get()->result_array(); 
            return $result[0][$feild];
        }

        function start_pageloader()
        {  
            $time = microtime();
            $time = explode(' ', $time);
            $time = $time[1] + $time[0];
            $start = $time;
            return $start;
        }

        function end_pageloader($start)
        {  
            $time = microtime();
            $time = explode(' ', $time);
            $time = $time[1] + $time[0];
            $finish = $time;
            $total_time = round(($finish - $start), 4);
            echo 'Page generated in '.$total_time.' seconds.';
        }

        function sort_link($url, $sort_column, $sort_order, $column_name)
        { 
            if($sort_column != $column_name)
            {
                $page_link = $url.'/'.$column_name.'/asc';
            }
            else
            {
                $order = ($sort_order == 'asc')?'desc':'asc';
                $page_link = $url.'/'.$column_name.'/'.$order;
            }

            echo'<a href="'.$page_link.'">';
            echo'<span class="fa fa-sort pull-right"></span>';
            echo'</a>';
        }

        function convert_date($cdate){

            $date = str_replace('/', '-', $cdate);
            $ad = date('Y-m-d', strtotime($date));

            return $ad;

        }

        function DMYtoYMD($date)
        {
            $string = explode('/', $date);
            return $string[2]."-".$string[1]."-".$string[0];
        }

        function YMDtoDMY($date)
        {
            $string = explode('-', $date);
            return $string[2]."/".$string[1]."/".$string[0];
        }

}
?>