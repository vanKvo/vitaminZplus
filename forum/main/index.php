<?php

    require('dbconnection.php');
		require('forum_db.php');

		// Show a list of topics in the forum
		$topics = get_topics();
		include('view/topic_list.php');
	
?>

