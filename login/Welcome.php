<?php
session_start();
include("../header.php");

if(!$_SESSION['email'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}

?>

<html>
<head>

    <title>
        Registration
    </title>
</head>

<body>
<h1>Welcome</h1><br>
<?php
echo $_SESSION['email'];
?>

<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
Click below to logout here
<h4><a href="logout.php">Logout here</a> </h4>


</body>

</html>

<?php

include("../footer.php");
?>