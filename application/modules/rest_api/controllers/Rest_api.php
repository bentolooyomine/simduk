<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_api extends MY_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('enc'); 
		$this->load->model('../../Rest_api/models/M_rest_api');

 
	}


	function index() {


		echo "Haloo Cari Apa?";

		
	}
function cek() {
	echo "coba";
}

	
}
