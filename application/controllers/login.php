<?php 
/*   Created by  : Francis A.
     Date        : November 23, 2014
     Script Lines: All unless noted otherwise

     Updated by  : Lemuel
	 Date        : November 23, 2014
	 Script Lines: 26, 38-110, 
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {		

		$data['title'] = "SoftLine | Login";     							// Modified by: Lemuel		

		$this->load->view('layout/header', $data);
		$this->load->view('layout/modal');
		$this->load->view('login_form');
		$this->load->view('layout/footer');
	}	
	// Created by: Lemuel
	public function forgotpass(){
		$data['title'] = "SoftLine | Forgot Password";

		$this->load->view('layout/header', $data);
		$this->load->view('layout/modal');
		$this->load->view('forgot_pass');
		$this->load->view('layout/footer');
	}
	// Created by: Lemuel
	public function adminpanel(){
		if ($this->session->userdata('is_logged_in')){

			$data['staffs'] = $this->slcs_staff_model->get_staff();
			$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();
			$data['sections'] = $this->sections_model->get_sections();
			$data['title'] = "SoftLine | Admin Panel"; 
			
			$username = $this->session->userdata('username'); 	// get username from db
			//$data['username'] = $this->session->userdata('username'); 
			$data['username'] = $username;			

			$this->load->helper('url');
			$this->load->view('layout/header', $data);
			$this->load->view('layout/topbar');
			$this->load->view('layout/admin_left_sidemenu', $data);
			$this->load->view('layout/right_sidemenu');
			$this->load->view('slcs_staff/slcs_staff_table', $data);   // modified by: Francis A.
			$this->load->view('layout/footer');			
		} else {
			show_404();
		}		
	}
	// Created by: Lemuel
	public function login_validation(){ 

		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Username', 'required|trim|xss-clean|callback_validate_credentials');
		//$this->form_validation->set_rules('email', 'Email', 'required|trim|xss-clean|callback_validate_credentials');
		$this->form_validation->set_rules('password', 'Password', 'required|md5|trim');
		
		if($this->form_validation->run()){
			$data = array (
				'username' => $this->input->post('username'),
				'is_logged_in' => 1
			);
			$this->session->set_userdata($data);
			redirect('login/adminpanel');

		} else {
			$data['title'] = "SoftLine | Login"; 
			$this->load->helper('url');
			$this->load->view('layout/header', $data);
			$this->load->view('layout/modal');
			$this->load->view('login_form');
			$this->load->view('layout/footer');
		}
	}
	// Created by: Lemuel
	//added function validate_credentials for users
	public function validate_credentials(){
	 	$this->load->model('model_users');
	 
		if ($this->model_users->can_log_in()){
			return true;
		} else {
			$this->form_validation->set_message('validate_credentials', 'Incorrect Username / Password, Please try again.');
			return false;
			
		}	
	}
	// Created by: Lemuel
	public function logout_mod(){
		$this->load->view('layout/logout_modal');
	}	
}