<?php
$str = "mississippi";
$obj = array();
for($i = 0; $i < strlen($str); $i++)
{
    if(!isset($obj[$str[$i]]))
    {
        $obj[$str[$i]] = 1;
    }
    else
    {
        $obj[$str[$i]]++;
    }
}
$beg = " ";
foreach ($obj as $key => $value) {
    print_r($key ." = " . $value ." , ");
}
?>