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
		$html=file_get_contents("https://www.propertyfinder.ae/en/search?c=1&l=1.1212&q=&t=&pf=&pt=&bf=&bt=&ft=" );
		//$html=file_get_contents("$url");
		$dom = new DOMDocument();
		//$dom->strictErrorChecking = FALSE;
		@$dom->loadHTML($html);
		// grab all on the page
		$document = new DOMXPath($dom);
		//$nodes = $xpath->query('//h5/a');
		$options = $dom->documentElement->getElementsByTagName('option');

		$optionTags = $dom->getElementsByTagName('option');
		for ($i = 0; $i < $optionTags->length; $i++ ) {
			if ($optionTags->item($i)->hasAttribute('selected') && $optionTags->item($i)->getAttribute('selected') === "selected") {
			       $num = $optionTags->item($i)->nodeValue;

			       $community   = $this->community_model->get_community();
			       foreach($community as $com){
			       		if($com['community_name']==$num) {
			       			//echo '$num: '.$num.'<br>';
			       			//echo '$com: '.$com['community_name'].'<br>';
			       			//echo '$com: '.$com['id'].'<br>';
			       			$community_id = $com['id'];
			       		}
			       }
			}
		}
		//$option->getAttribute('value').
		foreach ($options as $option) {
			// if ($option->parentNode->tagName == 'a') {
			//echo "Abu Dhabi,".", ". $option->nodeValue."<br>";
			if($option->nodeValue =='Subcommunity' || $option->nodeValue =='Property') {
			 	echo "<hr>";
			}
			echo "insert into tb_subcommunity (community_id, subcommunity_name) values('".$community_id."','".$option->nodeValue."');<br>";
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