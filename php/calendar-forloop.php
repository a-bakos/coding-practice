<!doctype html>
	<head>
		<link type="text/css" rel="stylesheet" href="phpform.css" />
		<title>phpTestPage -- calendar</title>
	</head>	

	<body>
	<h1>Oy, this is calendar PHP.</h1>
	<form action="calendar.php" method="post">
	<?php # calendar.php script
		// this script makes three pull down menus
		// for an html form: months, days, years
		
		// make the months array
		$months = array (1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
				
		// make the months pull-down menu
		echo '<select name="month">';
		foreach ($months as $key => $value) {
			echo "<option value=\"$key\">$value</option>\n";
		}
		echo '</select>';
		
		// make the days pull-down menu
		echo '<select name="day">';
		for ($day = 1; $day <= 31; $day++) {
			echo "<option value=\"$day\">$day</option>\n";
		}
		echo "</select>";
		
		// make the years pull-down menu
		echo '<select name="year">';
		for ($year = 1900; $year <= 2020; $year++) {
			echo "<option value=\"$year\">$year</option>\n";
		}
		echo "</select>";
		
		// a bit of practice
		echo "<h2>Here's a bit of practice with count() function</h2>";
		$numMonths = count($months);
		echo "<br /><p>The number of the months listed in the pull-down menu is: $numMonths</p>";

		
	?>
	</body>
	
	<footer>
	</footer>
</html>