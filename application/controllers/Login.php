<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
     public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('encrypt');
        $this->load->model('Login_model');
        
        
    }
    public function index() {
        if($this->session->userdata('user_id')){
            return redirect('admin-panel');
        }
        
        $this->load->view('login');
        
        
    }
   public function validation(){
       if($this->session->userdata('user_id')){
            return redirect('admin-panel');
        }
       
        $this->form_validation->set_rules('username', 'username', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[6]|max_length[12]');

        if ($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $result = $this->Login_model->can_login($username, $password);
            
            if($result==''){
                return redirect('admin-panel');
               
            } else {
                $this->session->set_flashdata('loginMsg',$result);
                return redirect('Login');
            }
        } else {
            $this->index();
        }
   }
   
  
   public function logout(){
       $this->session->unset_userdata('user_id');
       return redirect('Login');
   }
}

