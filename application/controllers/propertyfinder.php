<?php
/*   Created by  : Francis A.
     Date        : November 26, 2014
     Script Lines: All unless noted otherwise
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class propertyfinder extends CI_Controller {

	public function index()
	{		
		$data['staffs']      = $this->slcs_staff_model->get_staff();
		$data['depttasks']   = $this->dept_tasks_model->get_dept_tasks();
		$data['sections']    = $this->sections_model->get_sections();

		$data['staff_menus'] = $this->staff_menu_model->get_staff_menu();
		$data['children']    = $this->staff_menu_model->get_child_staff_menu();

		$data['city']        = $this->city_model->get_city();
		$data['community']   = $this->community_model->get_community();
		$data['subcommunity']= $this->subcommunity_model->get_subcommunity();
		$data['properties']  = $this->propertyfinder_model->get_propertyfinder();
		// title with word LIST will add optional JS
		$data['title']       = 'SoftLine | Property Finder List';	
		$data['propertyfinder_tb_fieldnames'] =$this->get_field_name_propertyfinder();

		$username = $this->session->userdata('username'); 			
		$data['username']    = ucfirst($username);	
		
		$this->load->helper('url');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu', $data);
		$this->load->view('layout/right_sidemenu');
		$this->load->view('propertyfinder/propertyfinder', $data);
		$this->load->view('layout/footer');	
	}

	public function add_propertyfinder()
	{		
		$data['staffs']      = $this->slcs_staff_model->get_staff();
		$data['depttasks']   = $this->dept_tasks_model->get_dept_tasks();
		$data['sections']    = $this->sections_model->get_sections();

		$data['staff_menus'] = $this->staff_menu_model->get_staff_menu();
		$data['children']    = $this->staff_menu_model->get_child_staff_menu();

		$data['city']        = $this->city_model->get_city();
		$data['community']   = $this->community_model->get_community();
		$data['subcommunity']= $this->subcommunity_model->get_subcommunity();
		$data['properties']    = $this->propertyfinder_model->get_propertyfinder();
		
		$data['title']       = 'SoftLine | Property Finder';	
		
		$username = $this->session->userdata('username'); 			
		$data['username']    = ucfirst($username);	
		
		$this->load->helper('url');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu', $data);
		$this->load->view('layout/right_sidemenu');
		$this->load->view('propertyfinder/propertyfinder_add_property_only', $data);
		$this->load->view('layout/footer');	
	}

	//public function toggle_fieldnames(){
		
	//}
	// tested 12/05/2014
	public function get_field_name_propertyfinder(){
		
		$fields =array();    
            
        $query = $this->db->list_fields('propertyfinder');
        foreach ($query as $field_meta) {           
            $fields[$field_meta] = $field_meta;           
        }    	
		return $fields;
	}

	// tested 12-05-2014
	public function query_propertyfinder(){
		// to solve the problem when the page do not send information upon select box change.
		// need to used ajax to send the data
		$city_id = $this->input->post('city');
		$community_id = $this->input->post('community_name');
		$subcommunity_id = $this->input->post('subcommunity_name');
		
		//echo '$city_id: '. $city_id;
		$city_name = null;
		$community_name = null;
		$subcommunity_name = null;		

		if($city_id){
			// change to city name
			$city_name = $this->city_model->get_city_by_id($city_id);
		}
		if($community_id){
			// change to community name
			$community_name = $this->community_model->get_community_by_id($community_id);

		}
		if($subcommunity_id){
			// change to community name
			$subcommunity_name = $this->subcommunity_model->get_subcommunity_by_id($subcommunity_id);
		}
		//$data['properties'] = null;	

		// find city, community, subcommunity name within property finder
		if($city_name){
			$query = $this->propertyfinder_model->get_propertyfinder_using_filter($city_name, $community_name, $subcommunity_name);					
			echo json_encode($query->result());			
		//} else {
		//	echo 'no $data[properties]';				
		}		
	}
	// tested 12-05-2014
	public function count_record_by_city(){
		$city_id = $this->input->post('city');
		$city_name = null;

		if($city_id){
			// change to city name
			$city_name = $this->city_model->get_city_by_id($city_id);
		}
		$query = $this->propertyfinder_model->get_propertyfinder_using_filter($city_name);
		$count = $query->num_rows();
        $city_count = array('city_count' => $count);

        echo json_encode($city_count);
	}
	// tested 12-05-2014
	public function count_record_by_community(){
		$city_id = $this->input->post('city');
		$community_id = $this->input->post('community');
		$city_name = null;
		$community_name = null;

		if($city_id){
			// change to city name
			$city_name = $this->city_model->get_city_by_id($city_id);
		}
		if($community_id){
			// change to community name
			$community_name = $this->community_model->get_community_by_id($community_id);
		}
		$query = $this->propertyfinder_model->get_propertyfinder_using_filter($city_name, $community_name);
		$count = $query->num_rows();
        $community_count = array('community_count' => $count);

        echo json_encode($community_count);
	}
	// tested 12-05-2014
	public function count_record_by_subcommunity(){
		$city_id = $this->input->post('city');
		$community_id = $this->input->post('community');
		$subcommunity_id = $this->input->post('subcommunity');
		
		$city_name = null;
		$community_name = null;
		$subcommunity_name = null;

		if($city_id){
			// change to city name
			$city_name = $this->city_model->get_city_by_id($city_id);
		}
		if($community_id){
			// change to community name
			$community_name = $this->community_model->get_community_by_id($community_id);
		}
		if($subcommunity_id){
			// change to community name
			$subcommunity_name = $this->subcommunity_model->get_subcommunity_by_id($subcommunity_id);
		}

		$query = $this->propertyfinder_model->get_propertyfinder_using_filter($city_name, $community_name, $subcommunity_name);
		$count = $query->num_rows();
        $subcommunity_count = array('subcommunity_count' => $count);

        echo json_encode($subcommunity_count);
	}
	// tested 12-05-2014
	//call to fill the second dropdown with the cities
    public function buildDropCities() {
        //set selected country id from POST
        $id_city = $this->input->post('city_name',TRUE);

        //run the query for the cities we specified earlier
        $districtData['districtDrop']=$this->city_model->getCityByCountry($id_city);
        
        $output = "<option value='all'>Select All</option>";

        foreach ($districtData['districtDrop']->result() as $row)
        {
            //here we build a dropdown item line for each query result
            $output .= "<option value='".$row->id."' ".set_select('community_name', $row->id).">".$row->community_name."</option>";
        }

        echo  $output;
    }
    // tested 12-05-2014
    //call to fill the second dropdown with the cities
    public function buildDropSubCom() {
        //set selected country id from POST
        $id_community = $this->input->post('community_name',TRUE);

        //run the query for the cities we specified earlier
        $districtData['districtDrop']=$this->city_model->getSubByComm($id_community);
        
        $output = "<option value='all'>Select All</option>";

        foreach ($districtData['districtDrop']->result() as $row)
        {
            //here we build a dropdown item line for each query result
            $output .= "<option value='".$row->id."' ".set_select('subcommunity_name', $row->id).">".$row->subcommunity_name."</option>";
        }

        echo  $output;
    }	
	// taken from http://php.net/manual/en/function.curl-exec.php
	public function curl_post($url, array $post = NULL, array $options = array()) { 
	    $defaults = array( 
	        CURLOPT_POST => 1, 
	        CURLOPT_HEADER => 0, 
	        CURLOPT_URL => $url, 
	        CURLOPT_FRESH_CONNECT => 1, 
	        CURLOPT_RETURNTRANSFER => 1, 
	        CURLOPT_FORBID_REUSE => 1, 
	        CURLOPT_TIMEOUT => 4, 
	        //CURLOPT_POSTFIELDS => http_build_query($post),
	        CURLOPT_SSL_VERIFYPEER => false // added by FMA
	    ); 

	    $ch = curl_init(); 
	    curl_setopt_array($ch, ($options + $defaults)); 
	    if( ! $result = curl_exec($ch)) 
	    { 
	        trigger_error(curl_error($ch)); 
	    } 
	    curl_close($ch); 
	    return $result; 
	} 
	// end taken from
	public function extract_option_value(){
		
		$data['sql'] = null;
		$url ="https://www.propertyfinder.ae/en/search?c=1&l=0.6&q=&t=&pf=&pt=&bf=&bt=&ft=";
		$html=file_get_contents($url);

		$dom = new DOMDocument();
		//$dom->strictErrorChecking = FALSE;
		@$dom->loadHTML($html);
		// grab all on the page
		$document = new DOMXPath($dom);
		//$nodes = $xpath->query('//h5/a');
		$options = $dom->documentElement->getElementsByTagName('option');
		
		// City
		$location_level_id_0 = $dom->getElementById('location_level_id_0');
		foreach($location_level_id_0->childNodes as $item){
			//echo $item->nodeValue.'<br>';
			if ($item->hasAttribute('selected') && $item->getAttribute('selected') === "selected") {
				 $city_selected_val = $item->nodeValue;

				//$data['sql'] = 'City Option nodevalue: '.$item->nodeValue.'<br>';
				///$data['sql'] .= 'City Option value: '.$item->getAttribute("value").'<br>';
				$city_option_value = $item->getAttribute("value");
			}
		}

		// Community
		// Community
		$location_level_id_1 = $dom->getElementById('location_level_id_1');
		//echo '-- Community <hr>';
		//$data['sql'] .= '<br>-- Community <hr>';
		foreach($location_level_id_1->childNodes as $item){
			//echo $item->nodeValue.'<br>';
			//$data['sql'] .= 'Option nodevalue: '.$item->nodeValue.'<br>';
			//$data['sql'] .= 'Option value: '.$item->getAttribute("value").'<br>';
			$community_option_value = $item->getAttribute("value");
			$data['sql'] .= "insert into tb_extradata_uae (city_option_value, community_option_value) values('".$city_option_value."','".$community_option_value."');<br>";		        		      
		}
		// View Data
		$data['staffs']     = $this->slcs_staff_model->get_staff();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();
		$data['sections']   = $this->sections_model->get_sections();
		$data['staff_menus']= $this->staff_menu_model->get_staff_menu();
		$data['children']   = $this->staff_menu_model->get_child_staff_menu();

		$data['title']      = 'SoftLine | Extract Data';	
		
		$username = $this->session->userdata('username'); 			
		$data['username']   = ucfirst($username);		

		$this->load->helper('url');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu', $data);
		$this->load->view('layout/right_sidemenu');
		$this->load->view('extract_data', $data);
		$this->load->view('layout/footer');	
	}

	public function extract_data(){
		// parse the html into a DOMDocument
		//$url ="https://www.propertyfinder.ae/en/search?c=1&l=2.664&q=&t=&pf=&pt=&bf=&bt=&ft=";
		//$url = $this->input->post('url'); // original

		// url manipulation
		// extract option value from tb_extradata_uae (city_option_value, community_option_value)
		$query = $this->extradata_model->get_data();
		$data['sql'] = null;
		$community_id = null;
		$subcommunity_id = null;
		$subcommunity_id_counter = null;
		// get next ID number
    	$current_id = $this->community_model->comm_id_max_val();
    	//var_dump(intval($current_id[0]->id));
    	$comm_next_id =intval($current_id[0]->id) +1;

    	$current_id = $this->subcommunity_model->subcomm_id_max_val();
    	//var_dump(intval($current_id[0]->id));
    	$subcomm_next_id =intval($current_id[0]->id) +1;	

		foreach(array_slice($query,17,100) as $row){
			$city_option_value = $row['city_option_value']+0;
			$community_option_value = $row['community_option_value']+0;
			$url = "https://www.propertyfinder.ae/en/search?c=".$city_option_value."&l=".$community_option_value."&q=&t=&pf=&pt=&bf=&bt=&ft="; 
			//$data['sql'] .= $city_option_value."-".$community_option_value."<br>";

			if(!empty($url)){
				//$html=file_get_contents($url);
				$html =  $this->curl_post($url); 
				$dom = new DOMDocument();
				//$dom->strictErrorChecking = FALSE;
				@$dom->loadHTML($html);
				// grab all on the page
				$document = new DOMXPath($dom);
				//$nodes = $xpath->query('//h5/a');
				$options = $dom->documentElement->getElementsByTagName('option');
				
				// City
				$location_level_id_0 = $dom->getElementById('location_level_id_0');		
				foreach($location_level_id_0->childNodes as $item){
					//echo $item->nodeValue.'<br>';
					if ($item->hasAttribute('selected') && $item->getAttribute('selected') === "selected") {
						 $city_selected_val = $item->nodeValue;

						 //$data['sql'] = 'City Option nodevalue: '.$item->nodeValue.'<br>';
						 ///$data['sql'] .= 'City Option value: '.$item->getAttribute("value").'<br>';
						 $city_option_value = $item->getAttribute("value");


						 //echo '$selected_val: '.$selected_val.'<br>';
						 // find City ID from database
						 $cities = $this->city_model->get_city();
					        foreach($cities as $city){
					       		if($city['city_name']==$city_selected_val) {
					       			//echo '$selected_val: '.$selected_val.'<br>';
					       			//echo '$city: '.$city['city_name'].'<br>';
					       			//echo '$city: '.$city['id'].'<br>';
					       			$city_id = $city['id'];
					       		}
					       }
					}
				}

				// Community
				$location_level_id_1 = $dom->getElementById('location_level_id_1');
				//echo '-- Community <hr>';
				//$data['sql'] .= '<br>-- Community <hr>';
				foreach($location_level_id_1->childNodes as $item){
					//echo $item->nodeValue.'<br>';
					//$data['sql'] .= 'Option nodevalue: '.$item->nodeValue.'<br>';
					//$data['sql'] .= 'Option value: '.$item->getAttribute("value").'<br>';
					$community_option_value = $item->getAttribute("value");
					//$data['sql'] .= "insert into tb_extradata_uae(`city_option_value`, `community_option_value`) values('".$city_option_value."', '".$community_option_value."'); -- ".$item->nodeValue."<br>";
					if ($item->hasAttribute('selected') && $item->getAttribute('selected') === "selected") {
						$comm_selected_val = $item->nodeValue;
						//echo '$Community-selected_val: '.$comm_selected_val.'<br>';
						// find Community ID from database
						$community   = $this->community_model->get_community();
						$checker = False;
						
				        foreach($community as $com){
				       		if($com['community_name']==$comm_selected_val && $com['city_id'] = $city_id) { // check community_name and city_id
				       			$checker = True;
				       			//echo '$selected_val: '.$comm_selected_val.'<br>';
				       			//echo '$com: '.$com['community_name'].'<br>';
				       			//echo '$com: '.$com['id'].'<br>';
				       			$community_id = $com['id'];
				       		} 
				        }
				        // No Data found in DB
				        if(!$checker){
				        	//echo '$checker: True<br>';
				        	if(is_null($community_id)) {
				        		$community_id = $comm_next_id;
				        	} else {
				        		++$community_id;
				        	}				        	
				        	//echo "insert into tb_community (id,city_id, community_name) values('".$comm_next_id."','".$city_id."','".$comm_selected_val."');<br>";		        		      
				        	$data['sql'] .= "insert into tb_community (id,city_id, community_name) values('".$community_id."','".$city_id."','".$comm_selected_val."');<br>";		        		      
				        }				        
				    }
				}

				// Sub-Community
				$location_level_id_2 = $dom->getElementById('location_level_id_2');
				//echo '-- Sub Community<hr>';
				//$data['sql'] .= '<br>-- Sub Community<hr>';
				
				foreach($location_level_id_2->childNodes as $item){
					//echo $item->nodeValue.'<br>';
					//$data['sql'] .= $item->nodeValue.'<br>';
					$id_counter = null; // id counter for no SubCommunity found in DB --> else statement

					if($subcommunity_id_counter){ // already contain a counter;
						++$subcommunity_id_counter;
						$subcomm_next_id = $subcommunity_id_counter;
						//$data['sql'] .= 'subcommunity_id_counter: '.$subcommunity_id_counter;							
					} else {							
			        	//$data['sql'] .= "Subcommunity_id is null: ".$subcommunity_id_counter;							
						$subcommunity_id_counter = $subcomm_next_id;
					}

					if ($item->hasAttribute('selected') && $item->getAttribute('selected') === "selected") {
						$subcomm_selected_val = $item->nodeValue;
						//echo '$sub-community-selected_val: '.$subcomm_selected_val.'<br>';

						$subcommunities = $this->subcommunity_model->get_subcommunity();
						$subchecker = False;  // initial && no sub-community found in DB
						
						foreach($subcommunities as $subcommunity){
							if($subcommunity['subcommunity_name']==$subcomm_selected_val && $subcommunity['community_id'] == $community_id) { // check subcommunity_name and community_id
								$subchecker = True;
				       			//echo '$subselected_val: '.$subcomm_selected_val.'<br>';
				       			//echo '$subcom: '.$subcommunity['subcommunity_name'].'<br>';
				       			//echo '$subcom: '.$subcommunity['id'].'<br>';
				       			//$data['sql'] .= '$subcom: '.$subcommunity['id'].'<br>';
				       			$subcommunity_id = $subcommunity['id'];
							}
						}
						// No Data found in DB
						if(!$subchecker){						
							//echo '$checker: True<br>';							
				        	//$data['sql'] .= 'is_null($subcommunity_id): '. is_null($subcommunity_id).'<br>';							
				        	$data['sql'] .= "insert into tb_subcommunity (id, community_id, subcommunity_name) values('".$subcommunity_id_counter."','".$community_id."','".$subcomm_selected_val."');<br>";		        		      
				        }
					} else {
						if($item->nodeValue!='Subcommunity'){							
							$data['sql'] .= "insert into tb_subcommunity (id, community_id, subcommunity_name) values('".$subcommunity_id_counter."','".$community_id."','".$item->nodeValue."');<br>";	
						}						
					}
				}
				// Property
				$location_level_id_3 = $dom->getElementById('location_level_id_3');
				//echo '-- Property <hr>';
				//$data['sql'] .= '<br>-- Property <hr>';
				foreach($location_level_id_3->childNodes as $item){
					if($item->nodeValue!='Property'){
						//echo 'Property: '. $item->nodeValue.'<br>';				
						//echo "insert into tb_propertyfinder (city, community, subcommunity, re_property) values('".$city_selected_val."','".$comm_selected_val."','".$subcomm_selected_val."','".$item->nodeValue."');<br>";		        		      	
						$data['sql'] .= "insert into tb_propertyfinder (city, community, subcommunity, re_property) values('".$city_selected_val."','".$comm_selected_val."','".$subcomm_selected_val."','".$item->nodeValue."');<br>";		        		      	
					}			
				}
			} else {
				$data['sql'] = 'No url found';
			}		
		}
		// View Data

		$data['staffs']     = $this->slcs_staff_model->get_staff();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();
		$data['sections']   = $this->sections_model->get_sections();
		$data['staff_menus']= $this->staff_menu_model->get_staff_menu();
		$data['children']   = $this->staff_menu_model->get_child_staff_menu();

		$data['title']      = 'SoftLine | Extract Data';	
		
		$username = $this->session->userdata('username'); 			
		$data['username']   = ucfirst($username);		

		$this->load->helper('url');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu', $data);
		$this->load->view('layout/right_sidemenu');
		$this->load->view('extract_data', $data);
		$this->load->view('layout/footer');		
	}

	public function get_city(){	
		if(isset($_GET['input_city'])){			
			$q = strtolower($_GET['input_city']);
			$query = $this->city_model->get_city($q);			
		}		
	}

	public function get_community(){
		var_dump('entered get_community');
		if(isset($_GET['term'])){
			$q = strtolower($_GET['term']);
			$this->community_model->get_community($q);
		}		
	}

	public function get_subcommunity(){
		if(isset($_GET['term'])){
			$q = strtolower($_GET['term']);
			$this->subcommunity_model->get_subcommunity($q);
		}		
	}

	public function create_property(){
		$data['staffs']     = $this->slcs_staff_model->get_staff();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();		
		$data['sections']   = $this->sections_model->get_sections();

		$data['staff_menus'] = $this->staff_menu_model->get_staff_menu();
		$data['children']    = $this->staff_menu_model->get_child_staff_menu();

		$data['city']        = $this->city_model->get_city();
		$data['community']   = $this->community_model->get_community();
		$data['subcommunity']= $this->subcommunity_model->get_subcommunity();
		$data['properties']  = $this->propertyfinder_model->get_propertyfinder();

		$username           = $this->session->userdata('username'); 					
		$data['username']   = ucfirst($username);	
		$data['title']      = 'SoftLine | Add Property';
		
		$this->form_validation->set_rules('city_name', 'City', 'required');
		$this->form_validation->set_rules('community_name', 'Community', 'required');
		$this->form_validation->set_rules('subcommunity_name', 'Sub-Community', 'required');
		$this->form_validation->set_rules('re_property_name', 'Property');

		if ($this->form_validation->run() == FALSE)
		{		
			$this->add_propertyfinder();
		}
		else
		{	
			if($query = $this->propertyfinder_model->create_propertyfinder_by_id()){				
				$this->add_propertyfinder();
			}
		}		
	}

	public function del($q){
		$this->propertyfinder_model->delete_propertyfinder($q);
		$this->index();
	}

	public function view_propertyfinder($re_property_id) {		

		$data['staffs']     = $this->slcs_staff_model->get_staff();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();		
		$data['sections']   = $this->sections_model->get_sections();

		$data['staff_menus'] = $this->staff_menu_model->get_staff_menu();
		$data['children']    = $this->staff_menu_model->get_child_staff_menu();

		$data['city']        = $this->city_model->get_city();
		$data['community']   = $this->community_model->get_community();
		$data['subcommunity']= $this->subcommunity_model->get_subcommunity();
		$data['properties']  = $this->propertyfinder_model->get_propertyfinder();
		$data['edit_property']  = $this->propertyfinder_model->get_propertyfinder($re_property_id);

		$username           = $this->session->userdata('username'); 					
		$data['username']   = ucfirst($username);	
		$data['title']      = 'SoftLine | Edit Property';	

		$this->load->helper('url');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu', $data);
		$this->load->view('layout/right_sidemenu');
		$this->load->view('propertyfinder/propertyfinder_edit', $data);
		$this->load->view('layout/footer');		
		
	}

	public function assign_permission()	{
		//$this->load->helper(array('form', 'url'));
		//$this->load->library('form_validation');		
		$data['staffs']     = $this->slcs_staff_model->get_staff();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();		
		$data['sections']   = $this->sections_model->get_sections();
		$data['staff_menus']= $this->staff_menu_model->get_staff_menu();
		$data['children']   = $this->staff_menu_model->get_child_staff_menu();

		$data['title']      = 'SoftLine | Staff Permission';	

		$username = $this->session->userdata('username'); 					
		$data['username'] = ucfirst($username);	

		$data = array(              
   		    'fanta' => ($this->input->post('fanta') === FALSE) ? 0 : 1,
        	//same for other checkboxes...
		); 
	
		if ($this->form_validation->run() == FALSE)
		{
			$this->index();			
		}
		else
		{
			if($query = $this->slcs_staff_model->create_staff()){
				$data['account_created'] = 'Your account has been created.<br>';

				redirect('slcs_staff/create_member');
			}
		}		
	}
	// tested by Lem 12/10/2014
	public function create_property_owner()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');		
		
		$data['staffs'] = $this->slcs_staff_model->get_staff();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();		
		$data['sections'] = $this->sections_model->get_sections();
		$data['staff_menus']=$this->staff_menu_model->get_staff_menu();
		$data['children']    = $this->staff_menu_model->get_child_staff_menu();
		
		$data['city']        = $this->city_model->get_city();
		$data['community']   = $this->community_model->get_community();
		$data['subcommunity']= $this->subcommunity_model->get_subcommunity();
		$data['properties']  = $this->propertyfinder_model->get_propertyfinder();
		
		$username = $this->session->userdata('username'); 					
		$data['username'] = ucfirst($username);	
		$data['title'] = 'SoftLine | Create Property Owner';
		
		//$this->form_validation->set_rules('faname', 'First name', 'trim|required|min_length[2]|alpha_space_hypen');
		//$this->form_validation->set_rules('miname', 'First name', 'trim|required|min_length[2]|alpha_space_hypen');
		//$this->form_validation->set_rules('laname', 'First name', 'trim|required|min_length[2]|alpha_space_hypen');
		//$this->form_validation->set_rules('na1', 'Nationality', 'trim|required');
		//$this->form_validation->set_rules('ppn1', 'Passport No.', 'trim|required');
		
		//$this->form_validation->set_rules('tel1', 'Tel. No.', 'num_space_hypen');
		$this->form_validation->set_rules('email1', 'Email address', 'valid_emails');
		$this->form_validation->set_rules('email2', 'Email address', 'valid_emails');
		$this->form_validation->set_rules('email3', 'Email address', 'valid_emails');
		$this->form_validation->set_rules('email4', 'Email address', 'valid_emails');
		
		//$this->form_validation->set_rules('city_name', 'City', 'required');
		//$this->form_validation->set_rules('community_name', 'Community', 'required');
		//$this->form_validation->set_rules('subcommunity_name', 'Sub-Community', 'required');
		//$this->form_validation->set_rules('re_property_name', 'Property');
		
		if ($this->form_validation->run() == TRUE){
		
				
				//$city_id         = $this->input->post('city_name');
				//$community_id    = $this->input->post('community_name');
				//$subcommunity_id = $this->input->post('subcommunity_name');

				//$city_name         = $this->city_model->get_city_by_id($city_id);		
				//$community_name    = $this->community_model->get_community_by_id($community_id);
				//$subcommunity_name = $this->subcommunity_model->get_subcommunity_by_id($subcommunity_id);
				//echo $city_name;
				//echo $community_name;
				//echo $subcommunity_name;
				$this->owner_addr_model->insert_addr();
				//redirect('propertyfinder/propertyfinder', $data); //IBALIK				
				
		}
		else{
				$data['staffs']      = $this->slcs_staff_model->get_staff();
				$data['depttasks']   = $this->dept_tasks_model->get_dept_tasks();
				$data['sections']    = $this->sections_model->get_sections();

				$data['staff_menus'] = $this->staff_menu_model->get_staff_menu();
				$data['children']    = $this->staff_menu_model->get_child_staff_menu();

				$data['city']        = $this->city_model->get_city();
				$data['community']   = $this->community_model->get_community();
				$data['subcommunity']= $this->subcommunity_model->get_subcommunity();
				$data['properties']  = $this->propertyfinder_model->get_propertyfinder();
				// title with word LIST will add optional JS
				$data['title']       = 'SoftLine | Create Property Owner';	
				$data['propertyfinder_tb_fieldnames'] =$this->get_field_name_propertyfinder();

				$username = $this->session->userdata('username'); 			
				$data['username']    = ucfirst($username);	
				
				$query = $this->city_model->get_city();       
			
        	$city_options = array();
        	$new = array();
        	foreach($query as $row){
            	$new[$row['city_name']] = $row['city_name'];
            	$city_options = array_merge($city_options, $new);
        	}

        	// get owner address
        	$address_list = $this->owner_addr_model->get_addr_info();
        	$i = 1;
        	foreach($address_list as $key => $value) {
        		$addressname = $key.$i;
        		$data[$addressname] = $value;
        		$i.= 1;
        	}

        	$data['city_options'] = $city_options;       // <-- start here

			$city = null;
			$community = null;
			$subcommunity = null;
			$re_property = null;
			$property_type = null;
			$street = null;
			$building_name = null;
			$unit_number = null;
			$developer_name = null;
			$data['city'] = null;
			$data['community'] = null;
			$data['subcommunity'] = null;
			$data['propertyfinder_id'] = null;
			
			$query_propertyfinder = null; 

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
			$data['street_name_attributes'] = array(
							              'name'        => 'street',
							              'id'          => 'street',
							              'value'       => $street,
							              'class' 		=> 'form-control',
							              //'style'       => 'width:100%; margin: 5px 0; padding: 5px 0;',
							              'placeholder' => 'Street'
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
				
				$this->load->helper('url');
				$this->load->view('layout/header', $data);
				$this->load->view('layout/topbar');
				$this->load->view('layout/admin_left_sidemenu', $data);
				$this->load->view('layout/right_sidemenu');
				$this->load->view('propertyfinder/propertyfinder_personal_details'); //added by prime 12/07/2014			
				$this->load->view('propertyfinder/propertyfinder_property_details'); //added by prime 12/07/2014
				$this->load->view('layout/footer');	
			}		
		
	}

}
?>