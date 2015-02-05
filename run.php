<?php
// Lecture 2

// Example 1

	class Car{
		public $make;
		public $model;
		public $color;
	
		function __construct($make,$model,$color) {
			$this->make = $make;
			$this->model = $model;
			$this->color = $color;
		}

		function getCar() {
			return "{$this->make}" . "{$this->color}";
		}
	}

	class Dog{
		public $name;
		public $lastname;
		public $bread;
	
		function __construct($name,$lastname,$bread) {
			$this->name = $name;
			$this->lastname = $lastname;
			$this->bread = $bread;
		}

		function getDog("Rocky", "Nortikyan","Armenian Gampr") {
			return $this->name . $this->Bread;
		}
	}

	class Tree{
		public $type;
		public $color;
		public $origin;
	
		function __construct($type,$color,$origin) {
			$this­>type = $type;
			$this­>color = $color;
			$this­>origin = $origin;
		}

		function getTree("Orange Tree", "Orange", "Mexico") {
			return "{$this->type}" . "{$this->type}";
		}
	}

	// Example 2

		$car1 = new Car("Mercedes-Benz", "S500", "Black");
		print Car 1:{$car1->getMake()};

		$dog1 = new Dog("Rocky", "Nortikyan", "Gampr");
		print bread 1:{$dog1->getBread()};

		$tree1 = new Tree("Bonzai", "Green", "Japan");
		print tree 1:{$tree1->getOrigin()};

// Lecture 3 ------------------------------------------------
// Exam
	$Var1=359;
	$Var2="Music";
	$var3="LG G2";

	if (is_integer($Var2)) {
		echo "$Var2 is an integer <br>";
	}
	else{
		echo "$Var2 is not an integer <br>";
	}

	$Var4=47;
	$Var5=23;
	$var6="JBL";

	if (is_string($var6)) {
		echo "$var6 is a string!!! <br>";
	}

	else {
		echo "$var6 is not a string! <br>";
	}

	$Var7=1.5;
	$Var8="Aram Asatryan";
	$var9=50;

	if (is_double($Var7)) 
{		echo "$Var7 is a double!!! <br>";
	}

	else{
		echo "$Var7 is not a dzouble!!! <br>";
	}

// Lecture 4 ---------------------------------------------------------------------------
		// class Phone {
		// 	public $make;
		// 	public $model;
		// 	public $color;
		// 	public $os;
		// 	public $charger;
		// 	public $screenSize;

		// 	function __construct($make, $model, $color, $os, $charger, $screenSize){
		// 		$this->make = $make;
		// 		$this->model = $model;
		// 		$this->color = $color;
		// 		$this->os = $os;
		// 		$this->charger  =$charger;
		// 		$this->screenSize = $screenSize;
		// 	}

		// 	function getPhone(){
				
		// 	}
		// }
// --------------------------------------------------------------------------------------
// Lecture 5 Part 2

		class Animal {
			public $firstName;
			public $lastName;
			public $scientificName;
			public $gender;
			public $weight;

			function __construct($scientificName,$firstName,$lastName,$gender,$weight){
				$this->scientificName=$scientificName;
				$this->firstName = $firstName;
				$this->lastName = $lastName;
				$this->gender = $gender;
				$this->weight = $weight;
			}

			function getName(){
				return "This is my name, " . $this->firstName.
				"and lastname, " . $this->lastName .
				" and this is my scientificName, " . $this->scientificName . " .";

			}

		}

		class Cat extends Animal{
			function __construct($scientificName,$firstName,$lastName,$gender,$weight,$meow){
				parent:: __construct($scientificName,$firstName,$lastName,$gender,$weight);
			$this->meow = $meow;
			}
			function greet(){
				return $this->meow;
			}
		}

		class Dog extends Animal {
			function __construct($scientificName,$firstName,$lastName,$gender,$weight,$bark){
				parent::__construct($scientificName,$firstName,$lastName,$gender,$weight);
			$this->bark=$bark;
			}

			function hello(){
				return $this->bark;
			}			
		}

		$cat = new Cat("Cat", "Mellow", "Yellow", "male", 15, true);
		print "Animal 1 is a" . $cat->getName();

// Example 2

		class Phone {
			public $make;
			public $model;
			public $color;
			public $megapixel;
			public $os;


			function __construct($make,$model,$color,$os){
				$this->make = $make;
				$this->model = $model;
				$this->color = $color;
				$this->os = $os;

			}

			function getPhone(){
				return $this->make. " " . $this->model .
				" and the color of the phone is " . $this->color . ".";
			}

		}

		class iPhone extends Phone {
			function __construct($make, $model, $color, $os, $siri){
				parent:: __construct($make, $model,$color, $os);
			$this->siri = $siri;
		}

		function getPhone(){
			echo "<br>";
			return $this->siri;
			}
	    }

	    class Nexus extends Phone{
	    	function __construct($make, $model, $color,$os, $google){
	    		parent:: __construct($make, $model, $color,$os);
	    	$this->google = $google;
	    	}

	    	function getPhone(){
	    		echo "<br>";
	    		return $this->google;
	    	}
	    }

	    $phone1 = new Phone(" Apple", " iPhone", " black", "iOs", "siri" );
	    print "My phone is an" . $phone1->getPhone();