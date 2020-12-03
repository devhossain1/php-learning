<?php 



$products=[
    ['name'=>'tea','price'=>65],
    ['name'=>'tea','price'=>10],
    ['name'=>'coffee','price'=>20],
    ['name'=>'drinks','price'=>60],
    ['name'=>'soft drink','price'=>80],
    ['name'=>' cold coffee','price'=>70],
];

  foreach($products as $product){
    if($product['name'] === 'soft drink'){
        break;
    }
    if($product['price'] >60){
        continue;
        
    }
      
      echo $product['name'] . '<br>';
         
  }
echo '<br>';

//function
function sayHello($name='mario',$time='morning'){
    echo "Good $time $name";
}
//sayHello('parvez');
sayHello('parvez','night');

function formatProduct($product){
    //echo "{$product['name']} costs $ {$product['price']} to buy";
    return "{$product['name']} costs $ {$product['price']} to buy";
}

//$formated = formatProduct(['name'=>'Gold Star', 'price'=>20]);
//  echo $formated;

?>


<!DOCTYPE html>
<html>

<head>
    
    <title>php tutorials series</title>
</head>

<body>
<!--
   <ul>
       <?php foreach($products as $product){ ?>
           <?php if($product['price']>20){ ?>
              <li><?php echo $product['name'] . '<br>' ?></li>
           
           <?php } ?>
       
       <?php }?>
   </ul>
-->
    
</body>
</html>