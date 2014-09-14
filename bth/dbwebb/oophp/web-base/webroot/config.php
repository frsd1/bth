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
define('WEB_INSTALL_PATH', __DIR__ . '/..');
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
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();


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
$web['title_append'] = ' | Web en webbtemplate';

$web['header'] = <<<EOD
<img class='sitelogo' src='img/web.png' alt='Web Logo'/>
<span class='sitetitle'>Web webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$web['footer'] = <<<EOD
<footer><span class='sitefooter'>Fredrik Stenberg | frsd14@student.bth.se | <a href='https://github.com/frsd1/bth/tree/master/bth/dbwebb'>Web-base på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;



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
$web['modernizr'] = 'js/modernizr.js';
$web['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$web['jquery'] = null; // To disable jQuery
$web['javascript_include'] = array();
//$web['javascript_include'] = array('js/main.js'); // To add extra javascript files



/**
 * Google analytics.
 *
 */
$web['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics
