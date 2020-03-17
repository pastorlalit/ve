<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiries extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('user_id')){
            return redirect('login');
        }
        $this->load->model('Enquiries_model', 'em');
    }

    public function index() {
       $data = array();

        // If record delete request is submitted
        if ($this->input->post('bulk_delete_submit')) {
            // Get all selected IDs
            $ids = $this->input->post('checked_id');

            // If id array is not empty
            if (!empty($ids)) {
                // Delete records from the database
                $delete = $this->em->delEnquiry($ids);

                // If delete is successful
                if($delete) {
                    $data['statusMsg'] = 'Selected records have been deleted successfully.';
                } else {
                    $data['statusMsg'] = 'Some problem occurred, please try again.';
                }
            } else {
                $data['statusMsg'] = 'Select at least 1 record to delete.';
            }
        }
        
//        Pagination
        $config=[
        'base_url' => base_url('Enquiries/index'),
        'per_page' =>2,
        'total_rows' => $this->em->num_rows(),
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
        $data['enquiries'] = $this->em->get_all_enquiries($config['per_page'], $this->uri->segment(3));
        $this->load->view('admin/enquiries', $data);
    }

    public function addEnquiries() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('contactname', 'name', 'required|min_length[2]|max_length[12]');
        $this->form_validation->set_rules('contactemail', 'email', 'required|valid_email');
        $this->form_validation->set_rules('contactnumber', 'number', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('contactsubject', 'subject', 'required|min_length[2]');
        $this->form_validation->set_rules('contactcity', 'city', 'required|min_length[2]');
        $this->form_validation->set_rules('contactmessage', 'message', 'required');
        if ($this->form_validation->run()) {
            $contactFormData = array(
                'createdtime' => date('Y-m-d'),
                'contactname' => $this->input->post('contactname'),
                'contactemail' => $this->input->post('contactemail'),
                'contactnumber' => $this->input->post('contactnumber'),
                'contactcity' => $this->input->post('contactcity'),
                'contactsubject' => $this->input->post('contactsubject'),
                'contactmessage' => $this->input->post('contactmessage')
            );


            $result = $this->em->insertEnquiry($contactFormData);
            if ($result) {
                $this->session->set_flashdata('addEnqMsg', 'success');
                return redirect('add-enquiries');
            } else {
                $this->session->set_flashdata('addEnqMsg', 'error');
                return redirect('add-enquiries');
            }
        } else {

            $this->load->view('admin/addenquiries');
        }
    }

    public function deleteEnquiry() {
        $contactid = $this->uri->segment(3);

        $enquiry = $this->em->getEnquiry($contactid);

        if (empty($enquiry)) {
            $this->session->set_flashdata('delEqMsg', 'error');
            redirect(base_url() . 'enquiries');
        }
        $this->em->delEnquiry($contactid);
        $this->session->set_flashdata('delEqMsg', 'success');
        redirect(base_url() . 'enquiries');
    }

    

}
