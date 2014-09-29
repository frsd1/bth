<?php
/**
 * Bootstrapping functions, essential and needed for Web to work together with some common helpers. 
 *
 */

/**
 * Default exception handler.
 *
 */
function myExceptionHandler($exception) {
  echo "Web: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
set_exception_handler('myExceptionHandler');


/**
 * Autoloader for classes.
 *
 */
function myAutoloader($class) {
  $path = WEB_INSTALL_PATH . "/src/{$class}/{$class}.php";
  if(is_file($path)) {
    include($path);
  }
  else {
    throw new Exception("Classfile '{$class}' does not exists.");
  }
}

spl_autoload_register('myAutoloader');

/**
 * Dump function
 *

*/
/**
 * Dumpp all contents of a variabel.
 *
 * @param mixed $a as the variabel/array/object to dump.
 */
function dump($array) {
  echo "<pre>" . htmlentities(print_r($array, 1)) . "</pre>";
}


