<?php 
/**
 * This is a Web pagecontroller.
 *
 */
// Include the essential config-file which also creates the $web variable with its defaults.
include(__DIR__.'/config.php'); 


// Do it and store it all in variables in the Web container.
$web['title'] = "Hello World";

$web['header'] = <<<EOD
<img class='sitelogo' src='img/web.png' alt='Web Logo'/>
<span class='sitetitle'>Web webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$web['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Web ser ut och fungerar.</p>
EOD;

$web['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyleft frsd14@student.bth.se | <a href='https://github.com/mosbth/Web-base'>Web på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;


// Finally, leave it all to the rendering phase of Web.
include(WEB_THEME_PATH);
