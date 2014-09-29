<?php
// Include the essential config-file which also creates the $web variable with its defaults.
include(__DIR__.'/config.php');

// Start a named session
session_name('oophp20guiden');
session_start();
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
  echo "Sessionen raderas, <a href='?'>starta om spelet</a>";
	
  exit;
}


?><!doctype html>
<html lang='sv'>
<meta charset='utf-8'>
<title>Guiden 20 steg för att komma i gång med objektorienterad PHP-programmering</title>
<link rel='stylesheet' type='text/css' href='css/dice.css'/>
<h1>Kasta två tärningar och försök komma så nära 21 som möjligt</h1>
<p><a href='?init'>Starta en ny runda</a>.</p>
<p><a href='?roll'>Gör ett nytt kast</a>.</p>
<div id = "button">
	<p><a href='?test'>Nytt kast (test)</a>.</p>
</div>

<button type="button" class="b" onclick="location.href='dice.php?roll'">hello</button>

<p><a href='?destroy'>Förstör sessionen</a>.</p>

<?php
// Get the arguments from the query string
$roll = isset($_GET['roll']) ? true : false;
$test = isset($_GET['test']) ? true : false;
$init = isset($_GET['init']) ? true : false;

// Create the object or get it from the session
if(isset($_SESSION['dicehand'])) {
  echo "<i>Objektet finns redan i sessionen</i>";
  $hand = $_SESSION['dicehand'];
}
else {
  echo "<i>Objektet finns inte i sessionen, skapar nytt objekt och lagrar det i sessionen</i>";
  $hand = new CDiceHand(1);
  $_SESSION['dicehand'] = $hand;
}
// Roll the dices 
if($test) {
	$hand->InitRound();
	$hand->Roll();
}

// Roll the dices 
if($roll) {
  $hand->Roll();
}
else if($init) {
  $hand->InitRound();
}
if(isset($_SESSION['bay'])) {
$bay = $_SESSION['bay'];

if($bay=="start")
{
echo "<p><a href='?roll'>xxxxNyttxxx kast</a>.</p>";
}
}


if(isset($_SESSION['count'])) {

if($_SESSION['count']==2) {
  		$_SESSION['count'] = "start";
	}
else {
  $_SESSION['count']++;
}
}
else {
  $_SESSION['count'] = 0;
}
 
if(isset($_GET['reset'])) {
  $_SESSION['count'] = 0;
}

if(isset($_SESSION['bay'])) {

if($_SESSION['bay']==1 || $_SESSION['bay']=="start") {
  		$_SESSION['bay'] = "start";
	}
else {
  $_SESSION['bay']++;
}
}
else {
  $_SESSION['bay'] = 0;
}
 
if(isset($_GET['reset'])) {
  $_SESSION['bay'] = 0;
}
 
//echo "<p>Allt innehåll i arrayen \$_SESSION:<br><pre>" . htmlentities(print_r($_SESSION, 1)) . "</pre>";
//echo "<p>Allt innehåll i arrayen \$_SESSION:<br><pre>" ;
echo "-----". $_SESSION['count']."--------";
echo "-----". $_SESSION['bay']."--------";







?>

<p><?=$hand->GetRollsAsImageList()?></p>

<?php if($roll): ?>
<p>Summan av detta kast blev <?=$hand->GetTotal()?>.
<?php endif; ?>
<?php if($test): ?>
 Summan av detta kast blev <?=$hand->GetTotal()?>.
<?php endif; ?>


Summan i denna spelrundan är hittills <?=$hand->GetRoundTotal()?>.</p>


<hr>
