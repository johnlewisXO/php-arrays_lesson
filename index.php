<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>

<?php
// array type 1
// displaying array data via indexes

// $example_array = array('toyota', 'bmw', 'ferrari', 'porsche');

// echo $example_array[1];

// var_dump($example_array);

// for each function will diaplay items in an array in a different manner than what the array declares

// foreach ($example_array as $car){
//     echo "<p>$car</p> \n ";
// }

// $example_array[5] = "lamborghini";

// var_dump ($example_array);

// array type 2
// associative arrays


// $reagan = array('age' => 21, 'hair' => 'crispy', 'height' => 'super-tall');

// echo $reagan['hair'];
    
// $reagan['height'] ='tall';

//adjusting content of an array element

// echo $reagan ['height']

// multi-dimensional associative arrays
$arrayX = array(
  'numbers' =>  array(
        2,3,4,5
), 
'cars' => array(
    'jaguar','opel','mclaren','volkswagen'
));

// echo $arrayX['cars'][3];

// var_dump ($arrayX);

$arrayX['people'] = array('reagan', 'nicholas', 'gedeon');

// echo $arrayX['people'][0];

// var_dump ($arrayX['people']);


//sorting arrays

$arrayZ = array('michael', 'gcobisa', 'tyrone');
sort($arrayZ);

var_dump($arrayZ);



?>
    
</body>
</html>