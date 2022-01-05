<?php
// Pengkondisian Ukuran File
function convert_filesize($bytes, $decimals = 2){
  $format = array(' B',' KB',' MB',' GB',' TB',' PB',' EB',' ZB',' YB');
  $factor = floor((strlen($bytes) - 1) / 3);
  return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$format[$factor];
}
?>