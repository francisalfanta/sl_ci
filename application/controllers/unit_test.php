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
	}

	public function index() {
        $query_propertyfinder = $this->propertyfinder_model->get_propertyfinder_by_id(4442);
        if($query_propertyfinder) { echo 'yes'; }

        $test_unit = $query_propertyfinder;

		foreach($test_unit as $row){
			var_dump($row);
		}
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