<?php


require 'database.php';

$message='';
if(!empty($_POST['email'])  && !empty($_POST['password'])):


  $sql="INSERT INTO users (email,password) VALUES(:email,:password)";

  $stm= $conn->prepare($sql);
  $stm->bindParam(':email', $_POST['email']);
  $stm->bindParam(':password', $_POST['password']);

    if($stm->execute() ):
    $message='Successfully Created a new user account';
    else:
      $message='Sorry there must be a problem to creating new account ';
    endif;

endif;
?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Register Page</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
  <div class="header">
  <a href="index.php">HoMe</a>
</div>

<?php if(!empty($message)): ?>
  <p><?= $message ?></p>
<?php endif; ?>
<h1>Register</h1>
  <form action="register.php" method="POST">
    <input type="text" placeholder="Enter your valid email" name="email">
    <input type="password" placeholder="Enter your password" name="password">
    <input type="password" placeholder=" Now Confirm your password" name="confirmPassword">
    <input type="submit">
  </form>


</body>


</html>
