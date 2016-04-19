<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public function get_all(){
        $this -> db -> select("*");
        $this -> db -> from('t_blog blog');
        $this -> db -> join('t_admin admin', 'blog.author=admin.admin_id');
        return $this -> db -> get() -> result();
    }

   public function get_by_page($page){
       //return $this->db->get('t_blog', 6, $page) -> result();
       $this -> db -> select("*");
       $this -> db -> from('t_blog blog');
       $this -> db -> join('t_admin admin', 'blog.author=admin.admin_id');
       $this -> db -> limit(6, $page);
       return $this -> db -> get() -> result();
   }

    public function get_by_id($blog_id){
        $this->db->select('blog.*,admin.admin_name,admin.admin_id');
        $this->db->from('t_blog blog');
        $this->db->join('t_admin admin','blog.author=admin.admin_id');
        $this->db->where('blog.blog_id',$blog_id);
        return $this->db->get()->row();
//       return  $this->db->get_where("t_blog",array("blog_id"=>$blog_id))->row();
    }
    public function get_by_blog_id($blog_id){
        $this->db->order_by('add_time','desc');
        return $this->db->get_where("t_comment",array("blog_id"=>$blog_id))->result();
    }
    public function save_comment($blog_id,$name,$email,$website,$subject){
        $this->db->insert("t_comment",array("blog_id"=>$blog_id,"comm_name"=>$name,"email"=>$email,"website"=>$website,"subject"=>$subject));
        return $this->db->affected_rows();
    }
    public function get_blog_count(){
        return $this->db->count_all('t_blog');
    }
    public function get_by_blog_page($limit,$offset){
        $this->db->select('blog.*,admin.admin_name');
        $this->db->from('t_blog blog');
        $this->db->join('t_admin admin','blog.author=admin.admin_id');
        $this->db->limit($limit,$offset);
        $this->db->order_by('add_time','desc');
        return $this->db->get()->result();
    }
    public function save_blog($photo_url,$admin_id,$title,$content){
        $this->db->insert('t_blog',array('photp'=>$photo_url,'title'=>$title,'content'=>$content,'author'=>$admin_id));
        return $this->db->affected_rows();
    }
    public function update_blog($photo_url,$blogId,$title,$content){
        $data=array(
            'photp'=>$photo_url,
            'content'=>$content,
            'title'=>$title
        );

        $this->db->where('blog_id',$blogId);
        $this->db->update('t_blog',$data,array('blog_id'=>$blogId));
        return $this->db->affected_rows();

    }
    public function update_comm_count($blog_id,$comm_count){

        $this->db->update('t_blog',array('comm'=>$comm_count),array('blog_id'=>$blog_id));
                return $this->db->affected_rows();

    }

}



















