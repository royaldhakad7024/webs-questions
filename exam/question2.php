<!-- Sort string with ascending order in php(With array or without array)

    const string = "mississippi";
    output: iiimppssss -->
<?php
$string = "mississippi";
$string = str_split($string);
sort($string);
echo implode("", $string);
?>