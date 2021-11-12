<?php
  echo "dbconnection.php file<br>";
  /*define("DB_SERVER", "localhost");
  define("DB_USER", "root");
  define("DB_PASSWORD", "root");
  define("DB_NAME","vitaminZ");*/
  $dsn = 'mysql:host=localhost;dbname=vitaminZ';
  $username = 'root';
  $password = 'root';
  /**  Create DB Connection */
  try {
    //$db = new PDO($dsn, $username);
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error = "Database Error: ";
    $error .= $e->getMessage();
    //include('view/error.php');
    exit();
}
      /*echo "createConnection";
      // Create connection
      $conn = @mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD);
      if ($conn === FALSE) {
        die("Connection failed: " . $conn->connect_error);
        echo 'Error code: '.mysqli_errno($conn).'. Error message: '.mysqli_error($conn);
      } else {
        echo "Connected successfully";
      }
      return $conn;*/
  
?>	