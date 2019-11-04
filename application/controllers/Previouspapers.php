<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Previouspapers extends CI_Controller {
    
    public function index()
	{
	  $this->load->view('previous-papers');
	}
    public function ibps_po_previous_papers()
	{
	  $this->load->view('ibps-po-previous-papers');
	}
}