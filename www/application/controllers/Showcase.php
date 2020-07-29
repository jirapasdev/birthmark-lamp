<?php

class Showcase extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Showcase_model');
    } 

    /*
     * Listing of showcase
     */
    function index()
    {
        if (!$this->session->userdata('admin_logged')){ redirect('admin/login');} 
        $data['showcase'] = $this->Showcase_model->get_all_showcase();
        
        $data['_view'] = 'showcase/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new showcase
     */
    function add()
    {   
        if (!$this->session->userdata('admin_logged')){ redirect('admin/login');} 
        if(isset($_POST) && count($_POST) > 0)     
        {   
                $cover_img = "";
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = '*';
                $config['max_size']             = 5000000;

                $this->load->library('upload', $config);

                if (!empty($_FILES['imgAdd']['name'])) {
                
                    if ( !$this->upload->do_upload('imgAdd'))
                    {
                        echo $this->upload->display_errors();
                    }else {
                        $cover_img = $this->upload->data('file_name'); 
                    }
                }

            $params = array(
				'cover_img' => $cover_img,
				'name' => $this->input->post('name'),
				// 'created_date' => $this->input->post('created_date'),
				'position' => $this->input->post('position'),
            );

            
            
            $showcase_id = $this->Showcase_model->add_showcase($params);
            redirect('showcase_page/index');
        }
        else
        {            
            $data['_view'] = 'showcase_page/index';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a showcase
     */
    function edit()
    {   
        if (!$this->session->userdata('admin_logged')){ redirect('admin/login');} 

        $id =  $this->input->post('id');
        $ImgRemoveStatus = $this->input->post('img_upload');
        // check if the showcase exists before trying to edit it
        $data['showcase'] = $this->Showcase_model->get_showcase($id);
        
        if(isset($data['showcase']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $cover_img = "";
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = '*';
                $config['max_size']             = 5000000;

                $this->load->library('upload', $config);

                if (!empty($_FILES['imgEdit']['name'])) {
                
                    if ( !$this->upload->do_upload('imgEdit'))
                    {
                        echo $this->upload->display_errors();
                    }else {
                        $cover_img = $this->upload->data('file_name'); 
                    }
                }

                $params = array(
                    'cover_img' => $cover_img,
                    'name' => $this->input->post('name'),
                    'position' => $this->input->post('position-edt'),
                );

                if (empty($cover_img) && $ImgRemoveStatus == 0) {
                    $params = array(
                    'name' => $this->input->post('name'),
                    'position' => $this->input->post('position-edt'),
                );
                }

                if (empty($cover_img) && $ImgRemoveStatus == 1) {
                    $params = array(
                    'cover_img' => "",
                    'name' => $this->input->post('name'),
                    'position' => $this->input->post('position-edt'),
                );
                }

                
            

                $this->Showcase_model->update_showcase($id,$params);            
                redirect('showcase_page/index');
            }
            else
            {
                $data['_view'] = 'showcase_page/index';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The showcase you are trying to edit does not exist.');
    } 

    /*
     * Deleting showcase
     */
    function remove($id)
    {
        if (!$this->session->userdata('admin_logged')){ redirect('admin/login');} 
        $showcase = $this->Showcase_model->get_showcase($id);

        // check if the showcase exists before trying to delete it
        if(isset($showcase['id']))
        {
            $this->Showcase_model->delete_showcase($id);
            redirect('showcase_page/index');
        }
        else
            show_error('The showcase you are trying to delete does not exist.');
    }
    
}
