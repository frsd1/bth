
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
class CGameManager {

	/**
 	 * Properties
   *
   */
  private $name;
  private $name1;
  private $name2;
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
		if(!isset($_SESSION['dice'])) {
			session_name('dice');
			session_start();
		}
		if(!isset($_SESSION['dice1'])) {
			session_name('dice1');
		}
		if(!isset($_SESSION['dice2'])) {
			session_name('dice2');
		}
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
	public function stop() {
		return $this->GetStop(); 
	}
	/**
   *
	 * @return Store the total roll of dice
	 */	
	public function store() {
		return $this->GetStoredInfo() . $this->GetCheckNumber(); 
	}
	/**
   *
	 * @return Roll of dice
	 */	
	public function rollDice() {
		return $this->GetRollInfo() . $this->GetCheckNumber();
	}
	/**
   *
	 * @return result, name and menu
	 */		
	public function output() {
		return  $this->GetNameInput() .$this->GetRollDice() . $this->GetStartMenu();
	}
	/**
   	* Set the Roll of the dice
   	* 
   	*/
  	public function setStored() {
		
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
	public function getStored() {
		$getTotal = ($_SESSION['dice']);
		return $getTotal->GetRoundStored();
  }
	/**
   	* Set exit game
   	* 
   	*/
	public function setEnd() {		
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
	public function getEnd() {
		$getTotal = ($_SESSION['dice']);
		return $getTotal->GetRoundStored();
	}
	/**
   	* Init the dice
   	*
   	*/
	public function roll() {
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
	public function getNumber() {
		if(isset($_SESSION['dice']))
			$getNumber = ($_SESSION['dice']);
		return $getNumber->GetTotal();
  }
	/*
   * Set number
	 * 
	 */
	public function setTotal() {
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
	public function getTotal() {
		$getTotal = ($_SESSION['dice']);
		return $getTotal->GetRoundTotal();
  	}
 	/**
   * Get the start information for the application
   *
   */
  public function getStart() {
/*
		return 	"<div id='start'><p>Skriv in ett namn, klicka på Spela.</p>
		<form method='post' action='dicehundred.php' >
    		Namn: <input type='text' name='name' class='diceinput' >
		<input type='submit' value='Spela'  class='dicebutton'>
    		</form></div>";
*/
		$uIDiceHundred = new CUIDiceHundred();
		return $uIDiceHundred->getStartOnePlayer();
  }

	/**
   	* Get information about roll(s) and store a sum.
   	*
   	*/
  public function getStop() {
		session_destroy();
		$this->SetStartGame(False);
		return "<br>Du tryckte på Stop. Vill du spela igen?";
  }
	/**
   	* Get information about roll(s) and store a sum.
   	*
   	*/
  public function getEndInfo() {
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
  public function getStoredInfo() {
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
  public function getRollInfo() {
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
  public function getCheckNumber() {
		$number = $this->GetNumber();
		$totalNumber = $this->GetTotal();
		$storedNumber = $this->GetStored();
		if($number==1) {
			$this->GetEndInfo();
//			return "<b>". $this->GetName()."</b> Du fick en etta! Det är bara att börja om.<br>";		
		} 
		if($storedNumber+$totalNumber==100) {
			return "<br>Hurra Hurra Du fick hundra!!!!";
		}
		if($storedNumber+$totalNumber>100) {
			return "<br>Hurra Hurra Du fick över hundra";
		} else {
			return "Namn: <b>". $this->GetName1()."sdsf". $this->GetName2()."</b><br>";
		}
	}
	public function getRollDice() {
		if($this->GetStartGame()) {		
			return "<p><a href='?roll'>Ett nytt kast!</a>&nbsp;&nbsp;<a href='?store'>Spara poäng!</a>&nbsp;&nbsp;<a href='?stop'>Stop!</a></p></div>";
		}
	}

  public function getNameInput() {
        if(isset($_POST['name'])) {
            $name=$_POST['name'];
						if($this->testName($name)) {
                $this->SetName($name);
                $this->SetStartGame(true);
       //        return "<div id='start'>Namn: <b>". $this->GetName()."</b>". "<p><a href='?roll'>Kasta tärningen!</a></p>";
            } 
						else {
				    	session_destroy();
              return "Namnet är för långt! Eller inget alls, max 10 tecken.";            
						}
        }
  			if(isset($_POST['name1']) && isset($_POST['name2'])) {
            $name1=$_POST['name1'];
						$name2=$_POST['name2'];
						if($this->testName($name1) && $this->testName($name2)) {
                $this->SetName($name1,$name2);
                $this->SetStartGame(true);
            //    return "<div id='start'>Namn: <b>". $this->GetName1()."-pip-". $this->GetName1(). "</b>". "<p><a href='?roll'>Kasta tärningen!</a></p>";
            } 
						else {
				    	session_destroy();
              return "Namnet är för långt! Eller inget alls, max 10 tecken.";            
						}
        } 
    }
	/**
   * Test nameformat
   *
   */
	public function testName($name) {
		if(strlen($name)>10) {
			return false;
		} else if($name=="") {
			return false;
		} else {
			return true;		
		}
	}
	/**
   * Set startmenu
   *
   */
	public function getStartMenu() {
		if(!($this->GetStartGame())) {
			return $this->GetStart();
		}
	}
	/**
   	* Set the Roll of the dice
   	* 
   	*/
  public function setRollOFdice() {
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
  public function getRollOFdice() {
		$getTotal = ($_SESSION['dice']);
		return $getTotal->GetRollOFdice();
	}
	public function setName($name1,$name2) {
		$diceHand1 = new CDiceHundred(1);
		$diceHand2 = new CDiceHundred(1);
		$diceHand1->SetName($name1);
		$diceHand2->SetName($name2);
		$_SESSION['dice1'] = $diceHand1;	
		$_SESSION['dice2'] = $diceHand2;	
	}
/*
	public function setName($name) {
		$diceHand = new CDiceHundred(1);
		$diceHand->SetName($name);
		$_SESSION['dice'] = $diceHand;	
	}
*/
	public function getName() {
		$diceHand = new CDiceHundred(1);
		$diceHand = ($_SESSION['dice']);
		return $diceHand->GetName();
	}
	public function getName1() {
		$diceHand = new CDiceHundred(1);
//		$diceHand = ($_SESSION['dice1']);
//		return $diceHand->GetName();
		return "qq";
	}
	public function getName2() {
    $diceHand = new CDiceHundred(1);
		//$diceHand = ($_SESSION['dice2']);
		//return $diceHand->GetName();
		return "11";
	}
	public function setStartGame($startGame) {
		if(isset($_SESSION['dice'])) 
			$diceSession =$_SESSION['dice'];
		else
			$diceSession = new CDiceHundred(1);	
		
		$diceSession->SetStartGame($startGame);
		$_SESSION['dice'] = $diceSession;	
	}
	public function getStartGame() {
		if(isset($_SESSION['dice']))
			$diceSession = ($_SESSION['dice']);
		else
			$diceSession = new CDiceHundred(1);	
		
		return $diceSession->GetStartGame();
	}
	public function getImage() {
		if(isset($_SESSION['dice']))
			$bib = $_SESSION['dice'];
		return $bib->GetRollsAsImageList();
	}
}

