<?php
class Tb_slcs_staff_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_staff($username = FALSE)
	{
		if ($username === FALSE)
		{
			$query = $this->db->get('tb_slcs_staff');
			return $query->result_array();
		}

		$query = $this->db->get_where('tb_slcs_staff', array('username' => $username));
		return $query->row_array();
	}

	public function create_staff() {

		$username = $this->input->post('username');

		$new_staff_insert_data = array(
			'fname' => $this->input->post('first_name'),
			'lname' => $this->input->post('last_name'),
			'fullname' =>  $this->input->post('first_name').' '.$this->input->post('last_name'),
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

		$insert = $this->db->insert('tb_slcs_staff', $new_staff_insert_data);
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