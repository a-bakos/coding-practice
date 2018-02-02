<!DOCTYPE html>
<html>
<head>
	<title>Delete a user</title>
</head>
<body>
<h1>Delete a User</h1>
<?php

	// check for a valid user id, through GET or POST
	if ( ( isset( $_GET['id'] ) ) && ( is_numeric( $_GET['id'] ) ) ) { // from view_users.php
		$id = $_GET['id'];
	} elseif ( ( isset( $_POST['id'] ) ) && is_numeric( $_POST['id'] ) ) { // form submission
		$id = $_POST['id'];
	} else { // no valid id, kill the script
		echo '<p>This page has been accessed in error.</p>';
		exit();
	}

	require_once( 'mysqli_connect.php' );

	// check if the form has been submitted
	if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
		if ( $_POST['sure'] == 'Yes' ) {
			// delete the record

			// make the query
			$q = "DELETE FROM users WHERE user_id=$id LIMIT 1";
			$r = @mysqli_query( $dbc, $q );

			if ( mysqli_affected_rows( $dbc ) == 1 ) {
				// if it ran ok

				echo '<p>The user has been deleted</p>';
			} else {
				// if the query did not ran ok
				echo '<p>The user could not be deleted due to a system error</p>';
				echo '<p>' . mysqli_error( $dbc ) .'<br>Query: ' . $q . '</p>'; // debugging message
			}
		} else { // no confirmation of deletion
			echo '<p>The user has not been deleted</p>';
		}
	} else { // show the form
		// retrieve the user's information
		$q = "SELECT CONCAT(last_name, ' ', first_name) FROM users WHERE user_id=$id";
		$r = @mysqli_query( $dbc, $q );

		if ( mysqli_num_rows( $r ) == 1 ) {
			// valid user id, show the form

			// get the user information
			$row = mysqli_fetch_array( $r, MYSQLI_NUM );

			// displays the record being deleted
			echo '<h3>Name: ' . $row[0] . '</h3>
			Are you sure you want to delete this user?';

			// create the form
			echo '<form action="delete_user.php" method="post">
			<input type="radio" name="sure" value="Yes" />Yes
			<input type="radio" name="sure" value="No" checked="checked" /> No
			<input type="submit" name="submit" value="Submit" />
			<input type="hidden" name="id" value="' . $id . '" />
			</form>';
		} else { // not a valid user id
			echo '<p>This page has been accessed in error</p>';
		}
	} // end of main submission conditional

	mysqli_close( $dbc );

?>
</body>
</html>
