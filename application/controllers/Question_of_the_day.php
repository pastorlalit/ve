<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Question_of_the_day extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('user_id')){
            return redirect('login');
        }
        $this->load->model('Question_of_the_day_model', 'qm');
        $this->load->helper('common');
        
    }
    
    public function index() {
         $this->load->view('admin/question-of-the-day');
    }

    public function viewQuestions() {
        $config=[
        'base_url' => base_url('Question_of_the_day/viewQuestions'),
        'per_page' =>4,
        'total_rows' => $this->qm->num_rows(),
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
        $data['questions'] = $this->qm->get_allQuestions($config['per_page'], $this->uri->segment(3));
        $this->load->view('admin/question-of-the-day', $data);
    }
    
    public function addQuestion() {
        $this->load->view('admin/addquestion');
    }

    public function InsertQuestion() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('author', 'author', 'trim|required');
        $this->form_validation->set_rules('date', 'date', 'trim|required');
        $config['upload_path'] = './assets/uploads';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("question_image")) {
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

            $question_image = $config['source_image'];
        }
        if ($this->form_validation->run() == true) {
            if (!$question_image) {
                $question_image = "";
            }

            $createQuestion = array(
                'description' => $this->input->post('description'),
                'explanation' => $this->input->post('explanation'),
                'answer' => $this->input->post('answer'),
                'image' => $question_image,
                'author' => $this->input->post('author'),
                'date' => $this->input->post('date'),
            );
            $result = $this->qm->insert_question($createQuestion);
            if ($result) {
                $this->session->set_flashdata('resultMsg', 'success');
                return redirect('Question_of_the_day/addQuestion');
            } else {
                $this->session->set_flashdata('resultMsg', 'error');
                return redirect('Question_of_the_day/addQuestion');
            }
        } else {
            $this->load->view('admin/question-of-the-day');
        }
    } 
    
    public function questionDetails($question_id) {
        $data['question'] = $this->qm->getQuestion($question_id);
        $this->load->view('admin/questiondetail', $data);
    }
    
    public function delQuestion() {
        
        $question_id =$this->uri->segment(3);
        
        $question = $this->qm->getQuestion($question_id);
        
        if(empty($question)){
            $this->session->set_flashdata('resultMsg', 'error');
            redirect(base_url().'daily-questions');
        }
        if ($question->image) {
            unlink(base_url().substr($question->image, 2));
        } 
        $this->qm->deleteQuestion($question_id);
        $this->session->set_flashdata('resultMsg', 'success');
        redirect(base_url().'daily-questions');
    }
    
    public function editQuestion($question_id) {
        $this->load->library('form_validation');
        $question = $this->qm->getQuestion($question_id);
        $data = array();
        if(empty($question)){
            $this->session->set_flashdata('success', 'Question not found');
            redirect(base_url().'daily-questions');
        }
        $this->form_validation->set_rules('author', 'author', 'trim|required');
        $this->form_validation->set_rules('date', 'date', 'trim|required');
        if ($this->form_validation->run() == true) {
            $old_image = $this->input->post('old-question-image');
                    $config['upload_path'] = './assets/uploads';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['encrypt_name'] = TRUE;

                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload("question_image")) {
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
                        $question_image = $config['source_image'];
                        
//                      delete privious file
                        if($old_image){
                            unlink($old_image);
                        }
                        

                    }else{
                        if($this->input->post('description')){
                               $question_image = "";
                        }else{
                            $question_image = $old_image;
                        }
                        
                    }
                    
                    
            $updateQuestion = array(
                'description' => $this->input->post('description'),
                'explanation' => $this->input->post('explanation'),
                'answer' => $this->input->post('answer'),
                'image' => $question_image,
                'author' => $this->input->post('author'),
                'date' => $this->input->post('date'),
            );

            
            $result = $this->qm->updateQuestion($question_id, $updateQuestion);
            if ($result){
                $this->session->set_flashdata('questionUpdateMsg', 'success');
                return redirect(base_url('daily-questions'));
            } else {
                $this->session->set_flashdata('questionUpdateMsg', 'error');
                $data['question'] = $question;
                $this->load->view('admin/editquestion', $data);
            }
        } else {
             $data['question'] = $question;
             $this->load->view('admin/editquestion', $data);
        }
        
       
        
    }
    
    
}
