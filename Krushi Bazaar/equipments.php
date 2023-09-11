<?php include("backends/logout.php");
include("backends/cat.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Equipments</title>
  <link rel="shortcut icon" href="images/logo.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <script src="scripts/modal_login.js"></script>
  <link href="css/style.css" rel="stylesheet">


  <style>
    .eq {
      margin-top: 0px;
      display: inline-block;
      position: fixed;
      top: 0;
    }

    .container-fluid {
      font-family: 'Poppins', sans-serif;
    }

    .container {
      font-family: 'Poppins', sans-serif;
    }
   
  </style>
</head>

<body style="background-color:#F8F9FB">


  <?php include("header.php"); ?>

  <!-- login content -->

  <div class="container-fluid" id="login_content" style="display:none;">
    <div class="row jumbotron">
      <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-xl-9">
        <p class="lead">Welcome back <?php echo ($_SESSION['username']); ?>, Here is the list of available equipments.
        </p>
      </div>
      <div class="col-md-1">
        <a href="equipment_reg.php"><button class='btn btn-default btn-rounded mb-4 btn-success'>Post Your Ad</button></a>
      </div>
      <div class="col-md-1" style="padding-left:45px;">
        <a href="products.php?logout='1'"><button class='btn btn-default btn-rounded mb-4 btn-danger'>Log Out</button></a>
      </div>
    </div>
  </div>

  <!-- guest content -->


  <div class="container-fluid" id="content">
    <div class="row jumbotron">
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
        <p class="lead">To post your advertise for rent, you must log in first. </p>
      </div>
      <div class="text-center" style="padding-top: 13px;">

        <a href="login.php" style="margin:5px;" class="btn btn-default btn-rounded mb-4 btn-primary">Login</a>
      </div>



      <div class="text-center" style="padding-top: 13px;">

        <a href="registration.php" style="margin:5px;" class="btn btn-default btn-rounded mb-4 btn-primary">Register</a>
      </div>
    </div>
  </div>

  <!-- product view -->

  <div class="container" style="background-color:#EBEBEB;padding-top: 20px;">
    <div class="row">
      <div class="col-md-3">
        <ul class="list-group">
          <li class="list-group-item active">Locations</li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Ahmedabad
            <span class="badge badge-secondary badge-pill"><?php echo ($dh); ?></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Gandhinagar
            <span class="badge badge-secondary badge-pill"><?php echo ($rj); ?></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Mehsana
            <span class="badge badge-secondary badge-pill"><?php echo ($ch); ?></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Rajkot
            <span class="badge badge-secondary badge-pill"><?php echo ($ra); ?></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Anand
            <span class="badge badge-secondary badge-pill"><?php echo ($kh); ?></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Amreli
            <span class="badge badge-secondary badge-pill"><?php echo ($ba); ?></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Wankaner
            <span class="badge badge-secondary badge-pill"><?php echo ($sy); ?></span>
          </li>
        </ul>
      </div>

      <!-- php code goes here -->
      <div class="col-sm">
        <?php
        $db = mysqli_connect('localhost', 'root', '', 'krushi_bazaar');
        $query = "SELECT * FROM equipments WHERE availability = '1'";
        $operation = mysqli_query($db, $query);
        while ($res = mysqli_fetch_assoc($operation)) {
          $img = $res['image_address'];
          $location = $res['location'];
          $price = $res['price'];
          $title = $res['title'];
          $id = $res['id'] ?>


          <div class="card w-80">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <img class="card-img-top" src="<?php echo ($img) ?>" alt="Card image cap">
                </div>
                <div class="col">

                  <h5 class="card-title"> <?php echo ($title) ?></h5>
                  <p class="card-text">Location: <?php echo ($location) ?>
                    <br>
                    Price: <?php echo ($price) ?> per hour
                  </p>
                  <a href="order_confirmation.php?value=<?php echo ($id) ?>&id=2" class="btn btn-secondary">Details</a>
                </div>
              </div>
            </div>
          </div>
          <br>
        <?php } ?>
      </div>

    </div>
  </div>

  <?php include("footer.php"); ?>
</body>

</html>
<script>
  var user = "<?php echo (isset($_SESSION['username'])); ?>";
  console.log(user);
  if (user) {

    document.getElementById('login_content').style.display = 'block';
    document.getElementById('content').style.display = 'none';
  }
</script>