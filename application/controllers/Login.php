<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends MY_Controller {
	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('form_validation');
		// $this->load->library('Layout');

		$this->load->model('M_Laborat');
		$this->load->model('M_radiologi');
		$this->load->model('M_Medical');
		$this->load->model('M_User');
		// load semua model untuk dilakukan pengecekan pada database
	}

	public function index(){
		if ($this->session->userdata('masuk') == TRUE) {
			redirect('Login/Dashboard');
		}
		// $this->page = "welcome_message";
		$this->load->view('login/log');
	}


	public function aksi_login(){
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		// if ($this->form_validation->run()) {
			$uname = $this->input->post('username');
			$pwd = $this->input->post('password');
			// var_dump($this->M_Laborat->can_login($uname, $pwd));
			$cek = $this->M_User->can_login($uname, $pwd);
			if ($cek->num_rows() > 0) {
				$this->session->set_userdata('masuk',TRUE);
				$this->session->set_userdata('username',$uname);
				$role = $cek->row_array();
				if ($role['jabatan']=='laboratorium') {
					$this->session->set_userdata('akses', 'Laborat');
					$nama = $role['nama'];
					$this->session->set_userdata('nama',$nama);
				}
				else if ($role['jabatan']=='radiologi') {
					$this->session->set_userdata('akses', 'Radio');
					$nama = $role['nama'];
					$this->session->set_userdata('nama',$nama);
				}
				else if ($role['jabatan']=='medical'){
					$this->session->set_userdata('akses', 'Medical');
					$nama = $role['nama'];
					$this->session->set_userdata('nama',$nama);
				}
				redirect('Login/Dashboard');
			}
			// if ($this->session->set_userdata('masuk') == TRUE) {
			// 	redirect('Login/Dashboard');
			// }
			else{
            redirect('/','refresh');
        }
		}
	// }

	function Dashboard(){
	        if (!$this->session->userdata('masuk')){
	            redirect('/','refresh');
	        }
					$query = $this->M_Laborat->getName();
					$data = array(
						'nama' => $query->num_rows()
					);
	        if($this->session->userdata('akses')=="Laborat"){
	            $this->dashboard_page('login/v_Laborat', $data);
	        }else if($this->session->userdata('akses')=="Radio"){
	            $this->dashboard_page('login/v_Radio', $data);
	        }else if($this->session->userdata('akses')=="Medical"){
		        	$this->dashboard_page('login/v_Medical', $data);
	        }
					// else {
					// 	redirect('/', 'refresh');
					// }
	    }
	// public function Laborat(){
	// 	$query = $this->M_Laborat->getName();
	// 	$data = array(
	// 		'nama' => $query->num_rows()
	// 	);
	//
	// 	$this->dashboard_page('login/v_Laborat', $data);
	// 	// $this->load->view('login/v_Laborat');
	// }
	//
	// public function Radio(){
	// 	$query = $this->M_radiologi->getName();
	// 	$data = array(
	// 		'nama' => $query->num_rows()
	// 	);
	//
	// 	$this->dashboard_page('login/v_Radio', $data);
	// }

	public function Logout(){
		$this->session->sess_destroy();
    redirect(base_url('Login'));
	}
}

 ?>
