<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slcs_staff_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_staff($username = FALSE)
	{
		if ($username === FALSE)
		{
			$query = $this->db->get('slcs_staff');
			return $query->result_array();
		}

		$query = $this->db->get_where('slcs_staff', array('username' => $username));
		return $query->row_array();
	}

	public function create_staff() {

		//$this->load->helper('url');
		//$slug = url_title($this->input->post('title'), 'dash', TRUE);

		$username = $this->input->post('username');
		$fname 	  =	$this->input->post('fname');
		$lname    = $this->input->post('lname');
		$fullname = $fname." ".$lname;

		$new_staff_insert_data = array(
			'fname' => $fname,
			'lname' => $lname,
			'fullname' =>  $fullname,
			'email' =>$this->input->post('email'),
			'gender' => $this->input->post('gender'),
			'placeofbirth' => $this->input->post('placeofbirth'),
			'passport_no' => $this->input->post('passport_no'),
			'nationality' => $this->input->post('nationality'),
			'marital_stat' => $this->input->post('martial_stat'),
			'date_hired' => $this->input->post('date_hired'),
			'date_started' => $this->input->post('date_started'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'dob' => $this->input->post('dob'),
			'active' => $this->input->post('active'),
			'acctype' => $this->input->post('acctype')
		);

		$insert = $this->db->insert('slcs_staff', $new_staff_insert_data);
		return $insert;
	}

	public function check_if_username_exists($username) {

		$this->db->where('tb_slcs_staff', $username);

		$result = $this->db->get('users');

		if($result->num_rows() > 0) {
			return FALSE; // username taken
		} else {
			return TRUE;
		}
	}

	//update
	//delete
}
?> 