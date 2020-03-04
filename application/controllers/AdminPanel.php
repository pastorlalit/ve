<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPanel extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Contactus_model');
        
    }

    public function index() {
        if(!$this->session->userdata('userid')){
            return redirect('login');
        }
        $data['enquiries']=$this->Contactus_model->get_all_enquiries();
        $this->load->view('admin/index.php',$data);
    }
    
    public function dataTablesCrud(){
        $this->load->view('admin/datatables_crud');
    }

}
