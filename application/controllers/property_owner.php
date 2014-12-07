<?php
/*   Created by  : Francis A.
     Date        : December 1, 2014
     Script Lines: All unless noted otherwise
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Property_owner extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('Datatables');
        $this->load->library('table');
        $this->load->database();
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
		//$data['records'] = null;
		// custom data
		$data['title']     = 'SoftLine | Property Owner Lists';	
		
		$username          = $this->session->userdata('username'); 						// TO DO: Refractor this
		$data['username']  = ucfirst($username);	
		//select values
		//$gender_type       = array('Male','Female');
		//$marital_type      = array('Single', 'Married');				

		$data['parents']       = $this->property_owner_model->get_owner_details();	
		//$data['nationalities'] = $this->nationality_model->get_nationality();		
		$data['owner_details'] = $this->owner_addr_model->view_owner_details();
		$data['nationality_tb_fieldnames'] = $this->get_field_name_nationality();
		$data['address_tb_fieldnames'] = $this->get_field_name_address();
		$data['propertyfinder_tb_fieldnames'] =$this->get_field_name_propertyfinder();

		$data['country_list'] = $this->country_model->get_country();

		//set table id in table open tag
        //$tmpl = array('table_open' => '<table id="owner_table" data-sortable class="table table-striped table-bordered display compact"  cellspacing="0" width="100%">');
        //$this->table->set_template($tmpl);
		//$this->table->set_heading('First Name', 'Middle Name', 'Last Name');

		$passport_no = null;
		$first_name  = null;
		$middle_name = null;
		$last_name   = null;
		$nationality = null;
		
		//$data['nationalities'] = $this->nationality_model->get_nationality();		
		//$data['nationalities'] = $this->owner_addr_model->get_owner_addr($property_owner_id);
		
		$data['form_attributes'] = array('class' => 'form inline', 'role' => 'form');		
						         
		$data['fn_attributes']   = array(
						              'name'        => 'first_name',
						              'id'          => 'fn_name',
						              'value'       => $first_name,						              
						              'class' 		=> 'form-control input-sm col-md-4 col-lg-4',
						              //'style'       => 'width:100%;',
						              'placeholder' => 'First Name'
						           );
		$data['mn_attributes']   = array(
						              'name'        => 'middle_name',
						              'id'          => 'fn_name',
						              'value'       => $middle_name,
						              'class' 		=> 'form-control input-sm col-md-4 col-lg-4',
						              //'style'       => 'width:100%;',
						              'placeholder' => 'Middle Name'
						           );
		$data['ln_attributes']   = array(
						              'name'        => 'last_name',
						              'id'          => 'ln_name',
						              'value'       => $last_name,
						              'class' 		=> 'form-control input-sm col-md-4 col-lg-4',
						              //'style'       => 'width:100%;',
						              'placeholder' => 'Last Name'
						           );
		$data['nat_attributes']   = array(
						              'name'        => 'nationality',
						              'id'          => 'nationality',
						              'value'       => $nationality,
						              'class' 		=> 'form-control input-sm',
						              //'style'       => 'width:50%;',
						              'placeholder' => 'Nationality'
						           );	

		$this->load->view('layout/header', $data);
		$this->load->view('layout/custom_modal', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu', $data);
		$this->load->view('layout/right_sidemenu');
		$this->load->view('property_owner/property_owner_table', $data);		
		$this->load->view('layout/footer');	
	}

	 //function to handle callbacks
    public function datatable()
    {	
        $this->datatables->select('tb_property_owner_id,first_name, middle_name, last_name')
            ->unset_column('tb_property_owner_id')
            ->from('property_owner');
 
        echo $this->datatables->generate();
    }

	public function q_prop_owner(){
		$query = $this->property_owner_model->get_prop_owner();
		echo json_encode($query);
	}
	
	// tested 12/05/2014
	public function get_field_name_propertyfinder(){
		
		$fields =array();    
            
        $query = $this->db->list_fields('propertyfinder');
        foreach ($query as $field_meta) {           
            $fields[$field_meta] = $field_meta;           
        }    	
		return $fields;
	}	
	// tested 12/06/2014
	public function get_field_name_nationality(){
		
		$fields =array();    
            
        $query = $this->db->list_fields('nationality');
        foreach ($query as $field_meta) {           
            $fields[$field_meta] = $field_meta;           
        }    	
		return $fields;
	}
	// tested 12/06/2014
	public function get_field_name_address(){
		
		$fields =array();    
            
        $query = $this->db->list_fields('address');
        foreach ($query as $field_meta) {           
            $fields[$field_meta] = $field_meta;           
        }    	
		return $fields;
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

        	// get owner address
        	$address_list = $this->owner_addr_model->get_addr_info($property_owner_id);
        	$i = 1;
        	foreach($address_list as $key => $value) {
        		$addressname = $key.$i;
        		$data[$addressname] = $value;
        		$i.= 1;
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
			$data['city'] = null;
			$data['community'] = null;
			$data['subcommunity'] = null;
			$data['propertyfinder_id'] = $propertyfinder_id;
			
			$query_propertyfinder = $this->propertyfinder_model->get_propertyfinder_by_id($propertyfinder_id);

			if($query_propertyfinder) {
				foreach($query_propertyfinder as $propertyfinder){
					if(isset($propertyfinder['city'])) {
						$city   = $propertyfinder['city'];
						$data['city'] = $city;
						$data['city_id'] = $this->city_model->get_city_name_only($city);						
					}
					if(isset($propertyfinder['community'])) {
						$community   = $propertyfinder['community'];
						$data['community'] = $community;
						$data['community_id'] = $this->community_model-> get_community_name_only($community);	
					}
					if(isset($propertyfinder['subcommunity'])) {
						$subcommunity   = $propertyfinder['subcommunity'];	
						$data['subcommunity'] = $subcommunity;
						$data['subcommunity_id'] = $this->subcommunity_model->get_subcommunity_name_only($subcommunity);
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
							              'name'        => 'city_name',
							              'id'          => 'city',
							              'value'       => $city,
							              'class' 		=> 'form-control',
							              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
							              'placeholder' => 'City'
							           );
			$data['city_select_attributes'] = 'name="city" id="city" class="form-control"';
			
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
			echo 'redirect to property owner';
			//redirect('property_owner');
		}
	}
	/*order of saving
	1. - insert table address
	$tb_address_id = $this->db->insert_id();
	2. - insert table property_owner
	$tb_property_owner_id = $this->db->insert_id();
	3. - insert table nationality
	     insert_data includes $tb_address_id and $tb_property_owner_id
	4. - insert table propertyfinder
	$tb_propertyfinder_id = $this->db->insert_id();
	5. - insert table property owner/finder */
	public function insert_property_owner(){
		//1. - insert table address
		//$tb_address_id = $this->db->insert_id();

	}

	public function create_prop_owner() // insert lem form here
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
			$this->load->view('property_owner/property_owner_form', $data);		//<-- replace the form here
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

	public function update_owner_personal_details($property_owner_id = null, $propertyfinder_id =null) //working 12/7/2014
	{	
		$this->form_validation->set_rules('passport_no', 'Passport No');
		$this->form_validation->set_rules('first_name', 'First Name');
		$this->form_validation->set_rules('middle_name', 'Middle Name');
		$this->form_validation->set_rules('last_name', 'Last Name');

		if ($this->form_validation->run() == TRUE)
		{
			$city = $this->input->post('city_name');
			$city_name = $this->city_model->get_city_by_id($city);

			$community = $this->input->post('community');
			$community_name = $this->community_model->get_community_by_id($community);

			$subcommunity = $this->input->post('subcommunity');
			$subcommunity_name = $this->subcommunity_model->get_subcommunity_by_id($subcommunity);

			$property_owner_id = $this->input->post('property_owner_id');		
			
			$data = array(
				'passport_no' 	=> $this->input->post('passport_no'),
				'first_name' 	=> $this->input->post('first_name'),
				'middle_name' 	=> $this->input->post('middle_name'),
				'last_name'    	=> $this->input->post('last_name')			
			);

			$data_propertyfinder = array(
				'city' => $city_name,//$this->input->post('city_name'),
				'community' => $community_name,//$this->input->post('community'),
				'subcommunity' => $subcommunity_name,// $this->input->post('subcommunity'),
				're_property' => $this->input->post('re_property'),
				'property_type' => $this->input->post('building_name'),
				'unit_number' => $this->input->post('unit_number'),
				'developer_name' => $this->input->post('developer_name')
				//'description' => $this->input->post('description')
			);

			$this->property_owner_model->update_owner_personal($property_owner_id, $data);
			$this->propertyfinder_model->update_propertyfinder($propertyfinder_id, $data_propertyfinder);
			// create new property
			//$propertyfinder_id = $this->propertyfinder_model->create_propertyfinder();
			//$propertyfinder_id = $this->propertyfinder_model->create_propertyfinder();
			// create m2m record link
			//$this->property_owner_has_tb_propertyfinder_model->add_record($property_owner_id, $propertyfinder_id);			
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

	public function find_owner(){

		$first_name  =null;
		$middle_name = null;
		$last_name   = null;
		$nationality = null;
		$country_name = null;
		$telephone_no = null;
		$mobile_no = null;
		$fax_no = null;
		$email = null;

		$first_name  = $this->input->post('first_name');
		$middle_name = $this->input->post('middle_name');
		$last_name   = $this->input->post('last_name');
		$nationality = $this->input->post('nationality');
		$country_name = $this->input->post('country_name');
		$telephone_no = $this->input->post('telephone_no');
		$mobile_no = $this->input->post('mobile_no');
		$fax_no = $this->input->post('fax_no');
		$email = $this->input->post('email');		

		if(strlen($first_name)>0){
			//echo 'first not null';
			$first_name = "'%".$first_name."%'";
			//echo 'f: '.$first_name.'<br>';
		}

		if(strlen($middle_name)>0){
			//echo 'middle not null';
			$middle_name = "'%".$middle_name."%'";
			//echo 'f: '.$middle_name.'<br>';
		}

		//$sql = sl_sql_left_join_like();		
		$sql = "Select * FROM tb_property_owner_master_list";
		$query = $this->db->query($sql,array($first_name, $middle_name));
		echo json_encode($query->result_array());

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