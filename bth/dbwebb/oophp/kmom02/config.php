<?php
/**
 * Config-file for Web. Change settings here to affect installation.
 *
 */

/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly




/**
 * Define Web paths.
 *
 */
define('WEB_INSTALL_PATH', __DIR__ . '/../web-base');
define('WEB_THEME_PATH', WEB_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(WEB_INSTALL_PATH . '/src/bootstrap.php');

/**
 * Start the session.
 *
 */
//session_name(preg_replace('/[:\.\/-_]/', '', __DIR__));
//session_start();



/**
 * Create the Web variable.
 *
 */
$web = array();


/**
 * Site wide settings.
 *
 */
$web['lang']         = 'sv';
$web['title_append'] = ' | oophp kursmaterial';

$web['header'] = <<<EOD
<img class='sitelogo' src='img/web.png' alt='Logo plane'  height="77" width="77"/>
<span class='sitetitle'>oophp - frsd14</span>
<span class='siteslogan'>Me-sida för kursen Databaser och Objektorienterad PHP-programmering</span>
EOD;

$web['footer'] = <<<EOD
<footer><span class='sitefooter'>Fredrik Stenberg | frsd14@student.bth.se |<a href='https://github.com/frsd1/bth/tree/master/bth/dbwebb'>web-base på Github</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

$web['test'] = <<<EOD
echo "zxcvzvzxvtest";
<footer class="byline">


</footer>
EOD;
$web['byline'] = <<<EOD
<footer class="byline">
  <nav>
    <ul class='icons'>
      <li><a href='https://github.com/frsd1'><img src='http://dbwebb.se/img/glyphicons/png/glyphicons_381_github.png' alt='github-icon' title='Fredrik Stenberg på Github' width='24' height='24'/></a></li>
      
    </ul>
  </nav>

</footer>
EOD;



/**
 * The navbar
 *
 */
$web['navbar'] = array(
  'class' => 'nb-plain',
  'items' => array(
    'hem'         => array('text'=>'Hem',         'url'=>'index.php',          'title' => 'Min presentation om mig själv'),
    'redovisning' => array('text'=>'Redovisning', 'url'=>'redovisning.php', 'title' => 'Redovisningar för kursmomenten'),
    'kallkod'     => array('text'=>'Källkod',     'url'=>'source.php',      'title' => 'Se källkoden'),
    'hundra'     => array('text'=>'Hundra',     'url'=>'dicehundred.php',      'title' => 'Se källkoden'),
  ),
  'callback_selected' => function($url) {
    if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
      return true;
    }
  }
);

/**
 * Theme related settings.
 *
 */
//$web['stylesheet'] = 'css/style.css';
$web['stylesheets'] = array('css/style.css');
$web['favicon']    = 'favicon.ico';



/**
 * Settings for JavaScript.
 *
 */
$web['ma']  = 'js/ma.js';
$web['modernizr']  = 'js/modernizr.js';
$web['jquery']     = null; // To disable jQuery
$web['jquery_src'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
$web['javascript_include'] = array();
//$web['javascript_include'] = array('js/main.js'); // To add extra javascript files



/**
 * Google analytics.
 *
 */
$web['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics

