<?php 

//connect to database
$conn= mysqli_connect('localhost', 'ninjas','hn117083', 'ninjas_pizza');

//check connection
if(!$conn){
    echo 'connection error: ' . mysqli_connect_error();
}
//write query for all pizza
$sql = 'SELECT title, ingredients, id FROM ninjaz ORDER BY created_at';

//make querry and get result
$result = mysqli_query($conn, $sql);

//fetch the  resulting rows as an array
 
$pizzas =mysqli_fetch_all($result, MYSQLI_ASSOC);
//free result form memory
mysqli_free_result($result);

//connection close
mysqli_close($conn);

//print_r($pizzas);





?>


<!DOCTYPE html>
<html>
<?php include('templates/header.php'); ?>
<h4 class="center grey-text">pizza!</h4>
<div class="container">
    <div class="row">
        <?php foreach($pizzas as $pizza) { ?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                   <div class="card-content center">
                       <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                       <div><?php echo htmlspecialchars($pizza['ingredients']); ?></div>
                   </div>
                    <div class="card-action right-align">
                        <a href="#" class="brand-text"> More info</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include('templates/footer.php'); ?>


</html>