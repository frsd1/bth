<?php

include(__DIR__."/CArName.php");

class CArManager extends CArName {

//	private $name;
	private $carName;// = new CArName();
	public function __construct($name="bob"){
//		$this->name = $name;
//		$carName = new CArName();
		parent::__construct($name);
	}

	public function setName($name) {
		$this->name = $name;
    	//	$carName->setName($name);
	//	$_SESSION['carName'] = $carName;
  	}	
  	public function getName() {
	//	$carName = $_SESSION['carName'];
    //		return $carName->getName();
		return parent::geName();
  	}
	public function addToArray() {
		echo '/n';
		echo '---------------';
		echo '--Test object--';

$array = array('Buck','Jerry','Tomas');

$arrayObject = new ArrayObject($array);
// Add new element
$arrayObject->append('Tweety');

// We are getting the iterator of the object
$iterator = $arrayObject->getIterator();

// Simple while loop
while ($iterator->valid()) {
    echo $iterator->current() . "\n";
    $iterator->next();
}
	$_SESSION['bu']= $arrayObject;
	}
	public function bib() {
	echo 'vvv';
	$bu = $_SESSION['bu'];
	$bu->append('tttt');
// We are getting the iterator of the object
$iterator = $bu->getIterator();

// Simple while loop
while ($iterator->valid()) {
    echo $iterator->current() . "\n";
    $iterator->next();
}



	}
}
