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
		$this->load->view('layout/custom_modal', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu', $data);
		$this->load->view('layout/right_sidemenu');
		$this->load->view('property_owner/property_owner_table', $data);		
		$this->load->view('layout/footer');	
	}

	public function view_property_owner($property_owner_id = null, $propertyfinder_id = null)
	{	
		//if $id is null redirect to index
		if($property_owner_id){
			// database query 
			$data['staffs']    = $this->slcs_staff_model->get_staff();
			$data['depttasks'] = $this->dept_tasks_model->get_dept_tasks();
			$data['sections']  = $this->sections_model->get_sections();
			$data['staff_menus']=$this->staff_menu_model->get_staff_menu();
			// custom data
			$data['title']     = 'SoftLine | Property Owner';	
			
			$username          = $this->session->userdata('username'); 						// TO DO: Refractor this
			$data['username']  = ucfirst($username);
			$data['hide_contact_details'] = false;	
			
			$passport_no = null;
			$first_name  = null;
			$middle_name = null;
			$last_name   = null;

			$parents       	   = $this->property_owner_model->get_prop_owner($property_owner_id);
			if(isset($parents['passport_no'])) {
				$passport_no   = $parents['passport_no'];	
			}
			if(isset($parents['first_name'])) {
				$first_name   = $parents['first_name'];	
			}
			if(isset($parents['middle_name'])) {
				$middle_name   = $parents['middle_name'];	
			}
			if(isset($parents['last_name'])) {
				$last_name   = $parents['last_name'];	
			}
			//$data['nationalities'] = $this->nationality_model->get_nationality();		
			$data['nationalities'] = $this->owner_addr_model->get_owner_addr($property_owner_id);
			
			$data['form_attributes'] = array('class' => 'form inline', 'role' => 'form');
			$data['passport_no_attr']= array(
							              'name'        => 'passport_no',
							              'id'          => 'passport_no',
							              'value'       => $passport_no,				              
							              'style'       => 'width:50%;',//
							              'class' 		=> 'form-control ',
							              'placeholder' => 'Passport No'
							           );
			$data['fn_attributes']   = array(
							              'name'        => 'first_name',
							              'id'          => 'fn_name',
							              'value'       => $first_name,						              
							              'class' 		=> 'form-control',
							              'style'       => 'width:100%;',
							              'placeholder' => 'First Name'
							           );
			$data['mn_attributes']   = array(
							              'name'        => 'middle_name',
							              'id'          => 'fn_name',
							              'value'       => $middle_name,
							              'class' 		=> 'form-control',
							              'style'       => 'width:100%;',
							              'placeholder' => 'Middle Name'
							           );
			$data['ln_attributes']   = array(
							              'name'        => 'last_name',
							              'id'          => 'ln_name',
							              'value'       => $last_name,
							              'class' 		=> 'form-control',
							              'style'       => 'width:100%;',
							              'placeholder' => 'Last Name'
							           );	
			$query = $this->city_model->get_city();       
			
        	$city_options = array();
        	$new = array();
        	foreach($query as $row){
            	$new[$row['city_name']] = $row['city_name'];
            	$city_options = array_merge($city_options, $new);
        	}
        	$data['city_options'] = $city_options;

			$city = null;
			$community = null;
			$subcommunity = null;
			$re_property = null;
			$property_type = null;
			$building_name = null;
			$unit_number = null;
			$developer_name = null;

			$data['propertyfinder_id'] = $propertyfinder_id;

			$query_propertyfinder = $this->propertyfinder_model->get_propertyfinder_by_id($propertyfinder_id);

			if($query_propertyfinder) {
				foreach($query_propertyfinder as $propertyfinder){
					if(isset($propertyfinder['city_name'])) {
						$city   = $propertyfinder['city_name'];	
					}
					if(isset($propertyfinder['community'])) {
						$community   = $propertyfinder['community'];	
					}
					if(isset($propertyfinder['subcommunity'])) {
						$subcommunity   = $propertyfinder['subcommunity'];	
					}
					if(isset($propertyfinder['re_property'])) {
						$re_property   = $propertyfinder['re_property'];	
					}
					if(isset($propertyfinder['property_type'])) {
						$property_type   = $propertyfinder['property_type'];	
					}
					if(isset($propertyfinder['building_name'])) {
						$building_name   = $propertyfinder['building_name'];	
					}
					if(isset($propertyfinder['unit_number'])) {
						$unit_number   = $propertyfinder['unit_number'];	
					}
					if(isset($propertyfinder['developer_name'])) {
						$developer_name   = $propertyfinder['developer_name'];	
					}	
				}
			}

			$data['city_attributes'] = array(
							              'name'        => 'city',
							              'id'          => 'city',
							              'value'       => $city,
							              'class' 		=> 'form-control',
							              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
							              'placeholder' => 'City'
							           );
			$data['city_select_attributes'] = 'name="city" id="city" class="form-control"';
			$data['city'] = $city;

			$data['community_attributes'] = array(
							              'name'        => 'community',
							              'id'          => 'community',
							              'value'       => $community,
							              'class' 		=> 'form-control',
							              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
							              'placeholder' => 'Community'
							           );
			$data['subcommunity_attributes'] = array(
							              'name'        => 'subcommunity',
							              'id'          => 'subcommunity',
							              'value'       => $subcommunity,
							              'class' 		=> 'form-control',
							              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
							              'placeholder' => 'Sub-community'
							           );
			$data['reproperty_attributes'] = array(
							              'name'        => 're_property',
							              'id'          => 're_property',
							              'value'       => $re_property,
							              'class' 		=> 'form-control',
							              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
							              'placeholder' => 'Property'
							           );
			$data['property_type_attributes'] = array(
							              'name'        => 'property_type',
							              'id'          => 'property_type',
							              'value'       => $property_type,
							              'class' 		=> 'form-control',
							              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
							              'placeholder' => 'Property Type'
							           );
			$data['building_name_attributes'] = array(
							              'name'        => 'building_name',
							              'id'          => 'building_name',
							              'value'       => $building_name,
							              'class' 		=> 'form-control',
							              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
							              'placeholder' => 'Building name'
							           );
			$data['unit_number_attributes'] = array(
							              'name'        => 'unit_number',
							              'id'          => 'unit_number',
							              'value'       => $unit_number,
							              'class' 		=> 'form-control',
							              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
							              'placeholder' => 'Unit No.'
							           );
			$data['developer_name_attributes'] = array(
							              'name'        => 'developer_name',
							              'id'          => 'developer_name',
							              'value'       => $developer_name,
							              'class' 		=> 'form-control',
							              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
							              'placeholder' => 'Developers name'
							           );

			$this->load->view('layout/header', $data);
			$this->load->view('layout/topbar');
			$this->load->view('layout/admin_left_sidemenu', $data);
			$this->load->view('layout/right_sidemenu');
			$this->load->view('property_owner/property_owner_form', $data);		
			$this->load->view('layout/footer');	
		} else {
			redirect('property_owner');
		}
	}

	public function create_prop_owner()
	{	
		$data['staffs']     = $this->slcs_staff_model->get_staff();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();		
		$data['sections']   = $this->sections_model->get_sections();
		$data['staff_menus'] = $this->staff_menu_model->get_staff_menu();

		$username           = $this->session->userdata('username'); 					
		$data['username']   = ucfirst($username);	
		$data['title']      = 'SoftLine | Add Property Owner';
		$data['hide_contact_details'] = true;

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
		$city = null;
		$community = null;
		$subcommunity = null;
		$re_property = null;
		$property_type = null;
		$building_name = null;
		$unit_number = null;
		$developer_name = null;

		$propertyfinder = $this->propertyfinder_model->get_propertyfinder();
		if(isset($propertyfinder['city'])) {
			$city   = $propertyfinder['city'];	
		}
		if(isset($propertyfinder['community'])) {
			$community   = $propertyfinder['community'];	
		}
		if(isset($propertyfinder['subcommunity'])) {
			$subcommunity   = $propertyfinder['subcommunity'];	
		}
		if(isset($propertyfinder['re_property'])) {
			$re_property   = $propertyfinder['re_property'];	
		}
		if(isset($propertyfinder['property_type'])) {
			$property_type   = $propertyfinder['property_type'];	
		}
		if(isset($propertyfinder['building_name'])) {
			$building_name   = $propertyfinder['building_name'];	
		}
		if(isset($propertyfinder['unit_number'])) {
			$unit_number   = $propertyfinder['unit_number'];	
		}
		if(isset($propertyfinder['developer_name'])) {
			$developer_name   = $propertyfinder['developer_name'];	
		}

		$query = $this->city_model->get_city();       
			
    	$city_options = array();
    	$new = array();
    	foreach($query as $row){
        	$new[$row['city_name']] = $row['city_name'];
        	$city_options = array_merge($city_options, $new);
    	}
    	$data['city_options'] = $city_options;
    	$data['city_select_attributes'] = 'name="city" id="city" class="form-control"';
		$data['city'] = $city;

		$city = null;
		$community = null;
		$subcommunity = null;
		$re_property = null;
		$property_type = null;
		$building_name = null;
		$unit_number = null;
		$developer_name = null;



		$data['city_attributes'] = array(
						              'name'        => 'city',
						              'id'          => 'city',
						              'value'       => $city,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'City'
						           );
		$data['community_attributes'] = array(
						              'name'        => 'community',
						              'id'          => 'community',
						              'value'       => $community,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Community'
						           );
		$data['subcommunity_attributes'] = array(
						              'name'        => 'subcommunity',
						              'id'          => 'subcommunity',
						              'value'       => $subcommunity,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Sub-community'
						           );
		$data['reproperty_attributes'] = array(
						              'name'        => 're_property',
						              'id'          => 're_property',
						              'value'       => $re_property,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Property'
						           );
		$data['property_type_attributes'] = array(
						              'name'        => 'property_type',
						              'id'          => 'property_type',
						              'value'       => $property_type,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Property Type'
						           );
		$data['building_name_attributes'] = array(
						              'name'        => 'building_name',
						              'id'          => 'building_name',
						              'value'       => $building_name,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Building name'
						           );
		$data['unit_number_attributes'] = array(
						              'name'        => 'unit_number',
						              'id'          => 'unit_number',
						              'value'       => $unit_number,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Unit No.'
						           );
		$data['developer_name_attributes'] = array(
						              'name'        => 'developer_name',
						              'id'          => 'developer_name',
						              'value'       => $developer_name,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Developers name'
						           );

		
		$this->form_validation->set_rules('passport_no', 'Passport No', 'required');
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('middle_name', 'Middle Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');

		$this->form_validation->set_rules('city', 'City');
		$this->form_validation->set_rules('community', 'Community');
		$this->form_validation->set_rules('subcommunity', 'Subcommunity');
		$this->form_validation->set_rules('re_property', 'Property');
		$this->form_validation->set_rules('property_type', 'Property Type');
		$this->form_validation->set_rules('building_name', 'Building name');
		$this->form_validation->set_rules('unit_number', 'Unit no');
		$this->form_validation->set_rules('developer_name', 'developer_name');


		if ($this->form_validation->run() == FALSE)
		{				
			$this->load->view('layout/header', $data);
			$this->load->view('layout/topbar');
			$this->load->view('layout/admin_left_sidemenu', $data);
			$this->load->view('layout/right_sidemenu');
			$this->load->view('property_owner/property_owner_form', $data);		
			$this->load->view('layout/footer');	
		}
		else
		{
			if($property_owner_id = $this->property_owner_model->create_prop_owner()){
				// create new property
				$propertyfinder_id = $this->propertyfinder_model->create_propertyfinder();
				// create new m2m
				$this->property_owner_has_tb_propertyfinder_model->del_record($property_owner_id,  $propertyfinder_id);
				// fetch new inserted property owner id and redirect to view				
				redirect('property_owner/view_property_owner/'.$query);
			}
		}		
	}

	public function del_nat($property_owner_id = null, $propertyfinder_id =null){	
		if($property_owner_id && $propertyfinder_id){
			$this->property_owner_has_tb_propertyfinder_model->del_record($property_owner_id,  $propertyfinder_id);						
		}	
		redirect('property_owner');		
	}

	public function update_owner_personal_details() //working 12/2/2014
	{	
		$this->form_validation->set_rules('passport_no', 'Passport No', 'required');
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('middle_name', 'Middle Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');

		if ($this->form_validation->run() == TRUE)
		{
			print_r('validation successful');
			$property_owner_id = $this->input->post('property_owner_id');		

			$data = array(
				'passport_no' 	=> $this->input->post('passport_no'),
				'first_name' 	=> $this->input->post('first_name'),
				'middle_name' 	=> $this->input->post('middle_name'),
				'last_name'    	=> $this->input->post('last_name')			
			);
			$this->property_owner_model-> update_owner_personal($property_owner_id, $data);
			// create new property
			$propertyfinder_id = $this->propertyfinder_model->create_propertyfinder();
			// create m2m record link
			$this->property_owner_has_tb_propertyfinder_model->add_record($property_owner_id, $propertyfinder_id);
		} 		
		
		redirect('property_owner/view_property_owner/'.$property_owner_id.'/'.$propertyfinder_id);			
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