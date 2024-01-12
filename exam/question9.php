<?php 
// $a = 0;
// $b = 1;
// $c;
// for ($i = 0; $i < 12; $i++) {
//   $c = $a + $b;
//   echo $a."<br>";
//   $a = $b;
//   $b = $c;
// }

$a=0;
$b=1;
$c=null;
echo $a." ".$b;
while($c<=100)
{ 
  echo " ".$c;
  $c=$a+$b;
  $a=$b;
 $b=$c;
}

?>