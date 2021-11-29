<?php 
// Start session
session_start();
// Check if access to the page is allowed
/*if ($_SESSION['access_allowed']) {
	//echo 'Access allow is true';
//	unset($_SESSION['access_allowed']); // Only allow access once, then reset it
} else {
	exit('The page does not exist');
	//echo 'The page does not exist';
}*/

include('header.php'); 
?>
		<div class="body1">
    	<a href="view/add_topic.php" class="btn btn-primary btn-md" tabindex="-1" >Create Thread</a>
			<div class="row">
				<!-- A form that submit the topic id-->
					<div class="table">
						<thead>
							<tr>
								<th scope="col">Thread Description</th>
								<th scope="col">Date Posted</th>
								<th scope="col">Created By</th>
								<th scope="col">Comment</th>
							</tr>
						</thead>
						<br>
						<tbody>
						<?php 	
						   foreach ($topics as $topic) { 
					   ?>
								<tr>      
									<td><?=$topic['topic_desc']; ?></td>
									<td><?=$topic['date_created']; ?></td>
									<td><?=$topic['first_name'] . ' ' . $topic['last_name'] ; ?></td>		
									<form action="view/comments.php" method="POST">  
										<input type="hidden" id="topic_id" name="topic_id" value=<?=$topic['topic_id']?>>  
										<td><input type="submit" name="comment" value="Comment"/></td>
									</form>  
								</tr>          
              					
						<?php } ?>	
						</tbody>
						</div>
			</div><!--row-->
		</div><!--body1-->
<?php 
include('footer.php'); 
?>
