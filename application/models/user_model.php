<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

   public function save_user($photo,$username,$pwd){
    $this->db->insert('t_user',array('username'=>$username,'pwd'=>$pwd,'url'=>$photo));
    return $this->db->affected_rows();
   }


   public function check_login($username,$pwd){
       return $this->db->get_where('t_user',array('username'=>$username,'pwd'=>$pwd))->row();
   }


}





































