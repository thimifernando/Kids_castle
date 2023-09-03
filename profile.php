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
  td{
    padding: 10px;
    border-top: 2px solid #f56c2d;
  }
  table{
    border-left: 2px solid #f56c2d;
    border-right: 2px solid #f56c2d;
    border-bottom: 2px solid #f56c2d;
  }
</style>
<div style="margin: 15px;">
  <form action="#">
    <h2 style="background-color:f56c2d;">Your Profile</h2>
    <table>
      <tr>
        <td>First Name</td>
        <td>:</td>
        <td><?php echo $row['first_name'] ?></td>
      </tr>
      <tr>
        <td>Last Name</td>
        <td>:</td>
        <td><?php echo $row['last_name'] ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td><?php echo $row['email'] ?></td>
      </tr>
      <tr>
        <td>Birth Day</td>
        <td>:</td>
        <td><?php echo $row['birth_day'] ?></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td>:</td>
        <td><?php echo $row['gender'] == 'M' ? 'Male' : 'Female' ?></td>
      </tr>
      <tr>
        <td>Discription</td>
        <td>:</td>
        <td><?php echo $row['description'] ?></td>
      </tr>
    </table>
    <div style="display: flex;">
      <a href="<?php echo BASEURL . '/profile_edit.php' ?>">Edit</a>
    </div>
</div>

</form>
</div>




</div>

<?php
require_once(__DIR__ . "../parts/footer.php");
?>