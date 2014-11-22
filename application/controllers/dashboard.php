<?php

class Dashboard extends CI_Controller {
	
	function index() {

		$data = array(
			'title' => 'Dashboard'
			);
		$this->load->helper('url');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/left_sidemenu');
		$this->load->view('layout/right_sidemenu');
		$this->load->view('index');
		$this->load->view('layout/footer');		
	}
}
?>