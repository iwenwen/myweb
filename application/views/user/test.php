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
            'total_rows'=> $config['total_rows']
        );
        $this -> load -> view('admin/blog_mgr', $data);