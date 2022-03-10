<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['news'] = 'news'; // pada route['news'] adalah url dan = 'news' adalah controller news yang dipanggil


// $route['news'] = 'news';    
$route['default_controller'] = 'halaman/view'; //menyambungkan ke controller Welcome.php

$route['(:any)'] = 'halaman/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
