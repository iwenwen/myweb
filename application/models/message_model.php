<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message_model extends CI_Model {


   public function save($username, $email, $content){
      $this -> db -> insert('t_message', array(
          'username' => $username,
          'email' => $email,
          'content' => $content
      ));
   }

   public function receive($limit,$offset){
         return $this->db->get('t_message',$limit,$offset)->result();
   }

   public  function  get_by_username($username){
      return $this -> db -> get_where('t_message', array(
          'username' => $username
      )) -> row();
   }
    public function get_message_count(){
        return $this->db->count_all('t_message');
    }
    public function delete_message($messageId){
        $this->db->delete('t_message',array('id'=>$messageId));
        return $this->db->affected_rows();
    }
}



















