<?php 


//variable scope
//local vars
function myfunc(){
    $price=10;
    echo "The price is $price";
}
myfunc();
echo $price;

function myFuncTwo($age){
  echo $age;  
}
//myFuncTwo(25);
//echo $age;

//global variables
$name='mario';

//function sayHello(){
//   global $name;
//    echo "Hello $name";
//}
//sayHello();

function sayBye(&$name){
    $name='worio';
    echo "bye $name";
}
sayBye($name);
echo "  $name";


?>


<!DOCTYPE html>
<html>

<head>
    
    <title>php tutorials series</title>
</head>

<body>

    
</body>
</html>