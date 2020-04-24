<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("Login"));
		}
	}
	
	public function index()
	{
		$this->load->view('admin/vhome');
    }
    
    public function tables()
    {
        $this->load->view('admin/vtables');
	}

	public function charts()
    {
        $this->load->view('admin/vcharts');
	}
	
}
