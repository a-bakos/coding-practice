<!doctype html>
	<head>
		<link type="text/css" rel="stylesheet" href="phpform.css" />
		<title>phpTestPage</title>
	</head>	

	<body>
		<h1>Oy, this is multidimensional array PHP.</h1>
		<p>Some North American States, Provinces, and Territories:</p>
		<?php # multidimensionalarray.php
		
		// create the first array
		$mexico = array( # associative array
		'YU' => 'Yucatan',
		'BC' => 'Baja California',
		'OA' => 'Oaxaca'
		);
		
		// create the second array
		$us = array(
		'MD' => 'Maryland',
		'IL' => 'Illinois',
		'PA' => 'Pennsylvania',
		'IA' => 'Iowa'
		);
		
		// create the third array
		$canada = array(
		'QC' => 'Quebec',
		'AB' => 'Alberta',
		'NW' => 'Northwest Territories',
		'YT' => 'Yukon',
		'PE' => 'Prince Edward Island'
		);
		
		// combine the three arrays
		$n_america = array(
		'Mexico' => $mexico,
		'United States' => $us,
		'Canada' => $canada
		);
		
		// loop through the countries
		foreach ($n_america as $country => $list) {
			echo "<h2>$country</h2><ul>"; # print heading
			foreach ($list as $key => $value) { # print each state, province or territory
				echo "<li>$key - $value</li>\n";
			}
			echo '</ul>';
		}
		?>
	</body>
	
	<footer>
	</footer>
</html>