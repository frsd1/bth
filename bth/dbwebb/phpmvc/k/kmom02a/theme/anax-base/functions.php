<?php
/**
 * Theme related functions. 
 *
 */

/**
 * Get title for the webpage by concatenating page specific title with site-wide title.
 *
 * @param string $title for this page.
 * @param string $titleAppend a general title to append.
 * @return string/null wether the favicon is defined or not.
 */
/*function get_title($title, $titleAppend = null) {
  return $title . $title_append;
}
*/
/**
* Get a gravatar with help of the users email.
*/
function getGravatar($email, $size=null) {
  return 'http://www.gravatar.com/avatar/' . md5(strtolower(trim($email))) . '.jpg?' . ($size ? "s=80" : null);
} 