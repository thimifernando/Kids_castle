<?php require_once(__DIR__ . "/../config/config.php"); 


$game_data=$_POST['game_data']; 
$img=$_POST['img'];

$query ="INSERT INTO images (`game_data`,`img`)
VALUES('$game_data','$img')"; 

if($conn->query($query)===TRUE){
     //echo  "New recorded addded";
    
    header('Location: ' . BASEURL . '/index.php?' );
}
else {
    echo "Error inserting records:".$conn->error;
}






?>