<?php
	require_once('dbConnect.php');

	$query1 = "CREATE TABLE users (UserID INT NOT NULL AUTO_INCREMENT, FirstName varchar(20), LastName VARCHAR(20), email VARCHAR(30), Password VARCHAR(5), Age INT(2), PRIMARY KEY (UserID)); INSERT INTO users(FirstName, LastName, email, Password, Age) VALUES('John', 'Doe', 'johndoe@hotmail.com', '12345', '24'); INSERT INTO users(FirstName, LastName, email, Password, Age) VALUES('Jane', 'Doe', 'janedoe@yahoo.com', '54321', '21'); INSERT INTO users(FirstName, LastName, email, Password, Age) VALUES('John', 'Brown', 'jbrown@cuhk.edu.hk', 'abcde', '33'); INSERT INTO users(FirstName, LastName, email, Password, Age) VALUES('Johnny', 'Bravo', 'jbravo@yahoo.com', 'xyz', '15'); INSERT INTO users(FirstName, LastName, email, Password, Age) VALUES('Monty', 'Fool', 'mfool@hotmail.com', 'fool', '40');";
		
	echo "SELECT * FROM users<br>";
	$query2 = "SELECT * FROM users;";
	$result = mysqli_query($db, $query2);
	while($row = mysqli_fetch_assoc($result)) {
		echo $row['UserID'] . " ";
		echo $row['FirstName'] . " ";
		echo $row['LastName'] . " ";
		echo $row['email'] . " ";
		echo $row['Password'] . " ";
		echo $row['Age'] . "<br>";
	}
	
	echo "<br>";
	/*mysqli_close($db);*/
?>
	Look up by First Name<br>
	<form action="lookup.php" method="POST">
		<input name="FirstName" type="text" value="lookup firstname">
		<input type="submit" value="Look Up">
	</form><br><br>
	
	Users thats over 21<br>
<?php
	$query8 = "SELECT * FROM users WHERE Age > 21;";
	$result8 = mysqli_query($db, $query8);
	while($row = mysqli_fetch_assoc($result8)) {
		echo $row['UserID'] . " ";
		echo $row['FirstName'] . " ";
		echo $row['LastName'] . " ";
		echo $row['email'] . " ";
		echo $row['Password'] . " ";
		echo $row['Age'] . "<br>";
	}
	
	echo "<br>SELECT FirstName, LastName, Age FROM users ORDER BY Age;<br>";
	
	$query10 = "SELECT * FROM users ORDER BY Age;";
	$result10 = mysqli_query($db, $query10);
	
?>

	<form action="change_email.php" method="POST">
		<select name='changeEmail'><?php while($row = mysqli_fetch_assoc($result10)) {
				echo '<option value="' . $row['UserID'] . '">' . $row['FirstName'] . " " . $row['LastName'] . " " . $row['Age'] . '</option>';
			}
		?></select>
		<input type="text" name="email">
		<input type="submit" value="Change Email">
	</form>
	
