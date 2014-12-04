<?php 
/*   Created by  : Francis A.
     Date        : November 26, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class city_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_city($q = null)
	{
		if($q == null) {
			$query = $this->db->get('city');
			return $query->result_array();
		}

		$this->db->select('*');
		$this->db->like('city_name', $q);
		$query = $this->db->get('city');
		if($query->num_rows > 0){
			foreach($query->result_array() as $row){
				$row_set[] = htmlentities(stripslashes($row['city_name']));
			}
			echo json_encode($row_set);
		}
	}	

	public function get_city_by_id($city_id = null)
	{		
		$this->db->where('id', $city_id);
		$query = $this->db->get('city');		
		$city_name = null;

		if($query->num_rows()>0){
			foreach($query->result_array() as $row){
            	$city_name=$row['city_name'];
        	}	
		}
		return $city_name;		
	}	

	public function getCity()
    {
        $this->db->select('id,city_name');
        $this->db->from('city'); 
        $query = $this->db->get();
         
         foreach($query->result_array() as $row){
            $data[$row['id']]=$row['city_name'];
        }
        return $data;
    }

    //fill your cities dropdown depending on the selected city
    public function getCityByCountry($city_id=string)
    {
        $this->db->select('id,community_name');
        $this->db->from('community');
        $this->db->where('city_id',$city_id); 
        $this->db->order_by("community_name", "asc"); 
        $query = $this->db->get();
         
        return $query;
    }

    public function getSubByComm($community_id=string)
    {
        $this->db->select('id,subcommunity_name');
        $this->db->from('subcommunity');
        $this->db->where('community_id', $community_id); 
        $this->db->order_by("subcommunity_name", "asc"); 
        $query = $this->db->get();
         
        return $query;
    }

	public function create_city() {		
		$new_city_insert_data = array(
			'city_name' 	       => $this->input->post('city')
		);
		$insert = $this->db->insert('city', $new_city_insert_data);
		return $insert;
	}

	public function delete_city() {				
		$city_name = $this->input->post('city');
		
		$this->db->where('city_name', $city_name);
		$this->db->delete('city');
	}

	public function update_city($id, $data) {		
		$this->db->where('id', $id);
		$this->db->update('city', $data); 		
	}	
}?>