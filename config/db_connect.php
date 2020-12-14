<?php 


//connect to database
$conn= mysqli_connect('localhost', 'ninjas','hn117083', 'ninjas_pizza');

//check connection
if(!$conn){
    echo 'connection error: ' . mysqli_connect_error();
}


?>