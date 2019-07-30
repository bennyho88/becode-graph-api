<?php

header("Access-Control-Allow-Origin: *");
/*
$intro = 'Hello world 2';
echo $intro;
*/


$randomNumberOne = rand(0,30);
$randomNumberTwo = rand(0,30);


/*
echo $randomNumberOne;
echo $randomNumberTwo;

*/
/* Random number */


$arrayBig = [];

$arrayQuantity =  $_GET['numbers'];


for ( $i = 0; $i < $arrayQuantity ; $i++) {
    
   
    $array = [$i,rand(0,20)];
    
    array_push($arrayBig,$array);
    
    // print_r($arrayBig);
}



// print_r($array);

$myJSON = json_encode($arrayBig);

echo $myJSON;

?>
