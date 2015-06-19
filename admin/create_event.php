<?php

include_once 'include/init.php';

if(isset($_SESSION['admin'])) {
	$admin = $_SESSION['admin'];
	if(is_array($admin) && !is_empty($admin, 'user_id', 'password', 'full_name', 'last_activity')) {
		// Lazy checking
		// uh...
	} else simple_redirect('login.php');
} else simple_redirect('login.php');

if(is_empty($_POST, 'title', 'datetime', 'content') || empty($_FILES['img_path'])) simple_redirect('.');

define('MAX_IMG_SIZE', 512000);
$img_type_accepted = array('image/jpeg', 'image/png');

$title = $_POST['title'];
$datetime = $_POST['datetime'];
$img_path = $_FILES['img_path'];
$content = $_POST['content'];
$is_draft = isset($_POST['is_draft']) ? 1 : 0;

if(!validate_datetime($datetime)) {
	$_SESSION['create_event_autosave'] = array(
		'title' => $title,
		'content' => $content,
		'is_draft' => $is_draft
		);
	simple_redirect('.?page=create_event');
}

if(!is_array($img_path) || $img_path['error'] != 0 || !in_array($img_path['type'], $img_type_accepted) || $img_path['size'] > MAX_IMG_SIZE) {
	$_SESSION['create_event_autosave'] = array(
		'title' => $title,
		'datetime' => $datetime,
		'content' => $content,
		'is_draft' => $is_draft
		);
	simple_redirect('.?page=create_event');
}

$file_ext = pathinfo($img_path['name'], PATHINFO_EXTENSION);
$target_location = 'img/' . date("YmdHis") . ".$file_ext";
$real_location = "../$target_location"; // relativity issue

if(move_uploaded_file($img_path['tmp_name'], $real_location)) {
	$sql_connection = get_simple_sql_connection();
	$sql_statement = $sql_connection -> prepare('INSERT INTO `event` (`title`, `datetime`, `img_path`, `content`, `is_draft`) VALUES (?, ?, ?, ?, ?);');
	$sql_statement -> bind_param('ssssi', $title, $datetime, $target_location, $content, $is_draft);
	$sql_statement -> execute();
	$sql_statement -> close();
	$sql_connection -> close();
}

simple_redirect('.?page=event');

?>