<?php

class Inquiry extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Inquiry_model');
    } 

    /*
     * Listing of inquiry
     */
    function index()
    {
        if (!$this->session->userdata('admin_logged')){ redirect('admin/login');} 
        $data['inquiry'] = $this->Inquiry_model->get_all_inquiry();
        
        $data['_view'] = 'inquiry/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new inquiry
     */
    function add()
    {   
        $id =  $this->input->post('id');
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'email_acc' => $this->input->post('email'),
                'name' => $this->input->post('name'),
                'phone' => $this->input->post('phone'),
                'company' => $this->input->post('company'),
				// 'created_date' => $this->input->post('created_date'),
            );
            
            $inquiry_id = $this->Inquiry_model->add_inquiry($params);

            if (!empty($id)) {
                redirect('blog/'.$id);
            }else {
                 redirect('blog/all');
            }
            
        }
        else
        {            
            $data['_view'] = 'blog/'.$id;
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a inquiry
     */
    function edit($id)
    {   
        if (!$this->session->userdata('admin_logged')){ redirect('admin/login');} 
        // check if the inquiry exists before trying to edit it
        $data['inquiry'] = $this->Inquiry_model->get_inquiry($id);
        
        if(isset($data['inquiry']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'email_acc' => $this->input->post('email_acc'),
					'created_date' => $this->input->post('created_date'),
                );

                $this->Inquiry_model->update_inquiry($id,$params);            
                redirect('inquiry/index');
            }
            else
            {
                $data['_view'] = 'inquiry/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The inquiry you are trying to edit does not exist.');
    } 

    /*
     * Deleting inquiry
     */
    function remove($id)
    {
        if (!$this->session->userdata('admin_logged')){ redirect('admin/login');} 
        $inquiry = $this->Inquiry_model->get_inquiry($id);

        // check if the inquiry exists before trying to delete it
        if(isset($inquiry['id']))
        {
            $this->Inquiry_model->delete_inquiry($id);
            redirect('inquiry/index');
        }
        else
            show_error('The inquiry you are trying to delete does not exist.');
    }
    
}
