
<?php
include 'functions/initiate.php';
logged_in_redirect();
include 'includes/overall_header.php';

		
if (empty($_POST) === false) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if (empty($username) === true || empty($password) === true) {
		$errors[] = 'Please type in a username and password.';
		$errors[] = 'Please type in a username and password.';
	} else if (user_exists($username) === false) {
		$errors[] = 'That username doesn\'t exist';
	} else if (user_active($username) === false) {
		$errors[] = 'You must activate your account';
	} else {
		$login = login($username, $password); // "login" retruns the `user_id`
		if ($login === false) {
		$errors[] = 'The username or password is incorrect.';
		}else {
			$_SESSION['user_id'] = $login;
			header('Location: index.php');
			exit();
		}
	}
} else {
	$errors[] = 'A username and password was not entered.';
}

if (empty($errors) === false) {
?>

<h2>We tried to log you in but...</h2>

<?php	
	echo output_errors($errors);
}
	
include 'includes/overall_footer.php';
?>

