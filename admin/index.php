<?php

include_once 'include/init.php';

if(isset($_SESSION['admin'])) {
	$admin = $_SESSION['admin'];
	if(is_array($admin) && !is_empty($admin, 'user_id', 'password', 'full_name', 'last_activity')) {
		// Lazy checking
		// uh...
	} else header('Location: login.php');
} else header('Location: login.php');

?>

<html>
<head>
	<title>NTUBS | Admin Panel</title>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="../img/buddhist.ico" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
	
</body>
</html>