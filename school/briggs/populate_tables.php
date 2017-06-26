<?php
session_start();
require('header.php');
require('db_connect.php');

$query = "";


if (mysqli_query($db, $query)) {
	echo "Tables have been successfully created!";
} else {
	echo "There was an error in tying to create tables " . mysqli_error($db);
}
mysqli_close($db);
//echo "true";

/*
$query1 = "SELECT * FROM users;";
$result1 = mysqli_query($db, $query1);
while($row = mysqli_fetch_assoc($result1)) {
	echo $row['user_id'] . " ";
	echo $row['first_name'] . " ";
	echo $row['last_name'] . " ";
	echo $row['email'] . " ";
	echo $row['password'] . " ";
}*/
include('footer.php');
?>