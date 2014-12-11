<?php 
/*   Created by  : Francis A.
     Date        : December 1, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class owner_addr_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_owner_addr($property_owner_id = null)
	{	
		if (is_null($property_owner_id))
		{
			$query = $this->db->get('property_owner_master_list');
			return $query->result();
		}
		$this->db->where('property_owner_master_list_id', $property_owner_id );
		$query = $this->db->get('property_owner_master_list');
		return $query->result();
	}

	public function view_owner_details($count_rows = null, $start = null, $offset = null)
	{
		// do not show record for deletion
		$this->db->where('for_deletion', 0);	
		$query = $this->db->get('property_owner_master_list');
		if($count_rows){			
			$counting_rows = count($query->result());
			return $counting_rows;
		} elseif ($start && $offset) {	
			// do not show record for deletion
			$this->db->where('for_deletion', 0);				
			$query = $this->db->get('property_owner_master_list', $start, $offset);
			return $query->result();
		} else {			
			return $query->result();
		}		
	}
	
	public function create_prop_owner() {

		$new_pro_owner_insert_data = array(
			'first_name'  => $this->input->post('first_name'),
			'middle_name' => $this->input->post('middle_name'),
			'last_name'   => $this->input->post('last_name')
		);

		$insert = $this->db->insert('nationality', $new_pro_owner_insert_data);
		return $insert;
	}

	public function delete_nationality($id) {
		$this->db->where('tb_nationality_id', $id);
		$this->db->delete('nationality');
	}

	public function update_nationality($id, $data) {		
		$this->db->where('tb_nationality_id', $id);
		$this->db->update('nationality', $data); 		
	}	

	public function get_addr_info($tb_property_owner_id = null){
		if (is_null($tb_property_owner_id))
		{
			$query = $this->db->get('address');
			return $query->result();
		}
		$this->db->where('tb_property_owner_id', $tb_property_owner_id );
		$query = $this->db->get('address');
		return $query;

	}	
	// tested Lem 12/10/2014
	public function insert_addr() {
	
		$new_prop_data = array( 'first_name' => $this->input->post('faname'),
								'middle_name' => $this->input->post('miname'),
								'last_name' => $this->input->post('laname')
							  );	
			
		$insert = $this->db->insert('property_owner', $new_prop_data);
		$last_prop_data_id1 = $this->db->insert_id();
				
		//Nationality
		$new_pro_data_na11 = $this->input->post('na1');		
		$new_prop_data_na1 = array('nationality' => $this->input->post('na1'),
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_na11) && $new_pro_data_na11) {
			 
				$this->db->insert('nationality', $new_prop_data_na1);
			}
			
		$new_pro_data_na22 = $this->input->post('na2');		
		$new_prop_data_na2 = array('nationality' => $this->input->post('na2'),
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_na22) && $new_pro_data_na22) {
			 
				$this->db->insert('nationality', $new_prop_data_na2);
			}
			
		$new_pro_data_na33 = $this->input->post('na3');		
		$new_prop_data_na3 = array('nationality' => $this->input->post('na3'),
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_na33) && $new_pro_data_na33) {
			 
				$this->db->insert('nationality', $new_prop_data_na3);
			}
			
		$new_pro_data_na44 = $this->input->post('na4');		
		$new_prop_data_na4 = array('nationality' => $this->input->post('na4'),
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_na44) && $new_pro_data_na44) {
			 
				$this->db->insert('nationality', $new_prop_data_na4);
			}
		
		//Passport
		$new_pro_data_ppn11 = $this->input->post('ppn1');		
		$new_prop_data_ppn1 = array('passport_no' => $this->input->post('ppn1'),
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_ppn11) && $new_pro_data_ppn11) {
			 
				$this->db->insert('passport', $new_prop_data_ppn1);
			}
			
		$new_pro_data_ppn22 = $this->input->post('ppn2');		
		$new_prop_data_ppn2 = array('passport_no' => $this->input->post('ppn2'),
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_ppn22) && $new_pro_data_ppn22) {
			 
				$this->db->insert('passport', $new_prop_data_ppn2);
			}
		
		$new_pro_data_ppn33 = $this->input->post('ppn3');		
		$new_prop_data_ppn3 = array('passport_no' => $this->input->post('ppn3'),
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_ppn33) && $new_pro_data_ppn33) {
			 
				$this->db->insert('passport', $new_prop_data_ppn3);
			}
		
		$new_pro_data_ppn44 = $this->input->post('ppn4');		
		$new_prop_data_ppn4 = array('passport_no' => $this->input->post('ppn4'),
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_ppn44) && $new_pro_data_ppn44) {
			 
				$this->db->insert('passport', $new_prop_data_ppn4);
			}
		
		//Owner Address 1		
		$new_pro_data_clist1 = $this->input->post('clist1');
		$new_pro_data_city1 = $this->input->post('city1');
		$new_pro_data_add11 = $this->input->post('add11');	
		$new_pro_data_add12 = $this->input->post('add12');	
		$new_pro_data_add13 = $this->input->post('add13');
		
		$new_prop_data_oa_11 = array('addressCountry' => $this->input->post('clist1'),
									 'addressCity' => $this->input->post('city1'),
									 'addressCommunity' => $this->input->post('add11'),
									 'addressSubcommunity' => $this->input->post('add12'),
									 'addressStreet' => $this->input->post('add13')
								    );
		$addarray = array('tb_property_owner_id'=>$last_prop_data_id1);
		$newoa1 = array_merge($new_prop_data_oa_11, $addarray);
		
		if (isset($new_pro_data_clist1) && $new_pro_data_clist1) 
		{
			$this->db->insert('address', $newoa1);
		} else if (isset($new_pro_data_city1) && $new_pro_data_city1)
		{
			$this->db->insert('address', $newoa1);
		} else if (isset($new_pro_data_add11) && $new_pro_data_add11)
		{
			$this->db->insert('address', $newoa1);
		} else if (isset($new_pro_data_add12) && $new_pro_data_add12)
		{
		$this->db->insert('address', $newoa1);
		} else if (isset($new_pro_data_add13) && $new_pro_data_add13)
		{
			$this->db->insert('address', $newoa1);
		}

		//Owner Address 2
		$new_pro_data_clist2 = $this->input->post('clist2');
		$new_pro_data_city2 = $this->input->post('city2');
		$new_pro_data_add21 = $this->input->post('add21');	
		$new_pro_data_add22 = $this->input->post('add22');	
		$new_pro_data_add23 = $this->input->post('add23');
		
		$new_prop_data_oa_22 = array('addressCountry' => $this->input->post('clist2'),
									 'addressCity' => $this->input->post('city2'),
									 'addressCommunity' => $this->input->post('add21'),
									 'addressSubcommunity' => $this->input->post('add22'),
									 'addressStreet' => $this->input->post('add23')
								    );
		$addarray2 = array('tb_property_owner_id'=>$last_prop_data_id1);
		$newoa2 = array_merge($new_prop_data_oa_22, $addarray2);
		
		if (isset($new_pro_data_clist2) && $new_pro_data_clist2) {
			$this->db->insert('address', $newoa2);
		}else if (isset($new_pro_data_city2) && $new_pro_data_city2){
				$this->db->insert('address', $newoa2);
			  } else if (isset($new_pro_data_add21) && $new_pro_data_add21){
						$this->db->insert('address', $newoa2);
					 } else if (isset($new_pro_data_add22) && $new_pro_data_add22){
								$this->db->insert('address', $newoa2);
							} else if (isset($new_pro_data_add23) && $new_pro_data_add23){
										$this->db->insert('address', $newoa2);
								   }		
		
		//Owner Address 3
		$new_pro_data_clist3 = $this->input->post('clist3');
		$new_pro_data_city3 = $this->input->post('city3');
		$new_pro_data_add31 = $this->input->post('add31');	
		$new_pro_data_add32 = $this->input->post('add32');	
		$new_pro_data_add33 = $this->input->post('add33');
		
		$new_prop_data_oa_33 = array('addressCountry' => $this->input->post('clist3'),
									 'addressCity' => $this->input->post('city3'),
									 'addressCommunity' => $this->input->post('add31'),
									 'addressSubcommunity' => $this->input->post('add32'),
									 'addressStreet' => $this->input->post('add33')
								    );
		$addarray3 = array('tb_property_owner_id'=>$last_prop_data_id1);
		$newoa3 = array_merge($new_prop_data_oa_33, $addarray3);
		
		if (isset($new_pro_data_clist3) && $new_pro_data_clist3) {
			$this->db->insert('address', $newoa3);
		}else if (isset($new_pro_data_city3) && $new_pro_data_city3){
				$this->db->insert('address', $newoa3);
			  } else if (isset($new_pro_data_add31) && $new_pro_data_add31){
						$this->db->insert('address', $newoa3);
					 } else if (isset($new_pro_data_add32) && $new_pro_data_add32){
								$this->db->insert('address', $newoa3);
							} else if (isset($new_pro_data_add33) && $new_pro_data_add33){
										$this->db->insert('address', $newoa3);
								   }
		
		//Owner Address 4
		$new_pro_data_clist4 = $this->input->post('clist4');
		$new_pro_data_city4 = $this->input->post('city4');
		$new_pro_data_add41 = $this->input->post('add41');	
		$new_pro_data_add42 = $this->input->post('add42');	
		$new_pro_data_add43 = $this->input->post('add43');
		
		$new_prop_data_oa_44 = array('addressCountry' => $this->input->post('clist4'),
									 'addressCity' => $this->input->post('city4'),
									 'addressCommunity' => $this->input->post('add41'),
									 'addressSubcommunity' => $this->input->post('add42'),
									 'addressStreet' => $this->input->post('add43')
								    );
		$addarray4 = array('tb_property_owner_id'=>$last_prop_data_id1);
		$newoa4 = array_merge($new_prop_data_oa_44, $addarray4);
		
		if (isset($new_pro_data_clist4) && $new_pro_data_clist4) {
			$this->db->insert('address', $newoa4);
		}else if (isset($new_pro_data_city4) && $new_pro_data_city4){
				$this->db->insert('address', $newoa4);
			  } else if (isset($new_pro_data_add41) && $new_pro_data_add41){
						$this->db->insert('address', $newoa4);
					 } else if (isset($new_pro_data_add42) && $new_pro_data_add42){
								$this->db->insert('address', $newoa4);
							} else if (isset($new_pro_data_add43) && $new_pro_data_add43){
										$this->db->insert('address', $newoa4);
								   }
		
		//Telephone
		$new_pro_data_tel11 = $this->input->post('tel1');		
		$new_prop_data_tel1 = array('telephone_no' => $new_pro_data_tel11,
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_tel11) && $new_pro_data_tel11) {
			 
				$this->db->insert('telephone_no', $new_prop_data_tel1);
			}
			
		$new_pro_data_tel22 = $this->input->post('tel2');		
		$new_prop_data_tel2 = array('telephone_no' => $new_pro_data_tel22,
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_tel22) && $new_pro_data_tel22) {
			 
				$this->db->insert('telephone_no', $new_prop_data_tel2);
			}
			
		$new_pro_data_tel33 = $this->input->post('tel3');		
		$new_prop_data_tel3 = array('telephone_no' => $new_pro_data_tel33,
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_tel33) && $new_pro_data_tel33) {
			 
				$this->db->insert('telephone_no', $new_prop_data_tel3);
			}
			
		$new_pro_data_tel44 = $this->input->post('tel4');		
		$new_prop_data_tel4 = array('telephone_no' => $new_pro_data_tel44,
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_tel44) && $new_pro_data_tel44) {
			 
				$this->db->insert('telephone_no', $new_prop_data_tel4);
			}
		
		
		//Fax
		$new_pro_data_faxn11 = $this->input->post('faxn1');		
		$new_prop_data_faxn1 = array('fax_no' => $new_pro_data_faxn11,
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_faxn11) && $new_pro_data_faxn11) {
			 
				$this->db->insert('fax_no', $new_prop_data_faxn1);
			}
			
		$new_pro_data_faxn22 = $this->input->post('faxn2');		
		$new_prop_data_faxn2 = array('fax_no' => $new_pro_data_faxn22,
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_faxn22) && $new_pro_data_faxn22) {
			 
				$this->db->insert('fax_no', $new_prop_data_faxn2);
			}
			
		$new_pro_data_faxn33 = $this->input->post('faxn3');		
		$new_prop_data_faxn3 = array('fax_no' => $new_pro_data_faxn33,
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_faxn33) && $new_pro_data_faxn33) {
			 
				$this->db->insert('fax_no', $new_prop_data_faxn3);
			}
			
		$new_pro_data_faxn44 = $this->input->post('faxn4');		
		$new_prop_data_faxn4 = array('fax_no' => $new_pro_data_faxn44,
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_faxn44) && $new_pro_data_faxn44) {
			 
				$this->db->insert('fax_no', $new_prop_data_faxn4);
			}
			
		//MobileNo
		$new_pro_data_mnum11 = $this->input->post('mnum1');		
		$new_prop_data_mnum1 = array('mobile_no' => $new_pro_data_mnum11,
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_mnum11) && $new_pro_data_mnum11) {
			 
				$this->db->insert('mobile_no', $new_prop_data_mnum1);
			}
		
		$new_pro_data_mnum22 = $this->input->post('mnum2');		
		$new_prop_data_mnum2 = array('mobile_no' => $new_pro_data_mnum22,
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_mnum22) && $new_pro_data_mnum22) {
			 
				$this->db->insert('mobile_no', $new_prop_data_mnum2);
			}
			
		$new_pro_data_mnum33 = $this->input->post('mnum3');		
		$new_prop_data_mnum3 = array('mobile_no' => $new_pro_data_mnum33,
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_mnum33) && $new_pro_data_mnum33) {
			 
				$this->db->insert('mobile_no', $new_prop_data_mnum3);
			}
			
		$new_pro_data_mnum44 = $this->input->post('mnum4');		
		$new_prop_data_mnum4 = array('mobile_no' => $new_pro_data_mnum44,
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_mnum44) && $new_pro_data_mnum44) {
			 
				$this->db->insert('mobile_no', $new_prop_data_mnum4);
			}
		
		//Email
		$new_pro_data_email11 = $this->input->post('email1');		
		$new_prop_data_email1 = array('email' => $new_pro_data_email11,
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_email11) && $new_pro_data_email11) {
			 
				$this->db->insert('email', $new_prop_data_email1);
			}
		
		$new_pro_data_email22 = $this->input->post('email2');		
		$new_prop_data_email2 = array('email' => $new_pro_data_email22,
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_email22) && $new_pro_data_email22) {
			 
				$this->db->insert('email', $new_prop_data_email2);
			}
		
		$new_pro_data_email33 = $this->input->post('email3');		
		$new_prop_data_email3 = array('email' => $new_pro_data_email33,
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_email33) && $new_pro_data_email33) {
			 
				$this->db->insert('email', $new_prop_data_email3);
			}
			
		$new_pro_data_email44 = $this->input->post('email4');		
		$new_prop_data_email4 = array('email' => $new_pro_data_email44,
								    'tb_property_owner_id' => $last_prop_data_id1
								  );
            if (isset($new_pro_data_email44) && $new_pro_data_email44) {
			 
				$this->db->insert('email', $new_prop_data_email4);
			}
			
		//Property Details
		$city_id         = $this->input->post('city_name');
		$community_id    = $this->input->post('community_name');
		$subcommunity_id = $this->input->post('subcommunity_name');
		$city_name         = $this->city_model->get_city_by_id($city_id);		
		$community_name    = $this->community_model->get_community_by_id($community_id);
		$subcommunity_name = $this->subcommunity_model->get_subcommunity_by_id($subcommunity_id);
		
		$test = $this->input->post('city_name'); // OK
		$test1 = $this->input->post('community'); // OK
		$test2 = $this->input->post('subcommunity'); // OK
		$test3 = $this->input->post('pname'); // OK Property Name
		//$test4 = $this->input->post('ptype1'); // OK Property Type1 // WLA PNG DB
		//$test5 = $this->input->post('ptype2'); // OK Property Type2 // WLA PNG DB
		//$test6 = $this->input->post('strt'); // OK Street			// WLA PNG DB
		$test7 = $this->input->post('bldg'); // OK Building
		$test8 = $this->input->post('unitno'); // OK Unit
		$test9 = $this->input->post('dev'); // OK Developer
		$test10 = $this->input->post('note'); // OK Note
		
		$new_prop_data_details = array('city' => $city_name ,
									 'community' => $community_name ,
									 'subcommunity' => $subcommunity_name,
									 're_property' => $test3,
									 'property_type' => '',
									 'building_name' => $test7,
									 'unit_number' => $test8,
									 'developer_name' => $test9,
									 'description' => $test10
								    );
		
		if (isset($test) && $test) {
			$this->db->insert('propertyfinder', $new_prop_data_details);
		}else if (isset($test1) && $test1){
			$this->db->insert('propertyfinder', $new_prop_data_details);
		} else if (isset($test2) && $test2){
			$this->db->insert('propertyfinder', $new_prop_data_details);
		} else if (isset($test3) && $test3){
			$this->db->insert('propertyfinder', $new_prop_data_details);
		} else if (isset($test7) && $test7){
			$this->db->insert('propertyfinder', $new_prop_data_details);
		} else if (isset($test8) && $test8){
			$this->db->insert('propertyfinder', $new_prop_data_details);
		} else if (isset($test9) && $test9){
			$this->db->insert('propertyfinder', $new_prop_data_details);
		} else if (isset($test9) && $test9){
			$this->db->insert('propertyfinder', $new_prop_data_details);
		} else if (isset($test10) && $test10){
			$this->db->insert('propertyfinder', $new_prop_data_details);
		}
	
		return $last_prop_data_id1;	
	}
}