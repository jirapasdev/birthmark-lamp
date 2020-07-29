<?php
 
class Admin extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    } 

    /*
     * Listing of Admin
     */
    function index()
    {
        if ($this->session->userdata('admin_logged'))
        {
            redirect('home_page/index');
            
        }else {
            
            redirect('admin/login');
        }   
    }

    function login()
    {
        // $data['admin'] = $this->Admin_model->get_all_admin();

        if(isset($_POST) && count($_POST) > 0)     
                {   
                    $data['email']=$this->input->post('email');  
                    $data['password']=$this->input->post('password');  
                    $res=$this->Admin_model->islogin($data);  

                    if($res){     
                        $this->session->set_userdata('admin_logged',$res['email']);   
                        redirect('home_page/index');
                    }  
                    else{
                        $this->session->set_flashdata('login_error_msg','ไอดี หรือ รหัสผ่านไม่ถูกต้อง');  
                        redirect('admin/login');  
                    } 
                }
                else
                {
                    //$data['_view'] = 'admin/login';
                    $this->load->view('admin/login');
                }
    }

    function logout()
    {
        if ($this->session->userdata('admin_logged'))
        {
            $this->session->unset_userdata('admin_logged');
            redirect('admin/login');
            
        }else {
            redirect('home_page/index');

        }   
    }


    
}
