<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "Main";
$route['products/new'] = "Main/addProduct";
$route['actions/show/(:any)'] = "Actions/show/$1";
$route['actions/edit/(:any)'] = "Actions/edit/$1";
$route['actions/remove/(:any)'] = "Actions/remove/$1";
$route['products/create'] = "Main/insertProduct";
$route['404_override'] = '';

//end of routes.php
