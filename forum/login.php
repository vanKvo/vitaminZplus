<?php 
include('header.php'); 
include('user_db.php'); 
/*
// Array to store validation errors
$errmsg_arr = array();
	
// Validation error flag
$errflag = false;

// Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}*/
  
	// Get user credentials for authentication
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); 
	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING); 
	// The user provides email and password
	if (isset($email) && isset($password) && isset($_POST['btnLogin'])) {
		$user = login($email, $password);
		// Login failed
		if (empty($user)) { 
			echo "<div>Invalid credentials. Please try again <br></div>";
			//header("location: index.php");
			exit();
		// Login successful
		}  else { 	
			// Start session
			session_start();
			// Set session variables
			$_SESSION['user_id'] = $user[0]['user_id'];
			$_SESSION['first_name'] = $user[0]['first_name'];
			$_SESSION['last_name'] = $user[0]['last_name'];
			$_SESSION['email'] = $user[0]['email'];
			$_SESSION['picture'] = $user[0]['picture'];
			$_SESSION['auth'] = TRUE; // access is allowed
			session_write_close(); // reduce the time needed to load all the frames by ending the session as soon as all changes to session variables are done
			header("location: main/index.php");
	  }
	}	

	if (isset($_POST['btnForgetpassword'])) {
		echo 'Hello';
		header("location: reset_password.php");
	}
	

?>
		<div class="body1">
			<form action="login.php" method="POST">
				<div class="mb-3 textbox-maxwidth">
					<label for="exampleInputEmail1" class="form-label">Email address</label>
					<input type="email" class="form-control" name="email" aria-describedby="emailHelp">
				</div>
				<div class="mb-3 textbox-maxwidth">
					<label for="exampleInputPassword1" class="form-label">Password</label>
					<input type="password" class="form-control" name="password">
				</div>
				<input type="submit" class="btn btn-primary" value="Login" name="btnLogin"/>
				<input type="submit" class="btn btn-primary" value="Forget password" name="btnForgetpassword"/>
			</form>
		</div>
		<br />
<?php include('footer.php'); ?>

		
