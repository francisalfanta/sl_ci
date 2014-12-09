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
        $this->form_validation->set_rules('country[]', 'Country Name', 'required');
        $this->form_validation->set_rules('city[]', 'City');
        $this->form_validation->set_rules('comm[]', 'Community');
        $this->form_validation->set_rules('subcom[]', 'Sub-community');
        $this->form_validation->set_rules('addr_street[]', 'Address');
        $tb_property_owner_id = $this->input->post('property_owner_id');
        
        if ($this->form_validation->run() == TRUE) {
            // check if insert or update
            $this->address_model->update_batch_address($tb_property_owner_id);         
        
        } else { // insert
                echo "no<br>";
                //$this->address_model->insert_address($address_data);
        }
        //var_dump($addr_id);   
     
        //var_dump($query_addr->result());

        $test_unit = '';
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

    public function m_telno_insert(){
        $this->form_validation->set_rules('tel[]', 'Telephone No');

        if ($this->form_validation->run() == TRUE) {
            echo 'valid tel no<br>';
            $telno_id = $this->input->post('telno_id');
            echo '$telno_id: '. var_dump($telno_id);
            $tel_no = $this->input->post('telephone_no');         
            echo '<br>';
            var_dump($tel_no);

            $tb_property_owner_id = $this->input->post('property_owner_id');

            $telno_data = array();
                  
            for($x = 0; $x < sizeof($telno_id); $x++){
                $telno_data = array(
                    'tb_telephone_no_id'   => $telno_id[$x], 
                    'telephone_no'         => $tel_no[$x],                  
                    'tb_property_owner_id' => $tb_property_owner_id                    
                );  
                // check if for update or insert           
                if($telno_id[$x]){          
                    echo 'updating: '.$telno_id[$x].'<br>';
                    $this->db->where('tb_telephone_no_id', $telno_id[$x]);
                    $status = $this->db->update('telephone_no', $telno_data); 
                } else {           
                    echo 'inserting: '.$telno_id[$x].'<br>';
                    $status = $this->db->insert('telephone_no', $telno_data); 
                }        
            }      

        } else {
            echo 'not valid<br>';
        }
    }   

    public function m_faxno_insert(){
        $this->form_validation->set_rules('fax_no[]', 'Fax No');

        if ($this->form_validation->run() == TRUE) {
            echo 'valid fax no<br>';
            $faxno_id = $this->input->post('faxno_id');
            echo '$faxno_id: <br>';
            var_dump($faxno_id);
            $fax_no = $this->input->post('fax_no');         
            echo '<br>';
            var_dump($fax_no);

            $tb_property_owner_id = $this->input->post('property_owner_id');

            $telno_data = array();
                  
            for($x = 0; $x < sizeof($faxno_id); $x++){
                $faxno_data = array(
                    'tb_fax_no_id'   => $faxno_id[$x], 
                    'fax_no'         => $fax_no[$x],                  
                    'tb_property_owner_id' => $tb_property_owner_id                    
                );  
                // check if for update or insert           
                if($faxno_id[$x]){          
                    echo 'updating: '.$faxno_id[$x].'<br>';
                    $this->db->where('tb_fax_no_id', $faxno_id[$x]);
                    $status = $this->db->update('fax_no', $faxno_data); 
                } else {           
                    echo 'inserting: '.$faxno_id[$x].'<br>';
                    $status = $this->db->insert('fax_no', $faxno_data); 
                }        
            }      

        } else {
            echo 'not valid<br>';
        }
    }

    public function m_mobno_insert(){
        $this->form_validation->set_rules('mobno[]', 'Fax No');

        if ($this->form_validation->run() == TRUE) {
            echo 'valid mob no<br>';
            $mobno_id = $this->input->post('mobileno_id');
            echo '$mobno_id: <br>';
            var_dump($mobno_id);
            $mob_no = $this->input->post('mobno');         
            echo '<br>';
            var_dump($mob_no);

            $tb_property_owner_id = $this->input->post('property_owner_id');

            $mobno_data = array();
                  
            for($x = 0; $x < sizeof($mobno_id); $x++){
                $mobileno_data = array(
                    'tb_mobile_id'   => $mobno_id[$x], 
                    'mobile_no'         => $mob_no[$x],                  
                    'tb_property_owner_id' => $tb_property_owner_id                    
                );  
                // check if for update or insert           
                if($mobno_id[$x]){          
                    echo 'updating: '.$mobno_id[$x].'<br>';
                    $this->db->where('tb_mobile_id', $mobno_id[$x]);
                    $status = $this->db->update('mobile_no', $mobileno_data); 
                } else {           
                    echo 'inserting: '.$mobno_id[$x].'<br>';
                    $status = $this->db->insert('mobile_no', $mobileno_data); 
                }        
            }      

        } else {
            echo 'not valid<br>';
        }
    }

    public function m_email_insert(){
        $this->form_validation->set_rules('email_array[]', 'Email');

        if ($this->form_validation->run() == TRUE) {
            echo 'valid Email<br>';
            $email_id = $this->input->post('email_id');
            echo '$email_id: <br>';
            var_dump($email_id);
            $email = $this->input->post('email_array');         
            echo '<br>';
            var_dump($email);

            $tb_property_owner_id = $this->input->post('property_owner_id');

            $email_data = array();
                  
            for($x = 0; $x < sizeof($email_id); $x++){
                $email_data = array(
                    'tb_email_id'           => $email_id[$x], 
                    'email'                 => $email[$x],                  
                    'tb_property_owner_id'  => $tb_property_owner_id                    
                );  
                // check if for update or insert           
                if($email_id[$x]){          
                    echo 'updating: '.$email_id[$x].'<br>';
                    $this->db->where('tb_email_id', $email_id[$x]);
                    $status = $this->db->update('email', $email_data); 
                } else {           
                    echo 'inserting: '.$email_id[$x].'<br>';
                    $status = $this->db->insert('email', $email_data); 
                }        
            }      

        } else {
            echo 'not valid<br>';
        }
    }

    public function m_email_del(){
        $this->email_model->delete_email($tb_email_id);
        $status = $this->db->delete('email');

        echo $status;
    }
}
