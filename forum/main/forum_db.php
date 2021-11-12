<?php 
  echo "forum_db file!<br>";
  function get_topics() {
    echo "Start get_topics() <br>";
    global $db;
    $query = 'SELECT * FROM topic';
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
    echo "End get_topics() <br>";
   
    return $topics;
  }

    function get_topic($topic_id) {
      echo "Start get_topic() (one) <br>";
        global $db;
        $query = 'SELECT * FROM topic WHERE topic_id = :topic_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':topic_id', $topic_id);
        $statement->execute();
        $topics = $statement->fetchAll();
        $topics->closeCursor();
        return $topics;
    }
?>