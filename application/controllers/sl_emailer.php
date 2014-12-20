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
		$config['bcc_batch_mode'] = 
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
			'path'	=>	'assets/js/ckeditor',
 
			//Optionnal values
			'config' => array(
				'toolbar' 	=> 	"Full", 	//Using the Full toolbar
				'width' 	=> 	"850px",	//Setting a custom width
				'height' 	=> 	'530px',	//Setting a custom height 
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
		$data['email_lists'] = $this->email_model->get_valid_email();		 
		
		// added 12/20/2014
		$templates_name_lists = $this->letter_templates_model->get_letter_templates();

        $data['templates_name_lists'] = $templates_name_lists->result_array();

		// end added 12/20/2014

		$this->parser->parse('layout/header', $data);
		$this->parser->parse('layout/topbar',array());
		$this->parser->parse('layout/admin_left_sidemenu', $data);
		$this->parser->parse('layout/right_sidemenu',array());
		$this->parser->parse('sl_emailer/sl_emailer', $data);		
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
		$cc   = null;
		$bcc   = null;
		$msg  = $this->input->post('message');

		//$this->email->from('francisalfanta@gmail.com', 'Your Name');
		//$this->email->to('francisalfanta@gmail.com'); 
		//$this->email->cc('another@another-example.com'); 
		$this->email->bcc('them@their-example.com'); 
		//$this->email->subject('Subject');
		//$this->email->message('no cc bcc Debugging Testing the email class.');	
		
		
		$this->email->to($to); 
		$this->email->from($from, 'Your Name');
		//$this->email->cc($cc); 
		//$this->email->bcc($bcc); 
		$this->email->subject($subj);	
		$this->email->message($msg);		
		$this->email->set_alt_message($msg);   // create alternate msg by removing html tag

		$check = $this->email->send();

		echo $this->email->print_debugger();
		//echo $check;
		//$this->session->set_flashdata('db_msg', 'Update successful.');
		//redirect('/sl_emailer');
	}

	public function filtered_email_lists(){
		$city = $this->input->post('city');
		$country = $this->input->post('country');
		$query = $this->email_model->find_valid_email_by_addresss($city, $country);
		echo json_encode($query);
	}
	// on testing 12/20/2014
	public function template_lists(){
		// added 12/20/2014
		//$referral_request = $this->parser->parse('sl_emailer/template/referral_request', array(), TRUE);
		//$checking_in_letter = $this->parser->parse('sl_emailer/template/checking_in_letter', array(), TRUE);

		//$re_bussiness_ltr_template_lists = array($referral_request, $checking_in_letter);
		//$data['template_lists'] = $re_bussiness_ltr_template_lists;
		// another idea
		$selected_id = $this->input->post('selected');
		$templates_name = $this->letter_templates_model->get_letter_templates($selected_id);

		echo htmlspecialchars_decode(htmlspecialchars_decode($templates_name['message']));
	}
	// on testing 12/20/2014
	public function test(){
		$this->parser->parse('test', array());
	}

}