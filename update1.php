<?php  
 $con = mysqli_connect("localhost","root","","login1");    
 $q = $_REQUEST["q"];
 $id = $_REQUEST["id"];
 $query = mysqli_query($con,"UPDATE `direct_buy` SET `p_quantity`=$q WHERE product_id= $id");
echo "update";
?>