<?php
/*   Created by  : Francis A.
     Date        : December 1, 2014
     Script Lines: All unless noted otherwise
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Property_owner extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// all model were autoloaded
	}
	public function index()
	{	
		// database query 
		$data['staffs']    = $this->slcs_staff_model->get_staff();
		$data['depttasks'] = $this->dept_tasks_model->get_dept_tasks();
		$data['sections']  = $this->sections_model->get_sections();
		$data['staff_menus']=$this->staff_menu_model->get_staff_menu();
		// custom data
		$data['title']     = 'SoftLine | Property Owner';	
		
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
		$this->load->view('property_owner/property_owner_table', $data);		
		$this->load->view('layout/footer');	
	}
	public function view_property_owner()
	{	
		// database query 
		$data['staffs']    = $this->slcs_staff_model->get_staff();
		$data['depttasks'] = $this->dept_tasks_model->get_dept_tasks();
		$data['sections']  = $this->sections_model->get_sections();
		$data['staff_menus']=$this->staff_menu_model->get_staff_menu();
		// custom data
		$data['title']     = 'SoftLine | Property Owner';	
		
		$username          = $this->session->userdata('username'); 						// TO DO: Refractor this
		$data['username']  = ucfirst($username);	
		//select values
		//$gender_type       = array('Male','Female');
		//$marital_type      = array('Single', 'Married');				

		$data['parents']       = $this->property_owner_model->get_prop_owner();	
		//$data['nationalities'] = $this->nationality_model->get_nationality();		
		$data['nationalities'] = $this->owner_addr_model->get_owner_addr();
		
		$data['form_attributes'] = array('class' => 'form inline', 'role' => 'form');
		$data['passport_no_attr']     = array(
						              'name'        => 'passport_no',
						              'id'          => 'passport_no',
						              'value'       => '',				              
						              'style'       => 'width:50%;',//
						              'class' 		=> 'form-control ',
						              'placeholder' => 'Passport No'
						           );
		$data['fn_attributes']   = array(
						              'name'        => 'first_name',
						              'id'          => 'fn_name',
						              'value'       => '',						              
						              'class' 		=> 'form-control',
						              'style'       => 'width:100%;',
						              'placeholder' => 'First Name'
						           );
		$data['mn_attributes']   = array(
						              'name'        => 'middle_name',
						              'id'          => 'fn_name',
						              'value'       => '',
						              'class' 		=> 'form-control',
						              'style'       => 'width:100%;',
						              'placeholder' => 'Middle Name'
						           );
		$data['ln_attributes']   = array(
						              'name'        => 'last_name',
						              'id'          => 'ln_name',
						              'value'       => '',
						              'class' 		=> 'form-control',
						              'style'       => 'width:100%;',
						              'placeholder' => 'Last Name'
						           );		

		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu', $data);
		$this->load->view('layout/right_sidemenu');
		$this->load->view('property_owner/property_owner', $data);		
		$this->load->view('layout/footer');	
	}
	public function create_prop_owner()
	{		
		$data['staffs']     = $this->slcs_staff_model->get_staff();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();		
		$data['sections']   = $this->sections_model->get_sections();

		$username           = $this->session->userdata('username'); 					
		$data['username']   = ucfirst($username);	
		$data['title']      = 'SoftLine | Add Property Owner';
		
		$this->form_validation->set_rules('passport_no', 'Passport No', 'required');
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('middle_name', 'Middle Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->index();		
		}
		else
		{
			if($query = $this->property_owner_model->create_prop_owner()){
				//$this->index();
				redirect('property_owner');
			}
		}		
	}
	public function del_nat($id){		
		$this->nationality_model->delete_nationality($id);		
		redirect('property_owner');
	}
	public function update_nat()
	{		
		$formSubmit = $this->input->post('submitForm');
		if($formSubmit == 'formUpdate') { 
			//redirect($this->config->item('backend_folder').'/categories/form');
			$id = $this->input->post('id');		
			$data = array(
				'telephone_no' 		=> $this->input->post('tel_no'),
				'mobile_no' 		=> $this->input->post('mobile_no'),
				'fax_no' 			=> $this->input->post('fax_no'),
				'email'    			=> $this->input->post('email'),
				'property_owner_id' => $this->input->post('prop_owner_id')
			);
			$this->nationality_model->update_nationality($id, $data);				
			$this->view_staff_menu($id);

		} else if ($formSubmit == 'formDelete'){
			$id = $this->input->post('id');
			$this->del_nat($id);	    			
		} else {
			$this->view_staff_menu($id);			
		}
	}
	public function view_staff_menu($id)
	{
		// database query 
		$data['staffs']    = $this->slcs_staff_model->get_staff();
		$data['depttasks'] = $this->dept_tasks_model->get_dept_tasks();
		$data['sections']  = $this->sections_model->get_sections();
		$data['staff_menus']=$this->staff_menu_model->get_staff_menu();
		// custom data
		$data['title']     = 'SoftLine | Edit Nationality';	
		
		$username          = $this->session->userdata('username'); 						// TO DO: Refractor this
		$data['username']  = ucfirst($username);	
		//select values
		$method            = array('_parent','_self','_blank');
		$active            = array(1,0);
		$parents           = $this->staff_menu_model->get_parent_staff_menu();
		$children          = $this->staff_menu_model->get_child_staff_menu();
		$data['parents']   = $parents;
		$data['children']  = $children;
		$data['fields_meta']= $this->staff_menu_model->get_field_name_staff_menu();

		// Parameter : tab-index, tag-attributes, label, tag-type, select-values		// TO DO: Refractor this
		$data['table_fields'] = array(
			'menu' 		 => array('1', 'menu', 'Menu', 'input'),
			'url' 		 => array('2', 'url', 'URL', 'input'),
			'send_value' => array('3', 'send_value', 'Send Value', 'input'),
			'method'     => array('4', 'method', 'Method', 'select', $method),
			'order'      => array('5', 'order', 'Order', 'input'),
			'parent'     => array('6', 'parent', 'Parent', 'custom', $parents),
			'include'    => array('7','include', 'Include', 'input'),
			'active'     => array('8', 'active', 'Active', 'select', $active),
			);	

		if (empty($data['staff_menu']))
		{
			show_404();			
		}		
		// specific menu
		$this->load->helper('url');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu');
		$this->load->view('layout/right_sidemenu');
		$this->load->view('staff_menu/staff_menu_form', $data);
		$this->load->view('staff_menu/edit', $data);
		$this->load->view('layout/footer');	
	}

	// ---------------------------------------- //
	

	public function update_staff_menu()
	{		
		$formSubmit = $this->input->post('submitForm');
		if($formSubmit == 'formUpdate') { 
			//redirect($this->config->item('backend_folder').'/categories/form');
			$id = $this->input->post('id');		
			$data = array(
				'menu' 		 => ucfirst($this->input->post('menu')),
				'url' 		 => $this->input->post('url'),
				'send_value' => $this->input->post('send_value'),
				'method'     => $this->input->post('method'),
				'order'      => $this->input->post('order'),
				'parent'     => $this->input->post('parent'),
				'include'    => $this->input->post('include'),
				'active'     => $this->input->post('active')
			);
			$this->staff_menu_model->update_staff_menu($id, $data);				
			$this->view_staff_menu($id);

		} else if ($formSubmit == 'formDelete'){
			$id = $this->input->post('id');
			$this->delete_staff_menu($id);	    			
		} else {
			$this->view_staff_menu($id);			
		}
	}


}