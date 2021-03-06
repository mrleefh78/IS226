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
$route['po/create'] = 'po/create';
$route['po/update'] = 'po/update/$1';
$route['po/(:any)'] = 'po/view/$1';
$route['po'] = 'po/index';

$route['pr/create'] = 'pr/create';
$route['pr/update'] = 'pr/update/$1';
$route['pr/(:any)'] = 'pr/view/$1';
$route['pr'] = 'pr/index';

$route['ro/create'] = 'ro/create';
$route['ro/update'] = 'ro/update/$1';
$route['ro/(:any)'] = 'ro/view/$1';
$route['ro'] = 'ro/index';

$route['release/create'] = 'release/create';
$route['release/update'] = 'release/update/$1';
$route['release/(:any)'] = 'release/view/$1';
$route['release'] = 'releases/index';

$route['requests/create'] = 'requests/create';
$route['requests/update'] = 'requests/update/$1';
$route['requests/(:any)'] = 'requests/view/$1';
$route['requests'] = 'requests/index';

$route['suppliers/create'] = 'suppliers/create';
$route['suppliers/update'] = 'suppliers/update/$1';
$route['suppliers/(:any)'] = 'suppliers/view/$1';
$route['suppliers'] = 'suppliers/index';

$route['locations/create'] = 'locations/create';
$route['locations/update'] = 'locations/update/$1';
$route['locations/(:any)'] = 'locations/view/$1';
$route['locations'] = 'locations/index';

$route['departments/create'] = 'departments/create';
$route['departments/update'] = 'departments/update/$1';
$route['departments/(:any)'] = 'departments/view/$1';
$route['departments'] = 'departments/index';

$route['items/update'] = 'items/update/$1';
$route['items/update_class'] = 'items/update_class/$1';
$route['items/update_subclass'] = 'items/update_subclass/$1';
$route['pages/update'] = 'pages/update/$1';

$route['default_controller'] = 'pages/checklogin';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
