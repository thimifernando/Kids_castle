<?php require_once(__DIR__ . "/../config/config.php");

$query = "SELECT * FROM users";

$data = $conn->query($query);
?>
<table border="2px">
    <tr>
        <th>user id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Birth_Day</th>
        <th>Gender</th>
        <th>Description</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($data)) {
    ?>
        <tr>
        <td><?php echo $row['user_id'] ?></td>
            <td><?php echo $row['first_name'] ?></td>
            <td><?php echo $row['last_name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['birth_day'] ?></td>
            <td><?php echo $row['gender'] == 'M' ? 'Male' : 'Female' ?></td>
            <td><?php echo $row['description'] ?></td>
        </tr>
    <?php
    } ?>
</table>
<BR><BR>
<?php
$query = "SELECT * FROM feedback";

$data = $conn->query($query);
?>
<table border="2px">
    <tr>
        <th>user id</th>
        <th>Fdescription</th>
  
    </tr>
    <?php
    while ($row = mysqli_fetch_array($data)) {
    ?>
        <tr>
            <td><?php echo $row['user_id'] ?></td>
            <td><?php echo $row['Fdescription'] ?></td>

        </tr>
    <?php
    } ?>
</table>

<BR><BR>
<?php
$query = "SELECT * FROM contactus";

$data = $conn->query($query);
?>
<table border="2px">
    <tr>
        <th> ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Description</th>
  
    </tr>
    <?php
    while ($row = mysqli_fetch_array($data)) {
    ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['c_name'] ?></td> 
            <td><?php echo $row['c_email'] ?></td>
            <td><?php echo $row['gender'] == 'M' ? 'Male' : 'Female' ?></td>
            <td><?php echo $row['C_description'] ?></td>
        </tr>
    <?php
    } ?>
</table>



