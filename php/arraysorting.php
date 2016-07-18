<!doctype html>
	<head>
		<link type="text/css" rel="stylesheet" href="phpform.css" />
		<title>phpTestPage -- calendar</title>
	</head>	

	<body>
		<h1>Oy, this is array sorting PHP.</h1>
		<table border="0" cellspacing="3" cellpadding="3" align="center">
			<tr>
				<td><h2>Rating<h2></td>
				<td><h2>Title</h2></td>
			</tr>
			<?php # sorting arrays
			// create the array
			$movies = array (
				# key => value
				'Casablanca' => 10,
				'To Kill a Mockingbird' => 10,
				'The English Patient' => 2,
				'The Doors' => 10,
				'Donnie Darko' => 7,
				'Attaboy' => 1
				#$title => $rating
			);
			echo '<tr><td><strong>In their original order:</strong></td></tr>';
			foreach ($movies as $title => $rating) {
				echo "<tr><td>$rating</td>
				<td>$title</td></tr>\n";
			}

			ksort($movies);
			echo '<tr><td colspan="2"><strong>Sorted by title</strong></td></tr>';
			foreach ($movies as $title => $rating) {
				echo "<tr><td>$rating</td>
				<td>$title</td></tr>\n";				
			}
			
			arsort($movies);
			echo '<tr><td colspan="2"><strong>Sorted by rating:</strong></td></tr>';
			foreach ($movies as $title => $rating) {
				echo "<tr><td>$rating</td><td>$title</td></tr>\n";
			}
			natsort($movies);
			echo '<tr><td><strong>Natural order...</strong></td></tr>';
			foreach ($movies as $title => $rating) {
				echo "<tr><td>$rating</td><td>$title</td></tr>\n";
			}			
			
			shuffle($movies); // can't handle numbers in values !!!!!
			echo '<tr><td><strong>Random pairs using shuffle() function</strong></td></tr>';
			foreach ($movies as $title => $rating) {
				echo "<tr><td>$rating</td><td>$title</td></tr>\n";
			}
			?>
		</table>
	</body>
	
	<footer>
	</footer>
</html>