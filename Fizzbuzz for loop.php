<?php

for ($x = 1; $x <= 100; $x++) {

  if ($x % 5 == 0 AND $x % 3 == 0) {
    echo "<span style=color:#eb4034;>$x: Fizzbuzz! </span><br/>";
  } elseif ($x % 3 == 0) {
    echo "$x: Fizz! <br/>";
  } elseif ($x % 5 == 0) {
    echo "$x: Buzz! <br/>";
  } else {
    echo "$x <br/>";
  }

}


?>
