<?php
	session_start();
	require('db_connect.php');
	require('header.php');
?>
<?php if ( !isset($_SESSION['logged_in']) || !isset($_SESSION['admin']) ) {header( 'Location: http://www.bstaxx.com/school/briggs' );} ?>
	<section class="container">
		<div class="form_admin margin_top_30">
			<div class="admin row">
				<form class="col_12" action="admin.php" method="POST">
					<table>
						<tr>
							<td colspan="3"><h1>Manage Accounts</h1></td>
						</tr>
						<tr>
							<th>Email Address</th>
							<th>Status</th>
							<th>Admin</th>
							<th>Select</th>
						</tr>
						<?php
							$query = "SELECT user_id, email, active, admin FROM users;";
							$result = mysqli_query($db, $query);
							$users = array();
							
							//print_r($_POST);
							//echo "<br><br>";
							
							while ($row = mysqli_fetch_assoc($result)) {
								$email = $row['email'];
								$id = $row['user_id'];
								if (isset($_POST['activate']) && isset($_POST[$row['user_id']])) {
									$query2 = "UPDATE users SET active='1' WHERE email='" . $_POST[$row['user_id']] . "';";
									mysqli_query($db, $query2);
								}
								if (isset($_POST['suspend']) && isset($_POST[$row['user_id']])) {
									$query2 = "UPDATE users SET active='0' WHERE email='" . $_POST[$row['user_id']] . "';";
									mysqli_query($db, $query2);
								}
								if (isset($_POST['admin1']) && isset($_POST[$row['user_id']])) {
									$query2 = "UPDATE users SET admin='0' WHERE email='" . $_POST[$row['user_id']] . "';";
									mysqli_query($db, $query2);
								}
								if (isset($_POST['admin2']) && isset($_POST[$row['user_id']])) {
									$query2 = "UPDATE users SET admin='1' WHERE email='" . $_POST[$row['user_id']] . "';";
									mysqli_query($db, $query2);
								}
							}
							
							$result = mysqli_query($db, $query);
							
							while ($row = mysqli_fetch_assoc($result)) {
								if ($row['active'] == 0) {$active = "Not Active";} else {$active = "Active";}
								if ($row['admin'] == 1) {$admin = "Administrator";} else {$admin = " ";}
								echo "<tr><td>" . $row['email'] . "</td><td>" . $active . "</td><td>" . $admin . "</td><td><input type=\"checkbox\" name=\"". $row['user_id'] . "\" value=\"" . $row['email'] . "\"></td></tr>";
								$users[] = $row['email'];
							}
							/*echo "<pre>";
							print_r($users);
							echo "</pre>";*/
						?>
						<tr></tr>
						<tr></tr>
						<tr>
							<td><input type="submit" name="activate" value="Activate Account"></td>
							<td><input type="submit" name="suspend" value="Suspend Account"></td>
							<td><input type="submit" name="admin1" value="Remove Admin"></td>
							<td><input type="submit" name="admin2" value="Add Admin"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</section>
<?php
	mysqli_close($db);
	require('footer.php');
?>	
