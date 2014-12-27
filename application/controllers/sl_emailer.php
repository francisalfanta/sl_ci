<?php
/*   Created by  : Francis A.
     Date        : December 15, 2014
     Script Lines: All unless noted otherwise
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Sl_emailer extends CI_Controller {

	public function __construct(){
		parent::__construct();
 		$this->load->library('parser');
		$this->load->library('email');
		$this->load->helper('url'); //You should autoload this one ;)
		$this->load->helper('ckeditor'); 

		$config['mailtype'] = 'html';
		$config['bcc_batch_mode'] = false;
		$this->email->initialize($config);
 	}

	function _header_data(){ 
        $data['staffs']    = $this->slcs_staff_model->get_staff();
        $data['depttasks'] = $this->dept_tasks_model->get_dept_tasks();
        $data['sections']  = $this->sections_model->get_sections();
        $data['staff_menus']=$this->staff_menu_model->get_staff_menu();

        $username          = $this->session->userdata('username'); 
        $data['username']  = ucfirst($username);	

        return $data;
    }

	public function index(){ 
		//You should autoload this one ;)
		//$this->load->helper('ckeditor');
		$data = $this->_header_data();
		$data['title'] = 'SoftLine | E-Mailer';			

		$slfooter   = $this->parser->parse('layout/sl_footer', $data, TRUE);
		$msg_editor = $this->parser->parse('ckeditor', array(), TRUE);		
		
		$data['slfooter']   = $slfooter;
		$data['msg_editor'] = $msg_editor;
		
		// get e-mail database
		$query = $this->email_model->get_valid_email();		 
		$data['email_lists'] = $query->result();
		
		// added 12/20/2014
		$templates_name_lists = $this->letter_templates_model->get_letter_templates();

        $data['templates_name_lists'] = $templates_name_lists->result_array();
		// end added 12/20/2014

		// added 12/23/2014 // to be used in signature modal	
		$signature_editor = $this->parser->parse('sl_emailer/signature_ckeditor', array(), TRUE);
		$data['signature_editor'] = $signature_editor;
		// end added 12/23/2014
		
		// on testing added 12/24/2014
		$username          = $this->session->userdata('username'); 
		$query  =  $this->slcs_staff_model->get_slcs_staff_by_username($username);
		foreach($query as $row) {
			// split string on every new line 
            $data['user_info'] = json_encode(explode("\n", $row->email_signature));
        }
		// end added 12/24/2014
		$this->parser->parse('layout/header', $data);
		$this->parser->parse('layout/topbar',array());
		$this->parser->parse('layout/admin_left_sidemenu', $data);
		$this->parser->parse('layout/right_sidemenu',array());
		$this->parser->parse('sl_emailer/sl_emailer', $data);	
		$this->parser->parse('sl_emailer/signature_form_modal', $data);
		$this->parser->parse('sl_emailer/sl_emailer_modal', $data);
		$this->parser->parse('layout/footer',array());
	}

	public function slsend_mail(){ 
		$data = $this->_header_data();
		$this->email->clear();

		$toggle_bcc_batch_mode = $this->input->post('bcc_batch_mode');
		// check mail option bcc		
		if((int) $toggle_bcc_batch_mode == 1){
			$config['bcc_batch_mode'] = TRUE;
		} else {
			$config['bcc_batch_mode'] = FALSE;
		}
		
		$this->email->initialize($config);

		$from = $this->input->post('from');
		$name = $this->input->post('name');
		$to_lists = $this->input->post('receiver');		
		// check for break line

		$to_lists = str_replace("\n",', ',$to_lists);
		//if(strpos($to, PHP_EOL) !== FALSE) {
		//  echo 'New line break found';
		//}
		//else {
		//  echo 'not found';
		//}

		$subj = $this->input->post('subject');
		$cc   = $this->input->post('cc');
		$bcc  = $this->input->post('bcc');
		$msg  = $this->input->post('message');
		// on testing 12/24/2014
		foreach(explode(',', $to_lists) as $per_letter){
			$this->email->to($per_letter);
			// to be assign to unsubscribe link 
			$data['per_letter'] = $per_letter;
			$email_template['msg'] = $msg;
			$email_template['unsubscribe'] = $this->parser->parse('sl_emailer/unsubscribe', $data, TRUE);


			$complete_msg = $this->parser->parse('sl_emailer/email_template',$email_template, TRUE);

			$this->email->message($complete_msg);
			
			// end add 12/24/2014

			//$this->email->from('francisalfanta@gmail.com', 'Your Name');
			//$this->email->to('francisalfanta@gmail.com'); 
			//$this->email->cc('another@another-example.com'); 
			//$this->email->bcc('francisalfanta@gmail.com'); 
			//$this->email->subject('Subject');
			//$this->email->message('no cc bcc Debugging Testing the email class.');			
			
			$this->email->from($from, $name);
			//$this->email->cc($cc); 
			//$this->email->bcc($bcc); 
			$this->email->bcc('technical@slg.ae'); 
			$this->email->subject($subj);	
			//$this->email->message($msg);		
			$this->email->set_alt_message($msg);   // create alternate msg by removing html tag

			$check = $this->email->send();	
		}
		//echo $this->email->print_debugger();
		print_r($to_lists);
	}
	// on testing 12/21/2014
	public function filtered_email_lists(){ 
		$city = $this->input->post('city');
		$country = $this->input->post('country');

		//$data['draw'] = (int)1;   
		$query = $this->email_model->get_valid_email();
        //$data['recordsTotal']    = $query->num_rows();
        //$data['recordsFiltered'] = (int)10;//$query->num_rows();
        //$data['iTotalDisplayRecords'] = 10;

        if($city || $country){
            $query = $this->email_model->find_valid_email_by_addresss($city, $country); 
            //$data['recordsFiltered'] = $query->num_rows();
        }          
       
        $data['data'] = $query->result();     
        echo json_encode($data);		
	}
	// tested 12/20/2014
	public function template_lists(){ 
		$selected_id = $this->input->post('selected');
		
		// on testing 12/24/2014 add default signature
		if($selected_id){
			$templates_name = $this->letter_templates_model->get_letter_templates($selected_id);
			$email_template['msg'] = $templates_name->message;	
		} else {
			$email_template['msg'] = '<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>';	
		}							

		$username = $this->session->userdata('username'); 
		$query    =  $this->slcs_staff_model->get_slcs_staff_by_username($username);
		foreach($query as $row) {
			// remove new line 
            $email_template['signature'] = str_replace("\n",'', $row->email_signature);
        }
		
		$complete_msg = $this->parser->parse('sl_emailer/receiver_email_template', $email_template, TRUE);
		// end add 12/24/2014
		// echo $msg;
		echo $complete_msg;		
	}
	// tested 12/20/2014
	public function save_template(){ 
		$this->form_validation->set_rules('msg_name', 'Template Name', 'required|is_unique[letter_templates.name]');
		$this->form_validation->set_rules('message', 'Message', 'required');
		// validate
		if ($this->form_validation->run() == FALSE) {
			echo 'Validation Error';
		} else {
			$this->letter_templates_model->insert_letter_template();
			$templates_name_lists = $this->letter_templates_model->get_letter_templates();			
        	echo json_encode($templates_name_lists->result_array());
		}		
	} 
	public function del_template(){ 
		$check = $this->letter_templates_model->delete_letter_template();
		$templates_name_lists = $this->letter_templates_model->get_letter_templates();
		
		echo json_encode($templates_name_lists->result_array());
	}
	// on testing 12/21/2014
	public function update_template_name(){ 
		$this->form_validation->set_rules('letter_template_name', 'Template Name', 'required|is_unique[letter_templates.name]');

		if($this->form_validation->run() == FALSE) {
			echo 'Validation Error';
		} else {
			$templates_name_lists = $this->letter_templates_model->update_letter_template_name();
			$templates_name_lists = $this->letter_templates_model->get_letter_templates();			
        	echo json_encode($templates_name_lists->result_array());				
		}		
	}
	// on testing 12/23/2014
	public function crud_signature(){
		$signature_msg = $this->input->post('signature_msg');
		// add replacement placeholder here
		// end add
		$data = array('signature' => $signature_msg);
		$query = $this->model_users->update_user_signature($data);
		echo $query;
	}
	// on testing 12/24/2014
	public function unsubscribe($email){
		$toggle = 1;
		$this->email_model->set_is_blacklist($email, $toggle);
	}
}