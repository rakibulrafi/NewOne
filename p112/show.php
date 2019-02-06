<?php

require 'database.php';


$qu="SELECT* FROM users ";
$result = mysql_query($qua);

$num=mysql_numrows($result);
mysql_close();

$i=0;
while($i<$num){
$email=mysl_result($result,$i,"email:");
$password=mysl_result($result,$i,"password:");
$confirmpassword=mysl_result($result,$i,"confirmpassword");

echo" Email: $email <br/> password:$password</br> confirmpassword: $confirmpassword ";

$i++;
}


?>
