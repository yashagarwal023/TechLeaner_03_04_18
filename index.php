<?php
 
 include('config.php');


 


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
       <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/common.css" />
        <link rel="stylesheet" type="text/css" href="css/style7.css" />


</head>
<body>
<?php
include("header.php");
?>
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
<section class="main">
      
        <ul class="ch-grid">
          <li>
            <div class="ch-item" style="background-image: url(images/css1.jpg);">       
              <div class="ch-info">
                <div class="ch-info-front ch-img-1" style="background-image: url(images/css1.jpg);"></div>
                <div class="ch-info-back">
                  <h3>Youtube Links</h3>
                  <p><a href="https://www.youtube.com/">Youtube Links for installing ISO and softwares</a></p>
                </div>  
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item" style="background-image: url(images/css2.jpg);">
              <div class="ch-info">
                <div class="ch-info-front ch-img-2" style="background-image: url(images/css2.jpg);"></div>
                <div class="ch-info-back">
                  <h3>Softwares</h3>
                  <p><a href="softwares.php">It contains for different operating system</a></p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item" style="background-image: url(images/css3.jpg);">
              <div class="ch-info">
                <div class="ch-info-front ch-img-3" style="background-image: url(images/css3.jpg);"></div>
                <div class="ch-info-back">
                  <h3>OS</h3>
                  <p><a href="os.php">It contains the .iso files</a></p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item" style="background-image: url(images/css4.jpg);">
              <div class="ch-info">
                <div class="ch-info-front ch-img-3" style="background-image: url(images/css4.jpg);"></div>
                <div class="ch-info-back">
                  <h3>Admin pannel</h3>
                  <p><a href="os.php">admin can delete fake user</a></p>
                </div>
              </div>
            </div>
          </li>
        </ul>
        
      </section>
</body>
</html>

<?php
include("footer.php");
?>