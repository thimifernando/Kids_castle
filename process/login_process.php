<?php require_once(__DIR__ . "/../config/config.php"); ?>
<?php

$query = "SELECT * FROM users WHERE email='" . $_POST["email"] . "' AND password=md5('" . $_POST["password"] . "') ";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $_SESSION["successlogin"] = "yes";
        $_SESSION["user_id"] = $row["user_id"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["first_name"] = $row["first_name"];
        $_SESSION["last_name"] = $row["last_name"];
        $_SESSION["user_role"] = $row["user_role"];
    }
    if ($_SESSION["user_role"] == 'Admin') {
        header('Location:' . BASEURL . '/indexadmin.php');
    } else {
        header('Location:' . BASEURL ."?user_log=success");
    }
    exit;
} else {
    $retdata["eml_pass"] = "error";
    header('Location: ' . BASEURL . '/login.php?' . http_build_query($retdata));
    exit;
}

?>
