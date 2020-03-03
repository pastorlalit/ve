<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Blog_model');
        $this->load->helper('common');
    }
    
    public function index() {
         $this->load->view('admin/blogs');
    }

    public function viewBlog() {
        $data['blogs'] = $this->Blog_model->get_allBlogs();
        $this->load->view('admin/blogs', $data);
    }
    

    public function details($url_slug) {
        $data = array();

        //get the post data
        $data['blog'] = $this->post->getRows(array('url_slug' => $url_slug));

        //load the view
        $this->load->view('blogs/details', $data);
    }

    public function blogDetails($blog_id) {
        $data['blog'] = $this->Blog_model->get_blogDetail($blog_id);
        $this->load->view('admin/blogdetail', $data);
    }

    public function addBlog() {
        $this->load->view('admin/addblog');
    }

    public function InsertBlog() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'title', 'trim|required');
        $this->form_validation->set_rules('description', 'description', 'trim|required');
        $this->form_validation->set_rules('author', 'author', 'trim|required');
        $config['upload_path'] = './assets/uploads';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("blog-image")) {
            $data = $this->upload->data();

            //Resize and Compress Image
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/uploads/' . $data['file_name'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '90%';

            $config['new_image'] = './assets/uploads/' . $data['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $blog_image = $config['source_image'];
        }
        if ($this->form_validation->run() == true) {
            if (!$blog_image) {
                $blog_image = "";
            }

            $createBlog = array(
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'blog_image' => $blog_image,
                'author' => $this->input->post('author'),
                'created_at' => date('Y-m-d')
            );

            $title = strip_tags($this->input->post('title'));
            $titleURL = strtolower(url_title($title));
            if (isUrlExists('blogs', $titleURL)) {
                $titleURL = $titleURL . '-' . time();
            }
            $createBlog['url_slug'] = $titleURL;


            $result = $this->Blog_model->insert_blog($createBlog);
            if ($result) {
                $this->session->set_flashdata('resultMsg', 'success');
                return redirect('Blog/addBlog');
            } else {
                $this->session->set_flashdata('resultMsg', 'error');
                return redirect('Blog/addBlog');
            }
        } else {
            $this->load->view('admin/addblog');
        }
    }
    
    public function delBlog() {
        
        $blog_id =$this->uri->segment(3);
        
        $blog = $this->Blog_model->getBlog($blog_id);
        
        if(empty($blog)){
            $this->session->set_flashdata('resultMsg', 'error');
            redirect(base_url().'view-blogs');
        }
        $this->Blog_model->deleteBlog($blog_id);
        $this->session->set_flashdata('resultMsg', 'success');
        redirect(base_url().'view-blogs');
    }

}
