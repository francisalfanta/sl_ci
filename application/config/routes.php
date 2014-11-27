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
$route['propertyfinder/create_property'] = 'propertyfinder/create_property';
$route['propertyfinder'] = 'propertyfinder';     
$route['access_level'] = 'access_level';

$route['staff_menu/delete_staff_menu'] = 'staff_menu/delete_staff_menu';
$route['staff_menu/update_staff_menu'] = 'staff_menu/update_staff_menu';
$route['staff_menu/view_staff_menu'] = 'staff_menu/view_staff_menu';
$route['staff_menu/create_staff_menu'] = 'staff_menu/create_staff_menu';
$route['staff_menu'] = 'staff_menu';

$route['tables/sl_form_wizard'] = 'tables/sl_form_wizard';
$route['tables'] = 'tables';

$route['dept_tasks/create_dept_task'] = 'dept_tasks/create_dept_task';
$route['dept_tasks'] = 'dept_tasks';
$route['departments/view/(:any)'] = 'departments/view/$1';
$route['departments/create_sec'] = 'departments/create_sec';
$route['departments'] = 'departments';

$route['logout'] = 'logout';
$route['login/login_validation'] = 'login/login_validation';	// added this line : Lemuel
$route['login'] = 'login';
$route['login/sl_admin'] = 'login/sl_admin'; 					// added this line : Lemuel
$route['login/logout_mod'] = 'login/logout_mod'; 				// added this line : Lemuel
$route['login/logout_mod'] = 'login/logout'; 					// added this line : Lemuel

$route['slcs_staff/create_member'] = 'slcs_staff/create_member';
$route['slcs_staff'] = 'slcs_staff';

$route['default_controller'] = 'login';
$route['unit_test'] = 'unit_test';
$route['formigniter'] = 'formigniter';                          // Form Generator
$route['form'] = 'form';
//$route['404_override'] = 'errors/page_missing';

/* End of file routes.php */
/* Location: ./application/config/routes.php */