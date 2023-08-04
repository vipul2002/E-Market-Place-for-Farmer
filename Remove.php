<?php
  

$con = mysqli_connect("localhost","root","","login1");
$id = $_GET['id'];
 $query= "DELETE FROM `add_cart` WHERE id ='$id' ";
  mysqli_query($con,$query);
  header('location:Mycart.php');
 

?>