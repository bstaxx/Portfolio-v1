<?php 
	include 'functions/initiate.php';
	protect_page();
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
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = 'A vailid email address is required';
		} else if (email_exists($_POST['email']) === true && $user_data['email'] !== $_POST['email']) {
			$errors[] = 'Sorry, the email address \'' . $_POST['email'] . '\' is already in use.';
		}
	}
	
	echo output_errors($errors);
}
?>	
<h1>Account Settings</h1>

<?php
if (isset($_GET['success']) && empty($_GET['success'])) {
		echo 'You have successfully updated your account!';
} else{
	if (empty($_POST) === false && empty($errors) === true) {
		$update_data = array(
			'last_name' 	=> $_POST['last_name'],
			'first_name' 	=> $_POST['first_name'],
			'email' 		=> $_POST['email'],
		);
		
		update_user($update_data);
		header('Location: settings.php?success');
		exit();
	} else if (empty($errors) === false){
		echo output_errors($errors);
	}
?>

	<form action="" method="post">
				
		<label>First Name*</label><br>
		<input type="text" name="first_name" value="<?php echo $user_data['first_name']?>"><br><br>
		
		<label>Last Name</label><br>
		<input type="text" name="last_name" value="<?php echo $user_data['last_name']?>"><br><br>
		
		<label>Email*</label><br>
		<input type="email" name="email" value="<?php echo $user_data['email']?>"><br><br>
		
		<input type="submit" value="Update">
		
	</form>			



<?php 
}
include 'includes/overall_footer.php'; 
?>