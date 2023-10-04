<?php

function calc_average($array){
  return round(array_sum($array) / count($array), 1);
}

?>