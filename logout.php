<?php require_once(__DIR__ . "/config/config.php"); ?>
<?php
session_destroy();
header('Location:' . BASEURL);
exit;
?>
