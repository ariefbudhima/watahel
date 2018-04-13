<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laborat extends MY_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->library('form_validation');

		$this->load->model('M_Laborat');
		$this->load->model('M_radiologi');
		$this->load->model('M_Medical');
		$this->load->model('M_User');
  }

  public function index(){

  }

  public function tambahPasien(){
    
  }
}

 ?>
