<<?php 

$con = mysqli_connect("localhost","root","","login1");

$id = $_GET['id'];
$progress = $_GET['progress'];
$see=0;
$result=mysqli_query($con,"SELECT * FROM `product` WHERE id='$id' AND seen='$see'");
if ($result) {
  if($progress==0)
  {
    $q="DELETE FROM `product` WHERE id='$id'";
    mysqli_query($con,$q);
    header('location:AddedProduct.php');
  }
  elseif($progress==2 ){
    $q1="UPDATE `product` SET `seen`=1 WHERE id='$id'";
    mysqli_query($con,$q1);
    
    header('location:AddedProduct.php');
  }
  elseif( $progress==1){
    $q1="UPDATE `product` SET `seen`=1 WHERE id='$id'";
    mysqli_query($con,$q1);
    header('location:AddedProduct.php');
  }
}
 ?>