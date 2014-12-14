<?php
/*   Created by  : Francis A.
     Date        : December 14, 2014
     Script Lines: All unless noted otherwise
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Dt_test extends CI_Controller {

public function __construct(){
		parent::__construct();
		$this->load->library('Datatables');
        //$this->load->library('table');
        //$this->load->database();
		// all model were autoloaded
	}
function list_all()
 { 
  // $this->load->library('datatables'); 
  $this->datatables->select('tb_address_id, addressStreet, addressSubcommunity, addressCommunity, addressCity, addressCountry')
  ->from('address');
  //->add_column('myColumn', '$1', 'address.tb_address_id');

  $data['result'] = $this->datatables->generate();
  //echo $this->datatables->generate();
  $this->load->view('layout/datatable_example', $data);
 } 
}