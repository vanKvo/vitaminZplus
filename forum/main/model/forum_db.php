<?php 
 //echo "forum_db file!<br>";
 /** Get information of all topics in the forum */
  function get_topics() {
    //echo "Start get_topics() <br>";
    global $db;
    $query = 'SELECT t.topic_id, t.topic_desc, t.date_created, u.first_name, u.last_name FROM topic t, user u WHERE t.user_id = u.user_id ORDER BY date_created DESC';
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

  /** Add new topic to the forum */
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
       $statement->closeCursor(); 
      //echo "End add_topic() <br>";
  }

  /** Get comments of a certain topic */
  function get_comments($topic_id) {
    //echo "Start get_comments() <br>";
    global $db;
    $query = 'SELECT c.comment_desc, c.date_created, u.user_id, u.first_name, u.last_name, u.picture, t.topic_id, t.topic_desc 
    FROM comments c
    JOIN user u ON u.user_id = c.user_id
    JOIN topic t ON t.topic_id = c.topic_id 
    WHERE t.topic_id = :topic_id
    ORDER BY c.date_created;';
    $statement = $db->prepare($query);
    $statement->bindValue(':topic_id', $topic_id);
    $statement->execute();
    $comments = $statement->fetchAll();
    $statement->closeCursor(); 
    //echo "End get_comments() <br>";
    return $comments;
}
?>