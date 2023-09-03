<?php require_once(__DIR__ . "/../config/config.php"); ?>
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

    <div class="flex-container" >
        <div class="nav-bar" >
            <div class="sidenav" style="background-color:#1e262c; height:100%;">
                <a href="<?php echo BASEURL ?>">
                    <img src="<?php echo BASEURL ?>/assets/pic/logo2.jpg" alt="logo" width="55%" height="20%"><BR><br><br><br>
                </a>
                


                <form class="Searchbar" action="/action_page.php" style="margin:auto;max-width:300px">
                    <input type="text" placeholder="Search.." name="search2">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
                <br>
                <br>

                <div class="dropdown">
                    <button class="dropbtn"><span></span>Browse Age <i class="fa fa-caret-right" ></i> </button>
                    <div class="dropdown-content">
                        <a href="<?php echo BASEURL ?>/under8.php">Under 8</a>
                        <a href="<?php echo BASEURL ?>/under12.php">Under 12</a>
                        <a href="<?php echo BASEURL ?>/under16.php">Under 16</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><span></span>Deals <i class="fa fa-caret-right"></i></button>
                    <div class="dropdown-content">
                        <a href="<?php echo BASEURL ?>\lowest_price.php">Under Rs500</a>
                        <a href="<?php echo BASEURL ?>\Middle_price.php">Rs500-Rs1000</a>
                        <a href="<?php echo BASEURL ?>\highly_price.php">Over Rs1000</a>
                    </div>
                </div>
                <?php if (isset($_SESSION['user_role'])) { ?>
                    <a href="<?php echo BASEURL ?>/logout.php" class="nav-link"><span></span>Log out</a>
                <?php } ?>
                <?php if (!isset($_SESSION['user_role'])) { ?>
                    <a href="<?php echo BASEURL ?>/login.php" class="nav-link">SIGN IN</a>
                    <a href="<?php echo BASEURL ?>/register.php" class="nav-link">REGISTER</a>
                <?php } ?>
                <?php if (isset($_SESSION['user_role'])) { ?>
                    <a href="<?php echo BASEURL ?>/profile.php" class="ubtn"><i class="fa-solid fa-user" style="text-align:right; color:#fff;"></i></a>
                <?php } ?>
            </div>

        </div>

        <div class="flex-container2">