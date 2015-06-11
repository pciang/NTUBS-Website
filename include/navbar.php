<?php
foreach ($nav_btns as $key => $page) {
	echo "<a href=\"?page=$key\" class=\"btn btn-default" . ($key == $nav_btn ? ' nav-btn-selected' : '' ) . "\">$nav_btns[$key]</a>";
}
?>