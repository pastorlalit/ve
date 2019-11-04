<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function index() {
        $this->load->view('User/login');
        
    }
   public function login(){
       if($this->session->userdata('userid')){
            return redirect('Testseries');
        }
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'username', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[6]|max_length[12]');

        if ($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model('Login_model');
            $userid = $this->Login_model->isValidate($username, $password);
            if($userid){
                $this->session->set_userdata('userid',$userid);
                return redirect('AdminTest');
               
            } else {
                $this->session->set_flashdata('login_failed','Invalid Username/Password');
                return redirect('User/login');
            }
        } else {
            $this->load->view('login');
        }
   }
   public function logout(){
       $this->session->unset_userdata('userid');
       return redirect('User/login');
   }
}
