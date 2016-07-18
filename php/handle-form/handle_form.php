<!doctype html>
	<head>
		<link type="text/css" rel="stylesheet" href="phpform.css" />
		<title>phpTestPage</title>
	</head>	

	<body>
	<p>Oy. This is form feedback page</p>
	<?php
	if ( 
		!empty($_POST['name']) &&
		!empty($_POST['comments']) &&
		!empty($_POST['email']) ) {
		echo "<p>Thank you, <strong>{$_POST['name']}</strong>, for the following comments:<br />
		<tt>{$_POST['comments']}</tt></p>
		<p>We will reply you at <em>{$_POST['email']}</em>.</p>\n";
	}
	else {
		echo "<p>Please go back and fill out the form again!</p>";
	}
	
	// just a practice
	$numbers = range(1,10); // array consisting of a range of number between 1 and 10, indexed as 0 to 9.
	echo $numbers[9];
	?>
	
	</body>
	
	<footer>
	</footer>
</html>