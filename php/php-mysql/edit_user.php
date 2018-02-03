<!DOCTYPE html>
<html>
<head>
	<title>Edit a user</title>
</head>
<body>
<h1>Edit a User</h1>
<?php

	// check for a valid user id, through GET or POST
	if ( ( isset( $_GET['id'] ) ) && ( is_numeric( $_GET['id'] ) ) ) { // from view_users.php
		$id = $_GET['id'];
	} elseif ( ( isset( $_POST['id'] ) ) && is_numeric( $_POST['id'] ) ) { // form submission
		$id = $_POST['id'];
	} else { // no valid id, kill the script
		echo '<p>This page has been accessed in errorsss.</p>';
		var_dump($_POST['id']);
		var_dump($_GET['id']);
		exit();
	}

	require_once( 'mysqli_connect.php' );

	//check if the form has been submitted
	if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

		$errors = array();

		// check for a first name
		if ( empty( $_POST['first_name'] ) ) {
			$errors[] = 'You forgot to enter your first name';
		} else {
			$fn = mysqli_real_escape_string( $dbc, trim( $_POST['first_name'] ) );
		}

		// check for a last name
		if ( empty( $_POST['last_name'] ) ) {
			$errors[] = 'You forgot to enter your last name';
		} else {
			$ln = mysqli_real_escape_string( $dbc, trim( $_POST['last_name'] ) );
		}

		// check for an email name
		if ( empty( $_POST['email'] ) ) {
			$errors[] = 'You forgot to enter your email';
		} else {
			$e = mysqli_real_escape_string( $dbc, trim( $_POST['email'] ) );
		}

		if ( empty( $errors ) ) { // if everything is ok
			// test for unique email address
			$q = "SELECT user_id FROM users WHERE email='$e' AND user_id !=$id";
			$r = mysqli_query( $dbc, $q );

			if ( mysqli_num_rows( $r ) == 0 ) {
				// make the query
				$q = "UPDATE users SET first_name='$fn', last_name='$ln', email='$e' WHERE user_id=$id LIMIT 1";
				$r = mysqli_query( $dbc, $q );

				if ( mysqli_affected_rows( $dbc ) == 1 ) { // if it ran ok
					echo '<p>The user has been edited</p>';
				} else { // if it did not run ok
					echo '<p>The user could not be edited due to a system error.</p>';
					echo '<p>' . mysqli_error( $dbc ) . '<br>Query: ' . $q . '</p>';
				}

			} else { // already registered
				echo '<p>The email address has already been registered</p>';
			}

		} else { // report the errors
			echo '<p>The following error(s) occurred:<br>';
			foreach ( $errors as $msg ) {
				echo " - $msg<br>\n";
			}
			echo '</p><p>Please try again</p>';
		} // empty of if empty errors
	} // end of submit conditional

	// always show the form

	// retrieve the user's information:
	$q = "SELECT first_name, last_name, email FROM users WHERE user_id=$id";
	$r = mysqli_query( $dbc, $q );

	if ( mysqli_num_rows( $r ) == 1 ) { // valid user id, show the form
		// get the user's information
		$row = mysqli_fetch_array( $r, MYSQLI_NUM );

		// create the form
		echo '<form action="edit_user.php" method="post">
		<p>First name: <input type="text" name="first_name" size="15" maxlength="15" value="' . $row[0] . '" /></p>
		<p>Last name: <input type="text" name="last_name" size="15" maxlength="30" value="' . $row[1] . '" /></p>
		<p>Email: <input type="text" name="email" size="20" maxlength="60" value="' . $row[2] . '" /></p>
		<p><input type="submit" value="Submit" name="submit" /></p>
		<p><input type="hidden" name="id" value="' . $id . '" /></p>
		</form>';
	} else { // not a valid user id
		echo '<p>This page has been accessed in error</p>';
	}

	mysqli_close( $dbc );

?>
</body>
</html>
