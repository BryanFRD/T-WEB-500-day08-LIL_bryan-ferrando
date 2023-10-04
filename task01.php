<?php

function discover_type($age, $name, $gpa, $isStudent){
  if($isStudent){
    echo "Hello my name is $name, I'm $age years old. I'm a student at Epitech with a GPA of $gpa." . PHP_EOL;
  } else {
    echo "Hello my name is $name, I'm $age years old. I'm not a student." . PHP_EOL;
  }
}

?>