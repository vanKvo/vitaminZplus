<?php
include('main/model/dbconnection.php');

/** Login */
function login($email, $password) {
  // echo "<br> Start login <br>";
  global $db;
  $email = trim($email);
  $password = trim($password);
  $query = 'SELECT * FROM user  WHERE email = :email and password = :hash;';
  $statement = $db->prepare($query);
  $hash = hash('sha1', $password);
  $res = $statement->execute(array(
    ':email' => $email,
    ':hash' => $hash
  ));
  $statement->errorCode(); // check error code if statement is failed to execute
  $user = $statement->fetchAll();
  //print_r($user);
  $statement->closeCursor(); 
  // echo "End login() <br>";
  return $user;   
};

/** Check if user registration exists*/
function valid_registration($email) {
  global $db;
  // Check if the email is registered
  $query = 'SELECT COUNT(*) AS num FROM user WHERE email = :email';
  $statement1 = $db->prepare($query);
  $statement1->bindValue(':email', $email);
  $statement1->execute();
  //Fetch the row that MySQL returned.
  $row = $statement1->fetch(PDO::FETCH_ASSOC);
  $statement1->closeCursor();
  //The $row array will contain "num". Print it out. echo $row['num'] . ' users exist.';  
  if ($row['num'] == 0) {// email is not registered yet so resgistration is valid
   // echo 'Resgistration valid<br>'; 
    return true;
  } else {// email exists in the database
    echo 'The account exists. Please go to log in<br>'; 
    return false;
  }
}

/** Registration */
function registration($first_name, $last_name, $email, $upload_picture, $password) {
  global $db;
  if(valid_registration($email)) {
    // Upload profile picture 
    if (!empty($upload_picture)) { // user uploads a profile picture
      $picture = 'images/'.$upload_picture;
    } else {
      $picture = 'images/blank-profile.png'; // get default profile picture
    }
    // Register new account into the databas
    $hash = hash('sha1', $password); // encrypt password
    $query = 'INSERT INTO `user`(`first_name`, `last_name`, `email`, `picture`, `password`) VALUES (:first_name, :last_name, :email, :picture, :hash)';
    $statement = $db->prepare($query);
    $res = $statement->execute(array(
      ':first_name' => $first_name,
      ':last_name' => $last_name,
      ':email' => $email,
      ':picture' => $picture,
      ':hash' => $hash
    ));
    $statement->closeCursor();
   // if ($res) echo 'Registration success!<br>';
   // else echo 'Registration failed<br>';
  } 
}

/** Upload a profile picture */
function uploadFile($file_name) {
  //echo "<br>Start uploadFile<br>";
  $target_dir = "main/images/";
  $target_file = $target_dir . basename($file_name);
  $uploadOk = 1;
  //$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Check if file already exists
  if (file_exists($target_file)) {
      echo "Sorry files already exists </br>";
      $uploadOk = 0;
  } 

  // Check file size
  /*if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "Sorry, your file is too large. Please try a smaller file </br>";
      $uploadOk = 0;
  }*/

  // Allow certain file formats
  /*if($fileType != "csv") {
      echo "Sorry, only csv file is allowed </br>";
      $uploadOk = 0;
  }*/
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded </br>";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // moves an uploaded file to a new destination.
          echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";       
      } else {
          echo "Sorry, there was an error uploading your file </br>";
      }
  }
  //echo "<br>End uploadFile<br>";
}

?>
