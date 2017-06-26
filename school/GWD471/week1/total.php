<!DOCTYPE html>

<html>
<head>
	<title>GWD471 Homework 1</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
	<table>
		<tr>
			<th>Item</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Extended Price</th>
		</tr>
	
<?php 
	$items = $_GET['item'];
	$price = $_GET['price'];
	$quantity = $_GET['quantity'];
	$totals = [];
	$subtotal = 0;
	
	for ($k = 0; $k < 5; $k++) {
		$totals[$k] = $price[$k] * $quantity[$k];
		$subtotal = $subtotal + $totals[$k];
	}
	
	for ($i = 0; $i < 5; $i++) {
		echo '<tr><td>' . $items[$i] . '</td><td>' . $quantity[$i] . '</td><td>$' . $price[$i] . '</td><td>$' . $totals[$i] . '</td></tr>';
	}
	
	$tax = $subtotal * 0.06;
	$total = $subtotal + $tax;
?>
		
		<tr><td colspan="4"></td></tr>
		<tr class="global">
			<td>SUBTOTAL</td>
			<td colspan="3">$<?php echo $subtotal;?></td>
		</tr>
		<tr class="global">
			<td>Tax @ 6%</td>
			<td colspan="3">$<?php echo round($tax, 2); ?></td>
		</tr>
		<tr class="global">
			<td>Total</td>
			<td colspan="3">$<?php echo round($total, 2); ?></td>
		</tr>
	</table>
</body>