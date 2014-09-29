<?php 
/**
 * This is a Web pagecontroller.
 *
 */
// Include the essential config-file which also creates the $web variable with its defaults.
include(__DIR__.'/config.php'); 



// Do it and store it all in variables in the Web container.
$web['title'] = "404";
$web['header'] = "";
$web['main'] = "This is a Web 404. Document is not here.";
$web['footer'] = "";

// Send the 404 header 
header("HTTP/1.0 404 Not Found");


// Finally, leave it all to the rendering phase of Web.
include(WEB_THEME_PATH);
