<?php
/*   Created by  : Francis A.
     Date        : December 1, 2014
     Script Lines: All unless noted otherwise
*/
//if (! defined('BASEPATH')) exit('No direct script access allowed');

class Pharaoh extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// all model were autoloaded
	}

	public function index(){

		// database query 
		$data['staffs']      = $this->slcs_staff_model->get_staff();
		$data['depttasks']   = $this->dept_tasks_model->get_dept_tasks();
		$data['sections']    = $this->sections_model->get_sections();
		$data['staff_menus'] = $this->staff_menu_model->get_staff_menu();
		$data['records'] 	 = $this->owner_addr_model->view_owner_details();
		// custom data
		$data['title']     = 'SoftLine | Property Owner Lists';	
		
		$username          = $this->session->userdata('username'); 						// TO DO: Refractor this
		$data['username']  = ucfirst($username);	
		//select values
		//$gender_type       = array('Male','Female');
		//$marital_type      = array('Single', 'Married');				

		$data['parents']       = $this->property_owner_model->get_prop_owner();	
		//$data['nationalities'] = $this->nationality_model->get_nationality();		
		$data['owner_details'] = $this->owner_addr_model->view_owner_details();

		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu', $data);
		$this->load->view('layout/right_sidemenu');
		//$this->load->view('property_owner/property_owner_table', $data);		
		$this->load->view('home');
		$this->load->view('layout/footer');	
		
		
	}
}