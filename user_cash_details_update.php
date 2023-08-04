	<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
 $con = mysqli_connect("localhost","root","","login1"); 

 $query="SELECT * from add_cart where progress=2 && username='$adminlogin'";
 $q=mysqli_query($con,$query);


 while ($res = mysqli_fetch_array($q))
 {
 	
 $name=$res['name'];
 $id=$res['id'];
 $total_quantity=$res['quantity'];
 $quantity=$res['p_quantity'];
 $username=$res['username'];
 $price=$res['price'];
 $final_price=bcmul($quantity,$price);
 $total_quantity=$total_quantity-$quantity;
 if ($total_quantity==0) {
 	$del="DELETE * from product_final where id=$id";
 	$dell=mysqli_query($con,$del);
 }
 else{
 	$vi="UPDATE `product_final` SET `quantity`='$total_quantity' where id=$id";
 	$vii=mysqli_query($con,$vi);
 }

 $sql="INSERT into payment_success (payment_id,payment_status,payment_request_id,name,p_quantity,username,final_price) VALUES('$Paymentid','$payment_status','$Payment_request_id','$name','$quantity','$username','$final_price')";
 $exe=mysqli_query($con,$sql);
   if ($exe) {


}else{
  echo "Error: " . $sql . "<br>" . $con->error;
}
 
$delete="DELETE FROM `add_cart` WHERE progress=2";
   	$delexe=mysqli_query($con,$delete);
 }
 
 header("Location:User_Home_page.php")

?>

</body>
</html>