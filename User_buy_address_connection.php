<?php 

session_start();
$adminlogin = $_SESSION['UserLoginId'];
if (!isset($_SESSION['UserLoginId'])) {
    header("location:Login_User.php");

}

  $con = mysqli_connect("localhost","root","","login1");
      $id=$_GET['id'];
    $firstname =mysqli_real_escape_string($con,$_POST['firstname']);
    $lname =mysqli_real_escape_string($con,$_POST['lastname']);
    $phno =mysqli_real_escape_string($con,$_POST['phno']);
    $houseno =mysqli_real_escape_string($con,$_POST['houseno']);
    $area =mysqli_real_escape_string($con,$_POST['area']);
    $pincode =mysqli_real_escape_string($con,$_POST['pincode']);
    $state =mysqli_real_escape_string($con,$_POST['state']);
    $city =mysqli_real_escape_string($con,$_POST['city']);
 
    $q="SELECT username FROM address WHERE username='$adminlogin'";
 $qu=mysqli_query($con,$q);
$res=mysqli_fetch_array($qu);
$username=$res['username'];
if ($username==$adminlogin) {
$up="UPDATE `address` SET username='$adminlogin',`firstname`='$firstname',`lastname`='$lname',`phno`='$phno',`houseno`='$houseno',`area`='$area',`pincode`='$pincode',`state`='$state',`city`='$city' WHERE username='$adminlogin'";
$fire=mysqli_query($con,$up);


 header("Location:Direct_payment_option.php?id=$id");
}
else{


      $sql="INSERT INTO address (username,firstname, lastname, phno, houseno, area, pincode, state, city) VALUES ('$adminlogin','$firstname','$lname','$phno','$houseno','$area','$pincode','$state','$city')";

      $sqll=mysqli_query($con,$sql);
      if ($sqll) {
        header("Location:Direct_payment_option.php?id=$id");
      }
      else{
}

  echo "Error: " . $sql . "<br>" . $con->error;
}


  ?>