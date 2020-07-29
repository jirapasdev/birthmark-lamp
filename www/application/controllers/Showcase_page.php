<?php

 
class Showcase_page extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Showcase_page_model');
        $this->load->model('Showcase_model');
    } 

    /*
     * Listing of showcase_page
     */
    function index()
    {
        if (!$this->session->userdata('admin_logged')){ redirect('admin/login');} 
        $data['showcase_page'] = $this->Showcase_page_model->get_showcase_page(1);
        $data['showcase'] = $this->Showcase_model->get_all_showcase();
        
        $data['_view'] = 'showcase_page/index';
        $this->load->view('layouts/main',$data);
    }



    /*
     * Editing a showcase_page
     */
    function edit()
    {   
        if (!$this->session->userdata('admin_logged')){ redirect('admin/login');} 
        $id = 1;
        // check if the showcase_page exists before trying to edit it
        $data['showcase_page'] = $this->Showcase_page_model->get_showcase_page($id);
        
        if(isset($data['showcase_page']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'text' => $this->input->post('text'),
                );

                $this->Showcase_page_model->update_showcase_page($id,$params);            
                redirect('showcase_page/index');
            }
            else
            {
                $data['_view'] = 'showcase_page/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The showcase_page you are trying to edit does not exist.');
    } 


    
}
