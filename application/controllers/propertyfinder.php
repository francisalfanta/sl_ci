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
		$data['properties']    = $this->propertyfinder_model->get_propertyfinder();
		
		$data['title']       = 'SoftLine | Property Finder';	
		
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

	public function extract_data($url = false){
		// parse the html into a DOMDocument
		$html=file_get_contents("https://www.propertyfinder.ae/en/search?c=1&l=2.660&q=&t=&pf=&pt=&bf=&bt=&ft=" );
		//$html=file_get_contents("$url");
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
		echo '-- Community <hr>';
		foreach($location_level_id_1->childNodes as $item){
			//echo $item->nodeValue.'<br>';
			if ($item->hasAttribute('selected') && $item->getAttribute('selected') === "selected") {
				$comm_selected_val = $item->nodeValue;
				//echo '$Community-selected_val: '.$comm_selected_val.'<br>';
				// find Community ID from database
				$community   = $this->community_model->get_community();
				$checker = False;
				$community_id = null;
		        foreach($community as $com){
		       		if($com['community_name']==$comm_selected_val) {
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
		        	// get next ID number
		        	$current_id = $this->community_model->comm_id_max_val();
		        	//var_dump(intval($current_id[0]->id));
		        	$comm_next_id =intval($current_id[0]->id) +1;
		        	echo "insert into tb_community (id,city_id, community_name) values('".$comm_next_id."','".$city_id."','".$comm_selected_val."');<br>";		        		      
		        }
		        
		    }
		}

		// Sub-Community
		$location_level_id_2 = $dom->getElementById('location_level_id_2');
		echo '-- Sub Community<hr>';
		foreach($location_level_id_2->childNodes as $item){
			//echo $item->nodeValue.'<br>';
			if ($item->hasAttribute('selected') && $item->getAttribute('selected') === "selected") {				
				$subcomm_selected_val = $item->nodeValue;
				//echo '$sub-community-selected_val: '.$subcomm_selected_val.'<br>';

				$subcommunities = $this->subcommunity_model->get_subcommunity();
				$subchecker = False;
				foreach($subcommunities as $subcommunity){
					if($subcommunity['subcommunity_name']==$subcomm_selected_val) {
						$subchecker = True;
		       			//echo '$subselected_val: '.$subcomm_selected_val.'<br>';
		       			//echo '$subcom: '.$subcommunity['subcommunity_name'].'<br>';
		       			//echo '$subcom: '.$subcommunity['id'].'<br>';
		       			$subcommunity_id = $subcommunity['id'];
					}
				}
				// No Data found in DB
				if(!$checker){
					//echo '$checker: True<br>';
					$current_id = $this->subcommunity_model->subcomm_id_max_val();
		        	//var_dump(intval($current_id[0]->id));
		        	$subcomm_next_id =intval($current_id[0]->id) +1;	
					if(is_null($community_id)){		        
						//echo '$community_id is null<br>';
		        		// used $comm_next_id as record community_id
		        		echo "insert into tb_subcommunity (id, community_id, subcommunity_name) values('".$subcomm_next_id."','".$comm_next_id."','".$subcomm_selected_val."');<br>";		        		      
		        	} else {
		        		//echo '$community_id contain value<br>';
		        		// used $community_id as record community_id
		        		echo "insert into tb_subcommunity (id, community_id, subcommunity_name) values('".$subcomm_next_id."','".$community_id."','".$subcomm_selected_val."');<br>";		        		      	
		        	}
		        }
			}
		}

		// Property
		$location_level_id_3 = $dom->getElementById('location_level_id_3');
		echo '-- Property <hr>';
		foreach($location_level_id_2->childNodes as $item){
			if($item->nodeValue!='Subcommunity'){
				//echo 'Property: '. $item->nodeValue.'<br>';				
				echo "insert into tb_propertyfinder (city, community, subcommunity, re_property) values('".$city_selected_val."','".$comm_selected_val."','".$subcomm_selected_val."','".$item->nodeValue."');<br>";		        		      	
			}			
		}			
	}

	public function ajax_customer_search() {
		var_dump('entered ajax');
	    $q = isset($_POST['q']) ? $_POST['q'] : "";
	    $limit = isset($_POST['limit']) ? $_POST['limit'] : "";
	    $result = $this->db->query("select * from tb_community where city_id = (SELECT id FROM tb_city WHERE city_name LIKE '%$q%') ORDER BY community_name ASC LIMIT 0,$limit")->result();
	    $customers = array();
	    foreach($result as $customer) {
	    	var_dump('entered customer foreach');
	        echo "{$customer->id}:$customer->name\n";
	    }
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

	public function create_property()
	{			
		$data['staffs']     = $this->slcs_staff_model->get_staff();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();		
		$data['sections']   = $this->sections_model->get_sections();

		$data['staff_menus'] = $this->staff_menu_model->get_staff_menu();
		$data['children']    = $this->staff_menu_model->get_child_staff_menu();

		$data['city']        = $this->city_model->get_city();
		$data['community']   = $this->community_model->get_community();
		$data['subcommunity']= $this->subcommunity_model->get_subcommunity();
		$data['properties']    = $this->propertyfinder_model->get_propertyfinder();

		$username           = $this->session->userdata('username'); 					
		$data['username']   = ucfirst($username);	
		$data['title']      = 'SoftLine | Add Property';
		
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('community_name', 'Community', 'required');
		$this->form_validation->set_rules('subcommunity_name', 'Sub-Community', 'required');
		$this->form_validation->set_rules('re_property', 'Property');
		
		if ($this->form_validation->run() == FALSE)
		{		
			$this->index();					
		}
		else
		{	
			if($query = $this->propertyfinder_model->create_propertyfinder()){				
				$this->index();
			}
		}		
	}

	public function del($q){
		$this->propertyfinder_model->delete_propertyfinder($q);
		$this->index();
	}

	public function view($username)
	{
		$data['staff'] = $this->slcs_staff_model->get_staff($username);
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();
		$data['sections'] = $this->sections_model->get_sections();

		$username = $this->session->userdata('username'); 			
		$data['username'] = ucfirst($username);	
		$data['title'] = 'SoftLine | Staff';

		if (empty($data['staff']))
		{
			show_404();			
		}

		$data['title'] = $data['staff']['username'];

		$this->load->helper('url');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu');
		$this->load->view('layout/right_sidemenu');
		$this->load->view('slcs_staff/blank');
		$this->load->view('layout/footer');	
	}

	public function assign_permission()
	{
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
}
?>