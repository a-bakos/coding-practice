<!doctype html>
<html>
	<body>
	<?php
		# this page defines and uses Pet, Cat, Dog classes
		
		# --- classes --- #
		
		/*
		Class Pet
		The class contains one attribute:
			name
		The class contains three methods:
			__contsruct()
			eat()
			sleep()
		*/
		class Pet {
			
			# declare the attributes:
			public $name;
			
			# constructor assigns the pet's name:
			function __construct($pet_name) {
				$this->name = $pet_name;
			}
			
			# pets can eat
			function eat() {
				echo "<p>$this->name is eating</p>";
			}
			
			# pets can sleep
			function sleep() {
				echo "<p>$this->name is sleeping</p>";
			}
		} # end of Pet class

		/*
		Cat class extends Pet
		Cat has an additional method: climb()
		*/
		class Cat extends Pet {
			function climb() {
				echo "<p>$this->name is climbing</p>";
			}
		} # end of cat class

		/*
		Dog class extends Pet
		Dog has an additional method: fetch()
		*/
		class Dog extends Pet {
			function fetch() {
				echo "<p>$this->name is fetching</p>";
			}
		} # end of Dog class
		
		# --- end of classes --- #
		
		# create a dog:
		$dog = new Dog('Buddy');
		
		# create a cat
		$cat = new Cat('Beauty');
		
		# feed them
		$dog->eat();
		$cat->eat();
		
		# nap time
		$dog->sleep();
		$cat->sleep();
		
		# do animal-specific things
		$dog->fetch();
		$cat->climb();
		
		# delete the objects:
		unset($dog, $cat);
?>
	</body>
</html>