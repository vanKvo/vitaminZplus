<?php include('view/header.php'); 
  echo 'add_topic.php file';
?>	
		<div class="body1">
			<div class="row">
				<form action="save_topic.php" method="post">
					<h4><i class="icon-plus-sign icon-large"></i> Add Topic</h4>
					<hr>
					<div id="add-topic">
						<div class="mb-3 textbox-maxwidth">
							<label for="topic_desc" class="form-label">Topic Description:</label>
							<input type="text" class="form-control" name="topic_desc" Required>
						</div>
					</div>
					<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
					<a href="../index.php" class="btn btn-primary btn-md" tabindex="-1" >Go back to Forum</a>
					</div>
					</div>
				</form>
			</div>
		</div>
		<br />
<?php include('view/footer.php'); ?>
