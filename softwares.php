<?php

include("config.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>We4Women</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css"> -->
	
</head>


<body>
	
<?php
include ('header.php');
?> 
			
			<img src="images/software.jpg" style="width:100%;position:relative;top:-20px;height:400px;"></img>
</div>

          <div class="container">
          
<br>
<center>
<div id="container1">
        
          
<br>



<h2>Softwares</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by name of os " title="Type in a name">

<ul id="myUL">
  <li><a href="#">VLC</a>
   <br>
 <button type="button" class="btn btn-primary" href="https://www.videolan.org/vlc/download-windows.html">ISO</button>&nbsp&nbsp
 <button type="button" class="btn btn-primary">YouTube Link</button>&nbsp&nbsp<br>

  <br>
  </li>
  
  <li><a href="#">Xampp server</a>
   <br>
 <button type="button" class="btn btn-primary">ISO</button>&nbsp&nbsp
 <button type="button" class="btn btn-primary">YouTube Link</button>&nbsp&nbsp<br>

  <br>
  </li>

 <li><a href="#">Icecream screenrecorder</a>
   <br>
 <button type="button" class="btn btn-primary">ISO</button>&nbsp&nbsp
 <button type="button" class="btn btn-primary">YouTube Link</button>&nbsp&nbsp<br>

  <br>
  </li>


<li><a href="#">Gimp</a>
   <br>
 <button type="button" class="btn btn-primary">ISO</button>&nbsp&nbsp
 <button type="button" class="btn btn-primary">YouTube Link</button>&nbsp&nbsp<br>

  <br>
  </li>

<li><a href="#">Cyberlink</a>
   <br>
 <button type="button" class="btn btn-primary">ISO</button>&nbsp&nbsp
 <button type="button" class="btn btn-primary">YouTube Link</button>&nbsp&nbsp<br>

  <br>
  </li>

</ul>
<style type="text/css">
	{
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
#container1
{
	width:1000px;
	align:center;
}

	</style>
</style>

<script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}
</script>
</center>
</div>
</body>
</html>

<style>

				#banner{
					color:black;
					font-family: roboto thin;
					font-size: 135px;
					position: absolute;
					top:60px;
					left:300px;
				}
				
				#banner3{
				 font-family:  'Tangerine', serif;
				  font-size: 100px;
				  position: absolute;
				  top:90px;
				  left:550px;
				  color:black;

				}

	</style>
<?php
include("footer.php");
?>