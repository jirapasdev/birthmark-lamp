<?php

 
class Database extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        //$this->load->model('Database_model');
        $this->load->model('Inquiry_model');
        $this->load->model('Email_model');
    } 

    /*
     * Listing of Database
     */
    function index()
    {
        if (!$this->session->userdata('admin_logged')){ redirect('admin/login');} 
        //$data['database'] = $this->Database_model->get_all_database();
        $data['email'] = $this->Email_model->get_all_email();
        $data['inquiry'] = $this->Inquiry_model->get_all_inquiry();
        
        $data['_view'] = 'database/index';
        $this->load->view('layouts/main',$data);
    }

     function export_email()
     {
        if (!$this->session->userdata('admin_logged')){ redirect('admin/login');} 

        $file_name = 'email_export_'.date('Ymd').'.csv'; 
         header("Content-Description: File Transfer"); 
         header("Content-Disposition: attachment; filename=$file_name"); 
         header("Content-Type: application/csv;");
       
         // get data 
         $data = $this->Email_model->fetch_data();

         // file creation 
         $file = fopen('php://output', 'w');
     
         $header = array("Email","Created Date"); 
         fputcsv($file, $header);
         foreach ($data->result_array() as $key => $value)
         { 
           fputcsv($file, $value); 
         }
         fclose($file); 
         exit;
     }

    function export_inquiry()
     {
        if (!$this->session->userdata('admin_logged')){ redirect('admin/login');} 

        $file_name = 'inquiry_export_'.date('Ymd').'.csv'; 
         header("Content-Description: File Transfer"); 
         header("Content-Disposition: attachment; filename=$file_name"); 
         header("Content-Type: application/csv;");
       
         // get data 
         $data = $this->Inquiry_model->fetch_data();

         // file creation 
         $file = fopen('php://output', 'w');
     
         $header = array("Email","Created Date", "Name", "Phone", "Company"); 
         fputcsv($file, $header);
         foreach ($data->result_array() as $key => $value)
         { 
           fputcsv($file, $value); 
         }
         fclose($file); 
         exit;
     }

    
}
