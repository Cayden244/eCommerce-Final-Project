<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Vehicle Information</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-item.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php include('nav.php'); ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

    <?php 
      include('shopname.php'); 
    ?>

    <?php echo "
      <div class=col-lg-9>

        <div class=card mt-4>
          <img class=card-img-top img-fluid src=http://placehold.it/900x400 alt=>
          <div class=card-body>
            <h3 class=card-title>".$_GET["make"]." ".$_GET["model"]."</h3>
            <h4>$".$_GET["price"]."</h4>
            <p class=card-text>Year: ".$_GET["year"]."</p>
            <p class=card-text>Color: ".$_GET["color"]."</p>
            <p class=card-text>Milage: ".$_GET["milage"]."</p>
            
          </div>
        </div>
        <!-- /.card -->

        <div class=card card-outline-secondary my-4>
          <div class=card-header>
            Vehicle Description:
          </div>
          <div class=card-body>
            <p>".$_GET["des"]."</p>
            
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->"
      ?>
    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include('footer.php'); ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
