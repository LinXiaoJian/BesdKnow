<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class App extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        //加载头部文件
        $this->load->view('header');
        $this->load->view('main');
        //加载尾部文件
        $this->load->view('footer');
    }
}

