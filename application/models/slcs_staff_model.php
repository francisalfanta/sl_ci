<?php 
/*   Created by  : Francis A.
     Date        : November 23, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	// Created by : Prime 12/15/2014
	public function fp_get_staff($uname)
	{
		
		$this->db->where('username',$uname);
		$q = $this->db->get('slcs_staff')->row();
		$random = substr( md5(rand()), 0, 10);
		
		$username = "goldexvoip";
		$password = "123123";
		$from = "SoftlineGroup";
		$id = $q->id;
		$tomnumber = $q->mnumber;
		$msg = "Greetings, your random generated code is";
		$code = $random;
		$msg2 = ". Please enter this code to reset your password , thank you. Powered by: Softline Group.";
		
		$data = array('random_gen' => $random);
		$this->db->where('id',$id);
		$this->db->update('slcs_staff',$data);
		
		$vars = 'username='.$username.'&password='.$password.'&from='.$from.'&to='.$tomnumber.'&text='.$msg.'';
		if ($_POST['submitted']=="true"){
		
			$construct_url='https://www.voicetrading.com/myaccount/sendsms.php?username='.$username.'&password='.$password.'&from='.$from.'&to='.$tomnumber.'&text='.$msg.' '.$code.''.$msg2.'';
			file_get_contents($construct_url); 
			
		}		
	}
	
	public function fp_get_staff_ran_gen($rangen)
	{
		
		//$pass = $this->input->post('pword');
		//$newpassword = md5(md5("kjfiufj".$pass."Fj56fj")); //Double md5 hash for security reasons
		
		$data = array(
			'random_gen' => NULL,
			'password' => $this->input->post('pword')
		);
		
		$this->db->where('random_gen',$rangen);
		$this->db->update('slcs_staff',$data);
		
	}
	
	// Created by : Prime
	public function create_staff($filename) {
		
		$username = $this->input->post('username');
		$fname 	  =	$this->input->post('fname');
		$lname    = $this->input->post('lname');
		$email    = $this->input->post('ea');
		
		$basics	  = $this->input->post('basic_salary');
		$accomo	  = $this->input->post('accom');
		$transp	  = $this->input->post('transpo');
		$tas	  = ($basics + $accomo + $transp);
		
		$fullname = $fname." ".$lname;

		$new_staff_insert_data = array(
			'fname' => $fname,
			'mname' => $this->input->post('mname'),
			'lname' => $lname,
			'fullname' =>  $fullname,
			
			'gender' => $this->input->post('radio_gender'),
			'dob' => $this->input->post('dob'),
			'age' => $this->input->post('age'),
			'birthplace' => $this->input->post('pob'),
			'nationality' => $this->input->post('nationality'),
			'marital_stat' => $this->input->post('radio_ms'),
			'language' => $this->input->post('language'),			
			'passport_no' => $this->input->post('ppno'),
			'type_of_contract' => $this->input->post('toc'),
			'date_hired' => $this->input->post('dh'),
			'date_started' => $this->input->post('ds'),
			'date_release' => $this->input->post('dr'),
			
			'villa_no' => $this->input->post('vno'),
			'street' => $this->input->post('st'),
			'city_state_province' => $this->input->post('csp'),
			'complete_address' => $this->input->post('ca'),
			'email' => $this->input->post('ea'),
			'mnumber' => $this->input->post('mn'),
			'home_number' => $this->input->post('hn'),
			
			'N1' => $this->input->post('n1'),
			'R1' => $this->input->post('r1'),
			'MN1' => $this->input->post('mn1'),
			'CA1' => $this->input->post('ca1'),
			'N2' => $this->input->post('n2'),
			'R2' => $this->input->post('r2'),
			'MN2' => $this->input->post('mn2'),
			'CA2' => $this->input->post('ca2'),
			'N3' => $this->input->post('n3'),
			'R3' => $this->input->post('r3'),
			'MN3' => $this->input->post('mn3'),
			'CA3' => $this->input->post('ca3'),
			
			'bank_name' => $this->input->post('bnkn'),
			'branch_name' => $this->input->post('bnkbn'),
			'account_name' => $this->input->post('bnkaname'),
			'account_number' => $this->input->post('bnkanumber'),
			
			'position' => $this->input->post('pos_t'),
			'employment_status' => $this->input->post('estat'),
			
			'basicsalary' => $this->input->post('basic_salary'),
			'gratuity_pay' => $this->input->post('radiogp'),
			'tocontract' => $this->input->post('radiotoc'),
			'accommodation' => $this->input->post('accom'),
			'years_of_service' => $this->input->post('yrs'),
			'months_of_service' => $this->input->post('mnths'),
			'transpo_allowance' => $this->input->post('transpo'),
			'total_amount' => $this->input->post('tamt'),
			'total_salary' => $tas,					
			
			'm_card_num' => $this->input->post('midcno'),
			'm_issue_date' => $this->input->post('midate'),
			'm_expiry_date' => $this->input->post('mexdate'),
			'm_others' => $this->input->post('miothers'),
			'bapl' => ($this->input->post('mycheck1') === FALSE) ? "no" : "yes",
			'byt' => ($this->input->post('mycheck2') === FALSE) ? "no" : "yes",
			'b30dal' => ($this->input->post('mycheck3') === FALSE) ? "no" : "yes",
			'm_bonus' => $this->input->post(',mbonus'),
			'bn_bonus' => $this->input->post(',bnbonus'),
			
			'dl_idcno' => $this->input->post('dlidcno'),
			'dl_idate' => $this->input->post('dlidate'),
			'dl_exdate' => $this->input->post('dlexdate'),
			'dl_others' => $this->input->post('dlothers'),			
			'lc_idcno' => $this->input->post('lcidcno'),
			'lc_idate' => $this->input->post('lcidate'),
			'lc_exdate' => $this->input->post('lcexdate'),
			'lc_others' => $this->input->post('lcothers'),			
			'r_idcno' => $this->input->post('ridcno'),
			'r_idate' => $this->input->post('ridate'),
			'r_exdate' => $this->input->post('rexdate'),
			'r_others' => $this->input->post('rothers'),			
			'vs_idcno' => $this->input->post('vsidcno'),
			'vs_idate' => $this->input->post('vsidate'),
			'vs_exdate' => $this->input->post('vsexdate'),
			'vs_others' => $this->input->post('vsothers'),			
			'others_idcno' => $this->input->post('othersidcno'),
			'others_idate' => $this->input->post('othersidate'),
			'others_exdate' => $this->input->post('othersexdate'),
			'others_others' => $this->input->post('othersothers'),
			
			'acctype' => (1),
			'file_name' => $filename,
			'username' => 'Softline'
		);
		
		
		$tomnumber = $this->input->post('mn');
		$random = substr( md5(rand()), 0, 10);
		$msg = 'Greetings, '.$fullname.' Here are the details of your new account. USERNAME: Softline PASSWORD:';
		
		
		$construct_url='https://www.voicetrading.com/myaccount/sendsms.php?username=goldexvoip&password=123123&from=prime&to='.$tomnumber.'&text='.$msg.'';
		file_get_contents($construct_url); 
		
		
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
	
	public function delete_staff($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('slcs_staff');
	}
	
	public function get_slcs_staff($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('slcs_staff');
		return $query->row();
	}
	
	public function update_staff($filename)
	{
		
		$id = $this->input->post('id');
		$basics	  = $this->input->post('basic_salary');
		$accomo	  = $this->input->post('accom');
		$transp	  = $this->input->post('transpo');
		$tas	  = ($basics + $accomo + $transp);
		
		$data = array(
			'fname' => $this->input->post('fname'),
			'mname' => $this->input->post('mname'),
			'lname' => $this->input->post('lname'),
			'gender' => $this->input->post('radio_gender'),
			'dob' => $this->input->post('dob'),
			'age' => $this->input->post('age'),
			'birthplace' => $this->input->post('pob'),
			'nationality' => $this->input->post('nationality'),
			'marital_stat' => $this->input->post('radio_ms'),
			'language' => $this->input->post('language'),			
			'passport_no' => $this->input->post('ppno'),
			'type_of_contract' => $this->input->post('toc'),
			'date_hired' => $this->input->post('dh'),
			'date_started' => $this->input->post('ds'),
			'date_release' => $this->input->post('dr'),
			
			'villa_no' => $this->input->post('vno'),
			'street' => $this->input->post('st'),
			'city_state_province' => $this->input->post('csp'),
			'complete_address' => $this->input->post('ca'),
			'email' => $this->input->post('ea'),
			'mnumber' => $this->input->post('mn'),
			'home_number' => $this->input->post('hn'),
			
			'N1' => $this->input->post('n1'),
			'R1' => $this->input->post('r1'),
			'MN1' => $this->input->post('mn1'),
			'CA1' => $this->input->post('ca1'),
			'N2' => $this->input->post('n2'),
			'R2' => $this->input->post('r2'),
			'MN2' => $this->input->post('mn2'),
			'CA2' => $this->input->post('ca2'),
			'N3' => $this->input->post('n3'),
			'R3' => $this->input->post('r3'),
			'MN3' => $this->input->post('mn3'),
			'CA3' => $this->input->post('ca3'),
			
			'bank_name' => $this->input->post('bnkn'),
			'branch_name' => $this->input->post('bnkbn'),
			'account_name' => $this->input->post('bnkaname'),
			'account_number' => $this->input->post('bnkanumber'),
			
			'position' => $this->input->post('pos_t'),
			'employment_status' => $this->input->post('estat'),
			
			'basicsalary' => $this->input->post('basic_salary'),
			'gratuity_pay' => $this->input->post('radiogp'),
			'tocontract' => $this->input->post('radiotoc'),
			'accommodation' => $this->input->post('accom'),
			'years_of_service' => $this->input->post('yrs'),
			'months_of_service' => $this->input->post('mnths'),
			'transpo_allowance' => $this->input->post('transpo'),
			'total_amount' => $this->input->post('tamt'),
			'total_salary' => $tas,
			
			'm_card_num' => $this->input->post('midcno'),
			'm_issue_date' => $this->input->post('midate'),
			'm_expiry_date' => $this->input->post('mexdate'),
			'm_others' => $this->input->post('miothers'),
			'bapl' => ($this->input->post('mycheck1') === FALSE) ? "no" : "yes",
			'byt' => ($this->input->post('mycheck2') === FALSE) ? "no" : "yes",
			'b30dal' => ($this->input->post('mycheck3') === FALSE) ? "no" : "yes",
			'm_bonus' => $this->input->post(',mbonus'),
			'bn_bonus' => $this->input->post(',bnbonus'),
			
			'dl_idcno' => $this->input->post('dlidcno'),
			'dl_idate' => $this->input->post('dlidate'),
			'dl_exdate' => $this->input->post('dlexdate'),
			'dl_others' => $this->input->post('dlothers'),			
			'lc_idcno' => $this->input->post('lcidcno'),
			'lc_idate' => $this->input->post('lcidate'),
			'lc_exdate' => $this->input->post('lcexdate'),
			'lc_others' => $this->input->post('lcothers'),			
			'r_idcno' => $this->input->post('ridcno'),
			'r_idate' => $this->input->post('ridate'),
			'r_exdate' => $this->input->post('rexdate'),
			'r_others' => $this->input->post('rothers'),			
			'vs_idcno' => $this->input->post('vsidcno'),
			'vs_idate' => $this->input->post('vsidate'),
			'vs_exdate' => $this->input->post('vsexdate'),
			'vs_others' => $this->input->post('vsothers'),			
			'others_idcno' => $this->input->post('othersidcno'),
			'others_idate' => $this->input->post('othersidate'),
			'others_exdate' => $this->input->post('othersexdate'),
			'others_others' => $this->input->post('othersothers'),
			'file_name' => $filename
			
		);
		
		$this->db->where('id',$id);
		$this->db->update('slcs_staff',$data);
		redirect("slcs_staff/index");
	}
}?>