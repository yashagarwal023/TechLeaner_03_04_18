<?php

$servername="localhost";
$username="root";
$password="";
$dbname="users";

$con=mysqli_connect($servername,$username,$password,$dbname);

if($con->connect_error)
{
  echo "not connected";
}
else echo"connected";
 ?>
<html>
<body>
<form>
  enter name : <br>
  <input type="text" name="chris"></input>
</form>
</body>
</html>
