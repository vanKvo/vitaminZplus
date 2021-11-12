<?php include('view/header.php'); 
  echo 'topic_list.php file';
 // $topics = get_topics();
?>
		<div class="body1">

			<div class="row">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Topic</th>
							<th scope="col">Description</th>
							<th scope="col">Date Posted</th>
							<th scope="col">Comment</th>
						</tr>
					</thead>
					<tbody>
            <?php 	foreach ($topics as $topic) { ?>
						<tr>
							<th scope="row"><?=$topic['topic_id']; ?></th>
							<td><?=$topic['topic_desc']; ?></td>
							<td><?=$topic['date_created']; ?></td>
							<td>-</td>
						</tr>
            <?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<br />
<?php include('view/footer.php'); ?>
