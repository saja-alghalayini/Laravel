<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>


</head>
<body>
    
<?php
//**************** Associative Array ****************//
// $data= array
// (
//   "Name1" =>"Saj",
//   "Name2" =>"Mohammad",
//   "Age" =>20
// );

// echo $data["Name1"];



//**************** Multidimensional Associative Array ****************//

$data =array
(
    array(1, 2),
    "Saja",
    "Mohammad"
);

echo $data[2];//should echo Mohammad
echo $data[0][1];//should echo 2

// echo implode ($data); //convert array to string

?>


</body>
</html>