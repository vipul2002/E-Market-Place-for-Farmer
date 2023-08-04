<<?php 

$con = mysqli_connect("localhost","root","","login1");

$id = $_GET['id'];
  $q="DELETE FROM `flogin` WHERE id = $id";
  mysqli_query($con,$q);
  header('location:display.php');

 ?>