<!DOCTYPE html>
<html><head><title>Contact</title>
<?php require "templates/header.php"; ?>
<section id="content" class="container padding_top_30 padding_bottom_30">
	<div class="row"><h1 class="col_12">Contact us</h1></div>
	<div class="row">
		
		<form class="col_8" action="function_contact.php" method="POST">
			<table class="contact">
				<tr>
					<td><label for="name">Your Name</label></td>
					<td class="table_spacer"></td>
					<td><label>Your email</label></td>
				</tr>
				
				<tr>	
					<td><input type="text" name="name"></td>
					<td class="table_spacer"></td>
					<td><input type="text" name="email"></td>
				</tr>
			
				<tr>
					<td colspan="3"><label>Subject</label></td>
				</tr>
				
				<tr>
					<td colspan="3"><input type="text" name="subject"></td>
				</tr>
				
				<tr>
					<td colspan="3"><label>Your Message</label></td>
				</tr>
				
				<tr><td colspan="3"><textarea rows="10" cols="50" name="message"></textarea></td></tr>
				
				<tr>
					<td><input type="submit" value="submit"></td>
				</tr>
			</table>
		</form>

		<ul class="col_4 last no_bullet">
			<li><strong>Main Phone:  </strong>(301) 490-6070</li>
			<li><strong>Fax:  </strong>(301)490-6070</li>
			<li><strong>E-mail:  </strong><a href="mailto:africanartmuseumofmd@verizon.net">africanartmuseumofmd@verizon.net</a></li>
			<li>
				<strong>Address:</strong>
				<p>11711 East Market Place<br>Fulton, MD 20759</p>
			
			</li>
		</ul>
	</div>
</section>
<?php include "templates/footer.php"; ?>