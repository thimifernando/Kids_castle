<?php require_once(__DIR__ . "/../config/config.php"); ?>


<?php

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$birthday = $_POST['birth_day'];
$gender = $_POST['gender'];
$description = $_POST['description'];

$query = "UPDATE users SET
    first_name = '$fname',
    last_name='$lname',
    email='$email',
    birth_day='$birthday',
    gender='$gender',
    description='$description'
    WHERE user_id = '" . $_SESSION['user_id'] . "';";

if ($conn->query($query) === TRUE) {
    // echo  "New recorded addded";

    header('location: ' . BASEURL . "/profile.php?update=success");
} else {
    header('location: '.BASEURL."/profile_edit.php?update=failed");
    // echo "Error inserting records:" . $conn->error;
}


?>
