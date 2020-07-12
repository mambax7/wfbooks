<?php
/**
 * $Id: address.php
 * Module: WF-Books
 * Developer: Shine
 * Licence: GNU
 */

function wfl_address($country="") {
if ($country == '') {
  $address = $schrijver . '<br />' . $uitgever . '<br />' . $blz;          // Default address
  }
//return $address;
}

// $address = $uitgever . '<br />' . $schrijver . '<br />' . $blz;          // Default address
// $address = $schrijver . '<br />' . $uitgever . '<br />' . $blz;          // LVDH default address
?>