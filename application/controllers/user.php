<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    public function login(){
        $this->load->view('user/login');
    }
      public function signIn(){
            $this->load->view('user/sign');
        }
    public function logout(){
        $this->session->unset_userdata('user');
       redirect('user/login');
    }
    public function check_login(){
        //1. 接数据
        $username = $this -> input -> post('username');
        $pwd = $this -> input -> post('pwd');
        $this->load->model('user_model');
        $result=$this->user_model->check_login($username,$pwd);
        if($result){
//            $this->load->model('admin_model');
//           $row= $this->admin_model->visit();
            $this->session->set_userdata('user',$result);
           redirect('welcome/index');
        }
        else{
                    $this->load->view('user/sign');
        }
    }
    public function sign(){

      $username=$this->input->post('user_name');
      $pwd=$this->input->post('user_pwd');

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
                  $photo='uploads/'. $upload_data['file_name'];
                    $this->load->model('user_model');
                  $row=$this->user_model->save_user($photo,$username,$pwd);
                  if($row>0){
                    redirect('user/login');
                  }
              }
         }

    }


















