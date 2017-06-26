<!DOCTYPE html>

<html>
<head><title>Mail</title></head>
<body>
<?php
	$to = "BookuTV@localhost.com";
	$subject = "Testing";
	$body = "This is a test email from localhost using Mercury/32" . PHP_EOL;
	$body.= "He HA HA";
	$headers = "From:  BookuTV@localhost.com";
	
	if (mail($to, $subject, $body, $headers)) {
		mail($to, $subject, $body, $headers);
		echo "Mail successfully sent!";
	} else {
		echo "Mail delivery failed";
	}
?>

</body>

</html>