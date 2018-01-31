<?php
// This script performs an INSERT query to add a record to the users table
// ?>
<!DOCTYPE html>
<html>
<head>
	<title>View users</title>
</head>
<body>
<h1>Registered Users</h1>
<?php

require ( 'mysqli_connect.php' ); // connect to the db

// make the query
$q = "SELECT CONCAT(last_name, ', ', first_name) AS name, DATE_FORMAT(registration_date, '%M %d, %Y') AS dr FROM users ORDER BY registration_date ASC";
$r = @mysqli_query( $dbc, $q ); // run the query

if ( $r ) { // if it ran ok
	echo '<table align="center" cellspacing="3" cellpadding="3" width="75%">
	<tr><td align="left"><strong>Name</strong></td><td align="left"><strong>Date Registered</strong></td></tr>';

	// fetch and print all the records
	while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ) ) {
		echo '<tr><td align="left">' . $row['name'] . '</td><td align="left">' . $row['dr'] . '</td></tr>';
	}

	echo '</table>';

	mysqli_free_result( $r ); // free up resources

} else { // if it did not run ok

	// public messages
	echo '<p>The current users could not be retrieved.</p>';

	// debugging message
	echo '<p>' . mysqli_error( $dbc ) . '<br>Query: ' . $q . '</p>';

}

mysqli_close( $dbc );

?>

</body>
</html>
