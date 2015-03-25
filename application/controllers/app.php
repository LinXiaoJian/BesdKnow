<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class App extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    function index(){
        //加载头部文件
        $this->load->view('public/header');
        $this->load->view('main');
        //加载尾部文件
        $this->load->view('public/footer');
    }
}

