<?php
	session_start();
	if ( !isset($_SESSION['logged_in']) ) {header( 'Location: http://www.bstaxx.com/school/briggs' ) ;}
	require('db_connect.php');
	require("header.php");

	
	$questions = array();
	$query = 'SELECT * FROM questions;';
	$result = mysqli_query($db, $query);
	$numRows = mysqli_num_rows($result);
	
	while ($row = mysqli_fetch_assoc($result)) {
		$questions[$row['description']][] = array('question_1' => $row['question_1'], 'question_2' => $row['question_2']);	
	}
	
	//echo json_encode($questions) . "<br><br>";
	//echo $numRows;
	
	/*
	echo "<pre>";
	print_r($questions['Extroverted VS. Introverted'][0]);
	echo "</pre>";
	*/
?>

<script>
	switches = {'EI' : [], 'SN' : [], 'TF' : [], 'JP' : []};
	numRows = <?php echo $numRows ?>;
	
	function select(element, key1, key2, key3) {
		if (key3 == key1.charAt(0)) {
			var element2 = document.getElementById(key1 + "_" + key2 + "_" + key1.charAt(1));
		} else {
			var element2 = document.getElementById(key1 + "_" + key2 + "_" + key1.charAt(0));
		}
		element.classList.add('selected');
		element2.classList.remove('selected');
		switches[key1][key2] = key3;
		//console.log(switches);
		//alert(key3);
	}
	
	function validate() {
		var EI = switches['EI'].filter(isset).length,
			SN = switches['SN'].filter(isset).length,
			TF = switches['TF'].filter(isset).length,
			JP = switches['JP'].filter(isset).length,
			EI2 = switches['EI'].filter(isset2, "E").length,
			SN2 = switches['SN'].filter(isset2, "S").length,
			TF2 = switches['TF'].filter(isset2, "T").length,
			JP2 = switches['JP'].filter(isset2, "J").length,
			EI3, SN3, TF3, JP3;
		
		if (EI2 >= 2) {EI3 = "E"} else {EI3 = "I"}
		if (SN2 >= 2) {SN3 = "S"} else {SN3 = "N"}
		if (TF2 >= 2) {TF3 = "T"} else {TF3 = "F"}
		if (JP2 >= 2) {JP3 = "J"} else {JP3 = "J"}
		
		if (EI + SN + TF + JP == 12) {
			var att = encodeURIComponent(JSON.stringify(switches)) + "&personality=" + EI3 + SN3 + TF3 + JP3;
			var url = "http://www.bstaxx.com/school/briggs/submit_survey.php?results=" + att;
			window.location = url;
		} else {
			alert("You must first complete the entire survey.");
		}
	}
	
	function isset(array) {
	  return array !== undefined;
	}
	
	function isset2(array) {
	  return array == this;
	}
	//var filtered = [12, 5, 8, 130, 44].filter(isBigEnough);
	// filtered is [12, 130, 44]
</script>

<?php if ( isset($_SESSION['logged_in']) ) { ?>
	<section class="container">
		<div class="form margin_top_30">
			<div class="row">
				<form class="col_12 survey" action="submit_survey.php" method="POST">
					<table>
						<tr>
							<th colspan="3" ><h1>Extroverted VS. Introverted</h1></th>
						</tr>
						<tr>
							<td colspan="3">Select the statement that best describes you for each numbered row.</td>
						</tr>
						<?php
							foreach ($questions['Extroverted VS. Introverted'] as $key => $value) {
								echo "<tr><td class=\"num\">" . ($key+1) . "</td><td id=\"EI_" . $key . "_E\" class=\"question\" onclick=\"select(this, 'EI', $key, 'E')\">" . $value['question_1'] . "</td><td id=\"EI_" . $key . "_I\" class=\"question\" onclick=\"select(this, 'EI', $key, 'I')\">" . $value['question_2'] . '</td></tr>';
							}
						?>
						<tr>
							<th colspan="3" ><h1>Sensing VS. Intuition</h1></th>
						</tr>
						<tr>
							<td colspan="3">Select the statement that best describes you for each numbered row.</td>
						</tr>
						<?php
							foreach ($questions['Sensing VS. Intuition'] as $key => $value) {
								echo "<tr><td class=\"num\">" . ($key+1) . "</td><td id=\"SN_" . $key . "_S\" class=\"question\" onclick=\"select(this, 'SN', $key, 'S')\">" . $value['question_1'] . "</td><td id=\"SN_" . $key . "_N\" class=\"question\" onclick=\"select(this, 'SN', $key, 'N')\">" . $value['question_2'] . '</td></tr>';
							}
						?>
						<tr>
							<th colspan="3" ><h1>Thinking VS. Feeling</h1></th>
						</tr>
						<tr>
							<td colspan="3">Select the statement that best describes you for each numbered row.</td>
						</tr>
						<?php
							foreach ($questions['Thinking VS. Feeling'] as $key => $value) {
								echo "<tr><td class=\"num\">" . ($key+1) . "</td><td id=\"TF_" . $key . "_T\" class=\"question\" onclick=\"select(this, 'TF', $key, 'T')\">" . $value['question_1'] . "</td><td id=\"TF_" . $key . "_F\" class=\"question\" onclick=\"select(this, 'TF', $key, 'F')\">" . $value['question_2'] . '</td></tr>';
							}
						?>
						<tr>
							<th colspan="3" ><h1>Judging VS. Perceiving</h1></th>
						</tr>
						<tr>
							<td colspan="3">Select the statement that best describes you for each numbered row.</td>
						</tr>
						<?php
							foreach ($questions['Judging VS. Perceiving'] as $key => $value) {
								echo "<tr><td class=\"num\">" . ($key+1) . "</td><td id=\"JP_" . $key . "_J\" class=\"question\" onclick=\"select(this, 'JP', $key, 'J')\">" . $value['question_1'] . "</td><td id=\"JP_" . $key . "_P\" class=\"question\" onclick=\"select(this, 'JP', $key, 'P')\">" . $value['question_2'] . '</td></tr>';
							}
						?>
						<tr></tr>
						<tr></tr>
						<tr>
							<td colspan="3"><input type="button" value="Submit Survey" onclick="validate()"></td>
						</tr>
					</table>
				</form>
			</div>			
		</div><!--"form_container"-->
	</section>
<?php } else {header( 'Location: http://www.bstaxx.com/school/briggs' );} ?>		
	

<?php mysqli_close($db); ?>
<?php include('footer.php');?>