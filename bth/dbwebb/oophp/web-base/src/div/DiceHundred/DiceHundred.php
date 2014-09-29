<?php
/**
 * Class for the Game Dice hundred.
 *
 */
class DiceHundred {

  /**
   * Properties
   *
   */
	private $faces;	
	private $last;
	private $name;
	private $hand2;
	
	private $startgame=false;
	private $sum=0;

	


  	/**
   	* Constructor
   	*
   	* @param int $faces the number of faces to use.
   	*/
  	public function __construct() {
 	  		//$_SESSION['hand'] = $hand;
		$hand2 = new CDiceHand(1);
	
	}


  	/**
	* Destructor
   	*
   	*/
	public function __destruct() {
    	//echo __METHOD__;
  	}


  	/**
   	* Roll the dice
   	*
   	*/
  	public function Rollw() {
	//	$hand2 = new CDiceHand(1);
	//	$hand2->Roll();
  	//	$_SESSION['hand2'] = $hand2;

	}
	/**
   	* Init the dice
   	*
   	*/
  	public function Roll() {
		if(isset($_SESSION['hand2'])) {
			$hand2 = ($_SESSION['hand2']);
		$hand2->Roll();
  		$_SESSION['hand2'] =$hand2;


}else{

		$hand2 = new CDiceHand(1);
		$hand2->Roll();
  		$_SESSION['hand2'] =$hand2;
	}}
	public function Rolled() {
		//if(isset($_SESSION['hand2']))
			//return $_SESSION['hand2'];
		return "hello";
	}
	public function GetNumber() {
		if(isset($_SESSION['hand2']))
			$bib = ($_SESSION['hand2']);
		//$sum+=$bib->GetTotal();
		//($_SESSION['sum'])= $sum;

	    return $bib->GetTotal();
  	}
	public function GetTotal() {
	//	if(isset($_SESSION['hand2']))
	//	$bib = $_SESSION['hand2'];
	//    return $bib->GetRoundTotal();
		//if(isset($_SESSION['sum']))
	//		return $_SESSION['sum'];
		$bib = ($_SESSION['hand2']);
		return $bib->GetRoundTotal();
  	}


  	/**
   	* Get the total from the last roll(s).
   	*
   	*/
  	public function GetStart() {
		return 	"<p>Skriv in ett namn, klicka på Start.</p>
		<form method='post' action='dice04.php'>
    		Namn: <input type='text' name='name' class='diceinput'>
		<input type='submit' value='Start' class='dicebutton'>
    		</form>";
  	}
	public function SetName($name) {
		$this->name = $name;
		$_SESSION['name'] = $name;
	}
	public function GetName() {
		if(isset($_SESSION['name']))
			return $_SESSION['name'];
	}
	public function SetStartGame($startGame) {
		$this->startGame = $startGame;
		$_SESSION['startGame'] = $startGame;
	}
	public function GetStartGame() {
		if(isset($_SESSION['startGame']))
			return $_SESSION['startGame'];
	}
	public function GetImage() {
		if(isset($_SESSION['hand2']))
		$bib = $_SESSION['hand2'];
		return $bib->GetRollsAsImageList();

	}
	



}

