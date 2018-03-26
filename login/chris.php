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

$name=$_POST['user_name'];
$phone
$sql=insert into users values('$name',$phone,);
$query=mysqli_query($con,$sql);

 ?>
<html>
<body>
<form>
  enter name : <br>
  <input type="text" name="user_name"></input>

</form>
</body>
</html>
