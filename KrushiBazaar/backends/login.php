<?php
session_start();
$phone = "";
$errors = array();
$db = mysqli_connect('localhost', 'root', '', 'krushi_bazaar');

if (isset($_POST['login_user'])) {
  $phone = $_POST['phone'];
  // $username = $_POST['username'];
  $password = $_POST['password_1'];
  $user =  $_POST['users'];

  if (empty($phone) || empty($password) || empty($user)) {
    header('Location: ../login.php?error=true');
    exit();
  }

  // $password = md5($password); // Assuming you're storing hashed passwords

  if ($user == 'Admin') {
    $query = "SELECT * FROM `multiuser` WHERE `phone`='$phone' AND `password`='$password' AND `usertype`='$user'";
  } elseif ($user == 'Farmer') {
    $query = "SELECT * FROM `multiuser` WHERE `phone`='$phone' AND `password`='$password' AND `usertype`='$user'";
  } elseif ($user == 'Businessmen') {
    $query = "SELECT * FROM `multiuser` WHERE `phone`='$phone' AND `password`='$password' AND `usertype`='$user'";
  } else {
    header('Location: ../login.php?error=true');
    exit();
  }

  $results = mysqli_query($db, $query);

  if (mysqli_num_rows($results) == 1) {

    $rslt = mysqli_fetch_assoc($results);
    
    $_SESSION['phone'] = $rslt['phone'];
    $_SESSION['user_id'] = $rslt['id'];
    $_SESSION['username'] = $rslt['username'];
    $_SESSION['usertype'] = $rslt['usertype'];
    // $_SESSION['admin'] = $rslt['adminship'];
    $_SESSION['status'] = 1;
    $_SESSION['success'] = "You are now logged in";

    // special condition for Admin Role
    if($rslt['usertype'] == 'Admin') {
    header('Location: ../admindashboard.php');
    exit();
    }

    // for Farmer and Businessmen Role
    header('Location: ../index.php');
    exit();
  }
  else {
    header('Location: ../login.php?error=true');
    // echo "Login failed: " . mysqli_error($db);
    exit();
  }
}
