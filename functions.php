<?php
//replace chars that old machines probably can't handle
function clean_str($str) { 
  $str = str_replace( "‘", "'", $str );
  $str = str_replace( "’", "'", $str );
  $str = str_replace( "“", '"', $str );
  $str = str_replace( "”", '"', $str );
  $str = str_replace( "–", '-', $str );
  $str = str_replace( '&nbsp;', ' - ', $str );
  return $str;
} 
?>
