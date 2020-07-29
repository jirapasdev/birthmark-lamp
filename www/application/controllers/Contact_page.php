<?php

 
class Contact_page extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Contact_page_model');
    } 

    /*
     * Listing of contact_page
     */
    function index()
    {
        if (!$this->session->userdata('admin_logged')){ redirect('admin/login');} 

        $data['contact_page'] = $this->Contact_page_model->get_contact_page(1);
        
        $data['_view'] = 'contact_page/index';
        $this->load->view('layouts/main',$data);
    }


    function edit()
    {   
        if (!$this->session->userdata('admin_logged')){ redirect('admin/login');} 
        // check if the contact_page exists before trying to edit it
        $id = $this->input->post('id');
        $data['contact_page'] = $this->Contact_page_model->get_contact_page($id);
        $ImgRemoveStatus = $this->input->post('img_upload');
        
        if(isset($data['contact_page']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   

                $contact_img_filename = "";
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = '*';
                $config['max_size']             = 5000000;

                $this->load->library('upload', $config);

                if (!empty($_FILES['contact_img_file']['name'])) {
                
                    if ( !$this->upload->do_upload('contact_img_file'))
                    {
                        echo $this->upload->display_errors();
                    }else {
                        $contact_img_filename = $this->upload->data('file_name'); 
                    }
                }

                $params = array(
					'contact_img' => $contact_img_filename,
                );

                

                if (empty($contact_img_filename) && $ImgRemoveStatus == 0) {
                    redirect('contact_page/index');
                }
                if (empty($contact_img_filename) && $ImgRemoveStatus == 1) {
                     $params = array(
                    'contact_img' => ""
                );
                }

                $this->Contact_page_model->update_contact_page($id,$params);            
                redirect('contact_page/index');
            }
            else
            {
                $data['_view'] = 'contact_page/index';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The contact_page you are trying to edit does not exist.');
    } 

    
}
