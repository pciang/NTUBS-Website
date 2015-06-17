<?php

include_once 'include/init.php';



if(isset($_SESSION['admin'])) {
	$admin = $_SESSION['admin'];
	if(is_array($admin) && !is_empty($admin, 'user_id', 'password', 'full_name', 'last_activity')) {
		// Lazy checking
		// uh...
	} else header('Location: login.php');
} else header('Location: login.php');

if(is_empty($_POST, 'title', 'datetime', 'content') || empty($_FILES['img_path'])) header('Location: index.php');

// img_path validation
define('MAX_IMG_SIZE', 512000);
$img_type_accepted = array('image/jpeg', 'image/png');

$title = $_POST['title'];
$datetime = $_POST['datetime'];
$img_path = $_FILES['img_path'];
$content = $_POST['content'];

if(!is_array($img_path) || count($img_path) != 1 || $img_path['error'] != 0
	|| !in_array($img_path['type'], $img_type_accepted) || $img_path['size'] > MAX_IMG_SIZE) header('Location: index.php');



?>