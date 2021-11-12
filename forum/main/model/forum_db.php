<?php 
 // echo "forum_db file!<br>";
  function get_topics() {
    //echo "Start get_topics() <br>";
    global $db;
    $query = 'SELECT t.topic_desc, t.date_created, u.first_name, u.last_name FROM topic t, user u WHERE t.user_id = u.user_id ORDER BY date_created DESC';
    $statement = $db->prepare($query);
    $statement->execute();
    // Fetch all of the rows in the result set
    $topics = $statement->fetchAll();
    //print_r($topics);
    /*foreach ($topics as $row) {
      $id = $row['topic_id'];
      $desc = $row['topic_desc'];
      $date = $row['date_created'];
      echo "<br>" . $id  . "<br>" . $desc . "<br>" . $date;

		}*/
    $statement->closeCursor(); // Close cursor to the DB server so that other SQL statements may be issued
    //echo "End get_topics() <br>";
   
    return $topics;
  }

  function add_topic($topic_desc, $user_id) {
      //echo "Start add_topic() <br>";
      global $db;
      $query = 'INSERT INTO topic (topic_desc, user_id) VALUES (:topic_desc, :user_id)';
      $statement = $db->prepare($query);
      $statement->bindValue(':courseName', $course_name);
      $statement->execute(array(
        ':topic_desc' => $topic_desc,
        ':user_id' => $user_id
       ));
      //echo "End add_topic() <br>";
  }
?>