<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('account_model');
    }

    function index(){
        //加载头部文件
        $this->load->view('public/header');
        $this->load->view('login_view');
        //加载尾部文件
        $this->load->view('public/footer');
    }

    function signin(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $result=$this->account_model->login($username,$password);
        if($result){
            echo "success";
        }else{
            echo "error";
        }



    }
}

