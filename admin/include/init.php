<?php

define('DB_HOST', 'localhost', false);
define('DB_USERNAME', 'root', false);
define('DB_PASSWORD', '', false);
define('DB_NAME', 'ntubs-db', false);

function get_simple_sql_connection() {
	return mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
}

function is_empty() {
	$arguments = func_get_args();
	if(is_array($arguments[0])) {
		$arr = $arguments[0];
		for($i = 1, $size = func_num_args(); $i < $size; ++$i) {
			$arg = $arguments[$i];
			if((is_string($arg) || is_int($arg)) && empty($arr[$arg])) return true;
		}
	}
	return false;
}

function is_set() {
	$arguments = func_get_args();
	if(is_array($arguments[0])) {
		$arr = $arguments[0];
		for($i = 1, $size = func_num_args(); $i < $size; ++$i) {
			$arg = $arguments[$i];
			if((is_string($arg) || is_int($arg)) && !isset($arr[$arg])) return false;
		}
	}
	return true;
}

function validate_datetime($date){
    $d = DateTime::createFromFormat('Y-m-d H:i:s', $date);
    return $d && $d -> format('Y-m-d H:i:s') == $date;
}

function simple_redirect($url) {
	if(is_string($url)) {
		header("Location: $url");
		die;
	} // else nothing
}

$pages = array(
	'home' => array('path' => 'page/home.php'),
	'event' => array('path' => 'page/event.php'),
	'create_event' => array('path' => 'page/create_event.php'),
	'edit_event' => array('path' => 'page/edit_event.php')
	);

if(!isset($_SESSION)) session_start();

?>