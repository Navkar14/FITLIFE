<?php
  require 'dbconfig/config.php';
?>

<?php
  // Start the session
  session_start();
  if (isset($_SESSION['user_id']))
    { echo $_SESSION['user_id'];  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<title>FitLife.com</title>

		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="stylesheet" type="text/css" href="css/navbar.css"> -->
		<!-- <link rel="stylesheet" type="text/css" href="css/sidebar.css"> -->
		<!-- <link rel="stylesheet" type="text/css" href="css/slideshow.css"> -->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<style>
		.mySlides {display:none;}
    .column {    -webkit-column-count: 3; /* Chrome, Safari, Opera */
    -moz-column-count: 3; /* Firefox */
    column-count: 3;}
		</style>
		</head>

	<body style="background-color: #d9d9d9">

    <div class="navbar">
      <?php include 'newnavbar.php';?>
    </div>

    <div class="ss">
      <?php include 'ss.php';?>
    </div>

    <!-- <div class="footer">
    <?php //include 'footer.html';?>
    </div> -->

	</body>
</html>
