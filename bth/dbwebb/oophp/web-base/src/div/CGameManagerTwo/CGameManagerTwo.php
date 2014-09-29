<?php
/**
 * @Filename: GameManager.php
 * @Summery:This class acts as a manager between the user interface
 *  and the class library.
 *
 * @course module 2 - Object oriented programming in php 
 * @author Fredrik Stenberg, frsd14@student.bth.se
 * @link https://github.com/frsd1/bth/tree/master/bth/dbwebb/oophp
 */

/**
 * GameManager Class.
 *
 */
class CGameManagerTwo {

  	/**
	 * Properties
   	 *
   	 */
	private $name;
	private $diceHand;
	private $startgame=false;
	private $sum=0;
	private $rollOFdice=0;
	private $number;
	private $getStored;
  	/**
   	* Constructor 
   	* Starting a session and instantiate a class, CDiceHand, to the object $diceHand. 
   	*/
  	public function __construct() {
		session_start();
	}
  	/**
	* Destructor
   	*
   	*/
	public function __destruct() {
    	//echo __METHOD__;
  	}
	/**
   	 *
	 * @return Dice hundred stoped
	 */	
	public function Stop() {
		return $this->GetStop(); 
	}
	/**
   	 *
	 * @return Store the total roll of dice
	 */	
	public function Store() {
		return $this->GetStoredInfo() . $this->GetCheckNumber(); 
	}
	/**
   	 *
	 * @return Roll of dice
	 */	
	public function RollDice() {
		return $this->GetRollInfo() . $this->GetCheckNumber();
	}
	/**
   	 *
	 * @return Roll of dice
	 */	
	public function RollDice1() {
		return $this->GetRollInfo() . $this->GetCheckNumber();
	}
	/**
   	 *
	 * @return Roll of dice
	 */	
	public function RollDice2() {
		return $this->GetRollInfo() . $this->GetCheckNumber();
	}
	/**
   	 *
	 * @return result, name and menu
	 */		
	public function Output() {
		return $this->GetRollDice() . $this->GetNameInput() . $this->GetStartMenu();
	}
	/**
   	* Set the Roll of the dice
   	* 
   	*/
  	public function SetStored() {
		
		if(isset($_SESSION['dice'])) {
			$getStored =$_SESSION['dice'];	
			$getStored->SetRoundStored();
			$_SESSION['dice'] = $getStored;	
		}
	}
	/**
   	* Get the Roll of the dice
   	* @return stored value
   	*/
  	public function GetStored() {
	$getTotal = ($_SESSION['dice']);
		return $getTotal->GetRoundStored();
  	}
	/**
   	* Set exit game
   	* 
   	*/
  	public function SetEnd() {
		
		if(isset($_SESSION['dice'])) {
			$getStored =$_SESSION['dice'];	
			$getStored->SetEnd();
			$_SESSION['dice'] = $getStored;	
		}
	}
	/**
   	* Get exit game
   	* @return total stored
   	*/
  	public function GetEnd() {
	$getTotal = ($_SESSION['dice']);
		return $getTotal->GetRoundStored();
  	}
	/**
   	* Init the dice
   	*
   	*/
  	public function Roll() {
		if(isset($_SESSION['dice'])) {
			$diceHand = ($_SESSION['dice']);
			$diceHand->Roll();
  			$_SESSION['dice'] = $diceHand;
		}else{
			$diceHand = new CDiceHundred(1);
			$diceHand->Roll();
	  		$_SESSION['dice'] = $diceHand;
		}
		$this->SetRollOFDice();
	}
	/*
   	 * Get number
	 * @return number
	 */

