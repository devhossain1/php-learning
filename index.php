<?php 

//index array

$peopleOne=['rahim','karim', 'jaber'];
//echo $peopleOne[1];
$peopleTwo=array('hossain','parvez');
//echo $peopleTwo[1];
$ages=[20,30,40,50];
//echo $ages[1];
//print_r($ages);
$ages[1]=25;
//print_r($ages);
$ages[]=60;
//print_r($ages);
array_push($ages, 70);
//print_r($ages);
//echo count($ages);
$peopleThree=array_merge($peopleOne,$peopleTwo);
//print_r($peopleThree);


//asociative array(key and values)
$ninjasOne=['karim' =>'black','rahim'=>'white','parvez'=>'brown'];
//echo $ninjasOne['rahim'];
//print_r($ninjasOne);
$ninjasTwo=array('mehedi'=>'blue','towfiq'=>'pink');
//print_r($ninjasTwo);
$ninjasTwo['imanali']='tal';
//print_r($ninjasTwo);
//echo count($ninjasOne);
$ninjasThree=array_merge($ninjasOne,$ninjasTwo);
//print_r($ninjasThree);
$blogs=[
    ['title'=>'mario party','author'=>'mario','content'=>'lorem','likes'=>30],
    ['title'=>'mario kart cheats','author'=>'toad','content'=>'lorem','likes'=>25],
    ['title'=>'zelda hidden cheats','link','lorem',50]
];

//print_r($blogs[1][1]);
//echo $blogs[1]['author'];
//echo count($blogs);
$blogs[]=['title'=>'music party','author'=>'rr martin','content'=>'lorem','likes'=>100];

//print_r($blogs);
$popped=array_pop($blogs);
print_r($popped);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>array</title>
</head>

<body>
    <h4>this is the practice</h4>
</body>

</html>
