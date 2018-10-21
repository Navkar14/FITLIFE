<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar.css">

  </head>
  <body>
    <ul class="nav">
      <?php
      if (isset($_SESSION['user_id']))
      {
          echo '<li>
            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="profiledisplay.php">My Profile</a>
              <a href="app2.php">My Activities</a>
              <a href="#">Achievements</a>
              <a href="logout.php">Logout</a>

        </div>
              <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
              <script>
                function openNav()
                  {document.getElementById("mySidenav").style.width = "250px";}
                function closeNav()
                  {document.getElementById("mySidenav").style.width = "0";}
              </script>
            </li>';}
            ?>
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">Workouts & Programs</a>
              <div class="dropdown-content">
                <a href="workout.php">Workout Videos</a>
                <?php
                if (isset($_SESSION['user_id'])) {
                  echo '<a href="myworkout.php">My Workout Plan</a>';
                }
                else {
                  echo '<a href="workout.php">Workout Plan</a>';
                }
                 ?>
                <a href="mydiet.php">Diet Plans</a>
              </div>
            </li>
            <?php
      if (!isset($_SESSION['user_id']))
        {echo  '<li><a href="signup.php" class="login">Login | SignUp</a></li>';}
        else {
          $uid=$_SESSION['user_id'];
           $query="select fname from profile where user_id = '".$uid."'";
           $result=mysqli_query($conn,$query);
           $row=mysqli_fetch_array($result);
           echo '<li><a href="profile.php" class="login">'.$row['fname'].'</a></li>';
        }
         ?>
         <li> <a href="google1.php">Locate</a> </li>
         <li><a href="about.php">About us</a></li>

        </ul>
  </body>
</html>
