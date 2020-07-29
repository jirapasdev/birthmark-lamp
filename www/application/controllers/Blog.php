<?php

 
class Blog extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Blog_model');
    } 

    /*
     * Listing of blog
     */
    function index()
    {
        if (!$this->session->userdata('admin_logged'))
        {
            redirect('admin/login');
        }   

        $data['blog'] = $this->Blog_model->get_all_blog();
        
        $data['_view'] = 'blog/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new blog
     */
    function add()
    {   
        if (!$this->session->userdata('admin_logged'))
        {
            redirect('admin/login');
        }

        $blog_type = $this->input->get('type'); 

        if(isset($_POST) && count($_POST) > 0)     
        {   

                $cover_img = "";
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = '*';
                $config['max_size']             = 5000000;

                if ($this->input->post('type') == "draft") {
                    $this->load->library('upload', $config);

                    if (!empty($_FILES['add_draft']['name'])) {
                    
                        if ( !$this->upload->do_upload('add_draft'))
                        {
                            echo $this->upload->display_errors();
                        }else {
                            $cover_img = $this->upload->data('file_name'); 
                        }
                    }
                }else if ($this->input->post('type') == "publish") {
                    $this->load->library('upload', $config);

                    if (!empty($_FILES['add_publish']['name'])) {
                    
                        if ( !$this->upload->do_upload('add_publish'))
                        {
                            echo $this->upload->display_errors();
                        }else {
                            $cover_img = $this->upload->data('file_name'); 
                        }
                    }
                }

            $params = array(
				'cover' => $cover_img,
				'topic' => $this->input->post('topic'),
				'tag' => $this->input->post('tag'),
				'type' => $this->input->post('type'),
				'status' => $this->input->post('status'),
				'content' => $this->input->post('content'),
                'author' => $this->input->post('author'),
                'show_register_box' => $this->input->post('register'),
            );
            
            $blog_id = $this->Blog_model->add_blog($params);



            if ($this->input->post('type') == "draft" && $this->input->post('add_draft_blog_preview') == "1") {
               $this->session->set_flashdata('preview', $blog_id);
            }

            redirect('blog/index');
        }
        else
        {   
            if ($blog_type == "draft") {
               $data['_view'] = 'blog/add-draft';
            }else {
               $data['_view'] = 'blog/add-publish';
            }        
            
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a blog
     */
    function edit($id)
    {   
        if (!$this->session->userdata('admin_logged'))
        {
            redirect('admin/login');
        } 
        // check if the blog exists before trying to edit it
        //$id = $this->input->post('blog_id');
        $data['blog'] = $this->Blog_model->get_blog($id);
        
        if(isset($data['blog']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $cover_img = "";
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = '*';
                $config['max_size']             = 5000000;

                if ($this->input->post('type') == "draft") {
                    $this->load->library('upload', $config);

                    if (!empty($_FILES['edit_draft']['name'])) {
                    
                        if ( !$this->upload->do_upload('edit_draft'))
                        {
                            echo $this->upload->display_errors();
                        }else {
                            $cover_img = $this->upload->data('file_name'); 
                        }
                    }
                }else if ($this->input->post('type') == "publish") {
                    $this->load->library('upload', $config);

                    if (!empty($_FILES['edit_publish']['name'])) {
                    
                        if ( !$this->upload->do_upload('edit_publish'))
                        {
                            echo $this->upload->display_errors();
                        }else {
                            $cover_img = $this->upload->data('file_name'); 
                        }
                    }
                }

                if ( !empty($cover_img) ) {
                    $params = array(
                    'cover' => $cover_img,
                    'topic' => $this->input->post('topic'),
                    'tag' => $this->input->post('tag'),
                    'type' => $this->input->post('type'),
                    'status' => $this->input->post('status'),
                    'content' => $this->input->post('content'),
                    'author' => $this->input->post('author'),
                    'show_register_box' => $this->input->post('register'),
                );
                }else {
                    $params = array(
                    // 'cover' => $cover_img,
                    'topic' => $this->input->post('topic'),
                    'tag' => $this->input->post('tag'),
                    'type' => $this->input->post('type'),
                    'status' => $this->input->post('status'),
                    'content' => $this->input->post('content'),
                    'author' => $this->input->post('author'),
                    'show_register_box' => $this->input->post('register'),
                );
                }

                $this->Blog_model->update_blog($id,$params);

                if ($this->input->post('type') == "draft" && $this->input->post('edit_draft_blog_preview') == "1") {
                    $this->session->set_flashdata('preview', $id);
                }           
                redirect('blog/index');
            }
            else
            {

                if ($data['blog']['type'] == "draft") {
                   $data['_view'] = 'blog/edit-draft';
                }else {
                   $data['_view'] = 'blog/edit-publish';
                }   
               
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The blog you are trying to edit does not exist.');
    } 

    /*
     * Deleting blog
     */
    function remove($id)
    {
        if (!$this->session->userdata('admin_logged'))
        {
            redirect('admin/login');
        } 
        
        $blog = $this->Blog_model->get_blog($id);

        // check if the blog exists before trying to delete it
        if(isset($blog['id']))
        {
            $this->Blog_model->delete_blog($id);
            redirect('blog/index');
        }
        else
            show_error('The blog you are trying to delete does not exist.');
    }


    function get_next_blog($id)
    {
       $blog = $this->Blog_model->get_next_blog($id);
       //print_r($blog) ;
       if (isset( $blog)) {
           redirect("blog/".$blog['id']);
       }else {
           redirect("blog/".$id);
       }
       
    }

     function get_previous_blog($id)
    {
       $blog = $this->Blog_model->get_previous_blog($id);
       // print_r($blog) ;
        if (isset( $blog)) {
           redirect("blog/".$blog['id']);
       }else {
           redirect("blog/".$id);
       }
    }

    function uploadImages()
    {
        if ($_FILES['image']['name']) {
            if (!$_FILES['image']['error']) {
                $name = md5(rand(100, 200));
                $ext = explode('.', $_FILES['image']['name']);
                $filename = $name . '.' . $ext[1];
                $destination = './upload/' . $filename; //change this directory
                $location = $_FILES["image"]["tmp_name"];
                move_uploaded_file($location, $destination);
                echo base_url('upload/') . $filename;//change this URL
            }
            else
            {
              echo  $message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['image']['error'];
            }
        }else {
            echo 'no file upload';
        }
    }


    
}
