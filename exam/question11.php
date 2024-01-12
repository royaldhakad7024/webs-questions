<?php 
$input = "AAABBCDDDAAD";
$output = "";
$temp = null;
for($i= 0; $i<strlen($input);$i++){
    if($input[$i]!=$temp){
        $output .=$input[$i];
        $temp = $input[$i];
    }
}echo $output;

// $input = "AAABBCDDDAAD";
// $output = "";

// for($i= 0; $i<strlen($input);$i++){
//     for($j=$i+1; $j<strlen($input);$j++){
//         if($input[$i]==$input[$j]){
            
//         }
//     }
// }


?>