<?php
 include('header.php');
session_start();

  ?>
	<br/>
	<div style="text-align:center;">
	<h1>User Profile:</h1>
	<br />
		  <img src="../<?=$_SESSION['picture']?>" class="img-thumbnail profile-image" alt="profile-picture" height="50">
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

	<?php include('footer.php'); ?>
