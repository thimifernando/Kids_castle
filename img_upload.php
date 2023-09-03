<?php require_once(__DIR__ . "/config.php"); ?>
<!DOCTYPE html>
<html>
<body>

<p>Click on the "Choose File" button to upload a file:</p>

<form action="/img_upload_process.php">''
  <input type="file" id="myFile" name="filename">
  <input type="submit">
</form>

</body>
</html>
