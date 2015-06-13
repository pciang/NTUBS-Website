<?php

include_once 'include/init.php';

if(isset($_SESSION['admin'])) {
	$admin = $_SESSION['admin'];
	if(is_array($admin) && !is_empty($admin, 'user_id', 'password', 'full_name', 'last_activity')) {
		// Lazy checking
		// uh...
	} else header('Location: login.php');
} else header('Location: login.php');

$sql_connection = get_simple_sql_connection();
$sql_statement = $sql_connection -> prepare('SELECT * FROM `event` ORDER BY `datetime` DESC LIMIT 10;');
$sql_statement -> execute();
$events = $sql_statement -> get_result();
$sql_statement -> close();

$sql_connection -> close();

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
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="row table-header">
					<div class="col-xs-12">NTUBS | Admin Panel</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<span>Welcome, <?=$admin['full_name']?></span>
					</div>
					<div class="col-xs-6 text-right">
						<a href="logout.php">Logout</a>
					</div>
				</div>
				<div class="row table-header">
					<div class="col-xs-12">Edit Event</div>
				</div>
				<div class="row">
					<div class="col-xs-12">Note: Select an event to edit one!</div>
				</div>
			</div>
			<div class="col-md-6 event-list">
				<div class="row table-header">
					<div class="col-xs-12">Event List <span style="color: #ccc; font-style: italic; ">(Only at most 10 recent events are listed)</span></div>
				</div>
				<div class="row">
					<div class="col-xs-12">
<?php

while($row = $events -> fetch_assoc()) {
?>
						<div class="row event-item">
							<div class="col-xs-10"><?=$row['title'] . ($row['is_draft'] ? ' <span style="color: #f00; font-style: italic; ">(draft!)</span>' : '')?></div>
							<div class="col-xs-2 text-right">
								<button class="btn btn-default" data-event-id="<?=$row['id']?>">Edit</button>
							</div>
						</div>
<?php
}

?>
					</div>
				</div>
				<div class="row table-header">
					<div class="col-xs-12">New Event</div>
				</div>
				<div class="row">
					<div class="col-xs-12">Body</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>