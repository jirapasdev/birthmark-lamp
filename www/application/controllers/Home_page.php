<?php

class Home_page extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Home_page_model');
    } 

    /*
     * Listing of home_page
     */
    function index()
    {
        if (!$this->session->userdata('admin_logged')){ redirect('admin/login');} 
        $data['home_page'] = $this->Home_page_model->get_home_page(1);
        
        
        $data['_view'] = 'home_page/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Editing a home_page
     */
    function edit($id)
    {   
        if (!$this->session->userdata('admin_logged')){ redirect('admin/login');} 
        // check if the home_page exists before trying to edit it
        $data['home_page'] = $this->Home_page_model->get_home_page($id);
        
        if(isset($data['home_page']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {
                $desktop_banner_filename = "";
                $mobile_banner_filename = "";
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = '*';
                $config['max_size']             = 5000000;

                $this->load->library('upload', $config);

                if (!empty($_FILES['desktop_banner_file']['name'])) {
                
                    if ( !$this->upload->do_upload('desktop_banner_file'))
                    {
                        echo $this->upload->display_errors();
                    }else {
                        $desktop_banner_filename = $this->upload->data('file_name'); 
                    }
                }

                if (!empty($_FILES['mobile_banner_file']['name'])) {
                
                    if ( !$this->upload->do_upload('mobile_banner_file'))
                    {
                        echo $this->upload->display_errors();
                    }else {
                        $mobile_banner_filename = $this->upload->data('file_name'); 
                    }
                }

                $params = array(
                    'desktop_banner' => $desktop_banner_filename,
                    'mobile_banner' => $mobile_banner_filename,
                    'desktop_text' => $this->input->post('desktop_text'),
                    'mobile_text' => $this->input->post('mobile_text'),
                    'video_url' => $this->input->post('video_url'),
                    'mobile_video_url' => $this->input->post('mobile_video_url'),
                );

                if (empty($desktop_banner_filename) && !empty($mobile_banner_filename)) {
                    $params = array(
                    'mobile_banner' => $mobile_banner_filename,
                    'desktop_text' => $this->input->post('desktop_text'),
                    'mobile_text' => $this->input->post('mobile_text'),
                    'video_url' => $this->input->post('video_url'),
                    'mobile_video_url' => $this->input->post('mobile_video_url'),
                    );
                }
                if (empty($mobile_banner_filename) && !empty($desktop_banner_filename)) {
                    $params = array(
                    'desktop_banner' => $desktop_banner_filename,
                    'desktop_text' => $this->input->post('desktop_text'),
                    'mobile_text' => $this->input->post('mobile_text'),
                    'video_url' => $this->input->post('video_url'),
                    'mobile_video_url' => $this->input->post('mobile_video_url'),
                    );
                }
                if (empty($mobile_banner_filename) && empty($desktop_banner_filename)) {
                    $params = array(
                    'desktop_text' => $this->input->post('desktop_text'),
                    'mobile_text' => $this->input->post('mobile_text'),
                    'video_url' => $this->input->post('video_url'),
                    'mobile_video_url' => $this->input->post('mobile_video_url'),
                    );
                }

                

                $this->Home_page_model->update_home_page($id,$params);            
                redirect('home_page/index');
            }
            else
            {
                $data['_view'] = 'home_page/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The home_page you are trying to edit does not exist.');
    } 

    /*
     * Deleting home_page
     */
    function remove($id)
    {
        if (!$this->session->userdata('admin_logged')){ redirect('admin/login');} 
        $home_page = $this->Home_page_model->get_home_page($id);

        // check if the home_page exists before trying to delete it
        if(isset($home_page['id']))
        {
            $this->Home_page_model->delete_home_page($id);
            redirect('home_page/index');
        }
        else
            show_error('The home_page you are trying to delete does not exist.');
    }
    
}
