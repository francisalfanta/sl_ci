<?php

class Login extends CI_Controller {
	function index() {
		$this->load->helper('url');
		$this->load->view('layout/header');
		$this->load->view('layout/footer');
	}
}