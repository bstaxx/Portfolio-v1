<?php include 'includes/head.php';?>

<body>
	

	<div id="wrapper">
	<?php include 'includes/header.php'; ?>
		<div id="container">
			<aside>
				<?php
					if (logged_in() === true) {
						echo 'Logged in as "' . $user_data['username'] . '"<br><br>'; ?>
						<ul>
							<li><a href="/booku/<?php echo $user_data['username'];?>">Profile</a></li>
							<li><a href="change_password.php">Change Password</a></li>
							<li><a href="settings.php">Account Settings</a></li>
							<li><a href="functions/logout.php">Log out</a></li>
						</ul><br><br>
						
						<h2>Users</h2>
						<?php
							$user_count = user_count();
							$suffix = ($user_count != 1) ? 's' : '';
						?>
						We currently have <?php echo user_count(); ?> registered user<?php echo $suffix;?>.
				<?php
					} else {
						include 'includes/login_form.php';
					}
				?>
			</aside>
			<section>