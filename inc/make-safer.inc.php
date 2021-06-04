<?php
function makeSafer($n){
  $n= trim($n);
  $n= stripslashes($n);
  $n= htmlspecialchars($n);
  return $n;
}

function makeSaferInt($n){
  $n= makeSafer($n);
  $n= intval($n); //make int
  return $n;
}

echo "<!--make-safer.inc.php-->\n";
