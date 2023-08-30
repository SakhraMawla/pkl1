<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'page';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['(open_ticket|view_ticket|form_ticket|ticket|login)'] = 'page/format/$1';
$route['test'] = 'page/test';
