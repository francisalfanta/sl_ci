<?php 
/*   Created by  : Francis A.
     Date        : November 26, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class country_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_country($q = null)
	{
		if($q == null) {
			$query = $this->db->get('country');
			return $query;
		}

		$this->db->select('*');
		$this->db->like('country_name', $q);
		$query = $this->db->get('country');
		if($query->num_rows > 0){
			foreach($query->result_array() as $row){
				$row_set[] = htmlentities(stripslashes($row['country_name']));
			}
			echo json_encode($row_set);
		}
	}	

	public function getCountry()
    {
        $this->db->select('id,country_name');
        $this->db->from('country'); 
        $query = $this->db->get();
         
         foreach($query->result_array() as $row){
            $data[$row['id']]=$row['country_name'];
        }
        return $data;
    }
   
	public function create_country() {		
		$new_country_insert_data = array(
			'country_name' 	       => $this->input->post('country_name')
		);
		$insert = $this->db->insert('country', $new_country_insert_data);
		return $insert;
	}

	public function delete_country() {				
		$city_name = $this->input->post('country_name');
		
		$this->db->where('country_name', $city_name);
		$this->db->delete('country');
	}

	public function update_country($id, $data) {		
		$this->db->where('id', $id);
		$this->db->update('country', $data); 		
	}	
}?>