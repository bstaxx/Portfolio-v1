<?php 
include 'functions/initiate.php';
logged_in_redirect();
include 'includes/overall_header.php';

if (empty($_POST) === false) {
	$required_fields = array('username', 'password', 'password_2', 'first_name', 'email');
	
	foreach ($_POST as $key=>$value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = 'All required fields were not entered';
			break 1;
		}
	}
	
	if (empty($errors) === true) {
		if (user_exists($_POST['username']) === true) {
			$errors[] = 'Sorry, the username \'' . $_POST['username'] . '\' already exists.';
		}
		if (strlen($_POST['password']) < 6) {
			$errors[] = 'Your password must be at least 6 characters.';
		}
		if (strlen($_POST['password']) > 20) {
			$errors[] = 'Your password must be less than 20 characters.';
		}
		if ($_POST['password'] != $_POST['password_2']) {
			$errors[] = 'Your passwords do not match.';
		}
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = 'A vailid email address is required';
		}
		if (email_exists($_POST['email']) === true) {
			$errors[] = 'Sorry, the email address \'' . $_POST['email'] . '\' is already in use.';
		}
	}
}
?>
			
<h1>Register</h1>

<?php
	if (isset($_GET['success']) && empty($_GET['success'])) {
		echo 'You\'ve been registered successfully!<br><br>Please check your email to activate your account.';
	} else {
		if (empty($_POST) === false && empty($errors) === true) {
			$register_data = array(
				'username' 		=> $_POST['username'],
				'password' 		=> $_POST['password'],
				'last_name' 	=> $_POST['last_name'],
				'first_name' 	=> $_POST['first_name'],
				'email' 		=> $_POST['email'],
				'email_code'	=> md5($_POST['username'] + microtime()),
			);
			
			register_user($register_data);
			header('Location: register.php?success');
			exit();
			
		} else if (empty($errors) === false){
			echo output_errors($errors);
		}
?>
		<form action="" method="post"><br><br><br>
			<label>Username*</label><br>
			<input type="text" name="username"><br><br>
			
			<label>Password*</label><br>
			<input type="password" name="password"><br><br>
			
			<label>Re-enter Password*</label><br>
			<input type="password" name="password_2"><br><br>
			
			<label>First Name*</label><br>
			<input type="text" name="first_name"><br><br>
			
			<label>Last Name</label><br>
			<input type="text" name="last_name"><br><br>
			
			<label>Email*</label><br>
			<input type="email" name="email"><br><br>
			
			<input type="submit" value="Register">
			
		</form>			
<?php 
	}
	include 'includes/overall_footer.php'; 
?>