<?php
	session_start();
	require('db_connect.php');
	require('header.php');
	
	if ( !isset($_GET['personality']) || !isset($_GET['results']) ) { 
		echo "fail 1";
		//header('Location:index.php'); 
	} else {
		$query = "UPDATE users SET personality='" .  $_GET['personality'] ."', results ='" . $_GET['results'] . "' WHERE email = '" . $_SESSION['email'] . "';";

		if (mysqli_query($db, $query)) {
?>
			<section class="container">
				<div class="form margin_top_30">
					<div class="row">
						<form class="col_12" action="" method="POST">
							<table>
								<tr>
									<td><h1>Success!</h1></td>
								</tr>
								<tr>
									<td>You've successfully completed the personality test. Click <a href="index.php">here</a> to see your results.</td>
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
								<tr><td>Something went wrong.</td></tr>
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