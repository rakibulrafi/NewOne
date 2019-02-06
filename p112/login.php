<?php


if(!empty($_POST['email'])  && !empty($_POST['password'])):

endif;

 ?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Login Page</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<div class="header">
<a href="index.php">HoMe</a>
</div>
<h1>Login<h1>
  <form action="login.php" method="POST">
<input type="text" placeholder="Enter your valid email" name="email">
<input type="password" placeholder="Enter your password" name="password">
<input type="submit">

  </form>


</body>


</html>
