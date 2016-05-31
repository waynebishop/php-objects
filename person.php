<?php

class Person {
	// Properties (attributes)
	protected $dob;
	protected $name = '';
	protected $weight;
	protected $height;
	protected $gender;
	public $nickname = '';
	protected $stomachLevel = 0;
	protected $hasShoes = false;

	// Function that runs when you create an instance of this class. All required eg name first then optional eg weight 
	public function __construct($newName, $newWeight=0) {

		// Save the new values up inside the properties ie $this-> = $newName sets $name above as value of $newName as parsed by public function __construct.... 
		$this->name = $newName;
		$this->weight = $newWeight;
		$this->dob = date('Y-m-d'); 

	}

	public function eat() {

	}

	public function walk()	{

	}

	public function sayBirthday() {
		
		// Convert birthday into somethingthat you would say
		// Convert the date into a timestamp
		$birthdateAsTime = strtotime( $this->dob );

		// gett he day (21st etc)		
		$day = date('jS', $birthdateAsTime);

		// get the month and year (January 2001 etc) 
		$monthYear = date('F Y', $birthdateAsTime);

		// Show in browser
		// Note how using " " PHP can detect variables within the string and {} are optional
		echo '<p>';
		echo 'That\'s awsome'
		echo "My birthday is on the {$day} of {$monthYear}";
		echo '</p>';
	}

	public function introduceSelf()	{

		echo '<p>';
		echo 'Hello, my name is '.$this->name;
		echo '</p>';

	}
}
