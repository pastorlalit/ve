<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('encrypt');
        $this->load->model('Register_model');
        
        
    }
    public function index() {
         $this->load->view('register');
    }
    
    public function validation() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('full_name', 'name', 'required|min_length[5]');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[register.email]');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[6]|max_length[15]');
        $this->form_validation->set_rules('contact_no', 'contact no', 'required|regex_match[/^[0-9]{10}$/]');

        if ($this->form_validation->run()) {
            $verification_key = md5(rand());
            $encrypted_password = $this->encrypt->encode($this->input->post('password'));
            $registrationFormData = array(
                'name' => $this->input->post('full_name'),
                'email' => $this->input->post('email'),
                'password' => $encrypted_password,
                'contact_no' => $this->input->post('contact_no'),
                'verification_key' => $verification_key,
                'is_email_verified' => 'no',
                'user_type' => 'normal'
            );
           
            
            $result = $this->Register_model->insert_user($registrationFormData);
            if ($result>0) {
                $subject = "Please verify your email for login";
                $message = "
                        <p>Hi," .$this->input->post('full_name')."</p>
                        <p>This is email verification mail from Vibrant Careers. For complete registration process
                           please verify your email by click this <a href = '".base_url()."register/verify_email/".$verification_key."'>link</a>.</p>
                               <p>Once you click this link, your email will be veryfied and you can login to your account.</p>
                               <p>Thanks</p>
                        ";
                $config = array(
                     'protocol'=>'smtp',
                     'smtp_host'=>'ssl://smtp.googlemail.com',
                     'smtp_port'=>465,
                     'smtp_user' => 'lalit1012020@gmail.com',
                     'smtp_pass' => 'Python@2020!',
                     'mailtype' => 'html',
                     'charset' => 'iso-8851-1',
                     'wordwrap' => TRUE
                );
                // Load email library and passing configured values to email library
                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");
                $this->email->from('lalit1012020@gmail.com');
                $this->email->to($this->input->post('email'));
                $this->email->subject($subject);
                $this->email->message($message);
                
                if($this->email->send()){
                    $this->session->set_flashdata('regmsg', 'success');
                    return redirect('register');
                }
                
                
            } else {
                $this->session->set_flashdata('regmsg', 'error');
                return redirect('register');
            }
           
          } else {
            $this->index();
        }
    }
    
    public function verify_email() {
        if($this->uri->segment(3)){
            
            $verification_key = $this->uri->segment(3);
            $result = $this->Register_model->verify_email($verification_key);
            if($result==FALSE){
                $data['message'] ='Invalid link';
            }else{
                $data['message'] = 'Your email has been verified. You can login from <a class ="main-color  bolder" href ="'.base_url().'login">here</a>';
            }
            $this->load->view('email_verification', $data);
            
        }
    }

    

}
