<?php

class Pet {
	protected $name;
	private static $_count = 0;

	function __construct( $pet_name ) {
		$this->name = $pet_name;
		self::$_count++;
	}

	function __destruct() {
		self::$_count--;
	}

	public static function getCount() {
		return self::$_count;
	}
} // end of Pet class


class Cat extends Pet {}
class Dog extends Pet {}

$dog = new Dog( 'Old Yeller' );
echo 'After creating a Dog, I now have ' . Pet::getCount() . ' pet(s)';

$cat = new Cat( 'Cathryn' );
echo 'After creating a Cat, I now have ' . Pet::getCount() . ' pet(s)';

unset( $dog );
echo 'After tragedy strikes, I now have ' . Pet::getCount() . ' pet(s)';

// if you want to have overridden constructors and destructors in the derived
// classses, you would need them to call the parent Pet constructor and
// destructor in order to properly manage the count
// parent::__construct()
// parent::__destruct()
