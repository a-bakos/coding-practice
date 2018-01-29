<?php

// this file contains the db access information
// this file also establishes a connection to mysql
// selects the db and sets the encoding

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'larry');

// make the connection
$dbc = @mysqli_connect ( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME ) OR die ( 'Could not connect to MYSQL: ' . mysqli_connect_error() );

// set the encoding
mysqli_set_charset( $dbc, 'utf8' );
