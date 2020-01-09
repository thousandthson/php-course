<?php

$x = 1;

while ($x <= 100) {

if ($x % 5 == 0 AND $x % 3 == 0) {
  echo "$x: Fizzbuzz! <br/>";
} elseif ($x % 3 == 0) {
  echo "$x: Fizz! <br/>";
} elseif ($x % 5 == 0) {
  echo "$x: Buzz! <br/>";
} else {
  echo "$x <br/>"
}




  $x++;
}

 ?>
