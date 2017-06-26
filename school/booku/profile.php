<?php 
	include 'functions/initiate.php';
	//protect_page();
	include 'includes/overall_header.php';
	
	if (isset($_GET['username']) === true && empty($_GET['username']) === false) {
		$username		= $_GET['username'];
		
		if (user_exists($username) === true) {
			$user_id		= user_id_from_username($username);
			$profile_data	= user_data($user_id, 'first_name', 'last_name', 'email');
		?>
			<h1><?php echo $profile_data['first_name'];?>'s Profile</h1>
			<p><?php echo $profile_data['email'];?></p>
		<?php
		} else {
			echo 'Sorry, that username doens\'t exists';
		}
		
	} else {
		header('location: index.php');
		exit();
	}
	
	include 'includes/overall_footer.php'; 
	
?>