<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Testseries extends CI_Controller {
    
    public function index()
	{
	  $this->load->view('test-series');
	}
    
}