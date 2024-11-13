<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_dashboard');
		$this->load->model('../../Rest_api/controllers/Rest_api');
		$this->load->model('../../Rest_api/models/M_rest_api');
		

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
 
	}


	function index() {

		$this->template();
	}


	public function template()
	{	$data['nama_pengguna'] = 'Wisanggeni';
		$where = array(
			'state'=> 'aktif',
			'id_setting' => '1'
		);
		$data['setting']=$this->m_dashboard->get_data('master_setting',$where)->result();
		$this->load->view('a_header',$data);
		$this->load->view('b_navbar',$data);
		$this->load->view('c_menubar',$data);
		$this->load->view('d_content',$data);
		$this->load->view('e_footer',$data);

	
	}

	function cek_menu() {
		$this->m_rest_api->cek();
		
	}

	
}
