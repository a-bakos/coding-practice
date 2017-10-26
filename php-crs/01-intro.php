<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
	<p>
	<?php
	$names = array('David' => 50, 'Roger' => 20, 'Peter' => 35);
	$names['Thomas'] = 30;
	?>
	Thomas is <?php echo $names['Thomas']; ?> years old,
	whereas David is <?php echo $names['David']; ?>.
	</p>
	<?php print_r($names); ?>

	<p>
	<?php
	$cities = array(
		'Szeged' => array('Country' => 'Hungary', 'County' => 'Csongrad', 'Population' => 300000),
		'Plymouth' => array('Country' => 'UK', 'County' => 'Devon', 'Population' => 200000)
	);
	?>
	Szeged is located in <?php echo $cities['Szeged']['Country']; ?>.
	</p>

	<h3>
	<?php
	$number = 10;

	while ($number >= 0):
		echo $number . "<br/>";
		$number--;
	endwhile;
	?>
	</h3>
</body>
</html>
