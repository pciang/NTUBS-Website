<div class="row table-head">
	<div class="col-xs-12">Manage Events</div>
</div>
<div class="row table-body">
	<div class="col-xs-12">
		<div class="row" style="margin-bottom: 10px; ">
			<div class="col-xs-12">
				<a class="btn btn-default" href="?page=create_event"><span class="glypicon glyphicon-plus"></span> Create an Event</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="row table-head">
					<div class="col-xs-12">
						Event list
					</div>
				</div>
				<div class="row table-body">
					<div class="col-xs-12">
<?php

// while($event = $events -> fetch_assoc()) {
while($sql_statement -> fetch()) {
?>
						<div class="row event-entry">
							<div class="col-xs-9 event-title"><?= $event['title'] . ($event['is_draft'] == 1 ? ' <span style="font-style: italic; color: #f00; ">(draft)</span>' : '') ?></div>
							<div class="col-xs-3 text-right">
								<a href="delete_event.php?event_id=<?=$event['id']?>" class="btn btn-default btn-sm glyphicon glyphicon-trash"></a>
								<a href='?<?="page=edit_event&event_id=$event[id]"?>' class="btn btn-default btn-sm">Edit Event</a>
							</div>
						</div>
<?php
}

?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>