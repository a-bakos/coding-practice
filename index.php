<!doctype html>
	<head>
		<link type="text/css" rel="stylesheet" href="phptest.css" />
		<title>phpTestPage</title>
	</head>	

	<body>
	<p>Oy. This is standard html</p>
	
	<?php 
	echo '<p class="hello">Hello, this was generated using PHP</p>';
		echo "<hr>";		
					$file = $_SERVER['SCRIPT_FILENAME'];
					$user = $_SERVER['HTTP_USER_AGENT'];
					$server = $_SERVER['SERVER_SOFTWARE'];
					
					echo "<p>$file</p>\n";
					echo "<p>$user</p>\n";
					echo "<p>$server</p>\n";
					
		echo "<hr><p>Rules to remember:
			<br><strong>_initialize a variable_</strong> = Set and immediate value
			<br><strong>_declare a variable_</strong> = set a specific type
			</p>";

		echo "<hr>";
		echo "<p>Okay, this is going to be a string practice example. I will create several variables. Then I will print out their content in a context.</p>";
		
		$firstName = "Attila";
		$secondName = "Bakos";
		$book = "Dulimanok";
		
		echo "<p>This is the content printed. Pretty seamless. You cannot tell.
			<br>The man in the room, $firstName $secondName is reading a book called $book.</p>";
					
		echo "<hr><p>Now, here comes the concatenation.</p>";
		$city = "Seattle";
		$state = "Washington";
		$address = $city . ', ' . $state . ' ' . 98101; // this line: concatenating strings: dot[.] adds them together
		
		echo "<p>$city - and - $state</p>\n";
		echo "<p>$address</p>";
		
		$num = strlen("$address"); // this function will count how many characters are in the variable $address
		
		echo "$num"; // and we print the number out.
		
		echo "<p>I am trying some other string functions here:</p>";
		$capitalized = "Hello I am Attila Bakos.";
		$capitalizedrevised = strtolower("$capitalized"); // string entirely lowercase
		echo "<p>$capitalized is converted to $capitalizedrevised</p>";

		$lowered = "hello i am attila bakos.";
		$loweredrevised = strtoupper("$lowered"); // string entirely uppercase
		echo "<p>$lowered is converted to $loweredrevised</p>";

		$firstwords = ucwords("$lowered"); // string each word first letter uppercase
		echo "<p>$lowered is converted to $firstwords</p>";

		echo "<hr><p>Okay, numbers.</p>";
		
		$numberOne = 3.141509;
		$numberOnehalf = round ($numberOne); // 3
		echo "<p>$numberOnehalf -- rounded to the nearest decimal</p>";
		$numberTwo = round ($numberOne, 3); // 3.142
		echo "<p>$numberTwo</p>";
		$numberThree = 204562;
		$numberThree = number_format ($numberThree); // 204,562
		echo "<p>$numberThree</p>";
		
		echo "<p>EXAMPLE</p>";
		$quantity = 30;
		$price = 119.95;
		$taxrate = .05;
		//calculation
		$total = $quantity * $price;
		$total = $total + ($total * $taxrate);
		$total = number_format ($total, 2);
		//print them out
		echo "<p>You are purchasing <strong>" . $quantity . "</strong> widgets at a cost of <strong>" . $price . "</strong> each. With tax, the total comes to <strong>£" . $total . "</strong>.</p>";
		
		echo "<hr><p>Next thing: constants</p>";
		echo PHP_VERSION;
		echo PHP_OS; // predefined constants

		define('constantName', 'constantValue');
		define('name', 'Attila Bakos');
		echo "<p><br>so: </p>" . name;

		echo "<hr><p>some words about single vs double quotation marks:
			<br>Values enclosed within single quotation marks will be treated LITERALLY. Whereas those within double quotation marks will be INTERPRETED.
			</p>";
		
		$varia = 'test';
		echo "varia is equal to $varia";
		echo "<br>";
		echo 'varia is equal to $varia';
		echo "<br>";
		echo '\$var is equal to $var \n';
		echo "<p>end</p>";
		?>
	</body>
	
	<footer>
	</footer>
</html>