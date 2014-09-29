<?php 
/**
 * This is a Web pagecontroller.
 *
 */
// Include the essential config-file which also creates the $web variable with its defaults.
include(__DIR__.'/config.php');

// Start by including the class definition
//include('simple_class.php');
 
// Create a object of the class
$obj = new SimpleClass();
 
// Use the class
echo '<p>';
$obj->DisplayVar();
echo '</p>';
 
// Change the state of the object and use it again
$obj->var = 'Hello World (should now be 2) = ';
echo '<p>';
$obj->DisplayVar();
echo '</p>'; 


/*
// Demonstration of module CDice
$dice = new CDice();

$roll = isset($_GET['roll']) && is_numeric($_GET['roll']) ? $_GET['roll'] : 0;

if($roll > 100) {
  throw new Exception("To many rolls on the dice. Not allowed.");
}

$html = null;
if($roll) {
  $dice->Roll($roll);

  $html = "<p>Du gjorde {$roll} kast och fick följande resultat.</p>\n<ul>";
  foreach($dice->GetResults() as $val) {
    $html .= "\n<li>{$val}</li>";
  }
  $html .= "\n</ul>\n";

  $html .= "<p>Totalt fick du " . $dice->GetTotal() . " poäng på dina kast.</p>";
}



// Do it and store it all in variables in the Web container.
$web['title'] = "Kasta tärning";

$web['main'] = <<<EOD
<h1>Kasta tärning</h1>
<p>Detta är en exempelsida som visar hur Web fungerar tillsammans med återanvändbara moduler.</p>
<p>Hur många kast vill du göra, <a href='?roll=1'>1 kast</a>, <a href='?roll=3'>3 kast</a> eller <a href='?roll=6'>6 kast</a>? </p>
{$html}
EOD;



// Finally, leave it all to the rendering phase of Web.
include(WEB_THEME_PATH);
