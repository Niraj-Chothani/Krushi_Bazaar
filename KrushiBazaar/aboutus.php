<?php
include("backends/logout.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About us</title>
  <link rel="shortcut icon" href="images/Logo-1.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="scripts/modal_login.js"></script>
  <link href="css/style.css" rel="stylesheet">

  <style>
    .eq{
      margin-top: -99px;
      display: inline-block;
      position: fixed;
      top: 0;
    }

    footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      /* margin-bottom: 0px; */
      /* margin-top: 100px; */
    }
  </style>

</head>

<body style="background-color:#e9ecef;">

  <?php include("header.php"); ?>

  <div style="padding-left: 50px; padding-right:50px; text-align: justify; color: #222; font-size: 1rem;
    font-weight: 400;
    line-height: 1.5; font-family: 'Poppins', sans-serif;">

    <h1 class="lead" style="font-weight:bolder; position:sticky; padding-top:60px; margin-top:7%;"><b>About us</b></h1><br>

    <div class="aboutus" style="text-align: justify;">
      <p>Welcome to Krushi Bazaar! At Krushi Bazaar, we are passionate about empowering farmers and promoting sustainable agriculture.</p>
      <p>We are an online marketplace dedicated to connecting farmers and consumers, bridging the gap between rural and urban communities.Our mission is to provide a platform where farmers can showcase their high-quality, locally-grown produce directly to consumers. We believe in the importance of supporting local farmers and promoting the consumption of fresh, healthy food.

        Our platform offers a wide range of agricultural products, including fruits, vegetables, grains, dairy products, spices, and more. We work closely with farmers to ensure that all the products listed on our platform are of the highest quality, free from harmful chemicals, and grown using sustainable farming practices.

        Through Krushi Bazaar, farmers can reach a larger customer base and sell their products at fair prices, eliminating the need for intermediaries and ensuring that they receive a fair share of the profits. By facilitating direct transactions between farmers and consumers, we aim to create a more transparent and equitable food system.

        For consumers, Krushi Bazaar provides a convenient and reliable way to access fresh, locally-sourced produce. By purchasing directly from farmers, customers can enjoy the taste and nutritional benefits of farm-fresh products while supporting local agriculture.

        We are committed to promoting environmental sustainability and reducing food waste. We actively encourage farmers to adopt eco-friendly practices and minimize the use of harmful chemicals. Additionally, we work to reduce food waste by facilitating efficient distribution and connecting farmers with surplus produce to organizations that can utilize it effectively.

        Krushi Bazaar is not just an online marketplace; it is a community of farmers, consumers, and individuals who are passionate about sustainable agriculture and the future of our food system. We strive to create a platform that fosters knowledge sharing, collaboration, and innovation.

        Join us in our mission to promote sustainable agriculture, support local farmers, and enjoy the benefits of fresh, nutritious food. Together, we can make a positive impact on our communities and the planet.

      </p>
      <p>Welcome to Krushi Bazaar - Where Farmers and Consumers Connect!</p>
      <p>Thank you to visit Krushi Bazaar.</p>
    </div>
  </div>
  <?php include("footer.php"); ?>
</body>

</html>

