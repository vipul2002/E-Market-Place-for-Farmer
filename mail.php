<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">
<style type="text/css">
   
   .abc{
      width: 300px;
   }
</style>
   <body>


  <div class="cnt">
    <div class="img-11" style="height: 30px; width:100px;">
      <img src="Images/logo3.png">
    </div><br><br>
    <a href="Login_Farmer.php">
 <button class="btn btn-success " style="float: right; margin-right: 130px; margin-top: -50px;" 
    name="" action="Login_Farmer.php">Back</button> </a>  <br><br><br><br><br> 
</div>


<h1 align="center" class="text-center text-warning">FORGET PASSWORD</h1><br>

   	<form action="" method="POST">
      <div class="form-group" align="center">
    
    <input type="email" class="form-control abc" id="exampleFormControlInput1" placeholder="Enter Username to get password" name="username">
<br>
      <input type="submit" class="btn btn-primary" name="submit">
      </form>
   <?php
        
   if(isset($_POST['submit'])){
   	$user=$_POST['username'];
   	$username;
   	$password;
   	$con = mysqli_connect("localhost","root","","login1");
   	$query="SELECT * from flogin where mail='$user'";
   	$fire=mysqli_query($con,$query);
   	$res=mysqli_fetch_array($fire);
   	$num=mysqli_num_rows($fire);
   	if ($num >0) {
   		$username=$res['mail'];
     	$password=$res['pass'];

   	if ($user!=null ||$user!="" && $user==$username) {

			$to_email = $user;
			$subject = "Simple Email Test via PHP";
			$body = "Your password is :".$password;
			$headers = "From: vipulbelhekar20@gmail.calculhmac(clent, data)";

			if (mail($to_email, $subject, $body, $headers)) {
			    //echo "Email successfully sent to $to_email...";
             echo "<script>alert('Email successfully sent to $to_email...');</script>";
			} 
			else {
			     echo "<script>alert('Email Not Exists...');</script>";

			}
	}

	else{
	    echo "<script>alert('Email Not Exists...');</script>";
		}
 
   }

  	

   	else
   	{
        
       echo "<script>alert('Email Not Exists...');</script>";
   	}
   	
   
}
      ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   </body>
</html>