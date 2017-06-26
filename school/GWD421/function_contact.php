<!DOCTYPE html>
<html><head><title>Contact</title>
<?php 
	require "templates/header.php"; 
	$to = "bookumoneyentertainment@gmail.com";
	$from = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	mail($to,$subject,$message,"From: $from\n");
?>

<section id="content" class="container padding_top_30 padding_bottom_30">
	<div class="row">
		<h1>Thank you <?php echo $_POST['name']; ?> for your message!</h1>
		<p>We will get back with you as soon as it is possible.</p>
	<div>
</section>



<?php include "templates/footer.php"; ?>