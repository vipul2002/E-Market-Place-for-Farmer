<?php


session_start();
$adminlogin = $_SESSION['FarmerLoginId'];
if (!isset($_SESSION['FarmerLoginId'])) {
    header("location:Login_Farmer.php");
}
 $con = mysqli_connect("localhost","root","","login1");


if (isset($_POST['sumbit1'])) {	
$id = $_GET['id'];
 $oldpass= $_POST['oldpass'];
 $pas= $_POST['newpass'];
 $pas1= $_POST['cnfpass'];	
 
 $qry="select pass from flogin where mail='$adminlogin'";
 $res=mysqli_query($con,$qry);

  $row=mysqli_fetch_array($res);
  $oldp=$row['pass'];
  echo $oldp;

 if ($oldp==$oldpass) {
 	if($pas==$pas1){
	
	$s="UPDATE `flogin` SET `id`='$id',`pass`='$pas1' WHERE mail='$adminlogin'";
	$q=mysqli_query($con,$s);
	header('location:Farmer_Profile.php');	 	
  }
	else{

		echo '<script>alert("new and confirm pass not match")</script>'; 
	}
 }
    else{
         echo '<script>alert("current password is not right")</script>'; 
        }

	
		 
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title> Login Form </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	
</head>
<body>
<br><br><br>
	<h1 align="center"> Update Password</h1>
	<section class="container-fluid bg">
		
		
		<section class="row justify-content-center" >
				
			<section class="col-12 col-sm-6 col-md-3">		
				<form class="form-container" method="POST">

				    <div class="form-group">
					    <label for="exampleInputPassword3"><b> Current Password</b></label>
					    <input type="password" class="form-control" id="exampleInputPassword3" name="oldpass">
					  </div>
					    
					
					  <div class="form-group">
					    <label for="exampleInputPassword1"><b>Password</b></label>
					    <input type="password" class="form-control" id="exampleInputPassword1" name="newpass">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword2"><b>Confirm-Password</b></label>
					    <input type="password" class="form-control" id="exampleInputPassword2" name="cnfpass">
					  </div>

					
					  
					  	<br>	
					  	<input type="submit" class="btn btn-primary btn-block" name="sumbit1" >

                          <br>


				</form>
			</section>
		</section>
	</section>







	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>