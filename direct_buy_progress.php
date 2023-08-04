<?php
  $id=$_GET['id'];
  $con =mysqli_connect("localhost","root","","login1");
  $query = mysqli_query($con,"UPDATE `direct_buy` SET `progress`=1 where product_id=$id");
  header("Location:User_buy_address.php?id=$id")
?>