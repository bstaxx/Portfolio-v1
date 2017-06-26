<!DOCTYPE html>
<html>
<head>
	<title>Michelle</title>
	
	<!-- Columnal Style Sheets ----------------------------------------------------------------------------------->
	<link rel="stylesheet" href="stylesheets/columnal.css" type="text/css" media="screen" >
	<link rel="stylesheet" href="stylesheets/custom.css" type="text/css" media="screen" >
	<link rel="stylesheet" href="stylesheets/build.css" type="text/css" media="screen" >
</head>

<body>
<div id="header" class="container bg666 padding_top_15 padding_bottom_15">
	<div class="row bg666">
		<?php if ( isset($_SESSION['logged_in']) ) {?>
			<a href="index.php"><div id="logo" class="col_5">BRIGGS express</div></a>
			<div class="col_7 last">
				<span class="float_right">Welcome&nbsp;&nbsp;&nbsp;&nbsp;
					<strong><?php echo $_SESSION['email'] . "!&nbsp;&nbsp;&nbsp;&nbsp;"?></strong>
					<?php if ( isset($_SESSION['admin']) ) { echo '<a href="admin.php">Manage Accounts</a>&nbsp;&nbsp;&nbsp;&nbsp;'; } ?>
					<a href="logout.php">Logout</a>
				</span>
			</div>
			
		<?php } else {?>
			<a href="index.php"><div id="logo" class="col_4">BRIGGS express</div></a>
			<div class="col_5">
				<!--a href="register.php" class="float_right">&nbsp;&nbsp;Register</a-->
				<form action="login.php" method="POST" class="float_right">
					<input type="text" name="email" placeholder="email address">
					<input type="password" name="password" placeholder="password">
					<input type="submit" value="Login">
					
				</form>
				
			</div>
			<a class="col_2 last" href="forgot_password.php">Forgot Password</a>
		<?php } ?>
	</div>
</div>