<?php 
/**
 * This is a Web pagecontroller.
 *
 */
// Include the essential config-file which also creates the $web variable with its defaults.
include(__DIR__.'/config.php'); 


// Define what to include to make the plugin to work
$web['stylesheets'][]        = 'css/slideshow.css';
$web['jquery']               = true;
$web['javascript_include'][] = 'js/slideshow.js';


// Do it and store it all in variables in the Web container.
$web['title'] = "Om mig";

$web['main'] = <<<EOD

<article class="readable">
<h1>Om Mig</h1>

<p>Jag heter Fredrik Stenberg och bor i Stockholm eller närmare bestämt i Solna strax utanför. Jag har arbetat med ekonomi och programmering. Att läsa på distans har jag gjort tidigare och det passar mig bra eftersom jag tycker man enklare kan fokuser på ämnet. Speciellt då man studerar programmering. När jag har tid över busar jag med mina barn och min vackra sambo, därefter är dagen oftas slut. När det gäller programmering har jag läst en hel del java men även .net-relaterade programspråk såsom C#, vb, javascript. Jag arbetar i helt enkelt i Visual Studio men även i utvecklingsmiljön för Android, Eclipse.

</p>
<div class="circular"><img src="img/me.jpg" alt="" /></div>

{$web['byline']}

</article>

EOD;


// Finally, leave it all to the rendering phase of Web.
include(WEB_THEME_PATH);
