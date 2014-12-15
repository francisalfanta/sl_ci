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
		$this->load->helper('ckeditor');
		$data_sl_header = $this->_header_data();
		$data = $data_sl_header;
		$data['title'] = 'SoftLine | E-Mailer ';

		//Ckeditor's configuration
		$ck_data['ckeditor'] = array(
 
			//ID of the textarea that will be replaced
			'id' 	=> 	'content',
			'path'	=>	'assets/js/ckeditor',
 
			//Optionnal values
			'config' => array(
				'toolbar' 	=> 	"Full", 	//Using the Full toolbar
				'width' 	=> 	"550px",	//Setting a custom width
				'height' 	=> 	'100px',	//Setting a custom height
 
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
			)
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

			 

		$this->parser->parse('layout/header', $data);
		$this->parser->parse('layout/topbar',array());
		$this->parser->parse('layout/admin_left_sidemenu', $data);
		$this->parser->parse('layout/right_sidemenu',array());
		$this->parser->parse('sl_emailer/sl_emailer', $data);		
		$this->parser->parse('layout/footer',array());

	}

	public function slsend_mail(){
		$this->email->from('francisalfanta@gmail.com', 'Your Name');
		$this->email->to('francisalfanta@gmail.com'); 
		$this->email->cc('another@another-example.com'); 
		$this->email->bcc('them@their-example.com'); 

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');	

		$check = $this->email->send();

		//echo $this->email->print_debugger();
		return $check;
	}
}