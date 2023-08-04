<?php 
$con = mysqli_connect("localhost","root","","login1");
$qu ="SELECT type,name,image,price FROM product_final";
mysqli_query($con,$qu);
$res=mysqli_fetch_array($qu)
echo"$res['type']";

 

?>