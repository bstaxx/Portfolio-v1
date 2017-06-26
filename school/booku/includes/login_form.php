
<h1>Log in</h1><br>
<form action="login.php" method="post">
		<label>Username</label><br>
		<input type="text" name="username"><br><br>
		
		<label>Password</label><br>
		<input type="password" name="password"><br><br>
		
		<input type="submit" value="Log in"><br><br>
		
		
		<?php
			if (logged_in() === true) {
				echo '<a href="../functions/logout.php">Log out</a><br><br>';
			} else {
				echo '<a href="register.php">Register</a><br><br>';
			}
		?>
</form>

