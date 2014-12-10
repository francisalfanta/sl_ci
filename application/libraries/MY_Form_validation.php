<?php

/**
 * MY_Form_validation Class
 *
 * This library extends the native Form validation library.
 * It adds a custom callback rule
 *
 * @package	CodeIgniter
 * @subpackage Libraries
 * @category Forms
 * @author Ollie Rattue
 */

class MY_Form_validation extends CI_Form_validation
{

    function __construct()
    {
        parent::__construct();

		$this->CI =& get_instance();
    }
	
	// --------------------------------------------------------------------
	
	/**
	* Required if another field has a value (related fields)
	*
	* @access	public
	* @param	string
	* @return	bool
	*/
	
	function requiredif($str, $field)
	{
		if ($_POST[$field] == '')
		{
			return TRUE; // the related form is blank			
		}
		
		// the related form is set proceed with normal required
		
		if (!is_array($str))
		{
			return (trim($str) == '') ? FALSE : TRUE;
    	}
		else
		{
			return ( ! empty($str));
    	}
	}
	
	function valid_date($str, $field){
	
			if ( @ereg ("([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})", $str) )
			{
				$arr = explode ("/", $str);    // splitting the array
				$mm = $arr[0];              // 1 element is month
				$dd = $arr[1];              // 2 element is days
				$yyyy = $arr[2];            // 3 element of the array is year
				return ( checkdate($mm, $dd, $yyyy) );
			} 
			else 
			{
				return FALSE;
			}
	}

	function alpha_space_hypen($str, $field){
        return ( ! preg_match("/^[A-Za-z- ]*$/", $str)) ? FALSE : TRUE;
    }
	
	function num_space_hypen($str, $field){
        return ( ! preg_match("/^[0-9- ]*$/", $str)) ? FALSE : TRUE;
    }
	// --------------------------------------------------------------------
}
?>