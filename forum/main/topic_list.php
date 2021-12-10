<?php 
// echo "topic_list.php";
// Start session
session_start();
include('header.php'); 

?>
		<div class="body1">
    	<a href="view/add_topic.php" class="btn btn-primary btn-md" tabindex="-1" >Create Thread</a>
				<!-- A form that submit the topic id-->
					<div id="forum-table">
						<div id="forum-table-header">
								<div class="forum-table-header-cell">Thread Description</div>
								<div class="forum-table-header-cell">Date Posted</div>
								<div class="forum-table-header-cell">Created By</div>
								<div class="forum-table-header-cell">Comment</div>
						</div><!--table-header--> 
						<div id="forum-table-body">
						<?php 	
						   foreach ($topics as $topic) { 
					   ?>
								<div class="forum-table-row">    
									<div class="forum-table-header-cell"><?=$topic['topic_desc']; ?></div>
									<div class="forum-table-header-cell"><?=$topic['date_created']; ?></div>
									<div class="forum-table-header-cell"><?=$topic['first_name'] . ' ' . $topic['last_name'] ; ?></div>
									<form action="view/comments.php" method="POST">  
										<input type="hidden" id="topic_id" name="topic_id" value=<?=$topic['topic_id']?>>  
										<div class="forum-table-header-cell"><input type="submit" name="comment" value="Comment"/></div>
									</form>  
							 </div><!--table-row-->          
              					
						<?php } ?>	
						</div><!--table-body-->
						</div>
		</div><!--body1-->
<?php 
include('footer.php'); 
?>
