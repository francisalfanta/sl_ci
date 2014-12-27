<?php  

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
/*   Modified by    : Francis A.
     Date           : November 23, 2014
     Script Lines   : All unless noted otherwise
*/
// controller = url
$route['sl_emailer/unsubscribe/(:any)'] = 'sl_emailer/unsubscribe/$1';
$route['sl_emailer/filtered_email_lists'] = 'sl_emailer/filtered_email_lists';
$route['sl_emailer/template_lists'] = 'sl_emailer/template_lists';
$route['sl_emailer/slsend_mail'] = 'sl_emailer/slsend_mail';
$route['sl_emailer'] = 'sl_emailer';

$route['property_owner/list_all'] = 'property_owner/list_all';  // for deletion
$route['dt_test/list_all'] = 'dt_test/list_all';                // for deletion 

$route['nationality/view_details']  = 'nationality/view_details';
$route['nationality/del_nat/(:any)']  = 'nationality/del_nat/$1';
$route['nationality/create_owner_contact_details']  = 'nationality/create_owner_contact_details';

$route['property_owner/print_form'] = 'property_owner/print_form';
$route['property_owner/buildDropPropertyTypes'] = 'property_owner/buildDropPropertyTypes';
$route['property_owner/create_property_owner'] = 'property_owner/create_property_owner';
$route['property_owner/for_deletion_owner'] = 'property_owner/for_deletion_owner';
$route['property_owner/del_addr/(:any)'] = 'property_owner/del_addr/$1';
$route['property_owner/datatable'] = 'property_owner/datatable';
$route['property_owner/q_prop_owner'] = 'property_owner/q_prop_owner';
$route['property_owner/create_edit/(:any)'] = 'property_owner/create_edit/$1';
//$route['property_owner/view_property_owner/(:any)'] = 'property_owner/view_property_owner/$1';
$route['property_owner/update_owner_personal_details'] = 'property_owner/update_owner_personal_details';
$route['property_owner'] = 'property_owner';

$route['community/del_comm_name'] = 'community/del_comm_name';
$route['community/create_comm_name'] = 'community/create_comm_name'; 
$route['city/get_city'] = 'city/get_city';
$route['city/del_city_name'] = 'city/del_city_name';
$route['city/create_city_name'] = 'city/create_city_name'; 

$route['access_level'] = 'access_level';

$route['staff_menu/delete_staff_menu'] = 'staff_menu/delete_staff_menu';
$route['staff_menu/update_staff_menu'] = 'staff_menu/update_staff_menu';
$route['staff_menu/view_staff_menu'] = 'staff_menu/view_staff_menu';
$route['staff_menu/create_staff_menu'] = 'staff_menu/create_staff_menu';
$route['staff_menu'] = 'staff_menu';

$route['tables/sl_form_wizard'] = 'tables/sl_form_wizard';

$route['dept_tasks/create_dept_task'] = 'dept_tasks/create_dept_task';
$route['dept_tasks'] = 'dept_tasks';
$route['departments/view/(:any)'] = 'departments/view/$1';
$route['departments/create_sec'] = 'departments/create_sec';
$route['departments'] = 'departments';

$route['login/logout'] = 'login/logout';
$route['login/login_validation'] = 'login/login_validation';	// added this line : Lemuel

$route['login/sl_admin'] = 'login/sl_admin'; 					// added this line : Lemuel
$route['login/logout_mod'] = 'login/logout_mod'; 				// added this line : Lemuel
$route['login/logout_mod'] = 'login/logout'; 					// added this line : Lemuel

$route['slcs_staff/print_form'] = 'slcs_staff/print_form';
$route['slcs_staff/create_member'] = 'slcs_staff/create_member';
$route['slcs_staff'] = 'slcs_staff';

$route['nationality']  = 'nationality';

$route['login'] = 'login';
$route['tables'] = 'tables';

//$route['default_controller'] = 'login';

$route['default_controller'] = "subscriber";  //for deletion

$route['propertyfinder/add_propertyfinder'] = 'propertyfinder/add_propertyfinder';
$route['propertyfinder/count_record_by_subcommunity'] = 'propertyfinder/count_record_by_subcommunity';
$route['propertyfinder/count_record_by_community'] = 'propertyfinder/count_record_by_community';
$route['propertyfinder/count_record_by_city'] = 'propertyfinder/count_record_by_city';
$route['propertyfinder/buildDropSubCom'] = 'propertyfinder/buildDropSubCom';
$route['propertyfinder/buildDropCities'] = 'propertyfinder/buildDropCities';
$route['propertyfinder/view_propertyfinder/(:any)'] = 'propertyfinder/view_propertyfinder/$1';
$route['propertyfinder/del/(:any)'] = 'propertyfinder/del/$1';
$route['propertyfinder/get_city'] = 'propertyfinder/get_city';
$route['propertyfinder/create_property'] = 'propertyfinder/create_property';
$route['propertyfinder'] = 'propertyfinder';    


// for deletion
$route['propertyfinder/extract_data_per_area'] = 'propertyfinder/extract_data_per_area';
$route['propertyfinder/extract_data'] = 'propertyfinder/extract_data';
$route['unit_test/c_build_drop_property_type'] = 'unit_test/c_build_drop_property_type';
$route['unit_test/m_prop_owner_for_delation'] ='unit_test/m_prop_owner_for_delation';
$route['unit_test'] = 'unit_test';

$route['test'] = 'test';

$route['formigniter'] = 'formigniter';                          // Form Generator
$route['form'] = 'form';
//$route['404_override'] = 'errors/page_missing';

/* End of file routes.php */
/* Location: ./application/config/routes.php */