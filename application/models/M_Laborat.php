<?php
  /**
   *
   */
  class M_Laborat extends CI_Model
  {

    function can_login($u, $p)
    {
      $this->db->select('*');
      $this->db->from('admin');
      $this->db->where('username', $u);
      $this->db->where('password', $p);
      $this->db->where('jabatan', 'laboratorium');
      $kue = $this->db->get();
      return $kue;
    }
    function getname(){
      $this->db->where('nama');
      $query = $this->db->get('admin');
      return $query;
    }

    function get_pasien(){
      $this->db->select('*');
      $this->db->from('pasien');
      $kue = $this->db->get();
      return $kue;
    }

    function addPas($data){
      $this->db->insert('pasien', $data);
    }

    function get_laborat(){
      $this->db->select('*');
      $this->db->from('laboratorium');
      $kue = $this->db->get();
      return $kue;
    }

  }

 ?>
