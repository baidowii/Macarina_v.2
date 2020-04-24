<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homeuser extends CI_Controller {


	
	public function index()
	{
		$this->load->view('user/vhomeuser');
    }
    
    
	
}
