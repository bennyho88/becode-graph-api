<?php
/*
$intro = 'Hello world 2';
echo $intro;
*/


$randomNumberOne = rand(0,5);
$randomNumberTwo = rand(0,5);


/*
echo $randomNumberOne;
echo $randomNumberTwo;

*/
/* Random number */


$arrayBig = [];



for ( $i = 0; $i < 6 ; $i++) {
    $array = array(rand(0,5),rand(0,5));

    array_push($arrayBig,$array);
    
    print_r($arrayBig);
}



// print_r($array);

$myObj -> randomnumber = $arrayBig;
$myJSON = json_encode($myObj);

echo $myJSON;
?>