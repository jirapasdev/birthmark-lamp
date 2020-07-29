<?php

class Email extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Email_model');
    } 

    /*
     * Listing of email
     */
    function index()
    {
        if (!$this->session->userdata('admin_logged')){ redirect('admin/login');} 
        $data['email'] = $this->Email_model->get_all_email();
        
        $data['_view'] = 'email/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new email
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'email_acc' => $this->input->post('email_acc'),
            );
            
            $email_id = $this->Email_model->add_email($params);
            redirect('');
        }
        else
        {            
            $data['_view'] = '';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a email
     */
    function edit($id)
    {   
        if (!$this->session->userdata('admin_logged')){ redirect('admin/login');} 
        // check if the email exists before trying to edit it
        $data['email'] = $this->Email_model->get_email($id);
        
        if(isset($data['email']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'email_acc' => $this->input->post('email_acc'),
					'created_date' => $this->input->post('created_date'),
                );

                $this->Email_model->update_email($id,$params);            
                redirect('email/index');
            }
            else
            {
                $data['_view'] = 'email/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The email you are trying to edit does not exist.');
    } 

    /*
     * Deleting email
     */
    function remove($id)
    {
        if (!$this->session->userdata('admin_logged')){ redirect('admin/login');} 
        $email = $this->Email_model->get_email($id);

        // check if the email exists before trying to delete it
        if(isset($email['id']))
        {
            $this->Email_model->delete_email($id);
            redirect('email/index');
        }
        else
            show_error('The email you are trying to delete does not exist.');
    }


    
}
