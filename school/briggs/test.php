<?php
session_start();
require('header.php');
require('db_connect.php');

$query = "SELECT * FROM users;";
$result = mysqli_query($db, $query);
while($row = mysqli_fetch_assoc($result)) {
	echo $row['first_name'];
}
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