<?php
for ($i = 1; $i <= 5; $i++) {
    $bag = "";
    for ($j = 1; $j <= 5-$i; $j++) {
      $bag .= "&nbsp&nbsp" ;
    }
    for ($k = 1; $k <= $i; $k++) {
        $bag .="*";
      }
    print_r($bag."<br>");
  }
?>