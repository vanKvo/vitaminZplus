<?php 
include('header.php'); 
include('user_db.php'); 
$first_name = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING); 
$last_name = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING); 
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); 
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$confirmpassword = filter_input(INPUT_POST, 'confirmpassword', FILTER_SANITIZE_STRING); 
$picture = $_FILES["fileToUpload"]["name"];

if (isset($_POST["submit"]) && isset($first_name) && isset($last_name) && isset($email) && isset($password)) {
	registration($first_name, $last_name, $email, $picture, $password);
	if(!empty($picture)) {
		uploadFile($picture); // upload user picture to the main/images folder using file name
	} 
	// Reset registration variables
	unset($first_name);
	unset($last_name);
	unset($email);
	unset($password);
	unset($confirmpassword);
	unset($picture);
} 

?>
		<div class="body1">
			<form action="register.php" method="POST" enctype="multipart/form-data"> <!-- enctype="multipart/form-data is required to upload a file-->
			<div class="mb-3 textbox-maxwidth">
          <label for="fname" class="form-label">First name</label>
          <input type="text" class="form-control" name="fname" required>
        </div>
        <div class="mb-3 textbox-maxwidth">
          <label for="lname" class="form-label">Last name</label>
          <input type="text" class="form-control" name="lname" required>
        </div>
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
				<div class="mb-3 textbox-maxwidth">
					<label for="img">Upload your profile picture </label>
  				<input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
				</div>
				<button type="submit" name="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
		<br />

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