<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$active_record = TRUE;

if(ENVIRONMENT == 'production'){

	$db['default']['hostname'] = 'us-cdbr-azure-west-c.cloudapp.net';
	$db['default']['username'] = 'b13e28a4963a39';
	$db['default']['password'] = '82532397';
	$db['default']['database'] = 'websitean9btr9us';

} else {

	$db['default']['hostname'] = 'us-cdbr-azure-west-c.cloudapp.net';
	$db['default']['username'] = 'b13e28a4963a39';
	$db['default']['password'] = '82532397';
	$db['default']['database'] = 'websitean9btr9us';
}

$db['default']['dbdriver'] = 'mysqli';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = 'FALSE';
// default True
$db['default']['db_debug'] = 'FALSE';
$db['default']['cache_on'] = 'FALSE';
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf-8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;

// $active_group = 'default';
// $query_builder = TRUE;

// $db['default'] = array(
// 	'dsn'	=> '',
// 	'hostname' => 'us-cdbr-azure-west-c.cloudapp.net',
// 	'username' => 'b13e28a4963a39',
// 	'password' => '82532397',
// 	'database' => 'ci_db',
// 	'dbdriver' => 'mysqli',
// 	'dbprefix' => '',
// 	'pconnect' => FALSE,
// 	'db_debug' => (ENVIRONMENT !== 'production'),
// 	'cache_on' => FALSE,
// 	'cachedir' => '',
// 	'char_set' => 'utf8',
// 	'dbcollat' => 'utf8_general_ci',
// 	'swap_pre' => '',
// 	'encrypt' => FALSE,
// 	'compress' => FALSE,
// 	'stricton' => FALSE,
// 	'failover' => array(),
// 	'save_queries' => TRUE
// );
