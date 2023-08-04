<?php 

$con = mysqli_connect("localhost","root","","login1");

$id = $_GET['id'];
  $q="DELETE FROM `product` WHERE id = $id";
  mysqli_query($con,$q);
  header('location:Product_display.php');


 ?>