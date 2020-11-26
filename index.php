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
//print_r($popped);

//loops:
$ninjas=['rahim','karim','jabber'];
//for($i=0;$i<count($ninjas);$i++){
// echo $ninjas[$i],'<br>';
//}
//foreach($ninjas as $ninja){
//    echo $ninja . '<br>';
//}
$products=[
    ['name'=>'tea','price'=>10],
    ['name'=>'coffee','price'=>20],
    ['name'=>'drinks','price'=>60],
    ['name'=>'soft drink','price'=>100],
];
//foreach($products as $product){
// echo $product['name'] . ' - '. $product['price'] . '<br>';
//    
//}
//$i=0;
//while($i<count($products)){
//    echo $products[$i]['name'] . '<br>';
//    $i++;
//}
//
//for($i=0;$i<count($products);$i++){
//    echo $products[$i]['price'];
//    echo '<br>';
//}




?>


<!DOCTYPE html>
<html>

<head>
    
    <title>php tutorials series</title>
</head>

<body>
    <h1>products</h1>
    <ul>
        <?php foreach($products as $product){ ?>
         
          <h3><?php echo $product['name']; ?></h3>
          <p>taka <?php echo $product['price']; ?></p>
          
        <?php } ?>
    </ul>
    
</body>
</html>