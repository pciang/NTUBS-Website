<?php
/**
 * ### index.php
 * This page will show the header/footer of every page and include content body from external php file.
 * 
 */
include_once('include/init.php');

$nav_btn = !empty($_GET['page']) ? array_key_exists(
	$_GET['page'], $nav_btns) ? $_GET['page'] : 'home' : 'home';

$sub_btn = !empty($_GET['p_id']) ? array_key_exists(
	intval($_GET['p_id']), $sub_btns[$nav_btn]) ? intval($_GET['p_id']) : 0 : 0;

?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>NTUBS | NTU Buddhist Society</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<link rel="shortcut icon" href="img/buddhist.ico" />
	</head>
	<body>
		<nav id="_nav-ntubs" class="navbar navbar-fixed-top">
			<div class="container-fluid">
				<div class="row col-condensed">
					<div class="col-xs-3">
						<img src="img/navi-logo.png" class="media-object" />
					</div>
					<div class="col-xs-9 clearfix">
						<div id="_nav-btn-group" class="btn-group pull-right"><?php
							foreach ($nav_btns as $key => $page){
								echo
									"<a href=\"?page=$key\" class=\"btn btn-default" . ($key == $nav_btn ? ' nav-btn-selected' : '' ) . "\">"
									. $page
									. "</a>";
							}
						?></div>

						<div id="_nav-dropdown" class="dropdown pull-right">
							<button class="btn btn-default dropdown-toggle" type="button" id="_nav-menu" data-toggle="dropdown"><?php echo $nav_btns[$nav_btn]." "; ?><span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="_nav-menu"><?php
								foreach($nav_btns as $key => $page) {
									echo
										"<li role=\"presentation\">"
										. "<a role=\"menuitem\" tabindex=\"-1\" href=\"?page=$key\">$page</a>"
										. "</li>";
								}
							?></ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<div id="_sub" class="container-fluid">
			<div class="row col-condensed">
				<div class="col-xs-12">
					<img id="_img-ntubs-xs" src="img/ntubs-xs.png" class="img-responsive" class="media-object" />
					<img id="_img-ntubs" src="img/ntubs.png" class="img-responsive" class="media-object" />
				</div>
			</div>
			<div id="_sub-bg" class="row"></div>
			<div id="_sub-btn-holder" class="row">
				<div id="_sub-btn-group" class="col-xs-12"><?php
					foreach($sub_btns[$nav_btn] as $key => $sub){
						echo "<a href=\"?page=$nav_btn&amp;p_id=$key\" class=\"btn btn-default" . ($key == $sub_btn ? ' btn-selected' : '') . "\">"
							. "$sub[title]"
							. "</a>";
					}
				?></div>
				<div id="_sub-btn-dropdown" class="dropdown">
					<button class="btn btn-default dropdown-toggle" type="button" id="_sub-drop" data-toggle="dropdown">
						<span class="glyphicon glyphicon-menu-hamburger"></span>
					</button>
					<ul id="_sub-dropdown" class="dropdown-menu" role="menu" aria-labelledby="_sub-drop"><?php
						foreach($sub_btns[$nav_btn] as $key => $sub){
							echo
								"<li role=\"presentation\">"
								. "<a role=\"menuitem\" tabindex=\"-1\" href=\"?page=$nav_btn&amp;p_id=$key\">"
								. "$sub[title]"
								. "</a>"
								. "</li>";
						}
					?></ul>
				</div>
			</div>
		</div>
		<div id="_body" class="container-fluid"><?php
			!empty($path = $sub_btns[$nav_btn][$sub_btn]['path']) ? include_once($path) : $path;
		?></div>

		<footer class="container-fluid">
			&copy; NTU Buddhist Society <?php echo date("Y"); ?>

		</footer>

		<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>