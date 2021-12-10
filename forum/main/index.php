<?php
// Start session
session_start();

// Check if access to the page is allowed
if ($_SESSION['auth']) {
	require('model/dbconnection.php');
	require('model/forum_db.php');

	/** Get action */
	$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
	//echo "action in main/index.php: " . $action ."<br>";
	if (!$action) {
			$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
			if (!$action) {
					$action = ''; // assigning default value if NULL or FALSE
			}
	}
	/** Get data inputs */
	$comment_desc = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING); 
	$user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_STRING); 
	$topic_id = filter_input(INPUT_POST, 'topic_id', FILTER_SANITIZE_STRING); 
	$topic_desc = filter_input(INPUT_POST, 'topic_desc', FILTER_SANITIZE_STRING); // Filter input to prevent SQL injections

	/** Define what to do for each task */
	switch($action) {
		case "submit_comment":
			echo "<br>Topic_id: $topic_id <br> User id: $user_id <br> Comment: $comment_desc <br>";
			if(isset($comment_desc) && isset($user_id) && isset($topic_id)) {
				add_comments($comment_desc, $user_id, $topic_id);
			}	
			$_SESSION['topic_id'] = $topic_id;
			header("Location: view/comments.php");
			break;
		case "add_topic":
			echo "User id: $user_id <br> Topic desc: $topic_desc <br>";
			if(isset($topic_desc) && isset($user_id)) {
				echo "topic added";
				add_topic($topic_desc, $user_id);
			}
			header("Location: index.php");
			break;	
		default:
			// Show a list of topics in the forum
			$topics = get_topics();
			include('topic_list.php');
	}
	unset($comment_desc);
	unset($user_id);
	unset($topic_id);
	unset($topic_desc);



} else {
	header("Location: ../login.php");
}
	
?>

