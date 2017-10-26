<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>For loop</h1>
	<p>
	<?php
	for ($i=0; $i <= 10 ; $i++) {
		echo "{$i}";
		if($i != 10) {
			echo ", ";
		}
	}
	?>
	</p>

	<hr>
	<h1>Arrays</h1>
	<p>
	<?php
	$names = array('David' => 50, 'Roger' => 20, 'Peter' => 35);
	$names['Thomas'] = 30;
	?>
	Thomas is <?php echo $names['Thomas']; ?> years old,
	whereas David is <?php echo $names['David']; ?>.
	</p>
	<?php print_r($names); ?>

	<hr>
	<h1>Multi dimensional array</h1>
	<p>
	<?php
	$cities = array(
		'Szeged' => array('Country' => 'Hungary', 'County' => 'Csongrad', 'Population' => 300000),
		'Plymouth' => array('Country' => 'UK', 'County' => 'Devon', 'Population' => 200000)
	);
	?>
	Szeged is located in <?php echo $cities['Szeged']['Country']; ?>.
	</p>

	<hr>
	<h1>While loop</h1>
	<h3>
	<?php
	$number = 10;

	while ($number >= 0):
		echo $number . "<br/>";
		$number--;
	endwhile;
	?>
	</h3>

	<hr>
	<h1>For loop</h1>
	<?php
	for ($numbert = 2; $numbert <= 20; $numbert = $numbert + 2) {
		echo $numbert . "<br />";
	}
	?>

	<hr>
	<h1>Foreach</h1>
	<?php
	$namearray = array('Sam','Jon','Pete');
	$counter = 1;
	foreach ($namearray as $nev) {
		echo "name " . $counter . " is " . 	$nev . "<br>";
		$counter++;
	}

	$namearray2 = array('Tom' => 40,'Bill' => 30,'Ben' => 16);

	foreach ($namearray2 as $key => $value) {
		echo $key . " is " . $value . '<br>';
	}
	?>

	<hr>
	<h1>Functions</h1>
	<?php
	function add($arg1, $arg2) {
		$result = $arg1 + $arg2;
		return $result;
	}

	echo add(30, 40);
	?>
	<hr>
	<h1>Functions 2 - func_get_args</h1>
	<?php
	function sum_it() {
		$total = 0;
		foreach (func_get_args() as $arg) {
			# func_get_args returns an array
			$total = $total + (int)$arg;
		}
		return $total;
	}

	echo sum_it(1, 2, 3, 4, 5);
	?>

	<hr>
	<h2>Functions 3 - func_get_arg</h2>
	<?php
	function append($initial) {
		$result = '';
		return func_get_arg(0); # func_get_arg takes the key of the argument
	}

	echo append('Aba', 'kos');
	?>

	<hr>
	<h2>Functions 4 - func_get_args</h2>
	<?php
	function append2($initial) {
		$append2_result = func_get_arg(0);
		foreach (func_get_args() as $key => $value) {
			if ($key >= 1) {
				$append2_result .= ' ' . $value;
			}
		}
		return $append2_result;
	}

	echo append2('Aba', 'kos', 'tilla');
	?>

	<hr>
	<h2>Number format</h2>
	<?php
	$largeNumber = 254345234.1244;
	echo 'I have &pound;' . number_format($largeNumber, 3, ',', ' ');
	?>
</body>
</html>
