<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model {


  public function count_comment(){
      return $this->db->count_all('t_comment');
  }

 public function comment_mgr($limit,$offset){
    $this->db->select('blog.*,comment.*');
    $this->db->from('t_blog blog');
    $this->db->join('t_comment comment','blog.blog_id=comment.blog_id');
    $this->db->limit($limit,$offset);
    return $this->db->get()->result();


 }
public function delete_comment_by_id($comm_id){
   $this->db->delete('t_comment',array('comm_id'=>$comm_id));
}



    public function get_by_page($limit,$offset){
        return $this->db->get('t_admin',$limit,$offset)->result();
    }
    public function  delete_blog($blog_id){
        $this -> db -> delete('t_blog', array('blog_id' => $blog_id));
    }
//    public function visit(){
//         $this->db->set('visited', 'visited+1',false);
//        $this->db->insert('t_visit');
//        return $this->db->affected_rows();
//    }
}



















