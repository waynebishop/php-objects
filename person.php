<?php

class Person {

	private $dob;
	private $name = '';
	private $weight;
	private $height;
	private $gender;
	public $nickname = '';
	private $stomachLevel = 0;
	private $hasShoes = false;

	// Function that runs when you create an instance of this class. All required eg name first then optional eg weight 
	public function __construct($newName, $newWeight=0) {

		// Save the new values up inside the properties
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
		
		$day = date('jS', $birthdateAsTime);

		$monthYear = date('F Y', $birthdateAsTime);


		$newFormat = date('jS F Y', $birthdateAsTime);

		echo '<p>';
		echo 'My birthday is on the '.$day.' of '.$monthYear; 
		echo '</p>';
	}

	public function introduceSelf()	{

		echo '<p>';
		echo 'Hello, my name is '.$this->name;
		echo '</p>';

	}
}
