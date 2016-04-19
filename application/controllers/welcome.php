<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}





	public function contact(){
		$this->load->view('contact');
	}

	public function message(){
		$username = $this -> input -> post('username');
		$email = $this -> input -> post('email');
		$content = $this -> input -> post('content');
		if($username == '' || $email == '' || $content == ''){
			//$this -> contact();//调用方法
			echo 'fail';
		}else{
			$this -> load -> model('message_model');
			$this -> message_model -> save($username, $email, $content);
			echo "success";
		}
	}

	public  function check_name(){
		$uname = $this -> input -> get('uname');
		$this -> load -> model('message_model');
		$row = $this -> message_model -> get_by_username($uname);
		if($row){
			echo 'fail';
		}else{
			echo 'success';
		}
	}

	public function get_articles(){
		$page = $this -> input -> get('page');
		$this -> load -> model('blog_model');
		$all = $this -> blog_model -> get_all();
		$total = count($all);
		$total_page = ceil($total / 6);
		$result = $this -> blog_model -> get_by_page($page);
		$json = array(
			'data' => $result,
			'isEnd' => $page/6+1<$total_page?false:true
		);
		echo json_encode($json);
	}

	public function detail($blog_id){
//		$blog_id = $this -> input -> get('blog_id');
		$this->load->model("blog_model");
		$blog=$this->blog_model->get_by_id($blog_id);
		if($blog){
			$this->load->model("blog_model");
//			$comments=$this->blog_model->get_by_blog_id($blog_id);
			$blog->comments=$this->blog_model->get_by_blog_id($blog_id);
			$this -> load -> view('single',array('blog'=>$blog));
		}
	}
    public function post_comment(){
		$blog_id=$this->input->post("blog_id");
		$name=htmlspecialchars($this->input->post("name"));
		$email=htmlspecialchars($this->input->post("email"));
		$website=htmlspecialchars($this->input->post("website"));
		$subject=htmlspecialchars($this->input->post("subject"));
		$this->load->model("blog_model");

		$row=$this->blog_model->save_comment($blog_id,$name,$email,$website,$subject);
		$comm_count=count($this->blog_model->get_by_blog_id($blog_id));
        $update=$this->blog_model->update_comm_count($blog_id,$comm_count);
		if($row>0&&$update>0){
			redirect("welcome/detail/$blog_id");
		}


	}
}



















