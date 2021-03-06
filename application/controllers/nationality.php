<?php
/*   Created by  : Francis A.
     Date        : December 1, 2014
     Script Lines: All unless noted otherwise
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Nationality extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// all model were autoloaded
	}
	
	public function view_details($property_owner_id, $tb_property_id, $tb_nationality_id)
	{	
		//if $id is null redirect to index
		//if(is_numeric($nationality_id) && is_numeric($property_owner_id)){
			// database query 
			$data['staffs']    = $this->slcs_staff_model->get_staff();
			$data['depttasks'] = $this->dept_tasks_model->get_dept_tasks();
			$data['sections']  = $this->sections_model->get_sections();
			$data['staff_menus']=$this->staff_menu_model->get_staff_menu();
			// custom data
			$data['title']     = 'SoftLine | Property Owner';	
			
			$username          = $this->session->userdata('username'); 						// TO DO: Refractor this
			$data['username']  = ucfirst($username);	
			$data['property_owner_id'] = $property_owner_id;

			$telephone_no= null;
			$mobile_no   = null;
			$fax_no      = null;
			$email       = null;
			$address     = null;

			
			$nationality = $this->nationality_model->get_nationality($tb_nationality_id);
			if(isset($nationality['telephone_no'])) {
				$telephone_no = $nationality['telephone_no'];	
			}
			if(isset($nationality['mobile_no'])) {
				$mobile_no    = $nationality['mobile_no'];	
			}
			if(isset($nationality['fax_no'])) {
				$fax_no       = $nationality['fax_no'];	
			}
			if(isset($nationality['email'])) {
				$email        = $nationality['email'];	
			}
			if(isset($nationality['address_id'])) {
				$address      = $nationality['address_id'];	
			}

			$passport_no = null;
			$first_name  = null;
			$middle_name = null;
			$last_name   = null;
			
			$parents       	    = $this->property_owner_model->get_prop_owner($property_owner_id);	
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

			$data['form_attributes']  = array('class' => 'form inline', 'role' => 'form');
			$data['passport_no_attr'] = array(
							              'name'        => 'passport_no',
							              'id'          => 'passport_no',
							              'value'       => $passport_no,				              
							              'style'       => 'width:50%;',//
							              'class' 		=> 'form-control ',
							              'placeholder' => 'Passport No',
							              'readOnly'    => 'readonly'
							           );
			$data['fn_attributes']    = array(
							              'name'        => 'first_name',
							              'id'          => 'fn_name',
							              'value'       => $first_name,						              
							              'class' 		=> 'form-control',
							              'style'       => 'width:100%;',
							              'placeholder' => 'First Name',
							              'readOnly'    => 'readonly'
							           );
			$data['mn_attributes']    = array(
							              'name'        => 'middle_name',
							              'id'          => 'fn_name',
							              'value'       => $middle_name,
							              'class' 		=> 'form-control',
							              'style'       => 'width:100%;',
							              'placeholder' => 'Middle Name',
							              'readOnly'    => 'readonly'

							           );
			$data['ln_attributes']    = array(
							              'name'        => 'last_name',
							              'id'          => 'ln_name',
							              'value'       => $last_name,
							              'class' 		=> 'form-control',
							              'style'       => 'width:100%;',
							              'placeholder' => 'Last Name',
							              'readOnly'    => 'readonly'
							           );
			$data['tel_attributes']   = array(
							              'name'        => 'telephone_no',
							              'id'          => 'telephone_no',
							              'value'       => $telephone_no,
							              'class' 		=> 'form-control',
							              'style'       => 'width:100%;',
							              'placeholder' => 'Telephone No'
							           );		
			$data['mobile_attributes']= array(
							              'name'        => 'mobile_no',
							              'id'          => 'mobile_no',
							              'value'       => $mobile_no,
							              'class' 		=> 'form-control',
							              'style'       => 'width:100%;',
							              'placeholder' => 'Mobile No'
							           );		
			$data['fax_attributes']   = array(
							              'name'        => 'fax_no',
							              'id'          => 'fax_no',
							              'value'       => $fax_no,
							              'class' 		=> 'form-control',
							              'style'       => 'width:100%;',
							              'placeholder' => 'Fax No'
							           );		
			$data['email_attributes'] = array(
							              'name'        => 'email',
							              'id'          => 'email',
							              'value'       => $email,
							              'class' 		=> 'form-control',
							              'style'       => 'width:100%;',
							              'placeholder' => 'Email'
							           );	

			$address = null;
			$postalcode = null;
			$postofficeboxnumber = null;			
			$addresssubcommunity = null;
			$addresscommunity = null;
			$addresscity = null;
			$addresscountry = null;

			if(isset($nationality['address_id'])) {				
				$this->load->database();
				$this->db->where('tb_address_id', $nationality['address_id']);
				$address_query = $this->db->get('address');	

				if($address_query->num_rows > 0){
					$row = $address_query->row();
					$address = $row->address;
					$postalcode = $row->postalcode;
					$postofficeboxnumber = $row->postofficeboxnumber;					
					$addresssubcommunity = $row->addressSubcommunity;
					$addresscommunity = $row->addressCommunity;
					$addresscity = $row->addressCity;
					$addresscountry = $row->addressCountry;
				
			}

			
			$data['addr_attributes'] = array(
							              'name'        => 'address',
							              'id'          => 'address',
							              'value'       => $address,
							              'class' 		=> 'form-control',
							              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
							              'placeholder' => 'Street Address'
							           );	
			$data['postalcode_attributes'] = array(
							              'name'        => 'postalcode',
							              'id'          => 'postalcode',
							              'value'       => $postalcode,
							              'class' 		=> 'form-control',
							              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
							              'placeholder' => 'Postal Code'
							           );	
			$data['postalboxno_attributes'] = array(
							              'name'        => 'postofficeboxnumber',
							              'id'          => 'postofficeboxnumber',
							              'value'       => $postofficeboxnumber,
							              'class' 		=> 'form-control',
							              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
							              'placeholder' => 'Postal Office Box Number'
							           );
			$data['addr_subcommunity_attributes'] = array(
						              'name'        => 'addresssubcommunity',
						              'id'          => 'addresssubcommunity',
						              'value'       => $addresssubcommunity,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Address Subcommunity'
						           );

			$data['addr_community_attributes'] = array(
						              'name'        => 'addresscommunity',
						              'id'          => 'addresscommunity',
						              'value'       => $addresscommunity,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Address Community'
						           );

			$data['addr_city_attributes'] = array(
						              'name'        => 'addresscity',
						              'id'          => 'addresscity',
						              'value'       => $addresscity,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Address City'
						           );
			// form dropdown Country
			$country_query = $this->country_model->get_country(); 
            
            $country_options = array();
        	$new = array();
            foreach($country_query as $row){
            	$new[$row['country_name']] = $row['country_name'];
            	$country_options = array_merge($country_options, $new);
        	}
        	$data['country_options'] = $country_options;
        	$data['country_select_attributes'] = 'name="addresscountry" id="addresscountry" class="form-control"';
        	$data['addresscountry'] = $addresscountry;
        	// end form dropdown Country

			$data['addr_country_attributes'] = array(
							              'name'        => 'addresscountry',
							              'id'          => 'addresscountry',
							              'value'       => $addresscountry,
							              'class' 		=> 'form-control',
							              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
							              'placeholder' => 'Address Country'
							           );	

			$this->load->view('layout/header', $data);
			$this->load->view('layout/topbar');
			$this->load->view('layout/admin_left_sidemenu', $data);
			$this->load->view('layout/right_sidemenu');
			$this->load->view('nationality/nationality_form_edit', $data);		
			$this->load->view('layout/footer');	
		//} else {
		//	redirect('property_owner');
		}
	}

	
	public function create_page($property_owner_id)
	{		
		$data['staffs']     = $this->slcs_staff_model->get_staff();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();		
		$data['sections']   = $this->sections_model->get_sections();
		$data['staff_menus']= $this->staff_menu_model->get_staff_menu();

		$username           = $this->session->userdata('username'); 					
		$data['username']   = ucfirst($username);	
		$data['title']      = 'SoftLine | Add Property Owner';

		$data['parents']       = $this->property_owner_model->get_prop_owner();	
		//$data['nationalities'] = $this->nationality_model->get_nationality();		
		$data['nationalities'] = $this->owner_addr_model->get_owner_addr();
		
		$telephone_no= null;
		$mobile_no   = null;
		$fax_no      = null;
		$email       = null;
		$address     = null;
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

		$data['form_attributes']  = array('class' => 'form inline', 'role' => 'form');
		$data['passport_no_attr'] = array(
						              'name'        => 'passport_no',
						              'id'          => 'passport_no',
						              'value'       => $passport_no,				              
						              'style'       => 'width:50%;',//
						              'class' 		=> 'form-control ',
						              'placeholder' => 'Passport No'
						           );
		$data['fn_attributes']    = array(
						              'name'        => 'first_name',
						              'id'          => 'fn_name',
						              'value'       => $first_name,						              
						              'class' 		=> 'form-control',
						              'style'       => 'width:100%;',
						              'placeholder' => 'First Name'
						           );
		$data['mn_attributes']    = array(
						              'name'        => 'middle_name',
						              'id'          => 'fn_name',
						              'value'       => $middle_name,
						              'class' 		=> 'form-control',
						              'style'       => 'width:100%;',
						              'placeholder' => 'Middle Name'
						           );
		$data['ln_attributes']    = array(
						              'name'        => 'last_name',
						              'id'          => 'ln_name',
						              'value'       => $last_name,
						              'class' 		=> 'form-control',
						              'style'       => 'width:100%;',
						              'placeholder' => 'Last Name'
						           );		
		$data['tel_attributes']   = array(
						              'name'        => 'telephone_no',
						              'id'          => 'telephone_no',
						              'value'       => $telephone_no,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 10px 0; padding: 10px 0;',
						              'placeholder' => 'Telephone No'
						           );		
		$data['mobile_attributes']= array(
						              'name'        => 'mobile_no',
						              'id'          => 'mobile_no',
						              'value'       => $mobile_no,
						              'class' 		=> 'form-control',
						             //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Mobile No'
						           );		
		$data['fax_attributes']   = array(
						              'name'        => 'fax_no',
						              'id'          => 'fax_no',
						              'value'       => $fax_no,
						              'class' 		=> 'form-control',
						               //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Fax No'
						           );		
		$data['email_attributes'] = array(
						              'name'        => 'email',
						              'id'          => 'email',
						              'value'       => $email,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Email'
						           );
		$address = null;
		$postalcode = null;
		$postofficeboxnumber = null;
		$addresscity = null;
		$addresscommunity = null;
		$addresssubcommunity = null;
		$addresscountry = null;

		// form dropdown Country
		$country_query = $this->country_model->get_country(); 
        
        $country_options = array();
    	$new = array();
        foreach($country_query as $row){
        	$new[$row['country_name']] = $row['country_name'];
        	$country_options = array_merge($country_options, $new);
    	}
    	$data['country_options'] = $country_options;
    	$data['country_select_attributes'] = 'name="addresscountry" id="addresscountry" class="form-control"';
    	$data['addresscountry'] = $addresscountry;
    	// end form dropdown Country

		$data['addr_attributes'] = array(
						              'name'        => 'address',
						              'id'          => 'address',
						              'value'       => $address,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Street Address'
						           );	
		$data['postalcode_attributes'] = array(
						              'name'        => 'postalcode',
						              'id'          => 'postalcode',
						              'value'       => $postalcode,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Postal Code'
						           );	
		$data['postalboxno_attributes'] = array(
						              'name'        => 'postofficeboxnumber',
						              'id'          => 'postofficeboxnumber',
						              'value'       => $postofficeboxnumber,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Postal Office Box Number'
						           );
	
		$data['addr_subcommunity_attributes'] = array(
						              'name'        => 'addresssubcommunity',
						              'id'          => 'addresssubcommunity',
						              'value'       => $addresssubcommunity,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Address Subcommunity'
						           );

		$data['addr_community_attributes'] = array(
						              'name'        => 'addresscommunity',
						              'id'          => 'addresscommunity',
						              'value'       => $addresscommunity,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Address Community'
						           );

		$data['addr_city_attributes'] = array(
						              'name'        => 'addresscity',
						              'id'          => 'addresscity',
						              'value'       => $addresscity,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Address City'
						           );

		$data['addr_country_attributes'] = array(
						              'name'        => 'addresscountry',
						              'id'          => 'addresscountry',
						              'value'       => $addresscountry,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Address Country'
						           );
		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu', $data);
		$this->load->view('layout/right_sidemenu');
		$this->load->view('nationality/nationality_form_add', $data);		
		$this->load->view('layout/footer');	
	}

	public function create_owner_contact_details($property_owner_id) {


		$this->form_validation->set_rules('passport_no', 'Passport No', 'required');
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('middle_name', 'Middle Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');

		$this->form_validation->set_rules('telephone_no', 'Telephone No');
		$this->form_validation->set_rules('mobile_no', 'Mobile No');
		$this->form_validation->set_rules('fax_no', 'Fax No');
		$this->form_validation->set_rules('email', 'Email');

		$this->form_validation->set_rules('address', 'Street Address');
		$this->form_validation->set_rules('postalcode', 'postalcode');
		$this->form_validation->set_rules('postofficeboxnumber', 'Post Office Box No');
		$this->form_validation->set_rules('addressregion', 'Region');
		$this->form_validation->set_rules('addresslocality', 'Locality');
		$this->form_validation->set_rules('addresscountry', 'Country');

		if ($this->form_validation->run() == FALSE)
		{				
			//$this->create_page();
			redirect('property_owner/view_property_owner/'.$property_owner_id);
		}
		else
		{
			if($query = $this->nationality_model->create_prop_owner($property_owner_id)){
				// fetch new inserted property owner id and redirect to view
				redirect('property_owner/view_property_owner/'.$property_owner_id);
			}
		}		
	}

	public function update_owner_contact_details($property_owner_id, $propertyfinder_id, $tb_nationality_id = null)
	{		
		$data['staffs']     = $this->slcs_staff_model->get_staff();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();		
		$data['sections']   = $this->sections_model->get_sections();
		$data['staff_menus']= $this->staff_menu_model->get_staff_menu();

		$username           = $this->session->userdata('username'); 					
		$data['username']   = ucfirst($username);	
		$data['title']      = 'SoftLine | Add Property Owner';

		$data['parents']    = $this->property_owner_model->get_prop_owner();	
		$nationalities      = $this->nationality_model->get_nationality($tb_nationality_id);		
		
		
		$telephone_no= null;
		$mobile_no   = null;
		$fax_no      = null;
		$email       = null;
		$address     = null;
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

		$data['form_attributes']  = array('class' => 'form inline', 'role' => 'form');
		$data['passport_no_attr'] = array(
						              'name'        => 'passport_no',
						              'id'          => 'passport_no',
						              'value'       => $passport_no,				              
						              'style'       => 'width:50%;',//
						              'class' 		=> 'form-control ',
						              'placeholder' => 'Passport No'
						           );
		$data['fn_attributes']    = array(
						              'name'        => 'first_name',
						              'id'          => 'fn_name',
						              'value'       => $first_name,						              
						              'class' 		=> 'form-control',
						              'style'       => 'width:100%;',
						              'placeholder' => 'First Name'
						           );
		$data['mn_attributes']    = array(
						              'name'        => 'middle_name',
						              'id'          => 'fn_name',
						              'value'       => $middle_name,
						              'class' 		=> 'form-control',
						              'style'       => 'width:100%;',
						              'placeholder' => 'Middle Name'
						           );
		$data['ln_attributes']    = array(
						              'name'        => 'last_name',
						              'id'          => 'ln_name',
						              'value'       => $last_name,
						              'class' 		=> 'form-control',
						              'style'       => 'width:100%;',
						              'placeholder' => 'Last Name'
						           );	

		if(isset($nationalities['telephone_no'])) {
			$telephone_no = $nationalities['telephone_no'];
		}	
		if(isset($nationalities['mobile_no'])) {
			$mobile_no = $nationalities['mobile_no'];
		}	
		if(isset($nationalities['fax_no'])) {
			$fax_no = $nationalities['fax_no'];
		}	
		if(isset($nationalities['email'])) {
			$email = $nationalities['email'];
		}	
		$data['tel_attributes']   = array(
						              'name'        => 'telephone_no',
						              'id'          => 'telephone_no',
						              'value'       => $telephone_no,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 10px 0; padding: 10px 0;',
						              'placeholder' => 'Telephone No'
						           );		
		$data['mobile_attributes']= array(
						              'name'        => 'mobile_no',
						              'id'          => 'mobile_no',
						              'value'       => $mobile_no,
						              'class' 		=> 'form-control',
						             //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Mobile No'
						           );		
		$data['fax_attributes']   = array(
						              'name'        => 'fax_no',
						              'id'          => 'fax_no',
						              'value'       => $fax_no,
						              'class' 		=> 'form-control',
						               //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Fax No'
						           );		
		$data['email_attributes'] = array(
						              'name'        => 'email',
						              'id'          => 'email',
						              'value'       => $email,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Email'
						           );
		$address = null;
		$postalcode = null;
		$postofficeboxnumber = null;
		$addresscity = null;
		$addresscommunity = null;
		$addresssubcommunity = null;
		$addresscountry = null;

		$this->load->database();
		$this->db->where('tb_address_id', $nationalities['address_id']);
		$address_query = $this->db->get('address');

		if($address_query->num_rows > 0){
			$row = $address_query->row();
			$address = $row->address;
			$postalcode = $row->postalcode;
			$postofficeboxnumber = $row->postofficeboxnumber;			
			$addresssubcommunity = $row->addressSubcommunity;
			$addresscommunity = $row->addressCommunity;
			$addresscity = $row->addressCity;
			$addresscountry = $row->addressCountry;
		}

		$data['addr_attributes'] = array(
						              'name'        => 'address',
						              'id'          => 'address',
						              'value'       => $address,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Street Address'
						           );	
		$data['postalcode_attributes'] = array(
						              'name'        => 'postalcode',
						              'id'          => 'postalcode',
						              'value'       => $postalcode,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Postal Code'
						           );	
		$data['postalboxno_attributes'] = array(
						              'name'        => 'postofficeboxnumber',
						              'id'          => 'postofficeboxnumber',
						              'value'       => $postofficeboxnumber,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Postal Office Box Number'
						           );
		$data['addr_subcommunity_attributes'] = array(
						              'name'        => 'addresssubcommunity',
						              'id'          => 'addresssubcommunity',
						              'value'       => $addresssubcommunity,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Address Subcommunity'
						           );

		$data['addr_community_attributes'] = array(
						              'name'        => 'addresscommunity',
						              'id'          => 'addresscommunity',
						              'value'       => $addresscommunity,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Address Community'
						           );

		$data['addr_city_attributes'] = array(
						              'name'        => 'addresscity',
						              'id'          => 'addresscity',
						              'value'       => $addresscity,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Address City'
						           );

		$data['addr_country_attributes'] = array(
						              'name'        => 'addresscountry',
						              'id'          => 'addresscountry',
						              'value'       => $addresscountry,
						              'class' 		=> 'form-control',
						              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
						              'placeholder' => 'Address Country'
						           );

		$this->form_validation->set_rules('passport_no', 'Passport No');
		$this->form_validation->set_rules('first_name', 'First Name');
		$this->form_validation->set_rules('middle_name', 'Middle Name');
		$this->form_validation->set_rules('last_name', 'Last Name');

		$this->form_validation->set_rules('telephone_no', 'Telephone No');
		$this->form_validation->set_rules('mobile_no', 'Mobile No');
		$this->form_validation->set_rules('fax_no', 'Fax No');
		$this->form_validation->set_rules('email', 'Email');

		$this->form_validation->set_rules('address', 'Street Address');
		$this->form_validation->set_rules('postalcode', 'postalcode');
		$this->form_validation->set_rules('postofficeboxnumber', 'Post Office Box No');
		$this->form_validation->set_rules('addresscity', 'City');
		$this->form_validation->set_rules('addresscommunity', 'Community');
		$this->form_validation->set_rules('addresssubcommunity', 'Subcommunity');
		$this->form_validation->set_rules('addresscountry', 'Country');

		if ($this->form_validation->run() == FALSE)
		{				
			//$this->load->view('layout/header', $data);
			//$this->load->view('layout/topbar');
			//$this->load->view('layout/admin_left_sidemenu', $data);
			//$this->load->view('layout/right_sidemenu');
			//$this->load->view('nationality/nationality_form_edit', $data);		
			//$this->load->view('layout/footer');
			redirect('nationality/view_property_owner/'.$property_owner_id.'/'.$propertyfinder_id.'/'.$tb_nationality_id );
		}
		else
		{
			if($query = $this->nationality_model->update_nationality($tb_nationality_id)){
				// fetch new inserted property owner id and redirect to view				
				redirect('property_owner/view_property_owner/'.$property_owner_id.'/'.$propertyfinder_id);
			}
		}		
	}

	public function del_nat($property_owner_id, $nationality_id, $propertyfinder_id){		
		$this->nationality_model->delete_nationality($nationality_id);
		
		redirect('property_owner/view_property_owner/'.$property_owner_id.'/'.$propertyfinder_id);
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
}