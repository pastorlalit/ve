<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CurrentAffairs extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('user_id')){
            return redirect('login');
        }
        $this->load->model('CurrentAffairs_model','cam');
        $this->load->helper('common');
        
    }
    
    public function index() {
         $config=[
        'base_url' => base_url('CurrentAffairs'),
        'per_page' =>4,
        'total_rows' => $this->cam->num_rows(),
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
        $data['currentaffairs'] = $this->cam->get_all_currentAffairs($config['per_page'], $this->uri->segment(3));
        $this->load->view('admin/current-affairs', $data);
        
    }

    public function viewCurrenAffairs() {
        $config=[
        'base_url' => base_url('CurrentAffairs/viewCurrenAffairs'),
        'per_page' =>2,
        'total_rows' => $this->cam->num_rows(),
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
        $data['currentaffairs'] = $this->cam->get_all_currentAffairs($config['per_page'], $this->uri->segment(3));
        $this->load->view('admin/current-affairs', $data);
    }
    
   
    

    public function currentAffairsDetails($ca_id) {
        $data['currentaffair'] = $this->cam->get_currentAffairsDetail($ca_id);
        $this->load->view('admin/current-affairs-details', $data);
    }

    public function addCurrentAffairs() {
        $this->load->view('admin/add-current-affairs');
    }

    public function InsertCurrentAffairs() {
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('ca_title', 'title', 'trim|required');
        $this->form_validation->set_rules('ca_description', 'description', 'trim|required');
       
        $this->form_validation->set_rules('ca_date', 'date', 'trim|required');
        
        $config['upload_path'] = './assets/uploads';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("ca_image")) {
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

            $ca_image = $config['source_image'];
        }
        if($this->form_validation->run() == true) {
            if (!$ca_image) {
                $ca_image = "";
          }
            $createCurrentAffairs = array(
                'ca_title' => $this->input->post('ca_title'),
                'ca_description' => $this->input->post('ca_description'),
                'ca_image' => $ca_image,
                'ca_date' => $this->input->post('ca_date'),
                'ca_created_at' => date('Y-m-d')
            );

            $ca_title = strip_tags($this->input->post('ca_title'));
            $ca_titleURL = strtolower(url_title($ca_title));
            if (isUrlExists('currentaffairs', $ca_titleURL)) {
                $ca_titleURL = $ca_titleURL . '-' . time();
            }
            $createCurrentAffairs['url_slug'] = $ca_titleURL;


            $result = $this->cam->insert_currentAffairs($createCurrentAffairs);
           
            if ($result){
                $this->session->set_flashdata('currentMsg', 'success');
                return redirect('CurrentAffairs/addCurrentAffairs');
            } else {
                $this->session->set_flashdata('currentMsg', 'error');
                return redirect('CurrentAffairs/addCurrentAffairs');
            }
        } else {
            $this->load->view('admin/add-current-affairs');
        }
    }
    
    public function delCurrentAffairs() {
        
        $ca_id =$this->uri->segment(3);
        
        $currentaffair = $this->cam->get_currentAffairsDetail($ca_id);
        
        if(empty($currentaffair)){
            $this->session->set_flashdata('ca_update_Msg', 'no-record');
            redirect(base_url().'view-current-affairs');
        }
        $this->cam->delete_currentAffairs($ca_id);
        $this->session->set_flashdata('ca_update_Msg', 'deleted');
        redirect(base_url().'view-current-affairs');
    }
    
    public function editCurrentAffairs($ca_id) {
        
        $this->load->library('form_validation');
        $currentaffair = $this->cam->get_currentAffairsDetail($ca_id);
        $data = array();
        if(empty($currentaffair)){
            $this->session->set_flashdata('update', 'no-record');
            redirect(base_url().'view-current-affairs');
        }
        $this->form_validation->set_rules('ca_title', 'title', 'trim|required');
        $this->form_validation->set_rules('ca_description', 'description', 'trim|required');
        $this->form_validation->set_rules('ca_date', 'date', 'trim|required');
        if ($this->form_validation->run() == true) {
                    $old_image = $this->input->post('old-image');
                    $config['upload_path'] = './assets/uploads';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['encrypt_name'] = TRUE;

                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload("ca_image")) {
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
                         $ca_image = $config['source_image'];
                        
//                      delete privious file
                        unlink($old_image);

                    }else{
                        $ca_image = $old_image;
                    }

            $CurrentAffairs = array(
                'ca_title' => $this->input->post('ca_title'),
                'ca_description' => $this->input->post('ca_description'),
                'ca_image' => $ca_image,
                'ca_date' => $this->input->post('ca_date'),
            );

            $ca_title = strip_tags($this->input->post('ca_title'));
            $ca_titleURL = strtolower(url_title($ca_title));
            if (isUrlExists('currentaffairs', $ca_titleURL)) {
                $ca_titleURL = $ca_titleURL . '-' . time();
            }
            $CurrentAffairs['url_slug'] = $ca_titleURL;
            
            $result = $this->cam->update_currentAffairs($ca_id, $CurrentAffairs);
            if ($result){
                $this->session->set_flashdata('ca_update_Msg', 'update');
                return redirect(base_url('view-current-affairs'));
            } else {
                $this->session->set_flashdata('ca_update_Msg', 'error');
                $data['currentaffair'] = $currentaffair;
                $this->load->view('admin/current-affairs', $data);
            }
        } else {
             $data['currentaffair'] = $currentaffair;
             $this->load->view('admin/edit-current-affairs', $data);
        }
        
       
        
    }
    

}
