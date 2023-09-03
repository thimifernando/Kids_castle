<?php require_once(__DIR__ . "/../config/config.php"); ?>


<?php

// die;


$name=$_POST['c_name']; 
$email=$_POST['c_email'];
$gender=$_POST['gender'];
$description=$_POST['C_description'];

$query ="INSERT INTO contactus (`C_name`,`c_email`,`gender`,`C_description`) 
VALUES('$name','$email','$gender','$description')";  

if($conn->query($query)===TRUE){
    //  echo  "New recorded addded";    
    
   header('location: '.BASEURL."?user_con=success");
}
else {
    echo "Error inserting records:".$conn->error;
}


?>