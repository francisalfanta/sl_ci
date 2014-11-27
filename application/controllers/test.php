<?php
/*   Created by  : Francis A.
     Date        : November 22, 2014
     Script Lines: All unless noted otherwise
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class test extends CI_Controller {

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
		$data = array( 
    	'title' => 'Title goes here',     
		);
 
	$this->load->library('sl_template');
	$this->sl_template->load('default', 'content', $data);

	$this->load->helper('url');
		$this->load->view('layout/header', $data);
		//$this->load->view('layout/topbar');
		//$this->load->view('layout/admin_left_sidemenu', $data);
		$this->load->view('layout/right_sidemenu');
		$this->load->view('test_auto', $data);
		$this->load->view('layout/footer');	
	

	$this->load->helper(array('dropdown','form'));
	$dropdownItems = listData('city','city_name', 'city_name');
	echo form_dropdown('dropdown',$dropdownItems,$selected = 8);

	}



}

?>