<?php

  session_start();

  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($name !== '' && $email !== '' && $password !==''){
      $_SESSION['name'] = $name;
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;

      header("Location: http://localhost/php/session/index.php");
    }else{
      echo "<h3 style='background-color:red;color:white;'>Please enter all the Fields!!!</h3>";
    }
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Session</title>
  </head>
  <body>

    <form method="post">

      <label for="">Name</label>
      <input type="text" name="name" placeholder="Enter The name"><br/>

      <label for="">Email</label>
      <input type="email" name="email" placeholder="Enter the email"><br/>

      <label for="">Password</label>
      <input type="password" name="password" placeholder="Enter the Password"><br/>

      <input type="submit" name="submit" value="Submit">

    </form>

  </body>
</html>
