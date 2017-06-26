<!DOCTYPE html>

<?php
	$sideA = $_GET['sideA'];
	$sideB = $_GET['sideB'];
	$sideC = $_GET['sideC'];
	
	if ($sideA <= 0 || $sideB <= 0 || $sideC <= 0) {
		echo 'Not a triangle';
	} else if ( $sideA == $sideB && $sideB == $sideC ) {
		echo 'Equilateral Triangle<br><br><img src="equilateral.jpg" alt="equilateral triangle">'; 
	} else if ( $sideA == $sideB || $sideB == $sideC ) {
		echo 'Isosceles Triangle<br><br><img src="isosceles.jpg" alt="isosceles triangle">';
	} else { 
		echo 'Scalene Triangle<br><br><img src="scalene.jpg" alt="scalene triangle">'; 
	}
?>