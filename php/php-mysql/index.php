<?php
// This script performs an INSERT query to add a record to the users table
// ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>

<?php
// check for form submission
if ( $_SERVER['REQUEST_METHOD'] == 'POST') {

	$errors = array(); // initialize and error array

	// check for a first name
	if ( empty( $_POST['first_name'] ) ) {
		$errors[] = 'You forgot to enter your first name';
	} else {
		$fn = trim( $_POST['first_name'] );
	}

	// check for a last name
	if ( empty( $_POST['last_name'] ) ) {
		$errors[] = 'You forgot to enter your last name';
	} else {
		$ln = trim( $_POST['last_name'] );
	}

	// check for an email address
	if ( empty( $_POST['email'] ) ) {
		$errors[] = 'You forgot to enter your email';
	} else {
		$e = trim( $_POST['email'] );
	}

	// check for a password and match against the confirmed password
	if ( ! empty( $_POST['pass1'] ) ) {
		if ( $_POST['pass1'] != $_POST['pass2'] ) {
			$errors[] = 'Your password did not match the confirmed password';
		} else {
			$p = trim( $_POST['pass1'] );
		}
	} else {
		$errors[] = 'You forgot to enter your password';
	}

	if ( empty( $errors ) ) { // if everything is OK
		// register the user in the database
		require ( 'mysqli_connect.php' ); // connect to the db

		// make the query
		$q = "INSERT INTO users ( first_name, last_name, email, pass, registration_date ) VALUES ( '$fn', '$ln', '$e', SHA1('$p'), NOW() )";

		$r = @mysqli_query( $dbc, $q ); // run the query
		if ( $r ) { // if it ran OK

			// print message
			echo '<h1>Thank you!</h1>
			<p>You are now registered</p>';

		} else { // if it did not run ok

			// public message
			echo '<h1>System error</h1>
			<p>You could not be registered due to a system error.</p>';

			// debugging message
			echo '<p>' . mysqli_error( $dbc ) . '</p><br /><p>Query: ' . $q . '</p>';
		}

		mysqli_close( $dbc ); // close the db connection

		exit();

	} else { // report the errors

		echo '<h1>Error!</h1>
		<p>The following error(s) occurred:</p>';
		foreach ( $errors as $msg ) {
			echo " - $msg<br>\n";
		}
		echo '<p>Please try again.</p>';

	}
}
?>

<form action="index.php" method="post">
	<p>First name:
		<input type="text" name="first_name" size="15" maxlength="20" value="<?php if ( isset( $_POST['first_name'] ) ) echo $_POST['first_name']; ?>" />
	</p>
	<p>Last name:
		<input type="text" name="last_name" size="15" maxlength="40" value="<?php if ( isset( $_POST['last_name'] ) ) echo $_POST['last_name']; ?>" />
	</p>
	<p>Email:
		<input type="text" name="email" size="20" maxlength="60" value="<?php if ( isset( $_POST['email'] ) ) echo $_POST['email']; ?>" />
	</p>
	<p>Password:
		<input type="password" name="pass1" size="10" maxlength="20" value="<?php if ( isset( $_POST['pass1'] ) ) echo $_POST['pass1']; ?>" />
	</p>
	<p>Confirm Password:
		<input type="password" name="pass2" size="10" maxlength="20" value="<?php if ( isset( $_POST['pass2'] ) ) echo $_POST['pass2']; ?>" />
	</p>
	<p>
		<input type="submit" name="submit" value="Register" />
	</p>
</form>

</body>
</html>
