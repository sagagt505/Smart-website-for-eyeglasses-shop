<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test Page 3</title>
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
    <h3 class="text-center">What is wear out pattern do you like? </h3>
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading" >1. Plain </div>           
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="glasses detail">
        </div> <!--width="" height=""-->
        <a href="#"><button type="button" class="btn btn-primary btn-block">Button 1</button> </a>
      </div>
    </div>

    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">2. Floral</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <a href="#"><button type="button" class="btn btn-primary btn-block">Button 1</button> </a>
      </div>
    </div>

    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">3. Plaid</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <a href="#"><button type="button" class="btn btn-primary btn-block">Button 1</button> </a>
      </div>
    </div>    
    <br>

    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading" >4. Striped </div>           
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="glasses detail">
        </div> <!--width="" height=""-->
        <a href="#"><button type="button" class="btn btn-primary btn-block">Button 1</button> </a>
      </div>
    </div>

    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">5. Polka Dot</div>
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