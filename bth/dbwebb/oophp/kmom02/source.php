<?php 
/**
 * This is a Web pagecontroller.
 *
 */
// Include the essential config-file which also creates the $web variable with its defaults.
include(__DIR__.'/config.php'); 


// Add style for csource
$web['stylesheets'][] = 'css/source.css';


// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));


// Do it and store it all in variables in the Web container.
$web['title'] = "Visa källkod";

$web['main'] = "<h1>Visa källkod</h1>\n" . $source->View();

$web['main'] = <<<EOD
<article class="readable">
<h1>Visa källkod</h1> {$source->View()}
</article>
EOD;


// Finally, leave it all to the rendering phase of Web.
include(WEB_THEME_PATH);
?>
