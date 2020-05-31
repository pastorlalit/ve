<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('user_id')){
            return redirect('login');
        }
        $this->load->model('Videos_model', 'vidm');
        $this->load->helper('common');
        
    }
    
    public function index() {
         $this->load->view('admin/videos');
    }

    public function viewVideos() {
        $config=[
        'base_url' => base_url('Videos/viewVideos'),
        'per_page' =>4,
        'total_rows' => $this->vidm->num_rows(),
        'full_tag_open'=>"<ul class='pagination'>",
        'full_tag_close'=>"</ul>",
        'next_tag_open' =>"<li>",
        'next_tag_close' =>"</li>",
        'prev_tag_open' =>"<li>",
        'prev_tag_close' =>"</li>",
        'num_tag_open' =>"<li>",
        'num_tag_close' =>"</li>",
        'cur_tag_open' =>"<li class='active'><a>",
        'cur_tag_close' =>"</a></li>",
        'first_tag_open'=>"<li>",    
        'first_tag_close'=>"<li>",    
        'last_tag_open'=>"<li>",
        'last_tag_close'=>"</li>",

 ];     
        $this->pagination->initialize($config);
        $data['videos'] = $this->vidm->get_allVideos($config['per_page'], $this->uri->segment(3));
        $this->load->view('admin/videos', $data);
    }
    

    public function details($url_slug) {
        $data = array();

        //get the post data
        $data['video'] = $this->post->getRows(array('url_slug' => $url_slug));

        //load the view
        $this->load->view('videos/details', $data);
    }

    public function videoDetails($video_id) {
        $data['video'] = $this->vidm->get_videoDetail($video_id);
        $this->load->view('admin/videodetail', $data);
    }

    public function addVideo() {
        $this->load->view('admin/addvideo');
    }

    public function InsertVideo() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'title', 'trim|required');
        $this->form_validation->set_rules('description', 'description', 'trim|required');
        $this->form_validation->set_rules('url', 'url link', 'trim|required');
        
       if ($this->form_validation->run() == true) {
           

            $createVideo = array(
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'url' => $this->input->post('url'),
                
            );

            $title = strip_tags($this->input->post('title'));
            $titleURL = strtolower(url_title($title));
            if (isUrlExists('videos', $titleURL)) {
                $titleURL = $titleURL . '-' . time();
            }
            $createVideo['url_slug'] = $titleURL;


            $result = $this->vidm->insert_video($createVideo);
            if ($result) {
                $this->session->set_flashdata('resultMsg', 'success');
                return redirect('Videos/addVideo');
            } else {
                $this->session->set_flashdata('resultMsg', 'error');
                return redirect('Videos/addVideo');
            }
        } else {
            $this->load->view('admin/addvideo');
        }
    }
    
    public function delVideo() {
        
        $video_id =$this->uri->segment(3);
        
        $video = $this->vidm->getVideo($video_id);
        
        if(empty($video)){
            $this->session->set_flashdata('resultMsg', 'error');
            redirect(base_url().'view-videos');
        }
       
        $this->vidm->deleteVideo($video_id);
        $this->session->set_flashdata('resultMsg', 'success');
        redirect(base_url().'view-videos');
    }
    
    public function editVideo($video_id) {
        
        
        $this->load->library('form_validation');
        $video = $this->vidm->getVideo($video_id);
        $data = array();
        if(empty($video)){
            $this->session->set_flashdata('success', 'Videos not found');
            redirect(base_url().'view-videos');
        }
        
         $this->form_validation->set_rules('title', 'title', 'trim|required');
        $this->form_validation->set_rules('description', 'description', 'trim|required');
        $this->form_validation->set_rules('url', 'url link', 'trim|required');
        
        
        
        if ($this->form_validation->run() == true) {
              $updateVideo = array(
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'url' => $this->input->post('url'),
            );

            $title = strip_tags($this->input->post('title'));
            $titleURL = strtolower(url_title($title));
            if (isUrlExists('videos', $titleURL)) {
                $titleURL = $titleURL . '-' . time();
            }
            $updateVideo['url_slug'] = $titleURL;
            
            $result = $this->vidm->updateVideo($video_id, $updateVideo);
            if ($result){
                $this->session->set_flashdata('videoUpdateMsg', 'success');
                return redirect(base_url('view-videos'));
            } else {
                $this->session->set_flashdata('videoUpdateMsg', 'error');
                $data['video'] = $video;
                $this->load->view('admin/editVideo', $data);
            }
        } else {
             $data['video'] = $video;
             $this->load->view('admin/editVideo', $data);
        }
        
       
        
    }
    

}
