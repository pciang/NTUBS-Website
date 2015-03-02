<?php
/**
 * ### init.php
 * This page will be included on every page
 */


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
		array('title' => 'Our History', 'path' => ''),
		array('title' => 'Advisor and Patron', 'path' => 'page/advisor.php'),
		array('title' => 'Committees', 'path' => '')
		),
	'event' => array(
		array('title' => 'Upcoming Events', 'path' => ''),
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
		array('title' => 'Email Us', 'path' => ''),
		array('title' => 'Member Registration', 'path' => ''),
		array('title' => 'Sponsorship', 'path' => '')
		)
	);

