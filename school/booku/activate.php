<?php
include 'functions/initiate.php';
logged_in_redirect();
include 'includes/overall_header.php';

if (isset($_GET['success']) && empty($_GET['success'])) {
	echo 'Your account has been successfully activated!';
} else if (isset($_GET['email'], $_GET['email_code']) === true) {
	
	$email 		= trim($_GET['email']);
	$email_code = trim($_GET['email_code']);
	
	if (email_exists($email) === false) {
		$errors[] = 'Oops, something went wrong and we counldn\'t find that email address.';
	} else if (activate($email, $email_code) === false) {
		$errors[] = 'We had problems activating your account';
	}
	
	if (empty($errors) === false) {
		echo output_errors($errors);
	} else {
		header('Location: activate.php?success');
		exit();
	}
	
} else {
	header('Location: index.php');
	exit();
}
	
include 'includes/overall_footer.php';
?>

