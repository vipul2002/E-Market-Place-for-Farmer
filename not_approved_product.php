<?php
  

$con = mysqli_connect("localhost","root","","login1");
$id = $_GET['id'];
 $query= "UPDATE `product` SET `progress`='0',`seen`= 0  WHERE  id='$id'";
 
  mysqli_query($con,$query);
  header('location:Admin_index.php');
 

?>