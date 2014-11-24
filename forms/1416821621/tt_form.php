<?php

class Tt_form extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('tt_model_sl');
	}	
	function index()
	{			
		$this->form_validation->set_rules('fma_sd', 'fma sd', 'max_length[10]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('testing_table_form_view');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'fma_sd' => set_value('fma_sd')
						);
					
			// run insert model to write data to db
		
			if ($this->tt_model_sl->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('tt_form/success');   // or whatever logic needs to occur
			}
			else
			{
			echo 'An error occurred saving your information. Please try again later';
			// Or whatever error handling is necessary
			}
		}
	}
	function success()
	{
			echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
			sessions have not been used and would need to be added in to suit your app';
	}
}
?>