<?php 
include('header.php'); 
?>
		<div class="body1">
    <a href="view/add_topic.php" class="btn btn-primary btn-md" tabindex="-1" >Create Thread</a>
			<div class="row">
				<!-- A form that submit the topic id-->

					<table class="table">
						<thead>
							<tr>
								<th scope="col">Thread Description</th>
								<th scope="col">Date Posted</th>
								<th scope="col">Created By</th>
								<th scope="col">Comment</th>
							</tr>
						</thead>
						<form action="view/comments.php" method="POST">
							<tbody>
								<?php 	foreach ($topics as $topic) { ?>
								<tr>
						
									<td><?=$topic['topic_desc']; ?></td>
									<td><?=$topic['date_created']; ?></td>
									<td><?=$topic['first_name'] . ' ' . $topic['last_name'] ; ?></td>
									<input type="hidden" id="topic_id" name="topic_id" value="<?=$topic['topic_id']; ?>">
									<?php //echo 'TOPIC ID in topiclist: '. $topic['topic_id'];?>
									<td><input type="submit" value="Comment"/></td>
								</tr>
								<?php } ?>			
							</tbody>
						</form> 
				 </table>
			</div>
		</div>
		<br />
<?php 
include('footer.php'); 
?>
