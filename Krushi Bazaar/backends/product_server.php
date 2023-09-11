<?php
include("logout.php");

$db = mysqli_connect('localhost', 'root', '', 'krushi_bazaar');
$user = $_SESSION['username'];
$query = "SELECT id FROM `users` WHERE `username`='$user' LIMIT 1";
$result = mysqli_query($db, $query);
$res = mysqli_fetch_assoc($result);
$sid = $res['id'];

if (isset($_POST['submit_btn'])) {

  $title = mysqli_real_escape_string($db, $_POST['title']);
  $des = mysqli_real_escape_string($db, $_POST['description']);
  $price = mysqli_real_escape_string($db, $_POST['price']);
  $category = mysqli_real_escape_string($db, $_POST['selection']);
  $s_id = mysqli_real_escape_string($db, $sid);


  if ($_POST['division'] == 0) $div = 'Ahmedabad';
  else if ($_POST['division'] == 1) $div = 'Gadhinagar';
  else if ($_POST['division'] == 2) $div = 'Mehsana';
  else if ($_POST['division'] == 3) $div = 'Rajkot';
  else if ($_POST['division'] == 4) $div = 'Anand';
  else if ($_POST['division'] == 5) $div = 'Amreli';
  else $div = 'Wankaner';

  $division = mysqli_real_escape_string($db, $div);

  if (isset($_POST['negotiable'])) {
    $negotiable = mysqli_real_escape_string($db, 'yes');
  } else $negotiable = mysqli_real_escape_string($db, 'no');

  $phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);

  // $temp = $_POST['para'] . ',' . $_POST['thana'] . ',' . $_POST['district'] . ',' .$div;
  ///echo("$temp");
  // $location = mysqli_real_escape_string($db, $temp);
  $location = $_POST['division'];

  /// storing in Database

  $sql = "INSERT INTO `products` (title,description,price,phone_number,location,negotiable,category,division,availability)
        VALUES('$title', '$des', '$price', '$phone_number', '$location', '$negotiable', '$category', '$division', '1')";
  if (mysqli_query($db, $sql)) $flag = 1;
  else echo ("error" . mysqli_error($db));

  $last_inserted_id = mysqli_insert_id($db);

  $tempname = $_FILES["image"]["tmp_name"];
  $extension = (string)$last_inserted_id;
  $folder = "../images/products/" . $extension;
  move_uploaded_file($tempname, $folder);
  $folder = "./images/products/" . $extension;
  $query = " UPDATE products SET image_address='$folder' WHERE id = '$last_inserted_id' ";
  if ($flag && mysqli_query($db, $query)) {
    $_SESSION['msg'] = "Successfully added the advertise.";
    header("location: ../products.php");
  } else {
    $_SESSION['msg'] = "Error occured during operation.please try again.";
    header("location: ../product_reg.php");
  }
}
