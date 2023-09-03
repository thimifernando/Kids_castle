<?php require_once(__DIR__ . "/config/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
</head>
<body style="background-color:#a5acb8;">
    <h1  style="text-align:center;color:rgb(245 108 45);font-family:'arial';font-weight:900;font-size:250%;text-decoration: underline solid red;">Admin</h1>
</body>
<br><br>
<form action="saveNewItem.php" enctype="multipart/form-data" method="POST">
    <h1>Informations</h1>
<br><br>
<input type="text" name="record">
<br><br>


    <h2>Images upload</h2>
   
     
  <label for="img">Select image:</label>
  <input type="file" name="itemImg" >
  <input type="submit" value="Submit">



   <h2><a href="<?php echo BASEURL ?>/admin/dashboard.php"> Dashboard </a> </h2>


</form>

</html>