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
    <meta charset="utf-8">
    <title>FitLife.com</title>
  </head>
  <body>

    <script type="text/javascript" src="js/calculate.js">

</script>
  </body>
</html>
