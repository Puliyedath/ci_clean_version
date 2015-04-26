<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "Main";
$route['delete/(:any)'] = "Main/delete/$1";
$route['insert'] = "Main/insert";
$route['404_override'] = '';

//end of routes.php
