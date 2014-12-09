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

	public function index($property_owner_id = null, $propertyfinder_id =null) {
        //$query_addr = $this->owner_addr_model->get_addr_info(1);
        $tb_property_owner_id = $this->input->post('property_owner_id');
        $addr_id = $this->input->post('address_id');
        $max = count($addr_id);
        for ($i = 0, $array_id=1; $i < $max; $i++, $array_id++) {
            echo '$i: '.$i.'<br>';
            if($i===0){ $x=1;} else { $x= $i+1;};
            echo '$x: '.$x.'<br>';
            echo '$array_id: '.$array_id.'<br>';
            
            if(isset($addr_id[$array_id]))
            { 
                echo 'addr_id: '.$addr_id[$array_id].'<br>'; 
                $address_id = $addr_id[$array_id];
            } else { 
                echo 'addr not set<br>';
            }
            
            $clist_name = 'clist'.$array_id;
            $clist = $this->input->post($clist_name);
            echo '$clist '.$clist.'<br>';
            $city_name = 'city'.$array_id;
            $city = $this->input->post($city_name);
            echo '$city: '.$city.'<br>';
            $comm_name = 'add'.$array_id.'1';
            echo 'comm_name: '. $comm_name.'<br>';
            $community = $this->input->post($comm_name);
            echo '$comm: '. $community.'<br>';
            $subcom_name = 'add'.$array_id.'2';
            echo 'subcomm_name: '.$subcom_name.'<br>';
            $subcommunity = $this->input->post($subcom_name);
            echo '$subcom: '.$subcommunity.'<br>';
            $addr_name = 'add'.$array_id.'3';
            echo 'addr_name: '. $addr_name.'<br>';
            $address = $this->input->post($addr_name);
            echo '$addr: '. $address.'<br>';
            
            $this->form_validation->set_rules($clist_name, 'Country Name');
            $this->form_validation->set_rules($city_name, 'City');
            $this->form_validation->set_rules($comm_name, 'Community');
            $this->form_validation->set_rules($subcom_name, 'Sub-community');
            $this->form_validation->set_rules($addr_name, 'Address');
            
            $address_data = array(
                'address' => $address,
                'addressSubcommunity'=> $subcommunity,
                'addressCommunity' => $community,
                'addressCity' => $city,
                'addressCountry' => $clist,
                'tb_property_owner_id' => $tb_property_owner_id
            );

             // form validation for address
            if ($this->form_validation->run() == TRUE && isset($addr_id[$array_id]))
            {  // update
                echo "yes";  
                var_dump($address_data);
                $this->address_model->update_address($address_id, $address_data);
            } else { // insert
                echo "no";
                $this->address_model->insert_address($address_data);
            }
        }

       




        var_dump($addr_id);   
     
        //var_dump($query_addr->result());

        $test_unit = $addr_id;
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
