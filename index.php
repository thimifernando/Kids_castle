<?php

require_once(__DIR__ . "/parts/header.php");
require_once(__DIR__ . "/config/config.php");

?>
<?php if (isset($_GET['user_reg']) && $_GET['user_reg'] == "success") : ?>
    <div class="alert alert-success">
        <h5>Registration Sucess</h5>
    </div>
<?php endif; ?>

<?php if (isset($_GET['feed_back']) && $_GET['feed_back'] == "success") : ?>
    <div class="alert alert-success">
        <h5>Feedback Process Sucess</h5>
    </div>

<?php endif; ?>

<?php if (isset($_GET['user_log']) && $_GET['user_log'] == "success") : ?>
    <div class="alert alert-success">
        <h5>User login Sucess</h5>
    </div>

<?php endif; ?>

<?php if (isset($_GET['user_con']) && $_GET['user_con'] == "success") : ?>
    <div class="alert alert-success">
        <h5>Contact Us Process Sucess</h5>
    </div>

<?php endif; ?>



<div>

    <div class="slideshow-container">

        <div class="mySlides fade">

            <img src="<?php echo BASEURL ?>/itemImages/42.jpg" style="width:100%">

        </div>

        <div class="mySlides fade">

            <img src="<?php echo BASEURL ?>/itemImages/43.jpg" style="width:100%">

        </div>

        <div class="mySlides fade">

            <img src="<?php echo BASEURL ?>/itemImages/50.jpg" style="width:100%">

        </div>
    </div>
</div>

<br>
<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>
<div>
    <p class="trending">TRENDING <a href="<?php echo BASEURL ?>../TRENDING.php" style="font-size: 20px;">view all<a></p>




</div>
<div class="custom-carousel">
    <div class="carousel-wrapper">
        <button class="left"><i class="fa fa-angle-left"></i></button>
        <div class="carousel">
            <div class="item">
                <img src="<?php echo BASEURL ?>/itemImages/37.jpg" width="15%" height="150px" />
                <div style="text-align: center;">
                    <a style="background-color:#f56c2d; font-size:15px; padding:10px 15px; text-align:center; margin:10px 0px; border: none; 
                    border-radius: 4px;">Buy Now</a>
                    <p style="font-family:monospace;">Rs.4000.00 </p>
                    

                </div>
            </div>
            <div class="item">
                <img src="<?php echo BASEURL ?>/itemImages/38.jpg" height="150px" />
                <div style="text-align: center;">
                    <a style="background-color:#f56c2d; font-size:15px; padding:10px 15px; text-align:center; margin:10px 0px; border: none; 
                    border-radius: 4px;">Buy Now</a>
                    <p style="font-family:monospace;">Rs.350.00  </p>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo BASEURL ?>/itemImages/39.jpg" height="150px" />
                <div style="text-align: center;">
                    <a style="background-color:#f56c2d; font-size:15px; padding:10px 15px; text-align:center; margin:10px 0px; border: none; 
                    border-radius: 4px;">Buy Now</a>
                    <p style="font-family:monospace;">Rs.2580.00 </p>
                </div>

            </div>
            <div class="item">
                <img src="<?php echo BASEURL ?>/itemImages/41.jpg" height="150px" />
                <div style="text-align: center;">
                    <a style="background-color:#f56c2d; font-size:15px; padding:10px 15px; text-align:center; margin:10px 0px; border: none; 
                    border-radius: 4px;">Buy Now</a>
                    <p style="font-family:monospace;">Rs.1450.00 </p>
                </div>

            </div>
            <div class="item">
                <img src="<?php echo BASEURL ?>/itemImages/39.jpg" height="150px" />
                <div style="text-align: center;">
                    <a style="background-color:#f56c2d; font-size:15px; padding:10px 15px; text-align:center; margin:10px 0px; border: none; 
                    border-radius: 4px;">Buy Now</a>
                    <p style="font-family:monospace;">Rs.3250.00 </p>
                </div>

            </div>
            <div class="item">
                <img src="<?php echo BASEURL ?>/itemImages/44.jpg" height="150px" />
                <div style="text-align: center;">
                    <a style="background-color:#f56c2d; font-size:15px; padding:10px 15px; text-align:center; margin:10px 0px; border: none; 
                    border-radius: 4px;">Buy Now</a>
                    <p style="font-family:monospace;">Rs.1300.00 </p>
                </div>

            </div>
            <div class="item">
                <img src="<?php echo BASEURL ?>/itemImages/47.jpg" height="150px" />
                <div style="text-align: center;">
                    <a style="background-color:#f56c2d; font-size:15px; padding:10px 15px; text-align:center; margin:10px 0px; border: none; 
                    border-radius: 4px;">Buy Now</a>
                    <p style="font-family:monospace;">Rs.100.00 </p>
                </div>

            </div>

       
           

        </div>
        <button class="right"><i class="fa fa-angle-right"></i></button>
    </div>
