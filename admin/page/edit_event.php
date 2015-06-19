<div class="row table-head">
	<div class="col-xs-12">
		Edit an Event
	</div>
</div>
<div class="row table-body">
	<div class="col-xs-12">
		<form enctype="multipart/form-data" class="form-horizontal" id="form-create-event" action="edit_event.php" method="post">
			<input type="hidden" value="<?=$event['id']?>" name="id" />
			<div class="form-group">
				<label for="input-title" class="col-sm-3 control-label">Title</label>
				<div class="col-sm-6">
					<input value="<?=$event['title']?>" required type="text" class="form-control" id="input-title" name="title" placeholder="Title" />
				</div>
			</div>
			<div class="form-group<?=empty($event['datetime']) ? ' has-error' : '' ?>">
				<label for="input-datetime" class="col-sm-3 control-label">Date &amp; Time</label>
				<div class="col-sm-6">
					<input value="<?=!empty($event['datetime']) ? $event['datetime'] : ''?>" required type="text" class="form-control" id="input-datetime" name="datetime" placeholder="yyyy-mm-dd hh:mm:ss" />
					<?=empty($event['datetime']) ? '<span class="help-block">Wrong date & time format!</span>' : '' ?>
				</div>
			</div>
			<div class="form-group has-warning">
				<label for="input-image" class="col-sm-3 control-label">Image Path</label>
				<div class="col-sm-6">
					<input required type="file" class="form-control" id="input-image" name="img_path" accept="image/png,image/jpeg" />
					<span class="help-block">Please reupload the image whose size is not more than 500kB!</span>
				</div>
				<em class="col-sm-3 small" style="margin-top: 10px; ">(Not more than 500kB!)</em>
			</div>
			<div class="form-group">
				<label for="input-content" class="col-sm-3 control-label">Content</label>
				<div class="col-sm-9">
					<textarea title="Please do not XSS NTUBS Website :)" required id="input-content" name="content" placeholder="Please do not XSS NTUBS Website :)" class="form-control noresize" rows="8"><?=htmlentities($event['content'], ENT_QUOTES | ENT_HTML401)?></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-10">
					<div class="checkbox">
						<label>
							<input name="is_draft" type="checkbox" <?=$event['is_draft'] == 1 ? 'checked ' : ''?>/> Draft
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9">
					<button type="submit" class="btn btn-default">Create</button>
				</div>
			</div>
		</form>
	</div>
</div>