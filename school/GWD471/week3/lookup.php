<?php	
	require_once('dbConnect.php');
	
	$lookup = "'" . $_POST['FirstName'] . "'";
	$query5 = "SELECT * FROM users WHERE FirstName = $lookup;";
	$result5 = mysqli_query($db, $query5);
	
	while($row = mysqli_fetch_assoc($result5)) {
		echo $row['UserID'] . " ";
		echo $row['FirstName'] . " ";
		echo $row['LastName'] . " ";
		echo $row['email'] . " ";
		echo $row['Password'] . " ";
		echo $row['Age'] . "<br>";
	}
	
	echo "<br>";
	
	
	
	mysqli_close($db);

?>