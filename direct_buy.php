
<?php 
session_start();
$adminlogin = $_SESSION['UserLoginId'];
if (!isset($_SESSION['UserLoginId'])) {
    header("location:Login_User.php");
}
if (isset($_POST['Logout'])){
  session_destroy();
  header("location:Login_User.php");
  
}
?>
<?php


$con = mysqli_connect("localhost","root","","login1");
$id= $_GET['id'];
$adminlogin =$_GET['name'];
$p_quantity=1;



$sql ="SELECT * FROM product_final where id='$id'";
$queryfire = mysqli_query($con,$sql);
$num=mysqli_num_rows($queryfire);
		while ($res = mysqli_fetch_array($queryfire)){
			$type= $res['type'];
			$name= $res['name'];
     		$image= $res['image'];
			$price= $res['price'];
			$quantity= $res['quantity'];
			$p_quantity=1;
      $progress=0;


		} 	
		$query="INSERT INTO `direct_buy`VALUES (' ','$id','$type','$name','$image','$price','$quantity', '$p_quantity', '$adminlogin','$progress')";
          $result=mysqli_query($con,$query);
          if ($result) {
          	header("Location:buyer_direct_verify.php?id=$id");
          }
          else{
          	echo "Error: " . $sql . "<br>" . $con->error;
          }
?>


