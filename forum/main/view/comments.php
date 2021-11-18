<?php 
	include 'header.php'; 
	include '../model/dbconnection.php';
	include '../model/forum_db.php';
	$topic_id = filter_input(INPUT_POST, 'topic_id', FILTER_SANITIZE_STRING); 
	//echo 'TOPIC ID: ' . $topic_id;
	$comments = get_comments('1');
	//print_r($comments);
	//echo $comments[1]['topic_desc'];
	//echo $comments[0]['picture'];
?>

		<div class="body1">
			<div class="row">
				<div class="card" style="margin-bottom: 50px;">

					<div class="card-body">
						<h5 class="card-title">Topic Description</h5>
						<p class="card-text"><?=$comments[0]['topic_desc'];?></p>
						<td></td>

					</div>
				</div>

				<div style="margin-bottom: 50px;"> 
			
					<div class="row">
						<div class="mb-4" style="font-weight: bolder;">Comments - (2 in totals)</div>
					<?php 	foreach ($comments as $comment) { ?>
						<div class="col-lg-2 col-md-2 col-sm-12 mb-4">
							<div class="text-center">
								<img src="../<?=$comment['picture']?>" class="img-thumbnail profile-image" alt="profile-picture">
							</div>
							<div class="text-center">
								<?=$comment['first_name'] .' '.$comment['last_name'];?>
							</div>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-12">
							<?=$comment['comment_desc'];?>
						</div>
				 	</div><!--row-->
					<br />
					<?php } ?>
				</div><!--style="margin-bottom: 50px-->

				<div class="form-floating">
					<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
					<label for="floatingTextarea">Your comments</label>
				</div>

			</div>
		</div>
		<br />
<?php 
	include('footer.php'); 
?>