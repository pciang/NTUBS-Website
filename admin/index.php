<?php

include_once 'include/init.php';

if(isset($_SESSION['admin'])) {
	$admin = $_SESSION['admin'];
	if(is_array($admin) && !is_empty($admin, 'user_id', 'password', 'full_name', 'last_activity')) {
		// Lazy checking
		// uh...
	} else header('Location: login.php');
} else header('Location: login.php');

$page = !empty($_GET['page']) && array_key_exists($_GET['page'], $pages) ? $pages[$_GET['page']] : $pages['home'];

?>

<html>
<head>
	<title>NTUBS | Admin Panel</title>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="../img/buddhist.ico" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="row" id="ntubs-banner">
				<div class="col-xs-12">
					<img src="../img/ntubs.png" class="media-object" />
				</div>
			</div>
			<div id="ntubs-navbar" class="row">
				<div class="col-xs-12">
					<div id="ntubs-navbar-content" class="row">
						<div class="col-xs-12 text-right">Welcome, <?=$admin['full_name']?> | <a href="../" target="_blank">Visit Site</a> | [ <a href="logout.php">Logout</a> ]</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<div id="admin-panel-container" class="container-fluid">
		<div class="row">
			<div class="col-xs-3">
				<div class="row table-head">
					<div class="col-xs-12">
						Tools
					</div>
				</div>
				<div class="row table-body">
					<div class="col-xs-12">
						<ul>
							<li>
								<a href="?page=event">Manage Events</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-xs-8 col-xs-offset-1">
<?php

!empty($page['path']) ? include_once($page['path']) : '';
?>
			</div>
		</div>
	</div>
</body>
</html>