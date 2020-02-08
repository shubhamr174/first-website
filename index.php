<?php

  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Session</title>
  </head>
  <body>

    <?php
      if(isset($_SESSION["name"])){
        ?><h3>Welcome <?php
        echo $_SESSION["name"];
        ?></h3>
        <p>Email : <b><?php echo $_SESSION['email']?></b></p>
        <p>Password : <b><?php echo $_SESSION['password']?></b></p>

        <a href="logout.php">LOGOUT</a>
        <?php
      }else{
        echo "<h2>No one is logged in</h2>";
        echo "<a href='login.php'>Login</a>";
      }
    ?>
  </body>
</html>
