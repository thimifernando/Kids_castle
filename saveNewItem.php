 <?php
 include './config/config.php';
 
 $record=$_POST['record'];
// $img=$_POST['itemImg'];
//  $stores=implode(", ",$_POST['stores']);
//  echo  $stores;
 $query="INSERT INTO image (`description`)
 VALUES('$record')";
 
 if($conn->query($query)===TRUE){
	 $id = $conn->insert_id;
	//  echo "New record added. ID is :".$id;	 
  header('location: '.BASEURL."?imguploded_=success");

 }else{
	 echo "Error inserting record: ".$conn->error;
 }
echo basename($_FILES["itemImg"]["name"]);
 $target_dir = "itemImages/";
 $target_file = $target_dir . basename($_FILES["itemImg"]["name"]);
 
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 
 $saveName= $id.".".$imageFileType;
//$saveName= $id."_".$x.".".$imageFileType;
 
 if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["itemImg"]["tmp_name"]);
  if($check !== false) {
    //echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["itemImg"]["tmp_name"], $target_dir.$saveName)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["itemImg"]["name"])). " has been uploaded.";
  
  $updatesql="UPDATE image SET itemImg='$saveName' WHERE imageid='$id'";
  echo "<br>".$updatesql."<br>";
  
  if($conn->query($updatesql)){
	  echo "table updated...";
  }else{
	echo "table not updated...";  
  }
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

 
 
 ?>