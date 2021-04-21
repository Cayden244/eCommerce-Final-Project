<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cars</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>



  <!-- Navigation -->
  <?php include('nav.php'); ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
    <?php include('shopname.php');?>

      <div class="col-lg-9">
      <h1 class="my-4">Cars</h1>
          
        
        <div class="row">
        <?php 
            include('connectdb.php');
            $sql = "SELECT * FROM cars";
                $res = mysqli_query($mysqli, $sql);
            
                if ($res) {
                  while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                    $id = $newArray['id'];
                    $make = $newArray['make'];
                    $model = $newArray['model'];
                    $price = $newArray['price'];
                    $year = $newArray['year'];
                    $color = $newArray['color'];
                    $milage = $newArray['milage'];
                    $des = $newArray['des'];
                    $newdes = str_replace('+',' ',$des);
                    echo "
                    <div class=col-lg-4 col-md-6 mb-4>
                    <div class=card h-100>
                      <a href=#><img class=card-img-top src=http://placehold.it/700x400 alt=></a>
                      <div class=card-body>
                        <h4 class=card-title>
                          <a href=vehicleinfo.php?make=".$make."&model=".$model."&price=".$price."&year=".$year."&color=".$color."&milage=".$milage."&des=".$des.">".$make." ".$model."</a>
                        </h4>
                        <h5>$".$price."</h5>
                      </div>
                      <div class=card-footer>
                        ".$newdes."
                      </div>
                    </div>
                  </div>
                    ";
                    }
              
                } else {
                  printf("Could not retrieve records: %s\n", mysqli_error($mysqli));
                  }
          ?>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include('footer.php'); ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
