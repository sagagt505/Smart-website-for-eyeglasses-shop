<!DOCTYPE html>
<html lang="en">
<head>

  <title>Smart Website For Eyeglasses Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php 
    require_once 'header.php' ;
?>
  <link rel="stylesheet" href="css/custom.css">

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<?php 
    require_once 'navbar.php' ;
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/slide1.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p>
        </div>      
      </div>

      <div class="item">
        <img src="img/slide2.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago - A night we won't forget.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="img/slide3.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Get start! -->
<?php 
  
?>
<div id="main" class="container text-center">
    <h3>Smart Website For Eyeglasses Shop</h3>
    <p><em>For your better vision</em></p>
  <p>Smart Website For Eyeglasses Shop is the website that introduce the best and suit glasses for you.</p>
<br>
<a href="test1.php"><button type="button" class="btn1 btn-primary btn-lg">Let's Start!</button></a>

</div>


<!-- Container (The Product Section) -->
<div id="product" class="bg-1">
  <div class="container text-center">

  <h3>Why you should use ou service?</h3>
  <p><em>We have the best choice for choosing glasses for you.</em></p>

  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>We have many glasses frame shape.</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="img/small1.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Square</p>
        <p>Round</p>
        <p>Aviator</p>
        <p>Clubmaster</p>
        <p>Nerd</p>
        <p>Vintage</p>

      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>We have many popular glasses brand</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="img/small2.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Hoya</p>
        <p>Ray-Ban</p>
        <p></p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>We have quality information about glasses.</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="img/small3.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Glasses Detail</p>
        <p>Accessories for glasses</p>
        <p>All about eyes</p>
      </div>
    </div>
  </div>
  </div>
</div>

<!-- Container (Info Section) -->
<div id="info" class="container">
    <h3 class="text-center">Infomation </h3>
    <p class="text-center">Express all facets of your personality with our high-quality, affordable glasses and sunglasses. </p>  
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-primary">
        <div class="panel-heading" >About Glasses</div>           
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="glasses detail">
        </div> <!--width="" height=""-->

        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
        <a href="#"><button type="button" class="btn btn-primary btn-block">Button 1</button> </a>
      </div>
    </div>

    <div class="col-sm-6"> 
      <div class="panel panel-danger">
        <div class="panel-heading">Glasses Brand</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
        <a href="#"><button type="button" class="btn btn-primary btn-block">Button 1</button> </a>
      </div>
    </div>

  </div>
<br>
   
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-primary">
        <div class="panel-heading">Eye Diseases</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
        <a href="#"><button type="button" class="btn btn-primary btn-block">Button 1</button> </a>
      </div>
    </div>

    <div class="col-sm-6"> 
      <div class="panel panel-danger">
        <div class="panel-heading">Take Care your eyes</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
        <a href="#"><button type="button" class="btn btn-primary btn-block">Button 1</button> </a>
      </div>
    </div>

  </div>
</div><br><br>

  

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">www.w3schools.com</a></p> 
</footer>



  <?php 
    require_once "footer.php";
  ?>

</body>
</html>