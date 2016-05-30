<?php

// Require the person class
require 'person.php';

$wayne = new Person('Wayne Bishop', 10);
$sam = new Person('Sam');
$michael = new Person('Michael Hunt', 42);	

// $wayne->introduceSelf(); 
// $sam->introduceSelf();
// $michael->introduceSelf();

$wayne->sayBirthday();


