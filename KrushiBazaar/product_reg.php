<?php include("backends/logout.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration</title>
  <link rel="shortcut icon" href="images/logo.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <!-- <link href="css/product_reg.css" rel="stylesheet"> -->
  <link href="css/style.css" rel="stylesheet">


  <style>
    /* vertical line */


    .vl {
      border-left: 6px solid #014000;
      height: 450px;
      position: absolute;
      left: 100%;
      margin-left: -30px;
      top: 50px;
    }


    .eq {
      /* margin-top: 0px; */
      display: inline-block;
      position: fixed !important;
      top: 0;
    }

    .container-fluid {
      font-family: 'Poppins', sans-serif;
    }

    .container {
      font-family: 'Poppins', sans-serif;
      margin-top: 200px;

    }

    .bg {
      background: rgb(130, 235, 106);
      background: linear-gradient(90deg, rgba(130, 235, 106, 1) 0%, rgba(153, 200, 144, 1) 31%, rgba(190, 221, 66, 1) 100%);
    }

    .terms {
      max-width: 450px;
      text-align: left;
      color: #014000;
      padding: 70px;
      padding-top: 90px;
    }

    .register-right .btn-primary {
      float: right;
      border-radius: 1.5rem;
      border: none;
      width: 100px;
      background: #2D6B1A;
      font-weight: 150;
      color: #fff;
      margin-top: 20px;
      padding: 10px;
      margin-right: 300px;
    }

    .register-right .btn-primary:hover {
      background: #3D4465;
    }


    footer {
      position: static;
      width: 100%;
      margin-bottom: 0px;
      margin-top: 100px;
    }
  </style>

</head>

<body class="bg">

  <!-- navigation -->
  <?php include("header.php"); ?>
  <!--tearms nd condition-->
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <div class="row">
          <div class="col-md-6">
            <div class="terms">
              <h3>Terms & Conditions:</h3>
              <li>Make sure you post in the correct category.</li>
              <li>Do not post the same ad more than once or repost an ad within 7 days.</li>
              <li>Do not upload pictures with watermarks.</li>
              <li>Do not put your email or phone numbers in the description box.</li>
              <li>Do not post ads containing multiple items unless its a package deal.</li>
            </div>
            <div class="vl">
            </div>

          </div>
          <div class="col-md-6 register-right">
            <h2><u>Post Your ad</u></h2>

            <form method="POST" action="backends/product_server.php" enctype="multipart/form-data">

              <div class="form-group">
                <select class="custom-select my-1" data-toggle="tooltip" title="Select product Category !" name="selection">
                  <option selected value="0">Category : None</option>
                  <option value="1">Category : Equipments</option>
                  <option value="2">Category : Crops</option>
                  <option value="3">Category : Seeds</option>
                  <option value="4">Category : Others</option>
                </select>
              </div>

              <div class="form-group">
                <input type="text" data-toggle="tooltip" title="Product Title. like - Graps !" class="form-control" placeholder="Title" name="title" required>
              </div>

              <div class="form-group">
                <input type="text" data-toggle="tooltip" title="Product Details !" class="form-control" placeholder="Discription" maxlength="1000" name="description" required>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="digit" data-toggle="tooltip" title="Product Price !" class="form-control" placeholder="Price(Rs)" name="price">
                  </div>
                </div>
                <div class="form-group">
                  <input type="checkbox" name="negotiable">Negotiable</input>
                </div>
              </div>

              <div class="form-group">
                <input type="digit" data-toggle="tooltip" title="Enter Your Phone Number !" class="form-control" placeholder="Phone Number" name="phone_number">
              </div>
              <h5>Location:</h5>
              <div class="clearfix"></div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <select class="custom-select my-1" data-toggle="tooltip" title="Select District !" name="division">
                      <option selected value="0">Ahmedabad</option>
                      <option value="1">Gandhinagar</option>
                      <option value="2">Mehsana</option>
                      <option value="3">Rajkot</option>
                      <option value="4">Anand</option>
                      <option value="5">Amreli</option>
                      <option value="6">Wankaner</option>
                    </select>
                  </div>
                </div>

              </div>



              <div class="form-group">
                <h5>Add Photo</h5>
                <input type="file" data-toggle="tooltip" title="Choose your product image in (png , jpg) format !" name="image" required>
              </div>

              <div class="form-group">
                <button type="submit" name="submit_btn" id="submit_btn" class="btn btn-primary">Submit</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>
  <!--connect-->
  <footer>
    <p>&copy 2023 Krushi Bazaar.All rights reserved.</p>
  </footer>
</body>

</html>