<?php  
 $con = mysqli_connect("localhost","root","","login1");    
 $q = $_REQUEST["q"];
 $id = $_REQUEST["id"];
 $query = mysqli_query($con,"UPDATE `add_cart` SET `p_quantity`=$q WHERE id= $id");
echo "update";
?>