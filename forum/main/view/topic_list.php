<?php include('view/header.php'); 
  //echo 'topic_list.php file';
?>
		<div class="body1">
    <a href="view/add_topic.php" class="btn btn-primary btn-md" tabindex="-1" >Add Topic</a>
			<div class="row">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Topic Description</th>
							<th scope="col">Date Posted</th>
							<th scope="col">Created By</th>
							<th scope="col">Comment</th>
						</tr>
					</thead>
					<tbody>
            <?php 	foreach ($topics as $topic) { ?>
						<tr>
							<td><?=$topic['topic_desc']; ?></td>
							<td><?=$topic['date_created']; ?></td>
							<td><?=$topic['first_name'] . ' ' . $topic['last_name'] ; ?></td>
							<td>-</td>
						</tr>
            <?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<br />
<?php include('view/footer.php'); ?>
