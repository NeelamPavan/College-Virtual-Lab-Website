<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
       <h1>Hello! <span style="background-color:white; color:#B3005E;">Student</span></h1>
      <h1>welcome <span style="background-color:white; color:#B3005E;"><?php echo $_SESSION['user_name'] ?></span></h1>
      <a href="login_form.php" class="btn">Back</a>
      <a href="frames.html" class="btn">Labroom</a>
      <a href="mainframe.html" class="btn">Logout</a>
   </div>

</div>

</body>
</html>