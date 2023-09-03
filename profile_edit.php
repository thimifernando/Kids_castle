<?php
require_once(__DIR__ . "../config/config.php");
require_once(__DIR__ . "../parts/header.php");


if (!isset($_SESSION["successlogin"]) || $_SESSION["successlogin"] != "yes") {

  header('Location:' . BASEURL . '/login.php');
  exit;
}


$query = "SELECT * FROM users WHERE user_id=" . $_SESSION["user_id"];

// echo $query;

$data = $conn->query($query);
$row = mysqli_fetch_array($data);
?>
<style>
  .input-set {
    margin: 10px;
  }

  .input-set label {
    display: block;
  }

  .input-set input {
    width: 100%;
    border: 2px solid;
    border-color: #f56c2d;
  }
  .input-set select {
    width: 100%;
    border: 2px solid;
    border-color: #f56c2d;
  }
  .input-set textarea {
    width: 100%;
    border: 2px solid;
    border-color: #f56c2d;
  }

  .update-btn {
    height: 40px;
    width: 100px;
    background-color: #ff8100;
    border-radius: 10px;
    color: #fff;
    border: 0;
    transition: all 300ms ease;
  }

  .update-btn:hover {
    background-color: #ff5e00;
    box-shadow: 0 0px 10px 2px rgb(0 0 0 / 20%);
  }
</style>




<div style="margin: 15px;">
  <form action="<?php echo BASEURL . '/process/update_profile.php' ?>" method="POST">
    <h2 style="background-color:f56c2d;">Your Profile</h2>
    <div style="display:flex; width:100%;">
      <div class="input-set">
        <label>First Name</label>
        <input type="text" value="<?php echo $row['first_name'] ?>" name="first_name" />
      </div>
      <div class="input-set">
        <label>Last Name</label>
        <input type="text" value="<?php echo $row['last_name'] ?>" name="last_name" />
      </div>
      <div class="input-set">
        <label>Email</label>
        <input type="text" value="<?php echo $row['email'] ?>" name="email" />
      </div>
    <!-- </div>
    <div style="display:flex; width:100%;"> -->
      <div class="input-set">
        <label>Birth Day</label>
        <input type="date" value="<?php echo $row['birth_day'] ?>" name="birth_day" />
      </div>
      <div class="input-set">
        <label>Gender</label>
        <select name="gender" id="gender">
          <option value="M" <?php echo $row['gender'] == 'M' ? 'selected' : '' ?>>Male</option>
          <option value="F" <?php echo $row['gender'] != 'M' ? 'selected' : '' ?>>Female</option>
        </select>
      </div>
    </div>
    <div class="input-set">
      <label>Discription</label>
      <textarea name="description" id="description" cols="30" rows="10"><?php echo $row['description'] ?></textarea>
    </div>
    <div style="display: flex; justify-content: end;">
      <button type="submit" class="update-btn">Update</button>
    </div>
</div>

</form>
</div>




</div>

<?php
require_once(__DIR__ . "../parts/footer.php");
?>