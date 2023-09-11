<?php
session_start();
$id = $_GET['value'];
$p_id = $_GET['id'];
?>
<?php include("header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Order Confirmation</title>
  <link rel="shortcut icon" href="images/logo.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <link href="css/order_confirmation.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <style>
    .eq {
      margin-top: 0px;
      /* display: inline-block; */
      position: fixed;
      top: 0;
    }

    .container-fluid {
      font-family: 'Poppins', sans-serif;
    }

    .container {
      font-family: 'Poppins', sans-serif;
      margin-top:200px ;
     
    }

    footer{
      display:inline-block;
      width: 100%;
      position: fixed;
      bottom: 0;
    }

  </style>


</head>

<body>



  <?php
  $db = mysqli_connect('localhost', 'root', '', 'krushi_bazaar');

  if ($p_id == '1') $query = "SELECT * FROM products WHERE id = '$id'";
  else $query = "SELECT * FROM equipments WHERE id = '$id'";

  $operation = mysqli_query($db, $query);
  $res = mysqli_fetch_assoc($operation);
  ?>

  <div class="container">
    <div class="row">
      <div class="risha col-md-8">
        <img src="<?php echo ($res['image_address']); ?>" class="img-thumbnail">
      </div>
      <div class="col" style="padding-bottom:50px;">
        <h4>Product Details: </h4>
        <p><b>Title: </b> <?php echo ($res['title']); ?>
          <br>
          <b>Price: </b> Rs. <?php echo ($res['price']); ?> Only <br>
          <?php if ($p_id == '2') echo ("NB: Price is applicable for one hour."); ?>
          <br>
          <b>Location: </b> <?php echo ($res['location']); ?>
        </p>

        <button onclick="myFunction()" class="btn btn-primay" id="confirm_btn">Confirm</button>
        <?php
        if ($p_id == '1') { ?>
          <a href="products.php"><button class="btn btn-danger">Back to List</button></a>
        <?php  } else { ?>
          <a href="equipments.php"><button class="btn btn-danger">Back to List</button></a>
        <?php  } ?>

      </div>
    </div>
  </div>

  <script type="text/javascript">
    function myFunction() {
      var ph = <?php echo ($res['phone_number']); ?>;
      document.write("Confirm Your Order!", "For confirmation,Please contact with this number.\n" + "Contact Number: " + ph + "\n");
    }
  </script>
  
  <?php include("footer.php"); ?>
  
</body>

</html>