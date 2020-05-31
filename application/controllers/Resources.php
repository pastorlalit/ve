<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Blog_model','bm');
        $this->load->model('CurrentAffairs_model', 'cam');
        $this->load->model('Question_of_the_day_model', 'qm');
        $this->load->model('Vocabulary_model', 'vm');
        $this->load->model('Videos_model', 'vidm');
        $this->load->helper('common');
    }

    public function index() {
        $this->load->view('resources');
    }

//    public function Current_affairs() {
//        $data = array();
//        $data['current_affairs'] = $this->cam->get_all_currentAffairs(array('limit' => 10));
//        $this->load->view('current-affairs', $data);
//    }
      public function viewCurrenAffairsClient() {
         $config=[
        'base_url' => base_url('Resources/viewCurrenAffairsClient'),
        'per_page' =>5,
        'total_rows' => $this->cam->num_rows(),
        'full_tag_open'=>"<ul class='pagination style2'>",
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
        $data['currentaffairs'] = $this->cam->get_all_currentAffairs($config['per_page'], $this->uri->segment(3));
        
        $this->load->view('current-affairs', $data);
    }
    
    public function CurrentAffairsDetails($url_slug) {
        $data = array();
        //get the post data
        $data['currentaffair'] = $this->cam->getRows(array('url_slug'=>$url_slug));
        //get the posts data
        $data['currentaffairs'] = $this->cam->getRows(array('limit'=>10));
        
        $this->load->view('current-affairs-details', $data);
        
    }
    

    public function Vocabulary() {
         $config=[
        'base_url' => base_url('Resources/Vocabulary'),
        'per_page' =>10,
        'total_rows' => $this->vm->num_rows(),
        'full_tag_open'=>"<ul class='pagination style2'>",
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
        $data['vocabs'] = $this->vm->get_allVocab($config['per_page'], $this->uri->segment(3));
        
        $this->load->view('vocabulary', $data);
        
    }
    
    
     public function Video() {
         $config=[
        'base_url' => base_url('Resources/Video'),
        'per_page' =>5,
        'total_rows' => $this->vidm->num_rows(),
        'full_tag_open'=>"<ul class='pagination style2'>",
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
        
        $this->load->view('videoblog', $data);
        
    }
    
    public function VideoDetails($url_slug) {
        $data = array();
        //get the post data
        $data['video'] = $this->vidm->getRows(array('url_slug'=>$url_slug));
        //get the posts data
        $data['videos'] = $this->vidm->getRows(array('limit'=>10));
        
        $this->load->view('video-details', $data);
        
    }
    public function PracticeQuestions() {
       $config=[
        'base_url' => base_url('Resources/PracticeQuestions'),
        'per_page' =>1,
        'total_rows' => $this->qm->num_rows(),
        'full_tag_open'=>"<ul class='pagination style2'>",
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
        $data['questions'] = $this->qm->get_allQuestions($config['per_page'], $this->uri->segment(3));
        
        $this->load->view('practice-questions', $data);
    }
    public function QuestionDetails() {
        $data = array();
        $question_id =$this->uri->segment(3);
        
        $data['question'] = $this->qm->getQuestion($question_id);
        $this->load->view('question-details', $data);
       
        
        
    }
    public function ClientBlogs() {
        $config=[
        'base_url' => base_url('Resources/ClientBlogs'),
        'per_page' =>4,
        'total_rows' => $this->bm->num_rows(),
        'full_tag_open'=>"<ul class='pagination style2'>",
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
        $data['blogs'] = $this->bm->get_allBlogs($config['per_page'], $this->uri->segment(3));
        
        $this->load->view('blogs', $data);
    }
  public function BlogDetails($url_slug) {
        $data = array();
        //get the post data
        $data['blog'] = $this->bm->getRows(array('url_slug'=>$url_slug));
        //get the posts data
        $data['blogs'] = $this->bm->getRows(array('limit'=>10));
        
        $this->load->view('blog-details', $data);
        
    }
    



}
