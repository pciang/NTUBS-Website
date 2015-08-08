<?php

// while($event = $events -> fetch_assoc()) {
while($sql_statement -> fetch()) {
?><div class="row event">
	<div class="col-sm-6 event-img">
		<img class="media-object img-responsive center-block" src="<?=$event['img_path']?>" />
	</div>
	<div class="col-sm-6 event-details">
		<div class="row">
			<div class="col-xs-12">
				<span>
					<strong>Title :</strong>
					<?=$event['title']?>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<span>
					<strong>Start:</strong>
					<?=$event['datetime']?>
				</span>
			</div>
		</div>
<?php

if(isset($event['datetime_end'])):
echo <<<HTML
		<div class="row">
			<div class="col-xs-12">
				<span>
					<strong>End:</strong>
					$event[datetime_end]
				</span>
			</div>
		</div>
HTML;
endif;
?>
		<div class="row">
			<div class="col-xs-12">
				<span>
					<strong>Location :</strong>
					<?=$event['location']?>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<span>
					<strong>Description :</strong>
					<?=$event['content']?>
				</span>
			</div>
		</div>
	</div>
</div>
<?php
}

?>