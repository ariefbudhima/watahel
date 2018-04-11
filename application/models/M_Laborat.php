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
  }

 ?>
