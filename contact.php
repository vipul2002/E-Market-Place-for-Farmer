<?php
/*
$con = mysqli_connect("localhost","root","","login1");

if (isset($_POST['sumbit'])){

	    $fname =$_POST['firstname'];
		$lname =$_POST['lastname'];
		$no=$_POST['phno'];
		$email=$_POST['emailid'];
		$msg=$_POST['text1'];
		
}


  ?>
*/

  

$conn = mysqli_connect("localhost","root","","login1");

if ($conn === false) {
	die("connection faild.". mysqli_connect_error());
}


if (isset($_POST['sumbit'])) {

$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$emailid =$_POST['emailid'];
$phno =$_POST['phno'];
$text1=$_POST['text1'];

	$stmt = "INSERT INTO contact_details(fname,lname,email,phno,msg)
VALUES('$firstname','$lastname','$emailid','$phno','$text1')";
if (mysqli_query($conn,$stmt)) {
	echo "record sucessfully save";
}else{
	echo "error: could not able to execute $stmt.".mysqli_error($conn);
}
header("location:Unknow-contact-us.php");
mysqli_close($conn);
}
?>