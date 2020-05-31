<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CoursesOffered extends CI_Controller {
    
    public function index()
	{
	  $this->load->view('Bank_Entrance_Exams');
	}
    public function Bank_Entrance_Exams()
	{
	  $this->load->view('Bank_Entrance_Exams');
	}
    public function SSC_Entrance_Exams()
	{
	  $this->load->view('SSC_Entrance_Exams');
	}
    public function Railways_Entrance_Exams()
	{
	  $this->load->view('Railways_Entrance_Exams');
	}
    public function Insurance_Entrance_Exams()
	{
	  $this->load->view('Insurance_Entrance_Exams');
	}
    public function Mppeb()
	{
	  $this->load->view('mppeb');
	}
    public function English_for_Competitive_Exams()
	{
	  $this->load->view('English_for_Competitive_Exams');
	}
    public function gdpi()
	{
	  $this->load->view('gdpi');
	}
    public function spoken_english()
	{
	  $this->load->view('spoken-english');
	}
    public function Descriptive_English()
	{
	  $this->load->view('descriptive-english');
	}
    
   
}