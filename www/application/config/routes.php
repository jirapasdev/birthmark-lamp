<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'frontendController/index';
$route[''] = 'frontendController/index';
// $route['admin'] = 'home_page/index';
$route['blogs'] = 'frontendController/blog';
$route['blog/(:num)'] = 'frontendController/blog_detail/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
