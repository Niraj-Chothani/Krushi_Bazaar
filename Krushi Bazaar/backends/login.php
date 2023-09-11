<?php
session_start();
$username = "";
$errors = array();
$db = mysqli_connect('localhost', 'root', '', 'krushi_bazaar');

if (isset($_POST['login_user'])) {
  $username = $_POST['username'];
  $password = $_POST['password_1'];
  $user =  $_POST['users'];

  if (empty($username) || empty($password) || empty($user)) {
    header('Location: ../login.php?error=true');
    exit();
  }

  // $password = md5($password); // Assuming you're storing hashed passwords

  if ($user == 'Student') {
    $query = "SELECT * FROM `student` WHERE `username`='$username' AND `password`='$password'";
  } elseif ($user == 'Farmer') {
    $query = "SELECT * FROM `farmer` WHERE `username`='$username' AND `password`='$password'";
  } elseif ($user == 'Businessmen') {
    $query = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'";
  } else {
    header('Location: ../login.php?error=true');
    exit();
  }

  $results = mysqli_query($db, $query);

  if (mysqli_num_rows($results) == 1) {
    $rslt = mysqli_fetch_assoc($results);
    $_SESSION['username'] = $rslt['username'];
    $_SESSION['user_id'] = $rslt['id'];
    $_SESSION['admin'] = $rslt['adminship'];
    $_SESSION['status'] = 1;
    $_SESSION['success'] = "You are now logged in";
    header('Location: ../index.php');
    exit();
  } else {
    header('Location: ../login.php?error=true');
    // echo "Login failed: " . mysqli_error($db);
    exit();
  }
}
