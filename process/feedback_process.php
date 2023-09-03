<?php require_once(__DIR__ . "/../config/config.php"); ?>


<?php
if(!isset($_SESSION["successlogin"]) || $_SESSION["successlogin"] != "yes"){
  
  header('Location:' .BASEURL. '/login.php');
  exit;
}

$user_id=$_SESSION['user_id'];
$Fdescription=$_POST['description'];

$query ="INSERT INTO feedback (`user_id`, `Fdescription`)
VALUES('".$user_id."','".$Fdescription."')";  

if($conn->query($query)===TRUE){
     //echo  "New recorded addded";
    
   header('location: '.BASEURL."?feed_back=success");
}
else {
    echo "Error inserting records:".$conn->error;
}


?>