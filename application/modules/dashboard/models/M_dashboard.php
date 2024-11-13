<?php 
 
class M_dashboard extends CI_Model{


    function get_data($table,$where){		
		return $this->db->get_where($table,$where);
	}
 
	
}