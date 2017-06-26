<?php	
	session_start();
	require("db_connect.php");
	require('header.php');
	
	if ( isset($_POST['email']) && isset($_POST['password']) && !isset($_SESSION['logged_in']) ) {
		$query1 = "SELECT * FROM users WHERE email = '" . $_POST['email'] . "';";
		$result1 = mysqli_query($db, $query1);
		$row = mysqli_fetch_assoc($result1);
		mysqli_close($db);
		
		
		if ($row['password'] == $_POST['password']) {
			$_SESSION['logged_in'] = 1;
			$_SESSION['email'] = $row['email'];
			header('Location:index.php');
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
									<td>That email address and password does not match.</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</section>
<?php
		}
		
		if ($row['admin'] == 1) { $_SESSION['admin'] = 1; }
	} else {
		header('location:index.php');
	}
	
	require('footer.php');
?>