<?php
	session_start();
	require("db_connect.php");
	require("header.php");
?>	
<?php if ( isset($_SESSION['logged_in']) ) {?>
	<section class="container">
		<div class="form margin_top_30">
			<div class="row">
				<form class="col_12" action="register.php" method="POST">
					<table>
						<tr>
							<td colspan="2">
								<h1><?php echo $_SESSION['email'] ?></h1>
								<p>View your pesonality profile or take our short survey to determine your personality type. You can take the survey as many times as you like.</p>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<?php
									$query1 = "SELECT users.personality, personalities.description FROM users INNER JOIN personalities ON users.personality = personalities.personality WHERE email = '" . $_SESSION['email'] . "';";
									$result1 = mysqli_query($db, $query1);
									while ($row = mysqli_fetch_assoc($result1)) {
										//echo $row['personality'];
										echo $row['description'];
									}
								?>
							</td>
						</tr>
						<tr>
							<td colspan="2"><a href="survey.php"><div class="button">Take the Survey</div></a></td>
						</tr>
					</table>
				</form>
			</div>			
		</div><!--"form_container"-->
	</section>
<?php } else { ?>
	<section class="container">
		<div class="form margin_top_30">
			<div class="row">
				<form class="col_12" action="register.php" method="POST">
					<table>
						<tr>
							<td colspan="2" class=""><h1>Learn your personality type!</h1></td>
						</tr>
						<tr>
							<td colspan="2">The quickest and easiest personality test on the web!<br>Register below to start your survey.</td>
						</tr>
						<tr></tr>
						<tr>
							<td class=""><input type="text" name="first_name" placeholder="First Name"></td>
							<td class=""><input type="text" name="last_name" placeholder="Last Name"></td>
						</tr>
						<tr>
							
							<td colspan="2" class=""><input name="email" type="text" placeholder="Your Email"></td>
							
						</tr>
						<tr>
							
							<td colspan="2" class=""><input name="password" type="text" placeholder="New Password"></td>
							
						</tr>
						<tr>
							
							<td class=""><label>Birthday</label></td>
							
							<td class=""><input type="date" name="birthday" value="Your Birthday (mm/dd/yyyy)"></td>
							
						</tr>
						<tr>
							
							<td class=""><label>Gender</label></td>
							
							<td class="">
								<input type="radio" name="gender" value="male" id="gender1"><label class="label_radio">Male</label><br>
								<input type="radio" name="gender" value="female" id="gender2"><label class="label_radio">Female</label><br>
								<input type="radio" name="gender" value="other" id="gender3"><label class="label_radio">Other</label><br>
							</td>
							
						</tr>
						<tr>
							
							<td colspan="2"><input type="submit" value="Register"></td>
							
						</tr>
					</table>
				</form>
			</div>			
		</div><!--"form_container"-->
	</section>
<?php } mysqli_close($db); ?>		
	

<?php include('footer.php');?>