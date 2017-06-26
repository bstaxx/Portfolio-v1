<?php
	session_start();
	require('db_connect.php');
	require('header.php');
?>	

<?php
	if ( !isset($_POST['first_name']) || !isset($_POST['last_name']) || !isset($_POST['email']) || !isset($_POST['password']) || !isset($_POST['birthday']) || !isset($_POST['gender']) ) { header('location:index.php'); }
	
	$first_name = mysqli_real_escape_string($db, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($db, $_POST['last_name']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$birthday = mysqli_real_escape_string($db, $_POST['birthday']);
	$gender = mysqli_real_escape_string($db, $_POST['gender']);
	$activation_code = md5(time());
	
	
	/*
	echo $first_name . "<br>";
	echo $last_name . "<br>";
	echo $email . "<br>";
	echo $password . "<br>";
	echo $birthday . "<br>";
	echo $gender . "<br>";
	*/
	
	$check = "SELECT 1 FROM users WHERE email = \"" . $email . "\";";
	$check_result = mysqli_query($db, $check);
	$activation_code = md5(time());
	$query = "INSERT INTO users(first_name, last_name, email, password, birthday, gender, activation_code)
		VALUES('" . 
			$first_name . "', '" .
			$last_name . "', '" .
			$email . "', '" .
			$password . "', '" .
			$birthday . "', '" .
			$gender . "', '" .
			$activation_code .
	"');";
	
	if (mysqli_query($db, $query)) {
		
		
		$to = $email;
		$from = 'bgagolden15@aol.com';
		$subject = 'Confirm your email Address to activate your account';
		$message = "Click the link below to activate your account.\r\n\r\n" . 'http://bstaxx.com/school/briggs/activate.php?email=' . $email . '&activation_code=' . $activation_code;
	
		mail($to,$subject,$message,"From: $from\n");
?>		
	<section class="container">
		<div class="form margin_top_30">
			<div class="row">
				<form class="col_12" action="" method="POST">
					<table>
						<tr>
							<td><h1>Success</h1></td>
						</tr>
						<tr>
							<td>You have successfully registered you email address "<?php echo $email ?>."<br>Please check you email and click the link provided to activate your account and login at the top of this page.</td>
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
				<form class="col_12" action="" method="POST">
					<table>
						<tr>
							<td><h1>Sorry...</h1></td>
						</tr>
						<tr>
							<td>Something went wrong. We were not able to register your account.</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</section>
<?php
	}
?>

<?php
	mysqli_close($db);
	include('footer.php');
?>