<?php
/**
 * ### init.php
 * This page will be included on every page
 */

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

/**
 * Navigation buttons, shown on every page
 * @var array
 */
$nav_btns = array(
	'home'		=> 'Home',
	'society'	=> 'Society',
	'event'		=> 'Events',
	'library'	=> 'Library',
	'camp'		=> 'Camps',
	'contact'	=> 'Contact Us'
);

/**
 * Subnavigation buttons, shown on every page
 * @var array
 */
$sub_btns = array(
	'home' => array(
		array('title' => 'Latest Updates', 'path' => 'page/home.php')
	),
	'society' => array(
		array('title' => 'About Us', 'path' => 'page/about.php'),
		array('title' => 'Our History', 'path' => 'page/history.php'),
		array('title' => 'Advisor and Patron', 'path' => 'page/advisor.php'),
		array('title' => 'Committees', 'path' => 'page/committee.php')
	),
	'event' => array(
		array('title' => 'Upcoming Events', 'path' => 'page/event.php'),
		array('title' => 'Featured Posts', 'path' => '')
	),
	'library' => array(
		array('title' => 'Browse', 'path' => ''),
		array('title' => 'Terms and Conditions', 'path' => '')
	),
	'camp' => array(
		array('title' => 'Camp Nirvana Singapore', 'path' => ''),
		array('title' => 'Dharma Camp', 'path' => '')
	),
	'contact' => array(
		array('title' => 'Email Us', 'path' => 'page/contact.php'),
		array('title' => 'Member Registration', 'path' => ''),
		array('title' => 'Sponsorship', 'path' => '')
	)
);

if(!isset($_SESSION)) session_start();

?>