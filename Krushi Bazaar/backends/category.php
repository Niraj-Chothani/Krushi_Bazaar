<?php

$db = mysqli_connect('localhost', 'root', '', 'krushi_bazaar');
$query = "SELECT category, COUNT(id) FROM products GROUP BY category";
$result = mysqli_query($db, $query);
$equ = 0;
$crop = 0;
$seed = 0;
$other = 0;
while($cat = mysqli_fetch_assoc($result)) {
  if($cat['category']=='1') {
    $equ = $cat['COUNT(id)'];
  }
  else if($cat['category']=='2') {
    $crop = $cat['COUNT(id)'];
  }
  else if($cat['category']=='3') {
    $seed = $cat['COUNT(id)'];
  }
  else if($cat['category']=='4'){
    $other = $cat['COUNT(id)'];
  }
  else{
    $zero = $cat['COUNT(id)'];
  }
}






 ?>
