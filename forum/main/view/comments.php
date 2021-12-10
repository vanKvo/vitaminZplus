<?php 
	session_start(); 
	if ($_SESSION['auth']) {
	include 'header.php'; 
	include '../model/dbconnection.php';
	include '../model/forum_db.php';
	$topic_id = filter_input(INPUT_POST, 'topic_id', FILTER_SANITIZE_STRING); 
	//echo "Topic id before ifelse: 	$topic_id <br>"; // from topic_list

	// Update session of topic id when user changes to another thread
	if ($_SESSION['topic_id'] != $topic_id && !empty($topic_id)) {
	//	echo 'if session id is different from topic id';
		$_SESSION['topic_id'] = $topic_id;
	}

	// Keep session of the topic id that the user is commenting 
	if (!empty($_SESSION['topic_id'])) { 
	//	echo "session topic id:". $_SESSION['topic_id'];
		$topic_id = $_SESSION['topic_id'];
	} 

	$comments = get_comments($topic_id);
	$topic = get_topic($topic_id);
?>

		<div class="body1">
			<div class="row">
				<div class="card" style="margin-bottom: 50px;">
					<div class="card-body">
						<h5 class="card-title">Description</h5>
						<p class="card-text"><?=$topic[0]['topic_desc'];?></p>
						<td></td>
					</div>
				</div>
				<form action="../index.php" method="POST">
					<input type="hidden" name="action" value="submit_comment"> <!-- identify which action is performed-->
					<input type="hidden" name="user_id" value=<?=$_SESSION['user_id']?>>
					<input type="hidden" name="topic_id" value=<?=$topic_id?>>
					<div style="margin-bottom: 50px;"> 			
						<div class="row">
							<div class="mb-4" style="font-weight: bolder;">Comments - (<?=$comments[count($comments)-1]?> in totals)</div>
							<?php $count = 0; 
									foreach ($comments as $comment) { 	
										if ($count == count($comments)-1) break; // avoid the last element in $comments, num of rows, is shown the blank profile
							?>
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-12 mb-4">
												<div class="text-center">
													<img src="../<?=$comment['picture']?>" class="img-thumbnail profile-image" alt="profile-picture">
												</div>
												<div class="text-center">
													<?=$comment['first_name'] .' '.$comment['last_name'];?>
												</div>
											</div><!--col-lg-2 col-md-2 col-sm-12 mb-4 -->	
											<div class="col-lg-10 col-md-10 col-sm-12">
													<?=$comment['comment_desc'];?>
											</div><!--col-lg-10 col-md-10 col-sm-12 - $comment['comment_desc']-->				
										</div><!--row-->
							<?php 
										$count = $count + 1;
									}
							?>
							</div><!-- style="font-weight: bolder - Comments in totals-->
						</div><!--row-->
					</div><!--style="margin-bottom: 50px-->
						<div class="form-floating">
							<textarea class="form-control" placeholder="Leave a comment here" name="comment" id="floatingTextarea" style="height: 100px"></textarea>
							<label for="floatingTextarea">Your comments</label>
						</div>
						<br>
					<input type="submit" name="submit_comment" class="btn btn-primary btn-md" value="Comment"/>
				</form>

			</div>
		</div>
		<br />
<?php 
 } else {
	header("Location: ../../login.php");
}
	
	include('footer.php'); 
?>