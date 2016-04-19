<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Fenye extends CI_Controller{


    public function index(){
        $this -> load -> view("bookindex");
        $this -> load -> model("t_book");
        $this -> load -> labrary('pagination');
    }
}