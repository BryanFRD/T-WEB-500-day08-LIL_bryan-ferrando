<?php

function calc($operator, $a, $b){
  switch($operator){
    case "+":
      return $a + $b;
    case "-":
      return $a - $b;
    case "*":
      return $a * $b;
    case "/":
      if($b == 0){
        return "Cannot divide by 0";
      } else {
        return $a / $b;
      }
    case "%":
      return $a % $b;
    default:
      return "Unknown operator";
  }
}

?>