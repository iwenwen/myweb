<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function login(){
        $this->load->view('admin/login');
    }
    public function logout(){
        $this->session->unset_userdata('admin');
       redirect('admin/login');
    }
    public function check_login(){
        //1. 接数据
        $admin_name = $this -> input -> post('admin_name');
        $admin_pwd = $this -> input -> post('admin_pwd');


        //2. 查数据
        $this -> load -> model('admin_model');
        $row = $this -> admin_model -> get_by_name_pwd($admin_name, $admin_pwd);

        //跳转
        if($row){
            $this->session->set_userdata('admin',$row);
            $this->load->view('admin/admin-index');
        }else{
            $this->load->view('admin/login');
        }
    }
    public function goIndex(){
        $this->load->view('admin/admin-index');
    }

    public  function admin_mgr(){
        $offset=$this->uri->segment(3);
        if($offset==""){
            $offset=0;
        }
        $this->load->model('admin_model');

        $this->load->library('pagination');

        $config['base_url']='admin/admin_mgr';
        $config['total_rows']=$this->admin_model->get_admin_count();
        $config['per_page']=10;
//        $config['use_page_numbers']=TRUE;
        $config['uri_segment']=3;

        $config['prev_link']='<';
        $config['prev_tag_open']='<li>';
        $config['prev_tag_close']='<li>';
        $config['next_link']='>';
        $config['next_tag_open']='<li>';
        $config['next_tag_close']='<li>';
        $config['cur_tag_open']='<li class="am-active"><a href="' .$config['base_url'].'">';
        $config['cur_tag_close']='</a></li>';
        $config['num_tag_open']='<li>';
        $config['num_tag_close']='</li>';



        $this->pagination->initialize($config);

        $this -> load -> model('admin_model');
        $result = $this -> admin_model -> get_by_page( $config['per_page'],$offset);
//        if($result){
            $data = array(
                'admins' => $result,
                'total_rows'=> $config['total_rows']
            );
            $this -> load -> view('admin/admin-mgr', $data);
//        }

    }

    public  function blog_mgr(){
        $offset=$this->uri->segment(3);
        if($offset==""){
            $offset=0;
        }
        $this->load->model('blog_model');

        $this->load->library('pagination');

        $config['base_url']='admin/blog_mgr';
        $config['total_rows']=$this->blog_model->get_blog_count();
        $config['per_page']=10;
//        $config['use_page_numbers']=TRUE;
        $config['uri_segment']=3;

        $config['prev_link']='<';
        $config['prev_tag_open']='<li>';
        $config['prev_tag_close']='<li>';
        $config['next_link']='>';
        $config['next_tag_open']='<li>';
        $config['next_tag_close']='<li>';
        $config['cur_tag_open']='<li class="am-active"><a href="' .$config['base_url'].'">';
        $config['cur_tag_close']='</a></li>';
        $config['num_tag_open']='<li>';
        $config['num_tag_close']='</li>';



        $this->pagination->initialize($config);

        $this -> load -> model('blog_model');
        $result = $this -> blog_model -> get_by_blog_page( $config['per_page'],$offset);
//        if($result){
        $data = array(
            'blogs' => $result,
            'total'=> $config['total_rows']
        );
        $this -> load -> view('admin/blog_mgr', $data);
//        }

    }

    public function comment_mgr(){

         $offset=$this->uri->segment(3);
                       if($offset==""){
                           $offset=0;
                       }

          $this->load->model('comment_model');

          $this->load->library('pagination');

        $config['base_url']='admin/comment_mgr';
        $config['total_rows']= $this->comment_model->count_comment();
        $config['per_page']=10;
    //        $config['use_page_numbers']=TRUE;
        $config['uri_segment']=3;
        $config['prev_link']='<';
        $config['prev_tag_open']='<li>';
        $config['prev_tag_close']='<li>';
        $config['next_link']='>';
        $config['next_tag_open']='<li>';
        $config['next_tag_close']='<li>';
        $config['cur_tag_open']='<li class="am-active"><a href="' .$config['base_url'].'">';
        $config['cur_tag_close']='</a></li>';
        $config['num_tag_open']='<li>';
        $config['num_tag_close']='</li>';
        $this->pagination->initialize($config);


        $this->load->model('comment_model');
        $result=$this->comment_model->comment_mgr($config['per_page'],$offset);

        if($result){
            $data=array('comments'=>$result,'total'=>$config['total_rows']);
           $this->load->view('admin/comment_mgr',$data);
        }

    }

    public  function  delete_admin(){
        $admin_id = $this -> input -> get('admin_id');
        $this -> load -> model('admin_model');
        $this -> admin_model -> delete($admin_id);
        $this -> admin_mgr();
    }
      public  function  delete_comment_by_id(){
                $comment_id = $this -> input -> get('comm_id');
                $this -> load -> model('comment_model');
                $this -> comment_model -> delete_comment_by_id($comment_id);
                $this -> comment_mgr();
            }
    public function post_blog(){
        $this->load->view('admin/blog_post');
    }
    public function save_blog(){


        $admin_id=$this->input->post('admin_id');
        $title=htmlspecialchars($this->input->post('title'));
        $content=htmlspecialchars($this->input->post('content'));

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '3072';
        $config['file_name']=date('YmdHis').'_'.rand(10000,99999);
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';

        $this->load->library('upload', $config);
        $this->upload->do_upload('photo');
        $upload_data=$this->upload->data();
        if ($upload_data['file_size']>0)
        {
            $photo_url='uploads/'. $upload_data['file_name'];
            $this->load->model('blog_model');
            $row=$this->blog_model->save_blog($photo_url,$admin_id,$title,$content);
            if($row>0){
                redirect('admin/blog_mgr');
            }
        }



    }
    public function delete_blog(){
        $blog_id = $this -> input -> get('blog_id');
        $this -> load -> model('admin_model');
        $this -> admin_model -> delete_blog($blog_id);
        $this -> blog_mgr();
    }
    public function edit_blog(){
        $blog_id=$this->input->get('blog_id');
        $this->load->model('blog_model');
        $blog=$this->blog_model->get_by_id($blog_id);
        $this->load->view('admin/edit_blog',array('blog'=>$blog));
    }

    public function receive(){

               $offset=$this->uri->segment(3);
               if($offset==""){
                   $offset=0;
               }

                  $this->load->model('message_model');

                  $this->load->library('pagination');

                $config['base_url']='admin/receive';
                $config['total_rows']=$this->message_model->get_message_count();
                $config['per_page']=10;
        //        $config['use_page_numbers']=TRUE;
                $config['uri_segment']=3;
                $config['prev_link']='<';
                $config['prev_tag_open']='<li>';
                $config['prev_tag_close']='<li>';
                $config['next_link']='>';
                $config['next_tag_open']='<li>';
                $config['next_tag_close']='<li>';
                $config['cur_tag_open']='<li class="am-active"><a href="' .$config['base_url'].'">';
                $config['cur_tag_close']='</a></li>';
                $config['num_tag_open']='<li>';
                $config['num_tag_close']='</li>';
                $this->pagination->initialize($config);

                 $this->load->model('message_model');
                 $messages=$this->message_model->receive($config['per_page'],$offset);

                  $data = array(
                    'messages' => $messages,
                    'count'=> $config['total_rows']
                );
                $this -> load -> view('admin/receive', $data);

    }
    public function delete_message(){
       $messageId= $this->input->get('message_id');
        $this->load->model('message_model');
        $row=$this->message_model->delete_message($messageId);
        if($row>0){
            $this->receive();
        }
    }
    public function update_blog()
    {


        $blogId = $this->input->post('blog_id');
        $title = $this->input->post('title');
        $content = $this->input->post('content');

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '3072';
        $config['file_name'] = date('YmdHis') . '_' . rand(10000, 99999);
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';

        $this->load->library('upload', $config);
        $this->upload->do_upload('photo');
        $upload_data = $this->upload->data();
        if ($upload_data['file_size'] > 0) {
            $photo_url = 'uploads/' . $upload_data['file_name'];
            $this->load->model('blog_model');
            $row = $this->blog_model->update_blog($photo_url, $blogId, $title, $content);
            if ($row > 0) {
                redirect('admin/blog_mgr');
             }


             }
         }
    }


















