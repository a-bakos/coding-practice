<!doctype html>
<html>
	<body>

	<?php
		# include the class definition
		# require('Rectangle.php');
		# or we can use autoload
		# which is a much better option

		# autoload function's goal is to include
		# the corresponding file:
		function __autoload($class) {
			require($class . '.php');
		}
		
		# define the necessary variables
		$width = 160;
		$height = 75;
		
		# create a new object
		$rect = new Rectangle($width, $height);
		
		# print the area
		echo "area: " . $rect->getArea();
	
		# print the perimeter
		echo "perimeter: " . $rect->getPerimeter();
		
		# see if it's a square
		if ($rect->isSquare()) {
			echo "square too";
		}
		else {
			echo "nope";
		}
		
		# delete the object
		unset($rect);
		
		# we can include random scripts the following way:
		$script = array();
			$script[0] = 'diff';
			$script[1] = 'doff';
			$script[2] = 'duff';

		$random_script = $script[shuffle($script)] . '.php';

		echo "<h2>and now...</h2>";
		include($random_script);
	?>
	</body>
</html>