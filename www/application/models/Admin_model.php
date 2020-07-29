<?php

class Admin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function islogin($data){  
        $query=$this->db->get_where('admin',array('email'=>$data['email'],'password'=>$data['password']));  
        return $query->row_array();  
    }
}
