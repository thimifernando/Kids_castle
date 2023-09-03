<?php require_once(__DIR__ . "/../config/config.php"); ?>


<?php

// die;

$fname=$_POST['firstname']; 
$lname=$_POST['lastname'];
$email=$_POST['email'];
$birthday=$_POST['birthday'];
$password=md5($_POST['password']);
$gender=$_POST['gender'];
$description=$_POST['description'];

$query ="INSERT INTO users (`first_name`,`last_name`,`email`,`birth_day`,`password`,`gender`,`description`)
VALUES('$fname','$lname','$email','$birthday','$password','$gender','$description')";  

if($conn->query($query)===TRUE){
    // echo  "New recorded addded";
    
    header('location: '.BASEURL."?user_reg=success");
}
else {
    echo "Error inserting records:".$conn->error;
}


?>
