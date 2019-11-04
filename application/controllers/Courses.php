<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {
    
    public function index()
	{
	  $this->load->view('courses');
	}
    public function ibps_po()
	{
	  $this->load->view('ibps-po');
	}
    public function ibps_clerk()
	{
	  $this->load->view('ibps-clerk');
	}
    public function ibps_so()
	{
	  $this->load->view('ibps-so');
	}
    public function sbi_po()
	{
	  $this->load->view('sbi-po');
	}
    public function sbi_clerk()
	{
	  $this->load->view('sbi-clerk');
	}
    public function sbi_so()
	{
	  $this->load->view('sbi-so');
	}
    public function rrb_po()
	{
	  $this->load->view('rrb-po');
	}
    public function rrb_clerk()
	{
	  $this->load->view('rrb-clerk');
	}
    public function rrb_so()
	{
	  $this->load->view('rrb-so');
	}
    public function lic_assistant()
	{
	  $this->load->view('lic-assistant');
	}
    public function lic_aao()
	{
	  $this->load->view('lic-aao');
	}
    public function gic_aao()
	{
	  $this->load->view('sbi-po');
	}
    public function gic_assistant()
	{
	  $this->load->view('sbi-po');
	}
    public function ssc_cgl()
	{
	  $this->load->view('sbi-po');
	}
    public function ssc_chsl()
	{
	  $this->load->view('sbi-po');
	}
    public function ssc_mts()
	{
	  $this->load->view('sbi-po');
	}
    public function fci_officer()
	{
	  $this->load->view('sbi-po');
	}
    public function fci_clerk()
	{
	  $this->load->view('sbi-po');
	}
    public function mppeb_vyapam()
	{
	  $this->load->view('sbi-po');
	}
}