<?php

$db = mysqli_connect('localhost','root','','krushi_bazaar');
$query = "SELECT * FROM equipments WHERE availability = '1'";
$operation = mysqli_query($db,$query);

 ?>
