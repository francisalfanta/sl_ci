<?php
/*   Created by  : Francis A.
     Date        : November 22, 2014
     Script Lines: All unless noted otherwise
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Slcs_staff extends CI_Controller {

	public function index()
	{	
		$this->db->select('fullname, passport_no, nationality, date_hired, email, mnumber, username');

		$data['base_url']   = "/sl_ci/slcs_staff/index/";
		$data['total_rows'] = $this->db->get('slcs_staff')->num_rows();
		$data['per_page']   = 10;
		$data['num_links']  = 10;
		$data['records']    = $this->db->select('fullname, passport_no, nationality, date_hired, email, mnumber, username')->get('slcs_staff', $data['per_page'], $this->uri->segment(3));

		$this->pagination->initialize($data);

		
		$data['staffs'] 	= $this->slcs_staff_model->get_staff();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();
		$data['sections'] 	= $this->sections_model->get_sections();
		$data['staff_menus']=$this->staff_menu_model->get_staff_menu();
		$data['title'] 		= 'SoftLine | Staff';
		$data['description']= '';	
		
		$username = $this->session->userdata('username'); 			
		$data['username'] = ucfirst($username);	
		
		$this->load->helper('url');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu', $data);
		$this->load->view('layout/right_sidemenu');
		$this->load->view('slcs_staff/slcs_staff_table', $data);			
		$this->load->view('layout/footer');	
	}

	public function view($username)
	{
		$data['staff'] = $this->slcs_staff_model->get_staff($username);
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();
		$data['sections'] = $this->sections_model->get_sections();
		$data['staff_menus']=$this->staff_menu_model->get_staff_menu();

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

	public function create_member()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$data['staffs'] = $this->slcs_staff_model->get_staff();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();		
		$data['sections'] = $this->sections_model->get_sections();
		$data['staff_menus']=$this->staff_menu_model->get_staff_menu();

		$username = $this->session->userdata('username'); 					
		$data['username'] = ucfirst($username);	
		$data['title'] = 'SoftLine | Add new staff';
		//Biodata
		$this->form_validation->set_rules('fname', 'First name', 'trim|required|min_length[2]|alpha_space_hypen');
		$this->form_validation->set_rules('mname', 'Middle name', 'trim|required|min_length[2]|alpha_space_hypen');
		$this->form_validation->set_rules('lname', 'Last name', 'trim|required|min_length[2]|alpha_space_hypen');
		$this->form_validation->set_rules('radio_gender', 'Gender', 'trim|required');
		$this->form_validation->set_rules('dob', 'Date of birth', 'trim|required|valid_date');	
		$this->form_validation->set_rules('age', 'Age', 'required|numeric|max_length[2]');
		$this->form_validation->set_rules('pob', 'Place of birth', 'required|alpha_space_hypen');
		$this->form_validation->set_rules('nationality', 'Nationality', 'required');
		$this->form_validation->set_rules('radio_ms', 'Marital status', 'required');
		$this->form_validation->set_rules('ms_stat','alpha_space_hypen');		
		$this->form_validation->set_rules('language', 'Language', 'required|alpha_space_hypen');
		$this->form_validation->set_rules('ppno', 'Passport no.', 'required|alpha_numeric');
		$this->form_validation->set_rules('toc', 'Type of contract', 'trim|required|alpha_space_hypen');
		$this->form_validation->set_rules('dh', 'Date hired', 'required||valid_date');
		$this->form_validation->set_rules('ds', 'Date started', 'required|valid_date');
		$this->form_validation->set_rules('dr', 'Date release', 'required|valid_date');
		//Contact
		$this->form_validation->set_rules('vno', 'Villa no.', 'numeric');
		$this->form_validation->set_rules('st', 'Street', 'alpha_space_hypen');
		$this->form_validation->set_rules('csp', 'City/State/Province', 'alpha_space_hypen');
		$this->form_validation->set_rules('ca', 'Complete address');
		$this->form_validation->set_rules('ea', 'Email address', 'valid_emails|is_unique[slcs_staff.email]');
		$this->form_validation->set_rules('mn', 'Mobile no.', 'num_space_hypen');
		$this->form_validation->set_rules('hn', 'Home Phone no.', 'num_space_hypen');
		//Emergency
		$this->form_validation->set_rules('n1', 'Name', 'alpha_space_hypen');
		$this->form_validation->set_rules('r1', 'Relationship', 'alpha_space_hypen');
		$this->form_validation->set_rules('mn1', 'Mobile no.', 'num_space_hypen');
		$this->form_validation->set_rules('ca1', 'Complete Address');		
		$this->form_validation->set_rules('n2', 'Name', 'alpha_space_hypen');
		$this->form_validation->set_rules('r2', 'Relationship', 'alpha_space_hypen');
		$this->form_validation->set_rules('mn2', 'Mobile no.', 'num_space_hypen');
		$this->form_validation->set_rules('ca2', 'Complete Address', '');		
		$this->form_validation->set_rules('n3', 'Name', 'alpha_space_hypen');
		$this->form_validation->set_rules('r3', 'Relationship', 'alpha_space_hypen');
		$this->form_validation->set_rules('mn3', 'Mobile no.', 'num_space_hypen');
		$this->form_validation->set_rules('ca3', 'Complete Address');		
		//Banking Details
		$this->form_validation->set_rules('bnkn', 'Bank name', 'alpha_space_hypen');
		$this->form_validation->set_rules('bnkbn', 'Branch name', 'alpha_space_hypen');
		$this->form_validation->set_rules('bnkaname', 'Account name', 'alpha_space_hypen');
		$this->form_validation->set_rules('bnkanumber', 'Account number', 'numeric');
		//Position Details
		$this->form_validation->set_rules('pos_t', 'Position Title', 'alpha_space_hypen');
		$this->form_validation->set_rules('estat', 'Employment status');
		//Salary & Wages details
		$this->form_validation->set_rules('basic_salary', 'Basic salary', 'numeric');
		$this->form_validation->set_rules('accom', 'Amount', 'numeric');
		$this->form_validation->set_rules('transpo', 'Amount', 'numeric');
		$this->form_validation->set_rules('tamt', 'Amount', 'numeric');
		$this->form_validation->set_rules('yrs', 'Years', 'numeric');
		$this->form_validation->set_rules('mnths', 'Months', 'numeric');
		$this->form_validation->set_rules('radiogp', 'Graduity Pay');
		$this->form_validation->set_rules('radiotoc', 'Type of contract');
		//Benefits Details
		$this->form_validation->set_rules('midcno', 'ID Number', 'numeric');
		$this->form_validation->set_rules('midate', 'Issue Date', 'valid_date');
		$this->form_validation->set_rules('mexdate', 'Expiry Date', 'valid_date');
		$this->form_validation->set_rules('bdbonus', 'Bonus', 'numeric');
		//Licenses and IDS
		$this->form_validation->set_rules('dlidcno', 'ID Number', 'numeric');
		$this->form_validation->set_rules('dlidate', 'Issue Date', 'valid_date');
		$this->form_validation->set_rules('dlexdate', 'Expiry Date', 'valid_date');
		
		$this->form_validation->set_rules('lcidcno', 'ID Number', 'numeric');
		$this->form_validation->set_rules('lcidate', 'Issue Date', 'valid_date');
		$this->form_validation->set_rules('lcexdate', 'Expiry Date', 'valid_date');		
		
		$this->form_validation->set_rules('ridcno', 'ID Number', 'numeric');
		$this->form_validation->set_rules('ridate', 'Issue Date', 'valid_date');
		$this->form_validation->set_rules('rexdate', 'Expiry Date', 'valid_date');
		
		$this->form_validation->set_rules('vsidcno', 'ID Number', 'numeric');
		$this->form_validation->set_rules('vsidate', 'Issue Date', 'valid_date');
		$this->form_validation->set_rules('vsexdate', 'Expiry Date', 'valid_date');
		
		$this->form_validation->set_rules('othersidcno', 'ID Number', 'numeric');
		$this->form_validation->set_rules('othersidate', 'Issue Date', 'valid_date');
		$this->form_validation->set_rules('othersexdate', 'Expiry Date', 'valid_date');
				
		$this->form_validation->set_message('is_unique', 'Email address already exists');
		$this->form_validation->set_message('num_space_hypen', '%s should be number, spaces, & hypen only.');
		$this->form_validation->set_message('alpha_space_hypen', '%s should be alpha, spaces, & hypen only.');
		$this->form_validation->set_message('valid_date', '%s must be MM/DD/YYYY format.');
		
		$config['upload_path']          = './images/profile_pic/.';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $this->load->library('upload', $config);
		
		if ($this->form_validation->run() == TRUE)
		{
			 if ($_FILES && $_FILES['userfile']['name'] == "")
			 {
				
				$filename = 'default.jpg';
				$this->slcs_staff_model->create_staff($filename);
				redirect('slcs_staff/slcs_staff', $data);
			 }
			 else{
					if ($this->upload->do_upload('userfile') == TRUE)
			 {				
				$file_data = $this->upload->data();
				$data_ary = array(
					'file'      => $file_data['file_name']
					);					
					
				$upload_data = $this->upload->data();
				$filename = $upload_data['file_name'];
										
				$data = array('upload_data' => $file_data);
				$data['img'] = base_url().'/images/profile_pic/'.$file_data['file_name'];
									
				$this->slcs_staff_model->create_staff($filename);
				redirect('slcs_staff/slcs_staff', $data);
			 }
			 else{
								
				$this->load->helper('url','form');
				$this->load->view('layout/header', $data);
				$this->load->view('layout/topbar');
				$this->load->view('layout/admin_left_sidemenu');
				$this->load->view('layout/right_sidemenu');
				$this->load->view('slcs_staff/biodata',$data);
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('slcs_staff/biodatapic',$error);						
				$this->load->view('slcs_staff/contact'); //added by prime 11/27/2014
				$this->load->view('slcs_staff/emergency'); //added by prime 11/27/2014
				$this->load->view('slcs_staff/banking'); //added by prime 11/27/2014
				$this->load->view('slcs_staff/position'); //added by prime 11/27/2014
				$this->load->view('slcs_staff/salary'); //added by prime 11/27/2014
				$this->load->view('slcs_staff/benefits'); //added by prime 11/27/2014
				$this->load->view('slcs_staff/license'); //added by prime 11/27/2014
				$this->load->view('layout/footer');	
			      }
				  
				 }		
		}else{
					
			$this->load->helper('url','form');
			$this->load->view('layout/header', $data);
			$this->load->view('layout/topbar');
			$this->load->view('layout/admin_left_sidemenu');
			$this->load->view('layout/right_sidemenu');
			$this->load->view('slcs_staff/biodata',$data);
			$this->load->view('slcs_staff/biodatapic',array('error'=>''));						
			$this->load->view('slcs_staff/contact'); //added by prime 11/27/2014
			$this->load->view('slcs_staff/emergency'); //added by prime 11/27/2014
			$this->load->view('slcs_staff/banking'); //added by prime 11/27/2014
			$this->load->view('slcs_staff/position'); //added by prime 11/27/2014
			$this->load->view('slcs_staff/salary'); //added by prime 11/27/2014
			$this->load->view('slcs_staff/benefits'); //added by prime 11/27/2014
			$this->load->view('slcs_staff/license'); //added by prime 11/27/2014
			$this->load->view('layout/footer');	
		
			}	
	}
	
	public function del($q)
	{
		$this->slcs_staff_model->delete_staff($q);
		$this->index();
	}
	
	public function edit($id)
	{
		$row = $this->slcs_staff_model->get_slcs_staff($id);
		$data['r'] = $row;
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$data['staffs'] = $this->slcs_staff_model->get_staff();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();		
		$data['sections'] = $this->sections_model->get_sections();
		$data['staff_menus'] = $this->staff_menu_model->get_staff_menu();
		
		$username = $this->session->userdata('username'); 					
		$data['username'] = ucfirst($username);	
		$data['title'] = 'SoftLine | Edit staff';
		
		
		$this->load->helper('url','form');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu');
		$this->load->view('layout/right_sidemenu');
		
		$this->load->view('slcs_staff/editbiodata',$data);
		$this->load->view('slcs_staff/editbiodatapic', $data);
		$this->load->view('slcs_staff/editcontact',$data);
		$this->load->view('slcs_staff/editemergency'); //added by prime 12/1/2014
		$this->load->view('slcs_staff/editbanking'); //added by prime 12/1/2014
		$this->load->view('slcs_staff/editposition'); //added by prime 12/1/2014
		$this->load->view('slcs_staff/editsalary',$data); //added by prime 12/1/2014		
		$this->load->view('slcs_staff/editbenefits'); //added by prime 12/1/2014
		$this->load->view('slcs_staff/editlicense'); //added by prime 12/1/2014
		$this->load->view('layout/footer');	
	}
	
	public function update($id)	
	{	
		 $id = $this->input->post('id');
		 $this->form_validation->set_rules('fname', 'First name', 'trim|required|min_length[2]');
		 $this->form_validation->set_rules('mname', 'Middle name', 'trim|required|min_length[2]|alpha_space_hypen');
		 $this->form_validation->set_rules('lname', 'Last name', 'trim|required|min_length[2]|alpha_space_hypen');
		 $this->form_validation->set_rules('radio_gender', 'Gender', 'trim|required');
		 $this->form_validation->set_rules('dob', 'Date of birth', 'trim|required|valid_date');	
		 $this->form_validation->set_rules('age', 'Age', 'required|numeric|max_length[2]');
		 $this->form_validation->set_rules('pob', 'Place of birth', 'required|alpha_space_hypen');
		 $this->form_validation->set_rules('nationality', 'Nationality', 'required');
		 $this->form_validation->set_rules('radio_ms', 'Marital status', 'required');
	     $this->form_validation->set_rules('ms_stat','alpha_space_hypen');		
		 $this->form_validation->set_rules('language', 'Language', 'required|alpha_space_hypen');
		 $this->form_validation->set_rules('ppno', 'Passport no.', 'required|alpha_numeric');
		 $this->form_validation->set_rules('toc', 'Type of contract', 'trim|required|alpha_space_hypen');
		 $this->form_validation->set_rules('dh', 'Date hired', 'required||valid_date');
		 $this->form_validation->set_rules('ds', 'Date started', 'required|valid_date');
		 $this->form_validation->set_rules('dr', 'Date release', 'required|valid_date');
		 //Contact
		 $this->form_validation->set_rules('vno', 'Villa no.', 'numeric');
		 $this->form_validation->set_rules('st', 'Street', 'alpha_space_hypen');
		 $this->form_validation->set_rules('csp', 'City/State/Province', 'alpha_space_hypen');
		 $this->form_validation->set_rules('ca', 'Complete address');
		 $this->form_validation->set_rules('ea', 'Email address', 'valid_emails');
		 $this->form_validation->set_rules('mn', 'Mobile no.', 'num_space_hypen');
		 $this->form_validation->set_rules('hn', 'Home Phone no.', 'num_space_hypen');
		 //Emergency
		 $this->form_validation->set_rules('n1', 'Name', 'alpha_space_hypen');
		 $this->form_validation->set_rules('r1', 'Relationship', 'alpha_space_hypen');
		 $this->form_validation->set_rules('mn1', 'Mobile no.', 'num_space_hypen');
		 $this->form_validation->set_rules('ca1', 'Complete Address');		
		 $this->form_validation->set_rules('n2', 'Name', 'alpha_space_hypen');
		 $this->form_validation->set_rules('r2', 'Relationship', 'alpha_space_hypen');
		 $this->form_validation->set_rules('mn2', 'Mobile no.', 'num_space_hypen');
		 $this->form_validation->set_rules('ca2', 'Complete Address');		
		 $this->form_validation->set_rules('n3', 'Name', 'alpha_space_hypen');
		 $this->form_validation->set_rules('r3', 'Relationship', 'alpha_space_hypen');
		 $this->form_validation->set_rules('mn3', 'Mobile no.', 'num_space_hypen');
		 $this->form_validation->set_rules('ca3', 'Complete Address');		
		 //Banking Details
		 $this->form_validation->set_rules('bnkn', 'Bank name', 'alpha_space_hypen');
		 $this->form_validation->set_rules('bnkbn', 'Branch name', 'alpha_space_hypen');
		 $this->form_validation->set_rules('bnkaname', 'Account name', 'alpha_space_hypen');
		 $this->form_validation->set_rules('bnkanumber', 'Account number', 'numeric');
		 //Position Details
		 $this->form_validation->set_rules('pos_t', 'Position Title', 'alpha_space_hypen');
		 $this->form_validation->set_rules('estat', 'Employment status');
		 //Salary & Wages details
		 $this->form_validation->set_rules('basic_salary', 'Basic salary','numeric');
		 $this->form_validation->set_rules('accom', 'Amount', 'numeric');
		 $this->form_validation->set_rules('transpo', 'Amount', 'numeric');
		 $this->form_validation->set_rules('tamt', 'Amount', 'numeric');
		 $this->form_validation->set_rules('yrs', 'Years', 'numeric');
		 $this->form_validation->set_rules('mnths', 'Months', 'numeric');
		 $this->form_validation->set_rules('radiogp', 'Graduity Pay');
		 $this->form_validation->set_rules('radiotoc', 'Type of contract');
		 //Benefits Details
		 $this->form_validation->set_rules('midcno', 'ID Number', 'numeric');
		 $this->form_validation->set_rules('midate', 'Issue Date', 'valid_date');
		 $this->form_validation->set_rules('mexdate', 'Expiry Date', 'valid_date');
		 $this->form_validation->set_rules('bdbonus', 'Bonus', 'numeric');
		 //Licenses and IDS
		 $this->form_validation->set_rules('dlidcno', 'ID Number', 'numeric');
		 $this->form_validation->set_rules('dlidate', 'Issue Date', 'valid_date');
		 $this->form_validation->set_rules('dlexdate', 'Expiry Date', 'valid_date');
		 
		 $this->form_validation->set_rules('lcidcno', 'ID Number', 'numeric');
		 $this->form_validation->set_rules('lcidate', 'Issue Date', 'valid_date');
		 $this->form_validation->set_rules('lcexdate', 'Expiry Date', 'valid_date');		
			
		 $this->form_validation->set_rules('ridcno', 'ID Number', 'numeric');
		 $this->form_validation->set_rules('ridate', 'Issue Date', 'valid_date');
		 $this->form_validation->set_rules('rexdate', 'Expiry Date', 'valid_date');
		
		 $this->form_validation->set_rules('vsidcno', 'ID Number', 'numeric');
		 $this->form_validation->set_rules('vsidate', 'Issue Date', 'valid_date');
		 $this->form_validation->set_rules('vsexdate', 'Expiry Date', 'valid_date');
			
		 $this->form_validation->set_rules('othersidcno', 'ID Number', 'numeric');
		 $this->form_validation->set_rules('othersidate', 'Issue Date', 'valid_date');
		 $this->form_validation->set_rules('othersexdate', 'Expiry Date', 'valid_date');
				
		 $this->form_validation->set_message('is_unique', 'Email address already exists');
		 $this->form_validation->set_message('num_space_hypen', '%s should be number, spaces, & hypen only.');
		 $this->form_validation->set_message('alpha_space_hypen', '%s should be alpha, spaces, & hypen only.');
		 $this->form_validation->set_message('valid_date', '%s must be MM/DD/YYYY format.');
		 
		 $config['upload_path']          = './images/profile_pic/.';
         $config['allowed_types']        = 'gif|jpg|jpeg|png';
         $this->load->library('upload', $config);
		 
		 if ($this->form_validation->run() == TRUE)
		{
			 if ($_FILES && $_FILES['userfile']['name'] == "")
			 {
				$row = $this->slcs_staff_model->get_slcs_staff($id);
				$data['r'] = $row;
				$profpic = $row->file_name;
				$filename = $profpic;
				$this->slcs_staff_model->update_staff($filename);
				redirect('slcs_staff/slcs_staff', $data);
			 }
			 else{
					if ($this->upload->do_upload('userfile') == TRUE)
			 {				
				$file_data = $this->upload->data();
				$data_ary = array(
					'file'      => $file_data['file_name']
					);					
					
				$upload_data = $this->upload->data();
				$filename = $upload_data['file_name'];
										
				$data = array('upload_data' => $file_data);
				$data['img'] = base_url().'/images/profile_pic/'.$file_data['file_name'];
									
				$this->slcs_staff_model->update_staff($filename);
				redirect('slcs_staff/slcs_staff', $data);
			 }
			 else{
				$row = $this->slcs_staff_model->get_slcs_staff($id);
				$data['r'] = $row;
				
				$this->load->helper(array('form', 'url'));
				$this->load->library('form_validation');
				
				$data['staffs'] = $this->slcs_staff_model->get_staff();
				$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();		
				$data['sections'] = $this->sections_model->get_sections();
				$data['staff_menus']=$this->staff_menu_model->get_staff_menu();
				
				$username = $this->session->userdata('username'); 					
				$data['username'] = ucfirst($username);	
				$data['title'] = 'SoftLine | Edit staff';
				
				$this->load->helper('url','form');
				$this->load->view('layout/header', $data);
				$this->load->view('layout/topbar');
				$this->load->view('layout/admin_left_sidemenu');
				$this->load->view('layout/right_sidemenu');				
				$this->load->view('slcs_staff/editbiodata',$data);
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('slcs_staff/editbiodatapic',$error);						
				$this->load->view('slcs_staff/editcontact',$data);
				$this->load->view('slcs_staff/editemergency'); //added by prime 12/1/2014
				$this->load->view('slcs_staff/editbanking'); //added by prime 12/1/2014
				$this->load->view('slcs_staff/editposition'); //added by prime 12/1/2014
				$this->load->view('slcs_staff/editsalary'); //added by prime 12/1/2014		
				$this->load->view('slcs_staff/editbenefits'); //added by prime 12/1/2014
				$this->load->view('slcs_staff/editlicense'); //added by prime 12/1/2014
				$this->load->view('layout/footer');
			      }
				  
				 }		
		}else{
					
				$row = $this->slcs_staff_model->get_slcs_staff($id);
				$data['r'] = $row;
				
				$this->load->helper(array('form', 'url'));
				$this->load->library('form_validation');
				
				$data['staffs'] = $this->slcs_staff_model->get_staff();
				$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();		
				$data['sections'] = $this->sections_model->get_sections();
				$data['staff_menus']=$this->staff_menu_model->get_staff_menu();
				
				$username = $this->session->userdata('username'); 					
				$data['username'] = ucfirst($username);	
				$data['title'] = 'SoftLine | Edit staff';
				
				$this->load->helper('url','form');
				$this->load->view('layout/header', $data);
				$this->load->view('layout/topbar');
				$this->load->view('layout/admin_left_sidemenu');
				$this->load->view('layout/right_sidemenu');				
				$this->load->view('slcs_staff/editbiodata',$data);
				$this->load->view('slcs_staff/editbiodatapic', $data);
				$this->load->view('slcs_staff/editcontact',$data);
				$this->load->view('slcs_staff/editemergency'); //added by prime 12/1/2014
				$this->load->view('slcs_staff/editbanking'); //added by prime 12/1/2014
				$this->load->view('slcs_staff/editposition'); //added by prime 12/1/2014
				$this->load->view('slcs_staff/editsalary'); //added by prime 12/1/2014		
				$this->load->view('slcs_staff/editbenefits'); //added by prime 12/1/2014
				$this->load->view('slcs_staff/editlicense'); //added by prime 12/1/2014
				$this->load->view('layout/footer');
		
			}
	}
	
	public function print_form($id)
	{
		$row = $this->slcs_staff_model->get_slcs_staff($id);
		$data['r'] = $row;
		$username = $this->session->userdata('username'); 					
		$data['username'] = ucfirst($username);	
		$data['title'] = 'SoftLine | Edit staff';
				
		
		$this->load->view('slcs_staff/print_form',$data);
	}
	

}