</div><br><br>

<p class="trending">EXTRA CONTENT <a href="<?php echo BASEURL ?>../EXTRA_CONTENT.php" style="font-size: 20px;">view all<a></p>

<div class="custom-carousel">
    <div class="carousel-wrapper">
        <button class="left"><i class="fa fa-angle-left"></i></button>
        <div class="carousel">
            <div class="item">
                <img src="<?php echo BASEURL ?>/itemImages/39.jpg" height="150px" />
                <div style="text-align: center;">
                    <a style="background-color:#f56c2d; font-size:15px; padding:10px 15px; text-align:center; margin:10px 0px; border: none; 
                    border-radius: 4px;">Buy Now</a>
                    <p style="font-family:monospace;">Rs.1000.00 </p>
                </div>

            </div>
            <div class="item">
                <img src="<?php echo BASEURL ?>/itemImages/37.jpg" height="150px" />
                <div style="text-align: center;">
                    <a style="background-color:#f56c2d; font-size:15px; padding:10px 15px; text-align:center; margin:10px 0px; border: none; 
                    border-radius: 4px;">Buy Now</a>
                    <p style="font-family:monospace;">Rs.4000.00 </p>
                </div>

            </div>
            <div class="item">
                <img src="<?php echo BASEURL ?>/itemImages/38.jpg" height="150px" />
                <div style="text-align: center;">
                    <a style="background-color:#f56c2d; font-size:15px; padding:10px 15px; text-align:center; margin:10px 0px; border: none; 
                    border-radius: 4px;">Buy Now</a>
                    <p style="font-family:monospace;">Free </p>
                </div>


            </div>
            <div class="item">
                <img src="<?php echo BASEURL ?>/itemImages/43.jpg" height="150px" />
                <div style="text-align: center;">
                    <a style="background-color:#f56c2d; font-size:15px; padding:10px 15px; text-align:center; margin:10px 0px; border: none; 
                    border-radius: 4px;">Buy Now</a>
                    <p style="font-family:monospace;">Rs.6000.00 </p>
                </div>

            </div>
            <div class="item">
                <img src="<?php echo BASEURL ?>/itemImages/47.jpg" height="150px" />
                <div style="text-align: center;">
                    <a style="background-color:#f56c2d; font-size:15px; padding:10px 15px; text-align:center; margin:10px 0px; border: none; 
                    border-radius: 4px;">Buy Now</a>
                    <p style="font-family:monospace;">Rs.5000.00 </p>
                </div>


            </div>
            <div class="item">
                <img src="<?php echo BASEURL ?>/itemImages/48.jpg" height="150px" />
                <div style="text-align: center;">
                    <a style="background-color:#f56c2d; font-size:15px; padding:10px 15px; text-align:center; margin:10px 0px; border: none; 
                    border-radius: 4px;">Buy Now</a>
                    <p style="font-family:monospace;">Rs.3000.00 </p>
                </div>

            </div>
            <div class="item">
                <img src="<?php echo BASEURL ?>/itemImages/44.jpg" height="150px" />
                <div style="text-align: center;">
                    <a style="background-color:#f56c2d; font-size:15px; padding:10px 15px; text-align:center; margin:10px 0px; border: none; 
                    border-radius: 4px;">Buy Now</a>
                    <p style="font-family:monospace;">Rs.2000.00 </p>
                </div>

            </div>
 


       
        </div>
        <button class="right"><i class="fa fa-angle-right"></i></button>
    </div>
</div>
<p class="trending">NEWS <a href="<?php echo BASEURL ?>../NEWS.php" style="font-size: 20px;"><a></p>

<div class="flex-news">

    <div class="news">SUPER MARIO
        <div>The Mario Kart 8 Deluxe<br>Booster Course Pass<br> your ticket to adding 48</div>
    </div>
    <div class="news">SONIC
        <div>NEWS<br>Details</div>
    </div>
    <div class="news">PLANT vs ZOMBIES
        <div>News<br>Details</div>
    </div>
    <div class="news">Candy Crush
        <div>News<br>Details</div>
    </div>
    <div class="news">test topic
        <div>News<br>Details</div>
    </div>
   

</div>



<?php require_once(__DIR__ . "/parts/footer.php"); ?>