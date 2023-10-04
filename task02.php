<?php

function dog_bark($bark){
  $temp = [];
  for($i = 0; $i < $bark; $i++){
    array_push($temp, "Woof");
  }
  
  echo implode(" ", $temp) . PHP_EOL;
}

?>