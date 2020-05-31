<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vocabulary extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('user_id')){
            return redirect('login');
        }
        $this->load->model('Vocabulary_model', 'vm');
        $this->load->helper('common');
        
    }
    
    public function index() {
         $this->load->view('admin/vocabulary');
    }

    public function viewVocab() {
        $config=[
        'base_url' => base_url('Vocabulary/index'),
        'per_page' =>10,
        'total_rows' => $this->vm->num_rows(),
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
        $data['vocabs'] = $this->vm->get_allVocab($config['per_page'], $this->uri->segment(3));
        $this->load->view('admin/vocabulary', $data);
    }
    
    public function vocabDetails($word_id) {
        $data['vocab'] = $this->vm->get_vocabDetail($word_id);
        $this->load->view('admin/vocabdetail', $data);
    }

    public function addVocabulary() {
        $this->load->view('admin/addvocabulary');
    }

    public function InsertVocab() {
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('word', 'word', 'trim|required');
        $this->form_validation->set_rules('meaning', 'meaning', 'trim|required');
        
        $this->form_validation->set_rules('date', 'date', 'trim|required');
        
        if ($this->form_validation->run() == true) {
            $createVocab = array(
                'word_titile' => $this->input->post('word'),
                'word_meaning' => $this->input->post('meaning'),
                'description' => $this->input->post('description'),
                'date' => $this->input->post('date')
               
            );
           
            $result = $this->vm->insert_vocab($createVocab);
            if ($result) {
                $this->session->set_flashdata('resultMsg', 'success');
                return redirect('Vocabulary/addVocabulary');
            } else {
                $this->session->set_flashdata('resultMsg', 'error');
                return redirect('Vocabulary/addVocabulary');
            }
        } else {
            $this->load->view('admin/addvocabulary');
        }
    }
    
    public function delVocab() {
        
        $word_id =$this->uri->segment(3);
        
        $vocab = $this->vm->getVocab($word_id);
        
        if(empty($vocab)){
            $this->session->set_flashdata('resultMsg', 'error');
            redirect(base_url().'vocabulary');
        }
        
        $this->vm->deleteVocab($word_id);
        $this->session->set_flashdata('resultMsg', 'success');
        redirect(base_url().'vocabulary');
    }
    
    public function editVocab() {
        
        
        $this->load->library('form_validation');
        $word_id =$this->uri->segment(3);
        
        $vocab = $this->vm->getVocab($word_id);
        $data = array();
        if(empty($vocab)){
            $this->session->set_flashdata('success', 'Data not found');
            redirect(base_url().'vocabulary');
        }
        
        $this->form_validation->set_rules('description', 'description', 'trim|required');
        $this->form_validation->set_rules('date', 'date', 'trim|required');
        
        if ($this->form_validation->run() == true) 
            {
            $updateVocab = array(
                'description' => $this->input->post('description'),
                'date' => $this->input->post('date'),
                'created_at' => date('Y-m-d')
            );
            $result = $this->vm->updateVocab($word_id, $updateVocab);
            if ($result){
                $this->session->set_flashdata('vocabUpdateMsg', 'success');
                return redirect(base_url('vocabulary'));
            } else {
                $this->session->set_flashdata('vocabUpdateMsg', 'error');
                $data['vocab'] = $vocab;
                $this->load->view('admin/editvocab', $data);
            }
        } 
        else {
             $data['vocab'] = $vocab;
             $this->load->view('admin/editvocab', $data);
        }
        
       
        
    }
    

}
