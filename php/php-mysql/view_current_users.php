<!DOCTYPE html>
<html>
<head>
	<title>View the current users</title>
</head>
<body>
<h1>View the current users. This is a modified, upgraded version of view_users.php</h1>
<?php

require_once( 'mysqli_connect.php' );

$display = 10; // number of records to show per page

// determine how many pages there are
if ( isset( $_GET['p'] ) && is_numeric( $_GET['p'] ) ) {
	$pages = $_GET['p'];
} else { // need to determine
	// count the number of records in the database
	$q = "SELECT COUNT(user_id) FROM users";
	$r = @mysqli_query( $dbc, $q );
	$row = @mysqli_fetch_array( $r, MYSQLI_NUM );
	$records = $row[0];

	// calculate how many pages are required
	if ( $records > $display ) {
		$pages = ceil ( $records / $display );
	} else {
		$pages = 1;
	}
} // end of P if

// determine where in the database to start returning results
if ( isset( $_GET['s'] ) && is_numeric( $_GET['s'] ) ) {
	$start = $_GET['s'];
} else {
	$start = 0;
}

// define the query
$q = "SELECT last_name, first_name, DATE_FORMAT( registration_date, '%M %d, %Y' ) AS dr, user_id FROM users ORDER BY registration_date ASC LIMIT $start, $display";
$r = @mysqli_query( $dbc, $q );

echo '<table align="center" cellspacing="3" cellpadding="3" width="75%">
<tr>
	<td align="left"><strong>Edit</strong></td>
	<td align="left"><strong>Delete</strong></td>
	<td align="left"><strong>Last Name</strong></td>
	<td align="left"><strong>First Name</strong></td>
</tr>
';

$bg = '#eee';

while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ) ) {
	$bg = ( $bg == '#eee' ? '#fff' : '#eee' );

	echo '<tr bgcolor="' . $bg . '">
	<td align="left"><a href="edit_user.php?id=' .$row['user_id'] . '">Edit</a></td>
	<td align="left"><a href="delete_user.php?id=' . $row['user_id'] . '">Delete</a></td>
	<td align="left">' . $row['last_name'] . '</td>
	<td align="left">' . $row['first_name'] . '</td>
	</tr>';

} // end while
echo '</table>';
mysqli_free_result( $r );
mysqli_close( $dbc );

// make the links to other pages if necessary
if ( $pages > 1 ) {
	echo '<br><p>';

	// determine what page the script is // the current page viewed
	$current_page = ( $start / $display ) + 1;

	// create link to previous page if necessary, ie. it's not the first page
	if ( $current_page != 1 ) {
		echo '<a href="view_current_users.php?s=' . ( $start - $display ) . '&p=' . $pages . '">Previous</a> ';
	}

	// make the numeric links
	for ( $i = 1; $i <= $pages; $i++ ) {
		if ( $i != $current_page ) {
			echo '<a href="view_current_users.php?s=' . ( ( $display * ( $i - 1 ) ) ) . '&p=' . $pages . '">' . $i . '</a> ';
		} else {
			echo $i . ' ';
		}
	}

	// create a next link
	if ( $current_page != $pages ) {
		echo '<a href="view_current_users.php?s=' . ( $start + $display ) . '&p=' . $pages . '">Next</a>';
	}

	echo '</p>';
} // end of links section

?>
</body>
</html>
