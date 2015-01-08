<?php 
//Example 1//

	class Cars{
		//body
		//body
		//body
	}

	class Clothes{
		//body
		//body
		//body
	}

	class Speakers{
		//body
		//body
		//body
	}

//Example 2

	$phone1 = newPhone();
	$phone2 = newPhone();

	$tablet1 =  newTablet()
	$tablet2 = newTablet()

	$cola1 = newCola();
	$cola2 = newCola();

//Example 3

	class Phone{
		public $brand = "LG";
		public $color = "Black";
		public $type = "LG G2";
		public $OS = "Android";
	}

	class Car{
		public $brand = "Mercedes - Benz";
		public $color = "White";
		public $Engine = "V12";
		public $Maker = "Germany";
	}

	class Shirt{
		public $brand = "Polo";
		public $color = "Black";
		public $Material = "Cotton";
		public $Type = "Collar";
	}

// Example 4

		$phone1 = new Phone();
		print $phone>brand;
		// Default brand

		$tablet = new Tablet();
		print $tablet>model;
		// Default model

		$speaker = new Speaker();
		print $speaker>color;
		// Default color

//Example 5

		public function Method( $argument1, $argument2) {
		// body
		// body
		// body
	}

	public function Method2( $argument1, $argument2) {
		// body
		// body
		// body
	}

	public function Method3( $argument1, $argument2) {
		// body
		// body
		// body
	}

// ------------------------------------------------------------------
// Lecture 2

// Example 1

	class Car{
		public make = $make;
		public model = $model;
		public color = $color;
	
		function__construct($make,$model,$color) {
			$this­>make = $make;
			$this­>model = $model;
			$this­>color = $color;
		}

		function getCar() {
			return "{$this->Make}" . "{$this->Color}";
		}
	}

	class Dog{
		public name = $name;
		public lastname = $lastname;
		public bread = $bread;
	
		function__construct($name,$lastname,$bread) {
			$this­>name = $name;
			$this­>lastname = $lastname;
			$this­>bread = $bread;
		}

		function getDog() {
			return "{$this->Name}" . "{$this->Bread}";
		}
	}

	class Tree{
		public type = $type;
		public color = $color;
		public origin = $origin;
	
		function__construct($type,$color,$origin) {
			$this­>type = $type;
			$this­>color = $color;
			$this­>origin = $origin;
		}

		function getTree() {
			return "{$this->type}" . "{$this->type}";
		}
	}

	// Example 2

		$car1 = new Car("Mercedes-Benz", "S500", "Black");
		print "Car 1:{$car1->getMake()}";

		$dog1 = new Dog("Rocky", "Nortikyan", "Gampr");
		print "bread 1:{$dog1->getBread()}";

		$tree1 = new Tree("Bonzai", "Green", "Japan");
		print "tree 1:{$tree1->getOrigin()}";

		


