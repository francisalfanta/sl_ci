<?php
/*   Created by  : Francis A.
     Date        : November 22, 2014
     Script Lines: All unless noted otherwise
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class test extends CI_Controller {

	public function index()
	{
		$data = array( 
    	'title' => 'Title goes here',     
		);
 
	$this->load->library('sl_template');
	$this->sl_template->load('default', 'content', $data);

	}
}
?>