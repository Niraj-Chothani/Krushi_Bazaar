<?php
 session_start();
 $id = $_GET['value'];
 $p_id = $_GET['id'];
 include("header.php");
?>

  <!-- php goes here -->
  <?php
  $db = mysqli_connect('localhost','root','','krushi_bazaar');

  
  $query = "SELECT phone_number FROM equipments WHERE id = '$id'";

  $operation = mysqli_query($db,$query);
  $res = mysqli_fetch_assoc($operation);
  ?>
<!DOCTYPE html>
<html>
    <body>
        <p>"Confirm Your Order!", "For confirmation,Please contact with this number."<br>Contact Number: <?php echo($res['phone_number']); ?>  </p>
    </body>
</html>