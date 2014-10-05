<?php
/**
 * @Filename: GameManager.php
 * @Summery:This is a pagecontroller for the second course modules in Object oriented programming in php.
 * Pagecontroller generate the game Dice hundred game. The game let you roll the dice and store values.
 *
 * @course module 2 - Object oriented programming in php 
 * @author Fredrik Stenberg, frsd14@student.bth.se
 * @link https://github.com/frsd1/bth/tree/master/bth/dbwebb/oophp
 */

/**
 * This is a pagecontroller for the second course modules in Object oriented programming in php.
 * Pagecontroller generate the game Dice hundred.
 *
 */
// Include the essential config-file which also creates the $web variable with its defaults.
include(__DIR__.'/config.php'); 
// Set title for the page
$web['title'] = "Redovisning"; $main="";
//Instantiate a object from the GameManager Class
$gameManager = new CGameManager();
// Get the arguments from the query string, stop the game; 
if(isset($_GET['stop'])) 
	$main .= $gameManager->stop(); 
// Get the arguments from the query string, store total value. 
if(isset($_GET['store'])) 
	$main .= $gameManager->store();
//// Get the arguments from the query string, roll the dices.
if(isset($_GET['roll'])) 
	$main .= $gameManager->rollDice();
// Information about the game
$main .= $gameManager->output();
// Assigns main the return-result from object, GameManager. 
$web['main'] = $main;
// Finally, leave it all to the rendering phase of Web.
include(WEB_THEME_PATH);
