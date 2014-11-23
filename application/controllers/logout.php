<?php 
/*   Created by  : Lemuel
     Date        : November 23, 2014
     Script Lines: All unless noted otherwise
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {
	// Created by: Lemuel
	public function index() {
		$this->session->sess_destroy();
		redirect('login');		
	}
}