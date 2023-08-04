
<?php 
session_start();
$adminlogin = $_SESSION['FarmerLoginId'];
if (!isset($_SESSION['FarmerLoginId'])) {
    header("location:Login_Farmer.php");
}
if (isset($_POST['Logout'])){
  session_destroy();
  header("location:Login_Farmer.php");
  
}
$con = mysqli_connect("localhost","root","","login1");
$id= $_GET['id'];
$adminlogin =$_GET['name'];
$progress=0;
$p_quantity=1;
$q="select* FROM add_cart where id='$id'&& username='$adminlogin'";
$qe=mysqli_query($con,$q);
$r=mysqli_fetch_array($qe);
if($r) {
	
	header("location:Farmer_Mycart.php");
}
else{


$sql ="SELECT type,name,image,price,quantity FROM product_final where id='$id'";$queryfire = mysqli_query($con,$sql);
$num=mysqli_num_rows($queryfire);
		while ($res = mysqli_fetch_array($queryfire)){
			$type= $res['type'];
			$name= $res['name'];
		$image= $res['image'];
			$price= $res['price'];
			$quantity= $res['quantity'];
			$username= $res['username'];

		} 	
 
$query="INSERT INTO `add_cart`VALUES ( '$id','$type','$name','$image','$price','$quantity', '$p_quantity', '$adminlogin', '$progress')";
$result=mysqli_query($con,$query);


header("location:Farmer_Mycart.php?name=$adminlogin");
}
?>