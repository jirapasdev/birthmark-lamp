<?php

 
class FrontendController extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Inquiry_model');
        $this->load->model('Email_model');
        $this->load->model('Blog_model');
        $this->load->model('Home_page_model');
        $this->load->model('Showcase_page_model');
        $this->load->model('Showcase_model');
        $this->load->model('Client_model');
        $this->load->model('Contact_page_model');


    } 


    function index()
    {
        $data['home_page'] = $this->Home_page_model->get_home_page(1);
        $data['showcase_page'] = $this->Showcase_page_model->get_showcase_page(1);
        $data['showcase'] = $this->Showcase_model->get_all_showcase();
        $data['client'] = $this->Client_model->get_all_client();
        $data['contact_page'] = $this->Contact_page_model->get_contact_page(1);

        // $data['_view'] = 'front/index';
        $this->load->view('front/index',$data);
    }

    function blog() {
        $data['blog'] = $this->Blog_model->get_all_blog();
        $this->load->view('front/blog',$data);
    
    }

     function blog_detail($id) {
        $data['blog'] = $this->Blog_model->get_blog($id);
        $this->load->view('front/blog-detail',$data);
    
    }

    
}
