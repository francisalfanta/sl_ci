<?php 
/*   Created by  : Francis A.
     Date        : November 23, 2014
     Script Lines: All unless noted otherwise

     Updated by  : Lemuel
	 Date        : November 28, 2014
	 Script Lines: 26, 38-110, 
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {		

		$data['title'] = "SoftLine | Login";

		$this->load->view('layout/header', $data);
		$this->load->view('layout/modal');
		$this->load->view('login_form');
		$this->load->view('layout/footer');
	}
	
	// Created by: Prime
	public function adminpanel(){
		if ($this->session->userdata('is_logged_in')){

			$data['staffs'] = $this->slcs_staff_model->get_staff();
			$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();
			$data['sections'] = $this->sections_model->get_sections();
			$data['staff_menus']=$this->staff_menu_model->get_staff_menu();
			
			$data['title'] = "SoftLine | Admin Panel"; 
			
			$username = $this->session->userdata('username');
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
	
	// Created by: Prime
	public function login_validation(){ 

		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Username', 'required|trim|xss-clean|callback_validate_credentials');
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
	// Created by: Prime
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
	
	// Created by: Prime
	public function forgotpass(){
		$data['title'] = "SoftLine | Forgot Password";

		$this->load->view('layout/header', $data);
		$this->load->view('layout/modal');
		$this->load->view('forgot_pass');
		$this->load->view('layout/footer');
	}
	// Created by: Prime 12/15/2014
	public function forgot_pass_validation(){ 
				
		$this->load->library('form_validation');		
		$this->form_validation->set_rules('username', 'Username', 'required|trim|xss-clean|callback_fp_validate_credentials');
	
		if($this->form_validation->run()){			
			
			$uname = $this->input->post('username');
			$this->slcs_staff_model->fp_get_staff($uname);
			
			$data['title'] = "SoftLine | Forgot Password";
			$this->load->helper('url');
			$this->load->view('layout/header', $data);
			$this->load->view('layout/modal');
			$this->load->view('fprandomgen');
			$this->load->view('layout/footer');
			
		} else {
			$data['title'] = "SoftLine | Forgot Password";
			$this->load->helper('url');
			$this->load->view('layout/header', $data);
			$this->load->view('layout/modal');
			$this->load->view('forgot_pass');
			$this->load->view('layout/footer');
		}
	}	
	// Created by: Prime 12/15/2014
	public function fp_validate_credentials(){
	 	$this->load->model('model_users');
	 
		if ($this->model_users->fp_can_log_in()){
			return true;
		} else {
			$this->form_validation->set_message('fp_validate_credentials', 'Incorrect Username, Please try again.');
			return false;
			
		}	
	}
	//Created by: Prime 12/17/2014
	public function fp_random_gen(){ 
				
		$this->load->library('form_validation');		
		$this->form_validation->set_rules('randomgen', 'Random Generated Code', 'required|trim|xss-clean|callback_fp_rangen_validate_credentials');
		$this->form_validation->set_rules('pword', 'Password', 'min_length[8]|trim|required|matches[repword]|md5');
		$this->form_validation->set_rules('repword', 'Re-type Password', 'trim|required');
	
		if($this->form_validation->run()){			
			
			$rangen = $this->input->post('randomgen');
			$this->slcs_staff_model->fp_get_staff_ran_gen($rangen);
			redirect("login/index");
			
			
		} else {
			$data['title'] = "SoftLine | Forgot Password";
			$this->load->helper('url');
			$this->load->view('layout/header', $data);
			$this->load->view('layout/modal');
			$this->load->view('fprandomgen');
			$this->load->view('layout/footer');
		}
	}
	//Created by: Prime 12/17/2014
	public function fp_rangen_validate_credentials(){
	 	$this->load->model('model_users');
	 
		if ($this->model_users->fp_rand_gen()){
			return true;
		} else {
			$this->form_validation->set_message('fp_rangen_validate_credentials', 'Incorrect Code, Please try again.');
			return false;
			
		}	
	}
		
	public function logout(){
	    $this->session->sess_destroy();
	    $this->index();
	}
}