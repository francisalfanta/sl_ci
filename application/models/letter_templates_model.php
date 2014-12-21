<?php 
/*   Created by  : Francis A.
     Date        : December 9, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class letter_templates_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	/* GUIDE ONLY
	public function insert_address($data){
		$insert = $this->db->insert('address', $data);
		return $insert;
	}

	public function update_address($id, $data) {		
		$this->db->where('tb_address_id', $id);
		$this->db->update('address', $data); 		
	}	
	*/
	// tested 12/20/2014
	public function get_letter_templates($selected_id = null){
		if(!$selected_id){
			$query = $this->db->get('letter_templates');
			return $query;
		} else {
			$this->db->where('tb_letter_templates_id', $selected_id);
			$query = $this->db->get('letter_templates');
			return $query->row();
		}
		
	}

	public function insert_letter_template(){
		$data = array(
			'name' => $this->input->post('msg_name'),
			'message'=> $this->input->post('message'));
			//'tb_slcs_staff_id' => )
		$insert = $this->db->insert('letter_templates', $data);
		return $insert;
	}
	// tested 12/21/2014
	public function delete_letter_template(){
		$letter_template_id = $this->input->post('msg_id');
		$this->db->where('tb_letter_templates_id', $letter_template_id);
		$delete = $this->db->delete('letter_templates');
		return $delete;
	}
	// on testing 12/21/2014
	public function update_letter_template_name(){
		$letter_template_id = $this->input->post('letter_template_id');
		$name = $this->input->post('letter_template_name');

		$this->db->where('tb_letter_templates_id', $letter_template_id);
		$update = $this->db->update('letter_templates', array('name' => $name));
		return $update;
	}
}	
