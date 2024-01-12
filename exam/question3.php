<!-- Find the second largest element from an array in php?
    let arr = [20, 120, 111, 215, 54, 78]; -->
<?php
$arr=array(20, 120, 111, 215, 54, 78);
rsort($arr);
print_r($arr[1]);
?>