<?php 

//conditional statement

//$price = 20;
//
//if ($price < 10) {
//    echo 'The condition is met';
//}elseif($price<20){
//    echo 'elseif condition is met';
//} else{
//    echo 'the condition is not met';
//}

$products=[
    ['name'=>'tea','price'=>10],
    ['name'=>'coffee','price'=>20],
    ['name'=>'drinks','price'=>60],
    ['name'=>'soft drink','price'=>80],
    ['name'=>' cold coffee','price'=>70],
];

  foreach($products as $product){
//    if($product['price'] >20 && $product['price']<80){
//        echo $product['name'] . '<br>';
//    }
    
//     if($product['price'] >60 || $product['price']<20){
//         echo $product['name'] . '<br>';    }
//    
  }


?>


<!DOCTYPE html>
<html>

<head>
    
    <title>php tutorials series</title>
</head>

<body>
   <ul>
       <?php foreach($products as $product){ ?>
           <?php if($product['price']>20){ ?>
              <li><?php echo $product['name'] . '<br>' ?></li>
           
           <?php } ?>
       
       <?php }?>
   </ul>
    
</body>
</html>