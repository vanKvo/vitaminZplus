<?php
session_start();
echo 'user_profile.php';
	echo $_SESSION['user_id'];
  echo $_SESSION['first_name'];
  echo $_SESSION['last_name'];
  echo $_SESSION['email'];
  //echo $_SESSION['picture'];
  ?>
  <img src="../<?=$_SESSION['picture']?>" class="img-thumbnail profile-image" alt="profile-picture">
