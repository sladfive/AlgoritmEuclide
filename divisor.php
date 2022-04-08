<?php


function divisor($n) {
  echo "<br>Divisors of $n are: ";
  
  for($i = 1; $i <= sqrt($n); $i++) {
    if($n%$i == 0) {
      if($n/$i == $i)
        echo "$i ";
      else
        echo $i." ".$n/$i." ";
    }
  }
  echo "\n";
}



?>