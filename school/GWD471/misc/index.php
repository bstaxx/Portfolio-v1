<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>GWD417</title>
</head>

<body>
	<?php 
		$pints = 10;
		//phpinfo(); 
		//echo('Hi');
		//var_dump($cost);
		if($pints == 0) {
			echo "you are ok to drive";
		} else if($pints < 3) {
			echo "take your bike";
		} else if ($pints <=6) {
			echo "take a cab";
		} else {
			echo "call the hospital";
		}
	?>
</body>
</html>