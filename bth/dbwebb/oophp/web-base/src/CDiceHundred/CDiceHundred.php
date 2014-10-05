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
  private $rollOfDice=1;
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
  public function roll() {
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
  public function getTotal() {
  	return $this->sum;
  }
  /**
   * Init the round.
   *
   */
  public function initRound() {
  	$this->sumRound = 0;
  }
  /**
   * Get the accumulated sum of the round.
   *
   * @return int as a sum of the round, or 0 if no roll has been made.
   */
	public function setRoundTotal() {
	//$sum = 0;
  }
  /**
   * Get the accumulated sum of the round.
   *
   * @return int as a sum of the round, or 0 if no roll has been made.
   */
  public function getRoundTotal() {
		$sum = $this->sumRound;
  	return $sum;
  }
  /**
   * Get the rolls as a serie of images.
   *
   * @return string as the html representation of the last roll.
   */
  public function getRollsAsImageList() {
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
  public function setRoundStored() {
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
  public function getEnd() {
		$sum = $this->sumStored;
  	return $sum;
  }
	/**
	 * Get the accumulated sum of the round.
   *
   * @return int as a sum of the round, or 0 if no roll has been made.
   */
  public function setEnd() {
		$this->InitRound();
  }
  /**
   * Get the accumulated sum of the round.
   *
   * @return int as a sum of the round, or 0 if no roll has been made.
   */
  public function getRoundStored() {
	  $sum = $this->sumStored;
    return $sum;
  }
	/**
   * Get the accumulated sum of the round.
   *
   * @return int as a sum of the round, or 0 if no roll has been made.
   */
  public function getName() {
		return $this->name;
  }
	public function setName($name) {
		$this->name = $name;
	}
	/**
  	 * Get the accumulated sum of the round.
  	 *
  	 * @return int as a sum of the round, or 0 if no roll has been made.
   	 */
  public function setTime($name) {
		$this->name = $name;
	}
  public function getTime() {
		$sum = time();
		return time();
  }
  public function setRollOFDice() {
		$this->rollOfDice += 1;
	}
  public function getRollOFDice() {
		$sum = time();
		return $this->rollOfDice;
  }
	/**
   * Get the accumulated sum of the round.
   *
   * @return int as a sum of the round, or 0 if no roll has been made.
   */
	public function setStartGame($startGame) {
		$this->startGame = $startGame;
	}
 	public function getStartGame() {
		$sum = time();
		return $this->startGame;
  }
}
