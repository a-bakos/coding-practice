<?php
	class Rectangle {
	
		# declare the attributes
		public $width = 0;
		public $height = 0;
	
		# constructor
		function __construct($w = 0, $h = 0) {
			$this->width = $w;
			$this->height = $h;
		}
		
		/*
		# method to set the dimensions
		function setSize($w = 0, $h = 0) {
			$this->width = $w;
			$this->height = $h;
		}
		*/
		
		# method to calculate and return the area
		function getArea() {
			return ($this->width * $this->height);
		}
		
		# method to calculate and return the perimeter
		function getPerimeter() {
			return ( ($this->width * $this->height) * 2 );
		}
		
		# method to determine if the rectangle is also a square
		function isSquare() {
			if ($this->width == $this->height) {
				return true; // it's a square
			}
			else {
				return false; // not a square
			}
		}
		
		
		
		# destructor -- only to see what it's doing
		function __destruct() {
			require('diff.php');
		}

	} // end of rectangle class
?>