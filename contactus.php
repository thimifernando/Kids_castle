<?php
require_once(__DIR__ . "../config/config.php");
?>
<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/assets/fontawesome/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>

<div class="contactus-wrapper">
        <div class="form">
   
    <form action="<?php echo BASEURL ?>/process/contactus_process.php" method="POST" id="contactus_form">
        <div >           
                    <div class="cont-form-group">
                        <label for="name"><b> Name :</b></label>
                        <input class="con-form-element" type="text" id="fname" name="c_name" placeholder="name.." autocomplete="off" required>
                    </div>
                    <div class="cont-form-group">
                        <label for="email"><b>Email :</b></label>
                        <input class="con-form-element" type="text" id="email" name="c_email" placeholder="Your valide email.." autocomplete="off" required>
                    </div>
                    <div class="cont-form-group">                         
                        <label for="male"><b>Male :</b></label>
                        <input class="form-radio" type="radio" name="gender" id="male" value="M" >
                        <label for="male"><b>Female :</b></label>
                        <input class="form-radio" type="radio" name="gender" id="female" value="F" checked>
                    </div>
                    <div class="cont-form-group">
                        <label for="description"><b>Description :</b></label><br>
                        <textarea class="con-form-element" name="C_description" rows="6" cols="50" required></textarea>
                    </div>
                    <div class="w-100 p-1">
                    <input type="submit" class="submit_btn float-right" id="submit_btn" value="Submit">
                    </div>
        </div>
    </div>
</div>
    </form>


</body>

</html>





