<?php
$myArr = array(6, 4, 5, 5, 5, 2, 1, 3, 1, 1, 2, 1, 3, 4, 7);
$myArr1 = array();
for($i = 0; $i < sizeof($myArr); $i++)
{
    if(!isset($myArr1[$myArr[$i]]))
    {
        $myArr1[$myArr[$i]] = 1;
    }
    else
    {
        $myArr1[$myArr[$i]]++;
    }
}
$beg = " ";
foreach ($myArr1 as $key => $value) {
    if($myArr1[$key] > 1){
        print_r($key ." <br>");
    }
    
}
?>