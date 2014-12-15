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
		// all model were autoloaded		
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
		$data_sl_header = $this->_header_data();
		$data = $data_sl_header;
		$data['title'] = 'SoftLine | E-Mailer ';		

		$slfooter = $this->parser->parse('layout/sl_footer',$data,TRUE);

		$data['slfooter'] = $slfooter;

		$this->parser->parse('layout/header', $data);
		$this->parser->parse('layout/topbar',array());
		$this->parser->parse('layout/admin_left_sidemenu', $data);
		$this->parser->parse('layout/right_sidemenu',array());
		$this->parser->parse('sl_emailer/blank', $data);		
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