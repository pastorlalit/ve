<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {
    
    public function index()
	{
		$this->load->view('contactus');
	}
     public function contactForm(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('contactname', 'name', 'required|min_length[2]|max_length[12]');
        $this->form_validation->set_rules('contactemail', 'email', 'required|valid_email');
        $this->form_validation->set_rules('contactnumber', 'number', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('contactsubject', 'subject', 'required|min_length[2]');
        $this->form_validation->set_rules('contactcity', 'city', 'required|min_length[2]');
        $this->form_validation->set_rules('contactmessage', 'message', 'required');
        if ($this->form_validation->run()) {
            $contactFormData = array(
                'contactname' => $this->input->post('contactname'),
                'contactemail' => $this->input->post('contactemail'),
                'contactnumber' => $this->input->post('contactnumber'),
                'contactcity' => $this->input->post('contactcity'),
                'contactsubject' => $this->input->post('contactsubject'),
                'contactmessage' => $this->input->post('contactmessage')
            );
            
            $this->load->model('contactus_model');
            $result = $this->contactus_model->contactus_add($contactFormData);
            if($result){
                $this->session->set_flashdata('resultMsg','success');
                return redirect('contactus');
            }else{
                $this->session->set_flashdata('resultMsg','error');
                return redirect('contactus');
            }
            
            
        } else {
            
            $this->load->view('contactus');
        }
      }
}
