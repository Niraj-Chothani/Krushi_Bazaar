<?php include("backends/logout.php"); ?>


<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Krushi Bazaar</title>
  <link rel="shortcut icon" href="images/Logo-1.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <script src="scripts/modal_login.js"></script>
  <link href="css/style.css" rel="stylesheet">

  <style>
    #content {
      font-family: 'Poppins', sans-serif;
    }

    .container-fluid {
      font-family: 'Poppins', sans-serif;
    }
  </style>


</head>

<body>


  <!-- navigation bar -->

  <?php include("header.php"); ?>


  <div id="slides" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="carousel-caption">
          <h1 class="display-2">Krushi Bazaar</h1>
          <h3>A web platform for farmers,buyers and everyone</h3>
          <a href="products.php"><button type="button" class="btn btn-outline-light btn-lg">Trading</button></a>
          <a href="equipments.php"><button type="button" class="btn btn-primary btn-lg">Equipments</button></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Jumbotron -->

  <div class="container-fluid" id="login_content" style="display: none;">
    <div class="row jumbotron">
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
        <p class="lead">Hello <?php echo ($_SESSION['username']); ?>, Welcome to Krushi Bazaar. Now you are able to create your
          advertise about your equipment or product or both.</p>
        <ul>
          <li><a href="equipments.php">Equipments rental section.</a></li>
          <li><a href="products.php">Products buy/sell section.</a></li>
          <!-- <li><a href="history.php">Manage Profile</a></li> -->
        </ul>
      </div>
      <div class="col" style="padding-top:50px;">
        <a href="index.php?logout='1'"><button class='btn btn-default btn-rounded mb-4 btn-danger'>Log Out</button></a>
      </div>

    </div>
  </div>



  <div class="container-fluid" id="content">
    <div class="row jumbotron">
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
        <p class="lead">Welcome to Krushi Bazaar. To access full feature you have to Register/ Login here. </p>
      </div>
      <div class="text-center" style="padding-top: 13px;">

        <a href="login.php" style="margin:5px;" class="btn btn-default btn-rounded mb-4 btn-primary">Login</a>
      </div>



      <div class="text-center" style="padding-top: 13px;">

        <a href="registration.php" style="margin:5px;" class="btn btn-default btn-rounded mb-4 btn-primary">Register</a>
      </div>
    </div>
  </div>

  <!-- content  -->

  <!--welcome section -->
  <div class="container-fluid padding">
    <div class="row welcome text-center">
      <div class="col-12">
        <h1 class="display-4 kb">Welcome To <span>Krushi Bazaar!.</span></h1>
      </div>
      <hr>
      <div class="col-12">
        <p class="lead">This is a web based platform specially for farmers for
          buying and selling crops and renting Equipments. Here the users can:</p>
        <div style="text-align:left;padding-left:15%;">
          <li>Buy & Sell Products</li>
          <li>Rent Modern Equipments</li>
          <li>Consulting with Agri engineers through admins</li>
          <li>Book preservation center</li>
          <li>Acknowledge about Smart Farming, Technology & Current Market</li>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid padding">
    <div class="row text-center padding">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="col-xs-12 col-sm-6 col-md-3 card1">
        <h3>Equipments Renting.</h3>
        <p>Can easily take agricultural equipments on rent using this website</p>
      </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="col-xs-12 col-sm-6 col-md-3 card2">
        <h3>Trading</h3>
        <p>Can sell their crops or buy/sell seeds with eligible price</p>
      </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="col-sm-12 col-md-3 card3">
        <h3>Informations</h3>
        <p>Informations about Preservation Center, Govt. Projects, Current Rate etc</p>
      </div>
    </div>
    <hr class="my-4">
  </div>

  <!--two column section-->
  <div class="container-fluid padding">
    <div class="row padding">
      <div class="col-md-12 col-lg-6" style="text-align:justify; margin-left:30px;font-family: 'Poppins', sans-serif;">
        <h3>Our Philosophy</h3><br>
        <p> Technology has made inroads into almost all spheres of life, but sadly, India’s vast agricultural sector has a severe lack of it.
          Less than 20% of our farmers use the necessary equipment that facilitates productive and profitable work.India primarily consists
          of small and medium landholding farmers who look to rent equipment, usually on an hourly basis.Small and marginal land holding farmers,
          who constitute 85 percent of farmers’ population in India, were not taking interest in purchasing such tools and, hence, not able
          to draw any mechanical help.</p> </b>

        <p>According to a FICCI report Transforming Agriculture through Mechanisation, released in December 2015, farm mechanisation in
          India is 40 percent, 95 percent in the US and Western Europe, 80 percent in Russia, 75 percent in Brazil and 48 percent in China.</p></b>

        <p>But after surveying, we noticed that where equipments were being used for farming, they were used for a small period of time.
          Farmers who owned such tools utilised them for less than 2-3 weeks in each season; and the rest of the time they lay idle.
          From that we come with a thought that why not bring the idle equipments to the use of other farmers who didn’t have any!!</p>
        <p>Our vision is to make agriculture profitable for vulnerable farmers.It aims to raise the level of mechanization in farming through
          the power of technology and a strong franchisee network to make farm mechanization easily accessible, affordable and reachable to
          farmers across BD. </p>
        <br>
        <a href="#" class="btn btn-primary">Learn More</a>
      </div>
      <br>
      <div class="col-lg-4">
        <img src="images/i3.jpg" class="side_img">
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