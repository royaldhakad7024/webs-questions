<!-- Create a for loop that iterates up to 100 while outputting "fizz" at multiples of 3, "buzz" at multiples of 5 and "fizzbuzz" at multiples of 3 and 5 -->
<?php 
for ($i=1; $i<=100; $i++){
    if($i%5==0 && $i%3==0){
        echo "fizzbuzz"."<br>";
    }
    elseif($i%3==0){
        echo "buzz"."<br>";
    }
    elseif($i%5==0){
        echo "fizz"."<br>";
    }
    else{
        echo $i."<br>";
    }
}
?>