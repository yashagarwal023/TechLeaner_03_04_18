<?php
 
 include('config.php');
 include ('header.php');

 


    // require_once(LIBRARY_PATH . "/templateFunctions.php");
 
    /*
        Now you can handle all your php logic outside of the template
        file which makes for very clean code!
    */
     
    $setInIndexDotPhp = "Hey! I was set in the index.php file.";
     
    // Must pass in variables (as an array) to use in template
    $variables = array(
        'setInIndexDotPhp' => $setInIndexDotPhp
    );
     


    // renderLayoutWithContentFile("home.php", $variables);

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators" >
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/01.jpg" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/02.jpg" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/03.png" style="width:100%;">
      </div>

       <div class="item">
        <img src="images/04.jpg" style="width:100%;">
      </div>

    </div>
  <!-- </div> -->

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

</body>
</html>

<?php
include("footer.php");
?>