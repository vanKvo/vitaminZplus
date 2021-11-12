<?php  
echo "save_topic.php file";
include('../model/dbconnection.php');
include('../model/forum_db.php');
$topic_desc = filter_input(INPUT_POST, 'topic_desc', FILTER_SANITIZE_STRING); // Filter input to prevent SQL injections
//$user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_STRING);
add_topic($topic_desc, "1");
header("Location: ../index.php"); // Return to add_topic.php

?>
