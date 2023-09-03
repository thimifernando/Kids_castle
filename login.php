<?php require_once(__DIR__ . "/config/config.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>KIDS CASTLE</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/assets/css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/assets/fontawesome/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/css/style1.css">

</head>
<body>
<div class="login-wrapper">
<div class="container">

<div class="header">
    <h1>Login</h1>
</div>

<div class="main">
            <form action="<?php echo BASEURL ?>/process/login_process.php" method="POST" >
                


               <span>


                 <input class="login-element" type="text" id="email" name="email" placeholder="E-mail"  width="100%" >
  
</span>
<span>
               
                <input class="login-element" type="password" id="password" name="password" placeholder="Password" >
</span>

                <input type="submit" class="submit_btn float-right" id="submit_btn" value="Submit">
                    
   
                </div>   
</body>


</html>