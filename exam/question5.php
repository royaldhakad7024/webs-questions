<?php
for ($i = 1; $i <= 4; $i++) {
    $bag = " ";
    for ($j = 1; $j <= $i; $j++) {
      $bag .= "  *" ;
    }
    print_r($bag."<br>");
  }
?>