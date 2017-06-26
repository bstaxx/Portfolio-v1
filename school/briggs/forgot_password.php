<?php
	session_start();
	require('db_connect.php');
	require('header.php');
	if ( !isset($_POST['reset_password']) ) {
?>	
	<section class="container">
		<div class="form margin_top_30">
			<div class="row">
				<form class="col_12" action="forgot_password.php" method="POST">
					<table>
						<tr>
							<td><h1>Reset Password</h1></td>
						</tr>
						<tr>
							<td><input type="text" name="email" value="Your email"></td>
						</tr>
						<tr>
							<td><input type="submit" name="reset_password" value="Reset Password"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</section>
<?php 
	} else {
		$email = $_POST['email'];
		$activation_code = md5(time());
		$query = "UPDATE users SET activation_code = '" . $activation_code . "' WHERE email = '" . $email . "';";
		$query1 = "SELECT password FROM users WHERE email = '" . $email . "';";
		
		
		if ( mysqli_query($db, $query1)) {
			$to = $email;
			$from = 'bgagolden15@aol.com';
			$subject = 'Reset Your Password';
			$message = "Click the link below to reset your password.\r\n\r\n" . 'http://bstaxx.com/school/briggs/reset.php?email=' . $email . '&activation_code=' . $activation_code;
		
			//mail($to,$subject,$message,"From: $from\n");
			$result = mysqli_query($db, $query1);
			$row = mysqli_fetch_assoc($result);
			
			
		
?>
			<section class="container">
				<div class="form margin_top_30">
					<div class="row">
						<form class="col_12" action="forgot_password.php" method="POST">
							<table>
								<tr>
									<td><h1>Reset Password</h1></td>
								</tr>
								<tr>
									<td>The password for the email address "<?php echo $email ?>" is "<?php echo $row['password'] ?>".</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</section>
<?php
		} else {
?>
			<section class="container">
				<div class="form margin_top_30">
					<div class="row">
						<form class="col_12" action="forgot_password.php" method="POST">
							<table>
								<tr>
									<td><h1>Reset Password</h1></td>
								</tr>
								<tr>
									<td>Something went wrong. We were not able to reset your password. Please <a href="forgot_password.php">try again</a></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</section>
<?php
		
		}
	}
	require('footer.php'); 
?>