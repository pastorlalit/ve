<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Post');
        $this->load->model('Current_affairs_model');
        $this->load->helper('common');
    }

    public function index() {
        $this->load->view('resources');
    }

    public function Current_affairs() {
        $data = array();
        $data['current_affairs'] = $this->Current_affairs_model->select_current_affairs(array('limit' => 10));
        $this->load->view('current-affairs', $data);
    }

    public function Vocabulary() {
        $this->load->view('vocabulary');
    }

    public function Practice_questions() {
        $this->load->view('practice-questions');
    }

    public function Posts() {
        $data = array();
        //get the posts data
        $data['posts'] = $this->Post->getRows(array('limit' => 10));
        //load the view
        $this->load->view('posts', $data);
    }

    public function Post_details($url_slug) {
        $data = array();
        //get the post data
        $data['post'] = $this->Post->getRows(array('url_slug'=>$url_slug));
        $data['posts'] = $this->Post->getRows(array('limit'=>10));
        //load the view
        $this->load->view('post-details', $data);
        
    }



}
