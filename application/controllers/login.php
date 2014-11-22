<?php //if (! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tb_slcs_staff_model');
	}

	public function index() {
		
		$data = array(
			'title' => 'Login'
			);
		$this->load->helper('url');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/modal');
		$this->load->view('login_form');
		$this->load->view('layout/footer');
	}	
	/*
	public function view($slug)
	{
		$data['staff'] = $this->tb_slcs_staff_model->get_staff($username);	

		if (empty($data['staff']))
		{
			show_404();
		}

		$data['title'] = $data['staff']['title'];

		$this->load->view('templates/header', $data);
		$this->load->view('news/view', $data);
		$this->load->view('templates/footer');	
	}

	public function validate_credentials() {
		$this->load->model('tb_slcs_staff_model');
		// Including Validation Library
		$this->load->library('form_validation');
		// Displaying Errors In Div
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		// Validation For Name Field
		$this->form_validation->set_rules('dname', 'Username', 'required|min_length[5]|max_length[15]');
		// Validation For Email Field
		$this->form_validation->set_rules('demail', 'Email', 'required|valid_email');
		// Validation For Contact Field
		$this->form_validation->set_rules('dmobile', 'Contact No.', 'required|regex_match[/^[0-9]{10}$/]');
		// Validation For Address Field
		$this->form_validation->set_rules('daddress', 'Address', 'required|min_length[10]|max_length[50]');
		if ($this->form_validation->run() == FALSE)
		{
		$this->load->view('valform');
		}
		else
		{
		$this->load->view('formsubmit');
		}
			}
	*/
}