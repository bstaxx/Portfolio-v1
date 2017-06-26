<!DOCTYPE html>
<html>
	
	<head>
		<title>GWD471 Homework 1</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	
	
	
	<body>
		<form action="total.php" method="get">
			<table>
				<tr>
					<th>Item</th>
					<th>Price</th>
					<th>Quantity</th>
				</tr>
				
				<tr>
					<td><input type="text" name="item[]" value="Snickers Bar"></td>
					<td><input type="number" name="price[]" value="1.25" step=".01"></td>
					<td><input type="number" name="quantity[]" value="1" min="1" max="5"></td>
				</tr>
				
				<tr>
					<td><input type="text" name="item[]" value="Ground Beef"></td>
					<td><input type="number" name="price[]" value="8.99" step=".01"></td>
					<td><input type="number" name="quantity[]" value="1" min="1" max="5"></td>
				</tr>
				
				<tr>
					<td><input type="text" name="item[]" value="Pure Life Water"></td>
					<td><input type="number" name="price[]" value="15.99" step=".01"></td>
					<td><input type="number" name="quantity[]" value="1" min="1" max="5"></td>
				</tr>
				
				<tr>
					<td><input type="text" name="item[]" value="Pepsi"></td>
					<td><input type="number" name="price[]" value="2.22" step=".01"></td>
					<td><input type="number" name="quantity[]" value="1" min="1" max="5"></td>
				</tr>
				
				<tr>
					<td><input type="text" name="item[]" value="Tomato Sauce"></td>
					<td><input type="number" name="price[]" value="4.34" step=".01"></td>
					<td><input type="number" name="quantity[]" value="1" min="1" max="5"></td>
				</tr>
				
				
				<tr><td colspan="3"><input type="submit" ></td></tr>
			</table>
			
		</form><br><br>
		
		<form action="triangle.php" method="get">
			<table>
				<tr>
					<th>Side A</th>
					<th>Side B</th>
					<th>Side C</th>
				</tr>
				<tr>
					<td><input type="number" name="sideA" value="10"></td>
					<td><input type="number" name="sideB" value="10"></td>
					<td><input type="number" name="sideC" value="10"></td>
				</tr>
				<tr><td colspan="3"><input type="submit" ></td></tr>
			<table>
		</form>
	</body>
	
</html>