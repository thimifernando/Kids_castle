
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
</head>
<body>
    <h1 style="text-align:center;">admin</h1>
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



</form>

</html>