<?php
    require('model/dbconnection.php');
		require('model/forum_db.php');
		include('route.php'); 

		// Show a list of topics in the forum
		$topics = get_topics();
	  include('topic_list.php');
	
?>

