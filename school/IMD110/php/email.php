<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comments= $_POST['comments'];
	$headers = "From: $email \r\n";
  	$to = 'pharoe87@stu.aii.edu'; 
    $subject = 'Message from Beachbirds Contact page';
    $addition = $_POST['addition'];
			
    $body = "From: $name\n E-Mail: $email\n Comments:\n $comments";
			
 if ($_POST['submit'] && $addition == '42') {				 
        if (mail ($to, $subject, $body, $headers)) { 
	   header( 'Location:../reply.html' );
	
	} else { 
	    echo '<p>Something is incorrect, hit the back button and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $addition!= '42') {
	echo '<p>You answered the anti-spam question incorrectly hit the back button and try again!</p>';
    }
?>