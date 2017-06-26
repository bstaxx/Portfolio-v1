<?php 
	include 'functions/initiate.php';
	protect_page();
	include 'includes/overall_header.php';
	
	if (empty($_POST) === false) {
		$required_fields = array('current_password', 'password', 'password_2');
		
		foreach ($_POST as $key=>$value) {
			if (empty($value) && in_array($key, $required_fields) === true) {
				$errors[] = 'All required fields were not entered';
				break 1;
			}
		}
		
		if (md5($_POST['current_password']) === $user_data['password']) {
			if (trim($_POST['password']) !== trim($_POST['password_2'])) {
				$errors[] = 'Your passwords do not match.';
			} else if (strlen($_POST['password']) < 6) {
				$errors[] = 'Your password must be at least 6 characters.';
			} else if (strlen($_POST['password']) > 20) {
				$errors[] = 'Your password must be less than 20 characters.';
			}
		} else {
			$errors[] = 'Your current password is incorrect.';
		}
	}
	//echo $user_data['password'], '<br>';
	//echo md5($_POST['current_password']);
?>

<h1>Change Password</h1>

<?php
	if (isset($_GET['success']) && empty($_GET['success'])) {
		echo 'You have successfully changed your password!';
	} else{
		if (empty($_POST) === false && empty($errors) === true) {
			change_password($session_user_id, $_POST['password']);
			header('Location: change_password.php?success');
			exit();
		} else if (empty($errors) === false){
			echo output_errors($errors);
		}
	
	

?><br>

		<form action="" method="post">
			<label>Current Password</label><br>
			<input type="password" name="current_password"><br><br>
			
			<label>New Password</label><br>
			<input type="password" name="password"><br><br>
			
			<label>Re-enter Password</label><br>
			<input type="password" name="password_2"><br><br><br>
			
			<input type="submit" value="Change password"><br><br>
		</form>

<?php
	}
	include 'includes/overall_footer.php'; 
 ?>