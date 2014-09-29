<?php
/**
 * A hand of dices, with graphical representation, to roll.
 *
 */
class CDiceHundred {

	/**
	 * Properties
   	 *
   	 */
	private $dices;
	private $numDices;
  	private $sum;
  	private $sumRound;
  	private $sumStored;
  	private $name;
  	private $rollOFdice=1;
  	private $startGame=false;
  	/**
   	 * Constructor
  	 *
  	 * @param int $numDices the number of dices in the hand, defaults to six dices. 
  	 */
  	public function __construct($numDices = 5) {
    		for($i=0; $i < $numDices; $i++) {
      			$this->dices[] = new CDiceImage();
    		}
    		$this->numDices = $numDices;
    		$this->sum = 0;
    		$this->sumRound = 0;
  	}
  	/**
   	 * Roll all dices in the hand.
  	 *
   	 */
  	public function Roll() {
    		$this->sum = 0;
    		for($i=0; $i < $this->numDices; $i++) {
      			$roll = $this->dices[$i]->Roll(1);
      			$this->sum += $roll;
      			$this->sumRound += $roll;
    		}
  	}
  	/**
   	 * Get the sum of the last roll.
   	 *
   	 * @return int as a sum of the last roll, or 0 if no roll has been made.
   	 */
  	public function GetTotal() {
    		return $this->sum;
  	}
  	/**
  	 * Init the round.
  	 *
   	*/
  	public function InitRound() {
    		$this->sumRound = 0;
  	}
  	/**
  	 * Get the accumulated sum of the round.
  	 *
  	 * @return int as a sum of the round, or 0 if no roll has been made.
   	*/
  	public function SetRoundTotal() {
	//$sum = 0;
  	}
  	/**
   	 * Get the accumulated sum of the round.
   	 *
   	 * @return int as a sum of the round, or 0 if no roll has been made.
   	 */
  	public function GetRoundTotal() {
		$sum = $this->sumRound;
    		return $sum;
  	}
  	/**
  	 * Get the rolls as a serie of images.
  	 *
  	 * @return string as the html representation of the last roll.
  	 */
  	public function GetRollsAsImageList() {
    		$html = "<ul class='dice'>";
    		foreach($this->dices as $dice) {
      			$val = $dice->GetLastRoll();
      			$html .= "<li class='dice-{$val}'></li>";
    		}
    		$html .= "</ul>";
    		return $html;
  	}
  	/**
  	 * Get the accumulated sum of the round.
  	 *
  	 * @return int as a sum of the round, or 0 if no roll has been made.
   	*/
  	public function SetRoundStored() {
		$setRoundStored = $this->sumStored;
		$setRoundSum= $this->sumRound;
		$this->sumStored = $setRoundStored + $setRoundSum;
		$this->InitRound();
  	}
  	/**
  	 * Get the accumulated sum of the round.
  	 *
  	 * @return int as a sum of the round, or 0 if no roll has been made.
   	*/
  	public function GetEnd() {
		$sum = $this->sumStored;
    		return $sum;
  	}
	/**
	 * Get the accumulated sum of the round.
  	 *
  	 * @return int as a sum of the round, or 0 if no roll has been made.
  	 */
  	public function SetEnd() {
		$this->InitRound();
  	}
  	/**
  	 * Get the accumulated sum of the round.
  	 *
  	 * @return int as a sum of the round, or 0 if no roll has been made.
  	 */
  	public function GetRoundStored() {
		$sum = $this->sumStored;
    		return $sum;
  	}
	/**
         * Get the accumulated sum of the round.
  	 *
  	 * @return int as a sum of the round, or 0 if no roll has been made.
  	 */
  	public function GetName() {
		return $this->name;
  	}
	public function SetName($name) {
		$this->name = $name;
	}
	/**
  	 * Get the accumulated sum of the round.
  	 *
  	 * @return int as a sum of the round, or 0 if no roll has been made.
   	 */
  	public function SetTime($name) {
		$this->name = $name;
	}
  	public function GetTime() {
		$sum = time();
		return time();
  	}

  	public function SetRollOFDice() {
		$this->rollOFDice += 1;
	}
  	public function GetRollOFDice() {
		$sum = time();
		return $this->rollOFDice;
  	}
	/**
   	 * Get the accumulated sum of the round.
  	 *
  	 * @return int as a sum of the round, or 0 if no roll has been made.
  	 */
  	public function SetStartGame($startGame) {
		$this->startGame = $startGame;
	}
  	public function GetStartGame() {
		$sum = time();
		return $this->startGame;
  	}
}
