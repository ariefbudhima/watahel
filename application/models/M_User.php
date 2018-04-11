<?php /**
 *
 */
class M_User extends CI_Model
{

  // function __construct(argument)
  // {
  //   parent::__construct();
  // }


  function can_login($u, $p)
  {
    // $this->db->select('*');
    // $this->db->from('admin');
    $this->db->where('username', $u);
    $this->db->where('password', $p);
    $kue = $this->db->get('admin');
    return $kue;
  }
}
 ?>
