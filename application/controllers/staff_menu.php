<?php
/*   Created by  : Francis A.
     Date        : November 24, 2014
     Script Lines: All unless noted otherwise
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Staff_menu extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('staff_menu_model');
	}

	public function index()
	{		
		$data['staffs']    = $this->slcs_staff_model->get_staff();
		$data['depttasks'] = $this->dept_tasks_model->get_dept_tasks();
		$data['sections']  = $this->sections_model->get_sections();
		$data['title']     = 'SoftLine | Menu Manager';	
		
		$username          = $this->session->userdata('username'); 			
		$data['username']  = ucfirst($username);	

		//select values
		$method            = array('_parent','_self','_blank');
		$active            = array(1,0);
		$parent            = $this->staff_menu_model->get_staff_menu();
		// Parameter : tag-attributes, label, tag-type, select-values		
		$data['table_fields'] = array(
			'menu' 		 => array('menu', 'Menu', 'input'),
			'url' 		 => array('url', 'URL', 'input'),
			'send_value' => array('send_value', 'Send Value', 'input'),
			'method'     => array('method', 'Method', 'select', $method),
			'order'      => array('order', 'Order', 'input'),
			'parent'     => array('parent', 'Parent', 'custom', $parent),
			'include'    => array('include', 'Include', 'input'),
			'active'     => array('active', 'Active', 'select', $active),
			);	

		$this->load->helper('url');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu', $data);
		$this->load->view('layout/right_sidemenu');
		$this->load->view('staff_menu/staff_menu_form', $data);
		$this->load->view('layout/footer');	
	}

	public function view_staff_menu($id)
	{
		$data['staff_menu'] = $this->staff_menu_model->get_staff_menu($menu);
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();
		$data['sections']   = $this->sections_model->get_sections();

		$username           = $this->session->userdata('username'); 			
		$data['username']   = ucfirst($username);	
		$data['title']      = 'SoftLine | Menu Manager';

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
		$this->load->view('slcs_staff/blank');
		$this->load->view('layout/footer');	
	}

	public function create_staff_menu()
	{
		//$this->load->helper(array('form', 'url'));	// added to auto
		//$this->load->library('form_validation'); 		// added to auto
		
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

	public function update_staff_menu()
	{
		$id = $this->input->post('id');
		$data = array(
			'menu' 		 => $this->input->post('menu'),
			'url' 		 => $this->input->post('url'),
			'send_value' => $this->input->post('send_value'),
			'method'     => $this->input->post('method'),
			'order'      => $this->input->post('order'),
			'parent'     => $this->input->post('parent'),
			'include'    => $this->input->post('include'),
			'active'     => $this->input->post('active')
		);
		$this->staff_menu_model->update_staff_menu($id, $data);
		$this->index();
	}

	public function delete_staff_menu(){
		$id = $this->uri->segment(3); // need to be checked.
		$this->staff_menu_model->delete_staff_menu($id);
		$this->index();
	}
}