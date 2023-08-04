<?php 
require("		connnection.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title> Admin Login  </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Admin_Login.css">
</head>
<body style=>
<div class="cnt">
    <div class="img-11" style="height: 30px; width:100px;">
      <img src="Images/logo3.png">
    </div>
    
  </div><br>
  <h1 align="center" style="font-family: sans-serif;">ADMIN LOGIN</h1>

	<section class="container-fluid bg">
		
	</div>	
		<section class="row justify-content-center" >
				
			<section class="col-12 col-sm-6 col-md-3">		
				<form class="form-container" method="POST" id="hero">
					<br>
					  <div class="form-group">
					    <label for="exampleInputEmail1"><b>Email address</b></label>
					    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="adminname" required="" placeholder="Enter Email">
					  </div>
					  
					  <div class="form-group">
					    <label for="exampleInputPassword1"><b>Password</b></label>
					    <input type="password" class="form-control" id="exampleInputPassword1" name="adminpass" required="" placeholder="Enter Password">
					  </div>
					 
					  	<br>	
					  <button type="submit" class="btn btn-primary btn btn-sucess"  id="h" name="login">Login</button><br>
					   


				</form>
			</section>
		</section>
	</section>
	

	<?php 
         if (isset($_POST['login'])) {


         	$aname = $_POST['adminname'];
         	$apass = $_POST['adminpass'];
             $query ="SELECT * FROM admin_login1 WHERE adin_name='{$aname}' AND admin_pass='{$apass}'";
         	$result=mysqli_query($con,$query);
         	if (mysqli_num_rows($result)==1){
         		
              session_start();
              $_SESSION['AdminLoginId']=$_POST['adminname'];
              header("location:Admin_index.php");
         	}
         	else{
         		echo "<script>alert('incorrect password/username')</script>";
         	}

         }
 	?>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>