<!DOCTYPE html>
<html>
<head>
	<title>Change you password</title>
</head>
<body>

<?php
// check for form submission
if ( $_SERVER['REQUEST_METHOD'] == 'POST') {

	require( 'mysqli_connect.php' ); // connect to the db

	$errors = array(); // initialize and error array

	// check for an email address
	if ( empty( $_POST['email'] ) ) {
		$errors[] = 'You forgot to enter your email address';
	} else {
		$e = mysqli_real_escape_string( $dbc, trim( $_POST['email'] ) );
	}

	// check for the current password
	if ( empty( $_POST['pass'] ) ) {
		$errors[] = 'You forgot to enter your current password';
	} else {
		$p = mysqli_real_escape_string( $dbc, trim( $_POST['pass'] ) );
	}

	// check for a new password and match against the confirmed password
	if ( ! empty( $_POST['pass1'] ) ) {
		if ( $_POST['pass1'] != $_POST['pass2'] ) {
			$errors[] = 'Your password did not match the confirmed password';
		} else {
			$np = mysqli_real_escape_string( $dbc, trim( $_POST['pass1'] ) );
		}
	} else {
		$errors[] = 'You forgot to enter your password';
	}

	if ( empty( $errors ) ) { // if everything is OK

		// check that they've entered the right email address/password combination:
		$q = "SELECT user_id FROM users WHERE (email='$e' AND pass=SHA1('$p') )";
		$r = @mysqli_query( $dbc, $q ); // run the query
		$num = @mysqli_num_rows( $r );

		if ( $num == 1 ) { // match was made

			// get the user id
			$row = mysqli_fetch_array( $r, MYSQLI_NUM );

			// make the update query
			$q = "UPDATE users SET pass=SHA1('$np') WHERE user_id=$row[0]";
			$r = @mysqli_query( $dbc, $q );

			if ( mysqli_affected_rows( $dbc ) ) { // if it ran ok
				// print a msg
				echo '<p>Thank you! Your password has been updated</p>';
			} else { // if it did not run ok

				// public message
				echo '<h1>System error</h1>
				<p>Your password could not be changed due to a system error.</p>';

				// debugging message
				echo '<p>' . mysqli_error( $dbc ) . '</p><br /><p>Query: ' . $q . '</p>';
			}

			mysqli_close( $dbc ); // close the db connection

			exit();

		} else { // invalid email address/password combination

			echo '<h1>Error!</h1>
			<p>The email address and password do not match those on file.</p>';

		}
	} else { // report errors
		echo '<h1>Error!</h1>
		<p>The following errors occurred:</p>';
		foreach ( $errors as $msg ) {
			echo " - $msg<br>\n";
		echo '<p>Please try again!</p>';
		}

	} // end of if empty errors

	mysqli_close( $dbc ); // close the db connection

}

?>

<h1>Change your password</h1>
<form action="password.php" method="post">
	<p>Email address:
		<input type="text" name="email" size="20" maxlength="60" value="<?php if ( isset( $_POST['email'] ) ) echo $_POST['email']; ?>" />
	</p>
	<p>Current Password:
		<input type="password" name="pass" size="10" maxlength="20" value="<?php if ( isset( $_POST['pass'] ) ) echo $_POST['pass']; ?>" />
	</p>
	<p>New Password:
		<input type="password" name="pass1" size="10" maxlength="20" value="<?php if ( isset( $_POST['pass1'] ) ) echo $_POST['pass1']; ?>" />
	</p>
	<p>Confirm New Password:
		<input type="password" name="pass2" size="10" maxlength="20" value="<?php if ( isset( $_POST['pass2'] ) ) echo $_POST['pass2']; ?>" />
	</p>
	<p>
		<input type="submit" name="submit" value="Change password" />
	</p>
</form>

<a href="view_users.php">View registered users</a>

</body>
</html>
