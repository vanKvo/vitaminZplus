<?php
 include('header.php');
session_start();
if ($_SESSION['auth']) {

  ?>
	<br/>
	<div style="text-align:center;">
	<h3>User Profile:</h3>
	<br />
		  <img src="../<?=$_SESSION['picture']?>" class="img-thumbnail profile-image" alt="profile-picture" width="200px" height="200px">
  </div>
  <br />
  <table class="profileTable" style="margin-left:auto;margin-right:auto;">
    <tr>
      <td>User Id:</td>
      <td class="dataCell">
        <?php
          echo $_SESSION['user_id'];
        ?>
      </td>
    </tr>
    <tr>
      <td>First Name:</td>
      <td class="dataCell">
        <?php
          echo $_SESSION['first_name'];
        ?>
      </td>
    </tr>
    <tr>
      <td>Last Name:</td>
      <td class="dataCell">
        <?php
          echo $_SESSION['last_name'];
        ?>
      </td>
    </tr>
    <tr>
      <td>Email:</td>
      <td class="dataCell">
        <?php
          echo $_SESSION['email'];
        ?>
      </td>
    </tr>
  </table>


	<br /><br /><br /><br />

	<?php 
  
 } else {
    header("Location: ../../login.php");
  }
    
  include('footer.php'); 
  ?>
