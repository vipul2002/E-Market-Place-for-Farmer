<?php 


  $con = mysqli_connect("localhost","root","","login1");
  $adminlogin=$_GET['adminlogin'];
  echo "$adminlogin";
    $firstname =mysqli_real_escape_string($con,$_POST['firstname']);
    $lname =mysqli_real_escape_string($con,$_POST['lastname']);
    $phno =mysqli_real_escape_string($con,$_POST['phno']);
    $houseno =mysqli_real_escape_string($con,$_POST['address']);
    $area =mysqli_real_escape_string($con,$_POST['address1']);
    $pincode =mysqli_real_escape_string($con,$_POST['pincode']);
    $state =mysqli_real_escape_string($con,$_POST['state']);
    $city =mysqli_real_escape_string($con,$_POST['city']);
 

 $q="SELECT username FROM address WHERE username='$adminlogin'";
 $qu=mysqli_query($con,$q);
$res=mysqli_fetch_array($qu);
$username=$res['username'];
echo "$username";
if ($username==$adminlogin) 
{
$up="UPDATE `address` SET username='$adminlogin',`firstname`='$firstname',`lastname`='$lname',`phno`='$phno',`houseno`='$houseno',`area`='$area',`pincode`='$pincode',`state`='$state',`city`='$city' WHERE username='$adminlogin'";
$fire=mysqli_query($con,$up);
$query = mysqli_query($con,"UPDATE `add_cart` SET `progress`=1");
header("Location:buying_verfication.php");
}
else
{
  $sql="INSERT INTO address (username,firstname, lastname, phno, houseno, area, pincode, state, city) VALUES ('$adminlogin','$firstname','$lname','$phno','$houseno','$area','$pincode','$state','$city')";

  $sqll=mysqli_query($con,$sql);
      
  if ($sqll) {
  $query = mysqli_query($con,"UPDATE `add_cart` SET `progress`=1");
   header("Location:buying_verfication.php");
}
else{
  echo "Error: " . $sql . "<br>" . $con->error;
}
 
}

  
  ?>