<?php

function case2($array = [])
{
  if (count($array) < 0) {
    return false;
  }
  $new_array = [];
  foreach ($array as $index => $value) {
    $temp_array = $array;
    unset($temp_array[$index]);
    $multiply = 1;
    foreach ($temp_array as $value) {
      $multiply = $multiply * $value;
    }
    array_push($new_array, $multiply);
  }
  echo "[" . implode(", ", $new_array) . "] \n";
  return $new_array;
}

case2([1, 2, 3, 4, 5]);
case2([3, 2, 1]);