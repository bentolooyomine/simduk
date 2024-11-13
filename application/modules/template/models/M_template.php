<?php 
 
class M_template extends CI_Model{


    function get_data($table,$where){		
		return $this->db->get_where($table,$where);
	}
 
	
}