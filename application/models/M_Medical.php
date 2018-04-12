<?php
  /**
   *
   */
  class M_Medical extends CI_Model
  {

    function can_login($uname, $pwd)
    {
      $this->db->select('*');
      $this->db->from('admin');
      $this->db->where('username', $u);
      $this->db->where('password', $p);
      $this->db->where('jabatan', 'Medical');
      $query = $this->db->get();
      return $query;
    }
    function getname(){
      $this->db->where('nama');
      $query = $this->db->get('admin');
      return $query;
    }
  }

 ?>
