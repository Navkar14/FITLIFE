<?php
require 'dbconfig/config.php';
?>

<?php
// Start the session
session_start();
echo $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FitLife.com</title>

  </head>
  <body>
    <div class="navbar">
      <?php include 'newnavbar.php';?>
    </div>
    <div class="display">

      <?php
      $query0="select * from profile where user_id=" . $_SESSION['user_id'];
      $result = mysqli_query($conn,$query0);
      $row = mysqli_fetch_array($result);
      ?>

     <h2 style="text-align : center">First Name</h2><br>
     <?php    echo "<h2 style='text-align : center'>" . $row['fname'] . "<h2>"; ?><br>
     <h2 style="text-align : center">Last Name</h2><br>
     <?php    echo "<h2 style='text-align : center'>" . $row['lname'] . "<h2>"; ?><br>
     <h2 style="text-align : center">Email</h2><br>
     <?php    echo "<h2 style='text-align : center'>" . $row['email'] . "<h2>"; ?><br>
     <h2 style="text-align : center">Contact</h2><br>
     <?php    echo "<h2 style='text-align : center'>" . $row['contact'] . "<h2>"; ?><br>
     <h2 style="text-align : center">Date Of Birth</h2><br>
     <?php    echo "<h2 style='text-align : center'>" . $row['d_o_b'] . "<h2>"; ?><br>


    <button onclick="location.href = 'profileedit.php';" name="edit" value="">Edit</button>
    <button onclick="location.href = 'profilemed.php';" name="profilemed" value="">My Med Profile</button>


    </div>
</body>
</html>
