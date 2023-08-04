<?php 
   session_start();
$adminlogin = $_SESSION['UserLoginId'];
if (!isset($_SESSION['UserLoginId'])) {
    header("location:Login_User.php");
}

$con = mysqli_connect("localhost","root","","login1");
         $q = "select * from ulogin where mail ='$adminlogin'";
         
         $id = $_GET['id'];
         $qu = "select * from product_final where id='$id'";

         $query= mysqli_query($con,$q);
         $res = mysqli_fetch_array($query);
         $fbname =$res['Fname'];
         $mno=$res['MNO'];
        

          $que= mysqli_query($con,$qu);
         $ress = mysqli_fetch_array($que);

         $abc="buying";
         $name=$ress['name'];
         $price=$ress['price'];
          $email=$ress['username'];



 ?>