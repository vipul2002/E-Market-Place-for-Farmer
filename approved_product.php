<?php
  

$con = mysqli_connect("localhost","root","","login1");
$id = $_GET['id'];
 
 $query="UPDATE `product` SET `progress`='2',`seen`= 0  WHERE  id='$id'";
mysqli_query($con,$query);
 $q="insert into product_final select id,type,name,image,price,quantity,address,username from product WHERE id='$id'";
  mysqli_query($con,$q);
   
  header('location:Admin_index.php');
 

?>