<?php
require_once(__DIR__ . "../config/config.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>KIDS CASTLE</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/assets/fontawesome/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>

<body>
    <div class="register-wrapper">
        <div class="form">
            <form action="<?php echo BASEURL ?>/process/feedback_process.php" method="POST">
                <div>
                    <div class="form-group textarea w-100">
                        <h4  class="head-feedbacek"for="description">Your Feedback</h4>
                        <textarea class="form-element" name="description" rows="6" style="width: 100%; height:200px;" required></textarea>
                    </div>
                </div>
                <div class="w-100 p-1">
                    <input type="submit" class="submit_btn float-right" id="submit_btn" value="Submit">
                </div>

            </form>
        </div>
    </div>
    <script src="<?php echo BASEURL ?>/assets/js/validation.js"></script>






</body>

</html>





<?php require_once(__DIR__ . "/parts/footer.php"); ?>