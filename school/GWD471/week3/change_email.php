<?php
	require_once('dbConnect.php');
	
	$email = $_POST['email'];
	$changeEmail = $_POST['changeEmail'];
	
	$query = 'UPDATE users SET email="' . $email . '" WHERE UserID="' . $changeEmail .'";';
	$result = mysqli_query($db, $query);
	
	echo "Your email was successfully changed to " . $email;
?>