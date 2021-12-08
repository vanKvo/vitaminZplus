<?php 
include('header.php'); 
include('user_db.php'); 
//echo "reset_password.php file";
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); 
$newpassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING); 
if (isset($email) && isset($newpassword) && isset($_POST['btnResetPassword'])) {
		resetPassword($email, $newpassword);
} 
?>

<div class="body1">
			<form action="reset_password.php" method="POST" enctype="multipart/form-data"> <!-- enctype="multipart/form-data is required to upload a file-->
        <div class="mb-3 textbox-maxwidth">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3 textbox-maxwidth">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="password"  onkeyup='check();' required>
        </div>
        <div class="mb-3 textbox-maxwidth">
          <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" onkeyup='check();' required>
          <span id="message"></span>
        </div>
				<button type="submit" name="btnResetPassword" class="btn btn-primary">Reset password</button>
			</form>
		</div>

<script>
var check = function() {
  if (document.getElementById('password').value == document.getElementById('confirmpassword').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Password is matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Password is not matching';
  }
}
</script>
  <?php include('footer.php'); ?>