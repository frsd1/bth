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

<p>Mitt namn är Fredrik Stenberg och jag bor i Stockholm eller närmare bestämt i Solna strax utanför. Jag har arbetat med ekonomi men nu med programmering. I Stockholm är jag uppväxt och här har jag även arbetat och studerat. Att läsa på distans har jag gjort tidigare och det passar mig bra eftersom jag tycker man enklare kan fokuser på ämnet. Speciellt då man studerar programmering.<br> När jag har tid över busar jag med mina barn och min vackra sambo, därefter är dagen oftas slut. Finns det tid över försöker jag hinna med att träna löpning och när det finns snö i Stockolm tränar jag gärna längdåkning.<br> 
Vad beträffar programmering har jag studerat en hel del java på KTH men även .net-relaterade programspråk såsom C#, vb, javascript. Jag har arbetat med utveckling av webplatser i Visual Studio och för utveckling i Android i Eclipse. Sedan flera år tillbaka arbetar jag även i Linuxmiljö, för tillfället i Ubuntu. Eftersom kurserna på dbwebb har sin tyngdpunkt i fri programvara hoppas jag att mina erfarenheter i Linux ska vara till hjälp för mig.
<br><br>
Jag hoppas på en höst med många nya lärdommar inom webutveckling.
<br>
/Fredrik
</p>
<div class="circular"><img src="img/me.jpg" alt="" /></div>

{$web['byline']}

</article>

EOD;


// Finally, leave it all to the rendering phase of Web.
include(WEB_THEME_PATH);
