<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->helper('form');
		$this->load->helper('url');
        
     

		$this->load->view('_partials/_header');
		$this->load->view('welcome_message');
		$this->load->view('_partials/_footer');
	}
}
