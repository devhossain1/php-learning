<?php

 if(isset($_POST['submit'])){
//    echo htmlspecialchars($_POST['email']);
//    echo htmlspecialchars($_POST['title']);
//    echo htmlspecialchars($_POST['ingredients']);
     
//email check
if(empty($_POST['email'])){
    echo 'An email is required <br/>';  
}else{
   echo htmlspecialchars($_POST['email']); 
}
     //title check
if(empty($_POST['title'])){
    echo 'A title is required <br/>';  
}else{
   echo htmlspecialchars($_POST['title']); 
}
     //the ingredients check
if(empty($_POST['ingredients'])){
    echo 'An email is required <br/>';  
}else{
   echo htmlspecialchars($_POST['ingredients']); 
}
     
 };


?>


<!DOCTYPE html>
<html>
<?php include('templates/header.php'); ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
     <form class="white" action="add.php" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email">
        <label>Pizza Title:</label>
        <input type="text" name="title">
        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients" >
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form> 
</section>

<?php include('templates/footer.php'); ?>

</html>