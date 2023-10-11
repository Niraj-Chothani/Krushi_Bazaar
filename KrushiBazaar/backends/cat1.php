<?php

$db = mysqli_connect('localhost', 'root', '', 'krushi_bazaar');
//location Category
$query = "SELECT division, COUNT(id) FROM products GROUP BY division";
$res = mysqli_query($db, $query);
$dh = 0;
$rj = 0;
$ch = 0;
$ra = 0;
$sy = 0;
$ba = 0;
$kh = 0;
while($loc = mysqli_fetch_assoc($res)) {
  if($loc['division']=='Ahmedabad') {
    $dh = $loc['COUNT(id)'];
  }
  else if($loc['division']=='Gandhinagar') {
    $rj = $loc['COUNT(id)'];
  }
  else if($loc['division']=='Mehsana') {
    $ch = $loc['COUNT(id)'];
  }
  else if($loc['division']=='Rajkot') {
    $ra = $loc['COUNT(id)'];
  }
  else if($loc['division']=='Anand') {
    $kh = $loc['COUNT(id)'];
  }
  else if($loc['division']=='Amreli') {
    $ba = $loc['COUNT(id)'];
  }
  else {
    $sy = $loc['COUNT(id)'];
  }
}



 ?>
