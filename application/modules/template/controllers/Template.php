<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MY_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_template');
 
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
		$data['setting']=$this->m_template->get_data('master_setting',$where)->result();
		$this->load->view('a_header',$data);
		$this->load->view('b_navbar',$data);
		$this->load->view('c_menubar',$data);
		$this->load->view('d_content',$data);
		$this->load->view('e_footer',$data);

	
	}
}
