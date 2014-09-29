<?php
class TestIs {

	private $test=0;

	function __construct() {
	  //     print "In BaseClass constructor\n";
	}
 
    // property declaration
    
    	// method declaration
    	public function DisplayVar() {
    		echo "hello";
    	}
	public function GetScore() {
		return (int)($_SESSION['score']);
    	}
	public function getr() {
		return $this->test;
	}		 
	public function setr($sessionName) {
		$this->test = $sessionName;
	}	

	public function des() {

 		$_SESSION['name'] = "";
        	session_destroy(); 
	}	
	

 
}
?>
