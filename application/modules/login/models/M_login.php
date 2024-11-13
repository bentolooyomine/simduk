<?php 
 
class M_login extends CI_Model{


    function get_data($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function save_log($tabel,$data){
		$this->db->insert($tabel,$data);
	}
	
}