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

function isEmailExist($email) {
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
  if ($row['num'] == 0) {// email is not registered yet so you cannot reset the password 
    echo '<br>Email is not registered yet so you cannot reset the password <br>'; 
    return false;
  } else {// email exists in the database
    echo 'The account is registered. You can reset your password'; 
    return true;
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
    //if ($res) echo '<br>Your account is registered!<br';
    //else echo 'Registration failed<br>';
  } 
}

/** Reset Passowrd */
function resetPassword($email, $newpassword) {
  global $db;
  //echo "<br>Start resetPassword<br>";
  if(isEmailExist($email)) { // Reset the password if the email exists in the database 
    // Reset password
    $hash = hash('sha1', $newpassword); // encrypt password
    $query = 'UPDATE `user` SET `password` = :newpassword WHERE email = :email; ';
    $statement = $db->prepare($query);
    $res = $statement->execute(array(
      ':newpassword' => $hash,
      ':email' => $email
    ));
    $statement->closeCursor();
    if ($res) echo '<br>Your password is reset!<br>';
    else echo '<br>Your password reset failed<br>';
   // echo "<br>End resetPassword<br>";
  } 
}


/** Upload a profile picture */
function uploadFile($file_name) {
  //echo "<br>Start uploadFile<br>";
  $target_dir = "main/images/";
  $target_file = $target_dir . basename($file_name);
  $uploadOk = 1;
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded </br>";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // moves an uploaded file to a new destination.
          echo "Your profile picture ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";       
      } else {
          echo "Sorry, there was an error uploading your file </br>";
      }
  }
  //echo "<br>End uploadFile<br>";
}

?>
