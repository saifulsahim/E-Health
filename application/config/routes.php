<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/


$route['admin-dashboard']= 'admin/show_dashboard';
$route['register-admin']='admin/show_admin_register_form';
$route['manage-admin'] ='admin/manage_admin_form';
$route['change-admin-status/(.+)/(.+)']='admin/change_admin_status/$1/$2';
$route['edit-admin/(.+)']= 'admin/edit_admin/$1';
$route['update-admin']= 'admin/update_admin';
$route['delete-admin/(.+)'] = 'admin/delete_admin/$1';






$route['add-donor'] = 'donor/add_donor';
$route['save-donor']='donor/save_donor';
$route['manage-donor']='donor/manage_donor';
$route['change-donor-status/(.+)/(.+)']='donor/change_donor_status/$1/$2';
$route['edit-donor/(.+)']= 'donor/edit_donor/$1';
$route['update-donor']='donor/update_donor';
$route['delete-donor/(.+)'] = 'donor/delete_donor/$1';



$route['add-test']= 'test/add_test';
$route['save-test']='test/save_test';
$route['manage-test']= 'test/manage_test';
$route['change-test-status/(.+)/(.+)']='test/change_test_status/$1/$2';
$route['view-test/(.+)']= 'test/view_test/$1';
$route['edit-test/(.+)']= 'test/edit_test/$1';
$route['update-test']='test/update_test';
$route['delete-test/(.+)'] = 'test/delete_test/$1';



$route['add-department'] = 'doctor/add_department';
$route['save-department']='doctor/save_department';
$route['manage-department']='doctor/manage_department';
$route['change-dept-status/(.+)/(.+)'] ='doctor/change_dept_status/$1/$2';
$route['edit-dept/(.+)'] = 'doctor/edit_dept/$1';
$route['update-dept']='doctor/update_dept';




$route['add-doctor']='doctor/add_doctor';
$route['save-doctor']= 'doctor/save_doctor';
$route['manage-doctor'] = 'doctor/manage_doctor';
$route['change-doctor-status/(.+)/(.+)']='doctor/change_doctor_status/$1/$2';
$route['view-doctor/(.+)']='doctor/view_doctor/$1';
$route['edit-doctor/(.+)']= 'doctor/edit_doctor/$1';
$route['update-doctor']='doctor/update_doctor';
$route['delete-doctor/(.+)'] = 'doctor/delete_doctor/$1';




$route['add-hospital']='hospital/add_hospital';
$route['save-hospital'] = 'hospital/save_hospital';
$route['manage-hospital']='hospital/manage_hospital';
$route['change-hospital-status/(.+)/(.+)'] ='hospital/change_hospital_status/$1/$2';
$route['view-hospital/(.+)']= 'hospital/view_hospital/$1';
$route['edit-hospital/(.+)']= 'hospital/edit_hospital/$1';
$route['update-hospital']='hospital/update_hospital';
$route['delete-hospital/(.+)'] = 'hospital/delete_hospital/$1';







$route['add-cabin']= 'cabin/add_cabin';
$route['save-cabin']='cabin/save_cabin';
$route['manage-cabin']='cabin/manage_cabin';
$route['change-cabin-status/(.+)/(.+)']='cabin/change_cabin_status/$1/$2';
$route['view-cabin/(.+)']='cabin/view_cabin/$1';
$route['edit-cabin/(.+)']='cabin/edit_cabin/$1';
$route['update-cabin']='cabin/update_cabin';
$route['delete-cabin/(.+)'] = 'cabin/delete_cabin/$1';





$route['add-ambulance']='ambulance/add_ambulance';
$route['save-ambulance']='ambulance/save_ambulance';
$route['manage-ambulance']='ambulance/manage_ambulance';
$route['change-ambulance-status/(.+)/(.+)']='ambulance/change_ambulance_status/$1/$2';
$route['edit-ambulance/(.+)']='ambulance/edit_ambulance/$1';
$route['update-ambulance'] = 'ambulance/update_ambulance';
$route['delete-ambulance/(.+)'] = 'ambulance/delete_ambulance/$1';









$route['admin-login'] ='admin_login/check_admin_login';
$route['admin']= 'admin_login';
$route['admin-logout']= 'admin_login/check_admin_logout';
//$route['admin-dashboard']='admin/show_dashboard';





$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
