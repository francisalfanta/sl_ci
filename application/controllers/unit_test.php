<?php
/*   Created by  : Francis A.
     Date        : November 24, 2014
     Script Lines: All unless noted otherwise
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Unit_test extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('propertyfinder_model');
        //$this->load->helpers('sql_sql_helper');
	}

	public function index() {
        $first_name  = $this->input->post('first_name');
        $middle_name = $this->input->post('middle_name');
        $last_name   = $this->input->post('last_name');
        $nationality = $this->input->post('nationality');
        $country     = $this->input->post('country_name');
        $telephone_no= $this->input->post('telephone_no');
        $mobile_no   = $this->input->post('mobile_no');
        $fax_no      = $this->input->post('fax_no');
        $email       = $this->input->post('email');
        
        if(isset($first_name) && $first_name){
            $this->db->like('first_name', $first_name);    
        }
        
        if(isset($middle_name) && $middle_name){
            echo 'middle_name';
            $this->db->or_like('middle_name', $middle_name);
        }
        if(isset($last_name) && $last_name){
            echo 'last_name';
            $this->db->or_like('last_name', $last_name);    
        }

        if(isset($nationality) && $nationality){
            echo 'entered nat';
            $this->db->or_like('nationality1', $nationality);
            $this->db->or_like('nationality2', $nationality);
            $this->db->or_like('nationality3', $nationality);
            $this->db->or_like('nationality4', $nationality);
        }

        if(isset($country) && $country){             
            $this->db->or_like('country1', $country);
            $this->db->or_like('country2', $country);
            $this->db->or_like('country3', $country);
            $this->db->or_like('country4', $country);               
        }

        if(isset($telephone_no) && $telephone_no) {
            $this->db->or_like('telephone_no1', $telephone_no);
            $this->db->or_like('telephone_no2', $telephone_no);
            $this->db->or_like('telephone_no3', $telephone_no);
            $this->db->or_like('telephone_no4', $telephone_no);            
        }

        if(isset($mobile_no) && $mobile_no) {
            $this->db->or_like('mobile_no1', $mobile_no);
            $this->db->or_like('mobile_no2', $mobile_no);
            $this->db->or_like('mobile_no3', $mobile_no);
            $this->db->or_like('mobile_no4', $mobile_no);            
        }

        if(isset($fax_no) && $fax_no){                
            $this->db->or_like('fax_no1', $fax_no);
            $this->db->or_like('fax_no2', $fax_no);
            $this->db->or_like('fax_no3', $fax_no);
            $this->db->or_like('fax_no4', $fax_no);   
        }

        if(isset($email) && $email) {            
            $this->db->or_like('email1', $email);
            $this->db->or_like('email2', $email);
            $this->db->or_like('email3', $email);
            $this->db->or_like('email4', $email);   
        }

        $query = $this->db->get('property_owner_master_list');
        var_dump($first_name);
        var_dump($nationality);
        var_dump($country);
        var_dump($query->result());

        $test_unit = $query;
		if (is_null($test_unit)) 
        {
           echo '$query is null';
        }
        else if ( is_array($test_unit) )
        {
           echo '$query is an array';
        }
        else if ( is_object($test_unit) )
        {
            echo '$query is an object';
        }
        else if ( is_string($test_unit) )
        {
            echo '$test_unit = '.$test_unit;
        }
        else if (is_numeric($test_unit)){
        	echo '$query is a numerical value';
        }
        else if (is_double($test_unit)){
        	echo '$query is a double';
        }
        else if (is_nan($test_unit)){
        	echo '$query is a NAN';
        }
	}

    public function m_create_prop_owner(){
        echo 'property_owner_model<br>';

        $new_pro_owner_insert_data = array(
            'first_name'  => 'x',
            'middle_name' => 'y',
            'last_name'   => 'b'
        );

        $this->db->insert('property_owner', $new_pro_owner_insert_data);
        $insert = $this->db->insert_id();
        echo $insert;
        var_dump($insert);
    }
    public function c_create_prop_owner(){
        echo 'property_owner<br>';
        if($query = $this->property_owner_model->create_prop_owner()){
            //$insert = $this->db->insert_id();
           // echo 'inside<br>: '.$insert;
            echo $query.'<br>';
                //redirect('property_owner/view_property_owner/$id)');
        } else {
            echo 'inside else';
        }
    }   

    public function h_sl_sql_helper(){
        $this->load->helper('sl_sql_helper');
        $sql = sl_sql();

        $sql = "select * from ( ".$sql. " ) as x where propertyfinder_id = ?";
        $query = $this->db->query($sql, array(70));
        var_dump($query->row_array());

        echo $sql;
    }

    public function c_view_property_owner(){
        $id = 1;
        $parents       = $this->property_owner_model->get_prop_owner($id);
        $data['nationalities'] = $this->owner_addr_model->get_owner_addr($id);
        var_dump($data['nationalities']);
        foreach($data['nationalities'] as $row) {
            var_dump($row->address);
        }
        if(isset($parents['passport_no'])){
                //echo 'yes';
                 //   var_dump($parents['passport_no']);
                //    var_dump($parents);

        } else {
            //echo 'no';
            $parents['passport_no'] =null;
        }
    }

    public function m_city_model() {
        $city_options = null;
        $query = $this->city_model->get_city();
        //var_dump($query);
            foreach($query as $key => $value){
               //echo $value['city_name']; 
                $city_options .= array(
                    $value['city_name'] => $value['city_name'],
                    );
            }
        var_dump($city_options);    
        //echo '<br>'.$city_options;
    }

    public function m_get_propertyfinder_by_id(){
        $propertyfinder = $this->propertyfinder_model->get_propertyfinder_by_id(8);
        var_dump($propertyfinder);
    }    
}
?>