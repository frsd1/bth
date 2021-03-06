<?php 
/**
 * This is a Web pagecontroller.
 *
 */
// Include the essential config-file which also creates the $web variable with its defaults.
include(__DIR__.'/config.php'); 


// Define what to include to make the plugin to work
$web['stylesheets'][]        = 'css/slideshow.css';
$web['javascript_include'][] = 'js/slideshow.js';


// Do it and store it all in variables in the Web container.
$web['title'] = "Slideshow för att testa JavaScript i Web";

$web['main'] = <<<EOD
<div id="slideshow" class='slideshow' data-host="" data-path="img/me/" data-images='["me-1.jpg", "me-2.jpg", "me-4.jpg", "me-6.jpg"]'>
<img src='img/me/me-6.jpg' width='560px' height='110px' alt='Me'/>
</div>

<h1>En slideshow med JavaScript</h1>
<p>Detta är en exempelsida som visar hur Web fungerar tillsammans med JavaScript.</p>
EOD;


// Finally, leave it all to the rendering phase of Web.
include(WEB_THEME_PATH);
