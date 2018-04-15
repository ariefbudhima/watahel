<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laborat extends MY_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->helper('url');
    $this->load->library('form_validation');

		$this->load->model('M_Laborat');
		$this->load->model('M_radiologi');
		$this->load->model('M_Medical');
		$this->load->model('M_User');
  }

  public function index(){
    $role = $this->session->userdata('akses');
    redirect('login/dashboard');
    // if ($role == 'Laborat'){
    //   $query = $this->M_Laborat->getname();
    // }
  }

  public function tambahPasien(){
    if ($this->session->userdata('masuk') == TRUE) {
      $role = $this->session->userdata('akses');
			if ($role == 'Laborat'){
        $query = $this->M_Laborat->get_pasien();
        $data['pasien'] = $query->result();
        $this->menu_Laborat('menu/tambahpasien', $data);
      }
		}
    else {
      redirect(base_url());
    }
  }

public function addPas(){
  $Id = $this->M_Laborat->get_pasien();
  if ($Id->num_rows() > 0) {
    $Id = $Id->num_rows();
  }
  // $Id = (int) substr($Id,3,1);
  $int = $Id+1;
  $data = array(
    'idPasien' => ('PAS'.$int),
    'nmPasien' => $this->input->post('fullname'),
    'umur' => $this->input->post('umur'),
    'gender' => $this->input->post('gender'),
    'Alamat' => $this->input->post('alamat'),
    'noTelp' => $this->input->post('noTelp')
  );
  $this->M_Laborat->addPas($data);
  redirect('login/dashboard');
}

}

 ?>
