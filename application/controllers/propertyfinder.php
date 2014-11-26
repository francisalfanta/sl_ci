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

	public function get_city(){
		if(isset($_GET['term'])){
			$q = strtolower($_GET['term']);
			$this->city_model->get_city($q);
		}		
	}

	public function get_community(){
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

		$username           = $this->session->userdata('username'); 					
		$data['username']   = ucfirst($username);	
		$data['title']      = 'SoftLine | Add new staff menu';
		
		$this->form_validation->set_rules('menu', 'Menu', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required');
		$this->form_validation->set_rules('send_value', 'Send Value', 'required');
		$this->form_validation->set_rules('method', 'Method', 'required');
		$this->form_validation->set_rules('order', 'Order', 'required');
		//$this->form_validation->set_rules('parent', 'Parent', 'required');
		//$this->form_validation->set_rules('include', 'Include', 'required');
		$this->form_validation->set_rules('active', 'Active', 'required');		

		if ($this->form_validation->run() == FALSE)
		{
			$this->index();		
		}
		else
		{
			if($query = $this->staff_menu_model->create_staff_menu()){
				$data['account_created'] = 'Your account has been created.<br>';

				redirect('staff_menu');
			}
		}		
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