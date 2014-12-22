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

		//Ckeditor's configuration
		$ck_data['ckeditor'] = array(
 
			//ID of the textarea that will be replaced
			'id' 	=> 	'message-id',
			'path'	=>	'assets/libs/ckeditor',
			//'path'	=>	'assets/js/ckeditor',
 
			//Optionnal values
			'config' => array(
				//'toolbar' 	=> 	"Full", 	//Using the Full toolbar
				'width' 	=> 	"850px",	//Setting a custom width
				'height' 	=> 	'630px',	//Setting a custom height 
			),
 
			//Replacing styles from the "Styles tool"
			'styles' => array(
 
				//Creating a new style named "style 1"
				'style 1' => array (
					'name' 		=> 	'Blue Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 	=> 	'Blue',
						'font-weight' 	=> 	'bold'
					)
				),
 
				//Creating a new style named "style 2"
				'style 2' => array (
					'name' 	=> 	'Red Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 		=> 	'Red',
						'font-weight' 		=> 	'bold',
						'text-decoration'	=> 	'underline'
					)
				)				
			),
			'fields' => array(
 
				//Creating a new style named "style 1"
				'style 1' => array (
					'name' 		=> 	'Blue Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 	=> 	'Blue',
						'font-weight' 	=> 	'bold'
					)
				),
 
				//Creating a new style named "style 2"
				'style 2' => array (
					'name' 	=> 	'Red Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 		=> 	'Red',
						'font-weight' 		=> 	'bold',
						'text-decoration'	=> 	'underline'
					)
				)				
			),
			'extraPlugins' => 'simplebox'
		);
 
		$ck_data['ckeditor_2'] = array(
 
			//ID of the textarea that will be replaced
			'id' 	=> 	'content_2',
			'path'	=>	'assets/jsckeditor',
 
			//Optionnal values
			'config' => array(
				'width' 	=> 	"550px",	//Setting a custom width
				'height' 	=> 	'100px',	//Setting a custom height
				'toolbar' 	=> 	array(	//Setting a custom toolbar
					array('Bold', 'Italic'),
					array('Underline', 'Strike', 'FontSize'),
					array('Smiley'),
					'/'
				)
			),
 
			//Replacing styles from the "Styles tool"
			'styles' => array(
 
				//Creating a new style named "style 1"
				'style 3' => array (
					'name' 		=> 	'Green Title',
					'element' 	=> 	'h3',
					'styles' => array(
						'color' 	=> 	'Green',
						'font-weight' 	=> 	'bold'
					)
				)
 
			)
		);			

		$slfooter   = $this->parser->parse('layout/sl_footer', $data, TRUE);
		$msg_editor = $this->parser->parse('ckeditor', $ck_data, TRUE);
		
		$data['slfooter']   = $slfooter;
		$data['msg_editor'] = $msg_editor;

		// get e-mail database
		$query = $this->email_model->get_valid_email();		 
		$data['email_lists'] = $query->result();
		
		// added 12/20/2014
		$templates_name_lists = $this->letter_templates_model->get_letter_templates();

        $data['templates_name_lists'] = $templates_name_lists->result_array();

		// end added 12/20/2014

		$this->parser->parse('layout/header', $data);
		$this->parser->parse('layout/topbar',array());
		$this->parser->parse('layout/admin_left_sidemenu', $data);
		$this->parser->parse('layout/right_sidemenu',array());
		$this->parser->parse('sl_emailer/sl_emailer', $data);		
		$this->parser->parse('sl_emailer/sl_emailer_modal', $data);
		$this->parser->parse('layout/footer',array());
	}

	public function slsend_mail(){ 
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

		$to   = $this->input->post('receiver');
		$subj = $this->input->post('subject');
		$cc   = $this->input->post('cc');
		$bcc  = $this->input->post('bcc');
		$msg  = $this->input->post('message');


		//$this->email->from('francisalfanta@gmail.com', 'Your Name');
		//$this->email->to('francisalfanta@gmail.com'); 
		//$this->email->cc('another@another-example.com'); 
		//$this->email->bcc('francisalfanta@gmail.com'); 
		//$this->email->subject('Subject');
		//$this->email->message('no cc bcc Debugging Testing the email class.');	
		
		
		$this->email->to($to); 
		$this->email->from($from, 'Your Name');
		//$this->email->cc($cc); 
		$this->email->bcc($bcc); 
		$this->email->subject($subj);	
		$this->email->message($msg);		
		$this->email->set_alt_message($msg);   // create alternate msg by removing html tag

		$check = $this->email->send();

		//echo $this->email->print_debugger();
		print_r($cc);

		//echo $check;
		//$this->session->set_flashdata('db_msg', 'Update successful.');
		//redirect('/sl_emailer');
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
		$templates_name = $this->letter_templates_model->get_letter_templates($selected_id);
		$msg = $templates_name->message;
		echo $msg;		
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
}