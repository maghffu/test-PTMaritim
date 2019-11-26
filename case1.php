<?php

function addup($array, $k)
{
  rsort($array);
  $number = 0;
  $members=[];
  foreach ($array as $a) {
    if ($a <= $k) {
      if ($number <= $k && $number + $a <= $k) {
        $number += $a;
        array_push($members,$a);
      }
    }
    
  }
  if ($number == $k) {
    echo "true \n";
    echo implode(" + ", $members) . " = " . $k;
    return true;
  }
  echo "false \n";
  return false;
}

addup( [20, 303, 3, 4, 25] , 1);
addup( [2, 1, 3, 4, 25] , 29);