<?php
/**
 * @Filename: CUIDiceHundred.php
 * @Summery:This class acts as a manager between the user interface
 *  and the class library.
 *
 * @course module 2 - Object oriented programming in php 
 * @author Fredrik Stenberg, frsd14@student.bth.se
 * @link https://github.com/frsd1/bth/tree/master/bth/dbwebb/oophp
 */

/**
 * A hand of dices, with graphical representation, to roll.
 *
 */
class CUIDiceHundred {

	/**
	 * Properties
   *
   */
	
	/**
   * Constructor
   *
   * @param
   */
  public function __construct() {
  }
  /**
   * Roll all dices in the hand.
   *
   */
  public function roll() {}
	public function getStartOnePlayer() {
		return 	"<div id='oneform'><p>Skriv in ett namn, klicka på Spela.<input type='submit' value='2 Spelare'  class='dicebutton' id='twoplayer'></p>
		<form method='post' action='dicehundred.php?roll' >
    		Namn: <input type='text' name='name' class='diceinput' >
		<input type='submit' value='Spela'  class='dicebutton'>
    		</form></div>
<div id = 'twoform'><p>Skriv in ett namn, klicka på Spela.<input type='submit' value='1 Spelare' class='dicebutton' id= 'oneplayer'></p>
		<form method='post' action='dicehundred.php?roll' >
    		Namn1: <input type='text' name='name1' class='diceinput' ><br />
	   		Namn2: <input type='text' name='name2' class='diceinput' >
		<input type='submit' value='Spela'  class='dicebutton'>
    		</form></div>	";
  }
	public function getStartTwoPlayer() {
		return 	"<div id='start'><p>bbbbbSkriv in ett namn, klicka på Spela.</p>
		<form method='post' action='dicehundred.php' >
    		Namn: <input type='text' name='name' class='diceinput' >
		<input type='submit' value='Spela'  class='dicebutton'>
    		</form></div>";
  }
}
