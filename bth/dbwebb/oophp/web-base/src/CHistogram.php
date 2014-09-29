<?php
/**
 * A class for printing a histogram.
 *
 */
class CHistogram {

  /**
   * Properties
   *
   */


  /**
   * Print the histogram
   *
   * @param array $values the values to print out the histogram from.
   */
  public function GetHistogram($values) {

    // Calculate occurences for each key
    $res = array();
    foreach($values as $key => $value) {
      @$res[$value] .= '*'; // Use @ to ignore warning for not initiating variabel, not really nice but powerful.
    }
    ksort($res);

    // Prepare out a textual representation of the histogram
    $html = "<ul>";
    foreach($res as $key => $val) {
      $html .= "<li>{$val} ($key)</li>";
    }
    $html .= "</ul>";

    return $html;
  }


}
