<?php

function get_shortest($array){
  $shortest = $array[0];
  foreach($array as $value){
    if(strlen($value) < strlen($shortest)){
      $shortest = $value;
    }
  }
  return $shortest;
}

?>