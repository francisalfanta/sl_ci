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
		// database query 
		$data['staffs']    = $this->slcs_staff_model->get_staff();
		$data['depttasks'] = $this->dept_tasks_model->get_dept_tasks();
		$data['sections']  = $this->sections_model->get_sections();
		$data['staff_menus']=$this->staff_menu_model->get_staff_menu();
		// custom data
		$data['title']     = 'SoftLine | Menu Manager';	
		
		$username          = $this->session->userdata('username'); 						// TO DO: Refractor this
		$data['username']  = ucfirst($username);	

		//select values
		$method            = array('_parent','_self','_blank');
		$active            = array(1,0);
		$parents           = $this->staff_menu_model->get_parent_staff_menu();
		$children          = $this->staff_menu_model->get_child_staff_menu();
		$data['parents']   = $parents;
		$data['children']  = $children;
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

		$this->load->helper('url');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu', $data);
		$this->load->view('layout/right_sidemenu');
		$this->load->view('staff_menu/staff_menu_form', $data);
		$this->load->view('staff_menu/add', $data);
		$this->load->view('layout/footer');	
	}

	public function view_staff_menu($id)
	{
		$data['staffs']     = $this->slcs_staff_model->get_staff();
		$data['staff_menu'] = $this->staff_menu_model->get_staff_menu($id);
		$data['staff_menus']= $this->staff_menu_model->get_staff_menu();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();
		$data['sections']   = $this->sections_model->get_sections();

		$username           = $this->session->userdata('username'); 					// TO DO: Refractor this
		$data['username']   = ucfirst($username);	
		$data['title']      = 'SoftLine | Menu Manager';
		//select values
		$method            = array('_parent','_self','_blank');
		$active            = array(1,0);
		$parents           = $this->staff_menu_model->get_parent_staff_menu();
		$children          = $this->staff_menu_model->get_child_staff_menu();
		$data['parents']   = $parents;
		$data['children']  = $children;
		$data['fields_meta']= $this->staff_menu_model->get_field_name_staff_menu();
		
		$row = $this->staff_menu_model->get_staff_menu_data($id);
		$data['r'] = $row;

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
		//$this->form_validation->set_rules('send_value', 'Send Value', 'required');
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
		$formSubmit = $this->input->post('submitForm');
		if($formSubmit == 'formUpdate') { 
			//redirect($this->config->item('backend_folder').'/categories/form');
			
			$id = $this->input->post('id');			
			$dir = APPPATH . 'controllers/';
			$oldfilename = $this->input->post('oldinclude');
			$oldsendvalue = $this->input->post('oldsendvalue');
			$newsendvalue = $this->input->post('send_value');
			$dollar = $this->input->post('dollar');
			
			
			$editline  = " <?php
					   if (! defined('BASEPATH')) exit('No direct script access allowed');
					   
					   class ".$oldsendvalue." extends CI_Controller
					   {
							public function __construct(){
									parent::__construct();
							}

							public function index(){
							".$dollar."data['staffs']    = ".$dollar."this->slcs_staff_model->get_staff();
							".$dollar."data['depttasks'] = ".$dollar."this->dept_tasks_model->get_dept_tasks();
							".$dollar."data['sections']  = ".$dollar."this->sections_model->get_sections();
							".$dollar."data['staff_menus']=".$dollar."this->staff_menu_model->get_staff_menu();
							
							".$dollar."data['title'] = 'SoftLine | Under Construction';
							".$dollar."username = ".$dollar."this->session->userdata('username');
							".$dollar."data['username']  = ucfirst(".$dollar."username);

							".$dollar."this->load->helper('url');
							".$dollar."this->load->view('layout/header', ".$dollar."data);
							".$dollar."this->load->view('layout/topbar');
							".$dollar."this->load->view('layout/admin_left_sidemenu', ".$dollar."data);
							".$dollar."this->load->view('layout/right_sidemenu');
							".$dollar."this->load->view('layout/maintenance');
							".$dollar."this->load->view('layout/footer');
							}
					   }
				   ";
				   
			$editedline = str_replace($oldsendvalue,ucfirst($newsendvalue),$editline);
			file_put_contents($dir.$oldfilename, $editedline);
			
			$this->staff_menu_model->update_staff_menu($id);				
			$this->view_staff_menu($id);	
			
		} else if ($formSubmit == 'formDelete'){
			$id = $this->input->post('id');
			$this->delete_staff_menu($id);	    			
		} else {
			$this->view_staff_menu($id);			
		}
	}

	public function delete_staff_menu(){		
		
		
		$id = $this->input->post('id');
		
		$this->load->helper('file');		
		$this->db->where('id', $id);
		
		$q = $this->db->get('staff_menu')->row();
		
		$inc = $q->include;		
		$filestring = APPPATH.'controllers/'.$inc;
		unlink ($filestring);		
		
		$this->staff_menu_model->delete_staff_menu($id);
		$this->index();
	}
}