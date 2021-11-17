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
$route['default_controller'] = '';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// --- GUEST --- wkwk sorry ngasal
$route['home'] = 'guest/MainController';
$route['home/course_list'] = 'guest/MainController/course_list';
$route['home/course'] = 'guest/MainController/course';
$route['home/eventList'] = 'guest/MainController/eventList';
$route['home/event'] = 'guest/MainController/event';
$route['home/pretest'] = 'guest/MainController/pretest';
$route['home/about'] = 'guest/MainController/about';
$route['profile'] = 'guest/UserController/profile';
$route['login'] = 'guest/AuthController';
$route['register'] = 'guest/AuthController/register';

// --- ADMIN ---
// COURSE
$route['adm-login']                 = 'adm/AuthController/vLogin';
$route['admin/course']              = 'adm/CourseController';
$route['admin/course/add']          = 'adm/CourseController/vAdd';
$route['admin/course/edit/(:any)']  = 'adm/CourseController/vEdit/$1';
$route['admin/course/store']        = 'adm/CourseController/store';
$route['admin/course/update']       = 'adm/CourseController/update';
$route['admin/course/publish']      = 'adm/CourseController/publish';
$route['admin/course/destroy']      = 'adm/CourseController/destroy';


// MATERIAL
$route['admin/material/store']          = 'adm/MaterialController/store';
$route['admin/material/update']         = 'adm/MaterialController/update';
$route['admin/material/destroy-res']    = 'adm/MaterialController/destroyResource';
$route['admin/material/finish']         = 'adm/MaterialController/finish';
$route['admin/material/(:any)']         = 'adm/MaterialController/vMaterial/$1';
$route['admin/material/add/(:any)']     = 'adm/MaterialController/vAdd/$1';
$route['admin/material/edit/(:any)']    = 'adm/MaterialController/vEdit/$1';