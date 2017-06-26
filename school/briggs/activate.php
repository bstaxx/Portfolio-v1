<?php
	session_start();
	require('db_connect.php');
	require('header.php');
	
	if ( !isset($_GET['email']) || !isset($_GET['activation_code']) ) {
		header('location:index.php');
	} else {
		$email = $_GET['email'];
		$activation_code = $_GET['activation_code'];
		
		$query = 'SELECT * FROM users WHERE email = \'' . $email . '\' AND activation_code = \'' . $activation_code . '\' LIMIT 1;';
		$activate = 'UPDATE users SET active=1 WHERE email = \'' . $email . '\' AND activation_code = \'' . $activation_code . '\';';
		
		if (mysqli_query($db, $query)) {
			mysqli_query($db, $activate);
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
	}
	
	mysqli_close($db);
	require('footer.php');
?>		
