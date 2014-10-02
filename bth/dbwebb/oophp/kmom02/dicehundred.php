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
// Start a named session
if(isset($_GET['destroy'])) {
  // Unset all of the session variables.
  $_SESSION = array();

  // If it's desired to kill the session, also delete the session cookie.
  // Note: This will destroy the session, and not just the session data!
  if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000,
          $params["path"], $params["domain"],
          $params["secure"], $params["httponly"]
      );
  }

  // Finally, destroy the session.
  session_destroy();
  echo "Sessionen raderas, <a href='?'>starta om spelet</a>";
  exit;
}


// Set title for the page
$web['title'] = "Redovisning"; $main="";
//Instantiate a object from the GameManager Class
$gameManager = new CGameManager();
// Get the arguments from the query string, stop the game; 
if(isset($_GET['stop'])) 
	$main .= $gameManager->Stop(); 
// Get the arguments from the query string, store total value. 
if(isset($_GET['store'])) 
	$main .= $gameManager->Store();
//// Get the arguments from the query string, roll the dices.
if(isset($_GET['roll'])) 
	$main .= $gameManager->RollDice();
// Information about the game
$main .= $gameManager->Output();
// Assigns main the return-result from object, GameManager. 
$web['main'] = $main;
// Finally, leave it all to the rendering phase of Web.
include(WEB_THEME_PATH);
