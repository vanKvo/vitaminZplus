<?php 
include('header.php'); 
session_start();
?>	
		<div class="body1">
			<div class="row">
				<form action="../index.php" method="post">
				<input type="hidden" name="action" value="add_topic"> <!-- identify which action is performed-->
				<input type="hidden" name="user_id" value=<?=$_SESSION['user_id']?>>
					<h4><i class="icon-plus-sign icon-large"></i> Create Thread</h4>
					<hr>
					<div id="add-topic">
						<div class="mb-3 textbox-maxwidth">
							<label for="topic_desc" class="form-label">Description:</label>
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
<?php include('footer.php'); ?>