	public function GetNumber() {
		if(isset($_SESSION['dice']))
			$getNumber = ($_SESSION['dice']);
	    return $getNumber->GetTotal();
  	}
	/*
   	 * Set number
	 * 
	 */
	public function SetTotal() {
		if(isset($_SESSION['dice'])) {
			$getStored =$_SESSION['dice'];	
			$getStored->InitRound();
			$_SESSION['dice'] = $getStored;	
		}
  	}
	/*
   	 * Get number
	 * 
	 */
	public function GetTotal() {
		$getTotal = ($_SESSION['dice']);
		return $getTotal->GetRoundTotal();
  	}
  	/**
   	* Get the start information for the application
   	*
   	*/
  	public function GetStart() {
		return 	"<div id='start'><p>Skriv in ett namn, klicka på Spela.</p>
		<form method='post' action='dicehundredtwo.php' >
    		Namn: <input type='text' name='name' class='diceinput' >
		<input type='submit' value='Spela'  class='dicebutton'>
    		</form><button id='button' onclick='showhide(2)'>Två spelare</button></div><div id='start2'><p>Skriv in två namn, klicka på Spela.</p>
		<form method='post' action='dicehundredtwo.php' >
    		Namn: <input type='text' name='name1' class='diceinput' >
    		<br>Namn: <input type='text' name='name2' class='diceinput' >
		<input type='submit' value='Spela'  class='dicebutton'>
    		</form></div>";
  	}
	/**
   	* Get information about roll(s) and store a sum.
   	*
   	*/
  	public function GetStop() {
		session_destroy();
		$this->SetStartGame(False);
		return "<br>Du tryckte på Stop. Vill du spela igen?";
  	}
	/**
   	* Get information about roll(s) and store a sum.
   	*
   	*/
  	public function GetEndInfo() {
		$this->SetEnd();
		return 	"<div id='game'><br>Tärningen detta kast: " . $this->GetNumber().
			"<br>Summan i denna spelrundan är: ". $this->GetTotal(). 
			"<br>Sparade värde: ". $this->GetStored(). 
			"<br>Antalet kast: ". (($this->GetRollOFdice())-1)."<br>";
  	}
	/**
   	* Get information about roll(s) and store a sum.
   	*
   	*/
  	public function GetStoredInfo() {
		$this->SetStored();
		return 	"<div id='game'><br>Tärningen detta kast: " . $this->GetNumber().
			"<br>Summan i denna spelrundan är: ". $this->GetTotal(). 
			"<br>Sparade värde: ". $this->GetStored(). 
			"<br>Antalet kast: ". $this->GetRollOFdice()."<br>";
  	}
	/**
   	* Get information about roll(s).
   	*
   	*/
  	public function GetRollInfo() {
		$this->Roll();
		return 	"<div id='game'>" . $this->GetImage() . "<br>Tärningen detta kast: " . 
		$this->GetNumber() . "<br>Summan i denna spelrundan är: " . $this->GetTotal() . 
		"<br>Sparade värde: ". $this->GetStored(). 
		"<br>Antalet kast: ". $this->GetRollOFdice()."<br>";
  	}
	/**
   	* Get information about roll(s).
   	*
   	*/  	
  	public function GetCheckNumber() {
		$number = $this->GetNumber();
		if($number==1) {
			$this->GetEndInfo();
			return "<b>". $this->GetNamee()."</b> Du fick en etta! Det är bara att börja om.<br>";		
		} 

		if($number==100) {
			session_destroy();
			$this->SetStartGame(False);
			return "<br>Hurra Hurra Du fick hundra!(100)";
		}
		if($number>30) {
			session_destroy();
			$this->SetStartGame(False);
			return "dddNamn: <b>". $this->GetNamee()."</b><br>";
		}
		else {
			return "Namn: <b>". $this->GetNamee()."</b><br>";
		}
	}
	public function GetRollDice() {
			if($this->GetStartGame()) {		
		return "<p><a href='?roll'>Ett nytt kast!</a>&nbsp;&nbsp;<a href='?store'>Spara poäng!</a>&nbsp;&nbsp;<a href='?stop'>Stop!</a></p></div>";
		}
	}	
	public function GetNameInput() {

		if(isset($_POST['name'])) {
			$name=$_POST['name'];
			if(strlen($name)>10) {
				session_destroy();
				return "Namnet är för långt!";			
			} else if($name=="") {
				session_destroy();
				return "Du måste Skriva ett namn!";
			} else {
		
				$this->SetNamee($name);
				$this->SetStartGame(True);
				return "<div id='start'>Namn: <b>". $this->GetNamee()."</b>". "<p><a href='?roll'>Kasta tärningen!</a></p>";
			}
		} 
	}
	public function GetStartMenu() {
		if(!($this->GetStartGame())) {
			return $this->GetStart();
		}
	}
	/**
   	* Set the Roll of the dice
   	* 
   	*/
  	public function SetRollOFdice() {
		if(isset($_SESSION['dice'])) {
			$diceSession =$_SESSION['dice'];	
		
		$diceSession->SetRollOFdice();
		$_SESSION['dice'] = $diceSession;
		}	
	}
	/**
   	* Get the Roll of the dice
   	* 
   	*/
  	public function GetRollOFdice() {
		$getTotal = ($_SESSION['dice']);
		return $getTotal->GetRollOFdice();
	}
	public function SetNamee($name) {
			$diceHand = new CDiceHundred(1);
			$diceHand->SetName($name);
			$_SESSION['dice'] = $diceHand;	
	}

	public function GetNamee() {
		$diceHand = ($_SESSION['dice']);
		return $diceHand->GetName();
	}

	public function SetStartGame($startGame) {
		if(isset($_SESSION['dice'])) 
			$diceSession =$_SESSION['dice'];
		else
			$diceSession = new CDiceHundred(1);	
		
		$diceSession->SetStartGame($startGame);
		$_SESSION['dice'] = $diceSession;	
	}
	public function GetStartGame() {
		if(isset($_SESSION['dice']))
			$diceSession = ($_SESSION['dice']);
		else
			$diceSession = new CDiceHundred(1);	
		
		return $diceSession->GetStartGame();
	}
	public function GetImage() {
		if(isset($_SESSION['dice']))
		$bib = $_SESSION['dice'];
		return $bib->GetRollsAsImageList();
	}
}

