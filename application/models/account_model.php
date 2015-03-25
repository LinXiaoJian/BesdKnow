<?php

class Account_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function login($username,$password){
        $sql="select * from know_user where username=? and password=?";
        $query=$this->db->query($sql,array('username' => $username,'password'=>$password));
        //result_array可以将结果集转为数组
        return $query->result_array();
    }


}