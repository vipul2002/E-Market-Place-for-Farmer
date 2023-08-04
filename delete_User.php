<<?php 

$con = mysqli_connect("localhost","root","","login1");

$id = $_GET['id'];
$name=$_GET['name'];
  if ($name=="flogin"){
    $q="DELETE FROM `flogin` WHERE id = $id";
    mysqli_query($con,$q);
    header('location:adminMangeFarmer.php');
  }
  else{
    if($name=="ulogin"){
      $q="DELETE FROM `ulogin` WHERE id= $id";
      mysqli_query($con,$q);
      header('location:adminMangeUser.php');
    }
  }
 ?>