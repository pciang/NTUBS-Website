<?php

include_once 'include/init.php';

if(!is_empty($_POST, 'uid', 'pw')) {
	$uid = $_POST['uid'];
	$pw = $_POST['pw'];
	$sql_connection = get_simple_sql_connection();
	$sql_statement = $sql_connection -> prepare('SELECT * FROM `admin` WHERE user_id=? AND password=? LIMIT 1;');
	$sql_statement -> bind_param('ss', $uid, $pw);
	$sql_statement -> execute();
	$sql_result = $sql_statement -> get_result();
	$sql_statement -> close();
	$sql_connection -> close();

	// $failed_login_attempt is not used yet
	if($sql_result -> num_rows == 0) $failed_login_attempt = 1;
	else {
		$row = $sql_result -> fetch_assoc();
		$_SESSION['admin'] = array(
			'user_id' => $row['user_id'],
			'password' => $row['password'],
			'full_name' => $row['full_name'],
			'last_activity' => time()
		);
		session_write_close();
		simple_redirect('.');
	}
}

if(isset($_SESSION['admin'])) {
	$admin = $_SESSION['admin'];
	if(is_array($admin) && !is_empty($admin, 'user_id', 'password', 'full_name', 'last_activity')) {
		// Lazy checking, assuming no one would like to crack NTUBS
		simple_redirect('.');
	} else {
		unset($_SESSION['admin']);
		session_write_close();
	}
}

?>

<html>
<head>
	<title>NTUBS | Admin Panel</title>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="../img/buddhist.ico" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
</head>
<body>
	<img id="login-banner" src="../img/ntubs.png" />
	<form id="login-container" method="post" action="login.php" class="form-horizontal">
		<div class="form-group">
			<label for="field-uid" class="col-xs-3 control-label">User ID</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="field-uid" name="uid" placeholder="User ID">
			</div>
		</div>
		<div class="form-group">
			<label for="field-pw" class="col-xs-3 control-label">Password</label>
			<div class="col-xs-9">
				<input type="password" class="form-control" id="field-pw" name="pw" placeholder="Password">
			</div>
		</div>
		<div class="form-group">
			<div class="col-xs-offset-3 col-xs-9">
				<button type="submit" class="btn btn-default">Login</button>
			</div>
		</div>
	</form>
</body>
</html>