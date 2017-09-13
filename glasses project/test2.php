<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test Page 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<?php 
    require_once 'header.php' ;
?>
  <link rel="stylesheet" href="css/test.css">  
</head>
<body>

<!-- Container (Info Section) -->
<div id="info" class="container">
    <h3 class="text-center">What is color tone of wearout do you like? </h3>
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading" >1. Light tone </div>           
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="glasses detail">
        </div> <!--width="" height=""-->
        <a href="#"><button type="button" class="btn btn-primary btn-block">Button 1</button> </a>
      </div>
    </div>

    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">2. Dark tone</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <a href="#"><button type="button" class="btn btn-primary btn-block">Button 1</button> </a>
      </div>
    </div>

  </div>
</div><br>

  <?php 
    require_once "footer.php";
  ?>

</body>
</html>