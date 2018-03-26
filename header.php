<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tech Learner</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">

	<style>
	#heading
	{
		color: green;
		font-family:Monotype Corsiva;
	}

	</style>
</head>
<body>
<center><h1 id ="heading">Tech Learner</h2></center>
	<nav class="navbar navbar-default" id="navigation">
		<div class="container-fluid">
			<!--meant for branding of the website-->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<img src="photo.jpg" class="navbar-brand" id="brand">

			</div>
			<!--left hand side options-->
			<div class="collapse navbar-collapse" id="#mainNavBar">
				<ul class="nav navbar-nav">
					<li><a href="index.php" id="blink" style="color:black;">Home</a></li>
					<li><a href="about.html" id="blink" style="color:black;">About</a></li>
					<li><a href="donate.html" id="blink" style="color:black;">softwares</a></li>
					<li><a href="donate.html" id="blink" style="color:black;">Operating system</a></li>
					<li><a href="/TechLearner_03_04_18/contact.php" id="blink" style="color:black;">Contact Us</a></li>
			</ul>
					<div id="notloggedin" class="dropdown" style="float: right">
				    	<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Login/Signup
				    	<span class="caret"></span></button>
				    	<ul class="dropdown-menu" style="position:absolute;right:0px">
				     		<li><a href="login/Admin_login.php">Admin login</a></li>
				     		<li><a href="login/login.php">user login</a></li>
				      	 	<li><a href="login/Registration">Sign up user</a></li>
				      	 	<li><a href="Logout.php">logout</a></li>
				     	</ul>
					</div>

					<div id="loggedin" style="float: right">
		<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><img src="icon_user.png" alt="Profile image" class="img-circle" /><span class="caret"></span></button>
		<ul class="dropdown-menu" style="position:absolute;right:0px">
				      <li><a href="dashboard.php">Dashboard</a></li>
				      <li><a href="logout.php" class="btn btn-danger">Logout</a></li>
		</ul>
	</div>
			</div>
		</div>
	</nav>
<style>

	</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		<?php 
		if(isset($_SESSION['admin_name'])){

		?>
				$("#notloggedin").hide();
		        $("#loggedin").show();
		<?php
		    }else{
		?>
		    	$("#notloggedin").show();
		        $("#loggedin").hide();
		<?php
		    } 		
		?>

	</script>
</body>

</html>
