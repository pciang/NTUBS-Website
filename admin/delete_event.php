<?php

include_once 'include/init.php';

if(isset($_SESSION['admin'])) {
	$admin = $_SESSION['admin'];
	if(is_array($admin) && !is_empty($admin, 'user_id', 'password', 'full_name', 'last_activity')) {
		// Lazy checking
		// uh...
	} else simple_redirect('login.php');
} else simple_redirect('login.php');

if(!empty($_GET['event_id'])) {
	$id = intval($_GET['event_id']);
	$sql_connection = get_simple_sql_connection();

	$sql_statement = $sql_connection -> prepare('SELECT `img_path` FROM `event` WHERE id=? LIMIT 1');
	$sql_statement -> bind_param('i', $id);
	$sql_statement -> execute();
	$sql_statement -> bind_result($old_img_path);
	$sql_statement -> fetch();
	$sql_statement -> close();

	if(file_exists($old_img_path) && is_writable($old_img_path)) {
		unlink($old_img_path);

		$sql_statement = $sql_connection -> prepare('DELETE FROM `event` WHERE id=?;');
		$sql_statement -> bind_param('i', $id);
		$sql_statement -> execute();
		$sql_statement -> close();
		$sql_connection -> close();
	}
}

simple_redirect('.?page=event');

?>