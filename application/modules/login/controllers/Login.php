<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('enc'); 
		$this->load->model('m_login');

 
	}


	function index() {


		if($this->session->userdata('status') != "login"){
			$this->template();
		}else{
			redirect(base_url("dashboard"));
		}

		
	}


	public function template()
	{	$data['nama_pengguna'] = 'Wisanggeni';
		$where = array(
			'state'=> 'aktif',
			'id_setting' => '1'
		);
		$data['setting']=$this->m_login->get_data('master_setting',$where)->result();
		$this->load->view('login_page',$data);
	
	}

	function auth(){
		$message='';
		$state =0;
		$url ='';

		$nik = $_POST['nik'];
		$password = $_POST['password'];

		if($nik == '' && $password ==''){
			$state = 404;
			$message ='Username & Password Kosong!';
			$url = base_url('login');
			
			

		}else{

			$where = array(
				'nik'=>$nik,
				'state'=> 'aktif'
			);
			$cek = $this->m_login->get_data('sso',$where)->num_rows();
			if($cek == 1){	
				//cek Data user
				
				$data_cek = $this->m_login->get_data('sso',$where)->result();
				$_password =$data_cek[0]->password;
				$_nik =$data_cek[0]->nik;
				$_password = $this->enc->out($_password);
				if($_password == $password && $nik == $_nik ){
					//set login allert
					$state = 200;
					$message ='Anda berhasil Login, Mohon Tunggu!';
					$url = base_url('dashboard');
					//Set Session
				
					$session = array(
						'nik'=> $data_cek[0]->nik,
						'nama_user'=> $data_cek[0]->nama_user,
						'id_grup'=> $data_cek[0]->id_grup,
						'status'=> 'login',
						'id_sso' => $data_cek[0]->id_sso,
						'date_create'=> date('Y-m-d H:i:s')
					);
					$this->session->set_userdata($session);
					//Save Log

					$this->m_login->save_log('log_',$session);

				}else{
					$state = 401;
					$message ='Username & Password Tidak Sesuai!';
					$url = base_url('login');
				}
				
				
			}else{
			$state = 400;
			$message ='SSO Tidak Ditemukan!';
			$url = base_url('login');
			}
			
		
	

		}

		$data = array(
			'state'=> $state,
			'message' => $message,
			'url'=> $url,
			

		);
	
		echo json_encode($data);

	}


	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}


	function rfid(){
		echo "Coming Soon!";
	}
	function qrcode(){
		echo "Coming Soon!";
	}

	
}
