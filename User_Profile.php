
<?php 
session_start();
$adminlogin = $_SESSION['UserLoginId'];
if (!isset($_SESSION['UserLoginId'])) {
    header("location:Login_User.php");
}

$con = mysqli_connect("localhost","root","","login1");
         $q = "select  fname from ulogin where mail ='{$adminlogin}'";

         $query= mysqli_query($con,$q);
         $res = mysqli_fetch_array($query)
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
</head>
<body>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    


<div class="container-fluid" style="background-color:  #00141a; height:60px; width:100%; padding: 7px 20px;"> 
    <h2 style="color: white;">Welcome <?php echo $res['fname']; ?> </h2>
  </div>
    <form method="POST">
  <button class="btn btn-primary" style="float: right; margin-right: 20px; margin-top: -50px;" name="Logout">Logout</button>

   <button class="btn btn-success " style="float: right; margin-right: 130px; margin-top: -50px;" 
    name="profile" formaction="User_Home_Page.php">Home</button>

  </form >
  
  <style type="text/css">
    

.bg-dark{
  background-color:white;
  color: black
}
#btn{
  float: right;
  margin-right:20px;
  width: 100px;
}

.active{
  background: gray;
    transition: .5s;
  
    text-decoration: none;
}

.container-fluid{
  background-color: black;
  height: 60px;
  width:100%;

}
.container-fluid h1{
  
  padding: 20px;
}
.navbar-brand{
  font-weight: bold;
  font-family: monospace;
  font-size: 28px;

}

.navbar-light .navbar-nav .nav-link{
  margin-top: auto;
  font-weight: 400;
  font-size: 20px;
  text-transform: uppercase;
  color:darkslategrey;
}
.navbar-light .navbar-nav .nav-item{
  color: black;
}
.navbar-light .navbar-nav .nav-link:hover{
  
  background: gray;
    transition: .5s;
    color: white;
    text-decoration: none;
}
.navbar-light .navbar-nav .nav-item #nav{
  color: black;
}


@media (max-width: 952px){
  .cnt{
    margin: auto;
    padding: auto;
    height: auto;
    width: auto;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    padding-bottom: 80px;
  }
  }
  @media (max-width: 858px){
  .cnt{
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    padding: 0;
    margin: 0;
    padding-bottom: 80px;
  }
  }
  

 
  </style>
  




 <!-- button-->
<br>

<div class="container-fluid1">
	<div class="container">
	<div class="col-lg-12"><br><br>
		<h1 class="text-warning text-center">User Information </h1>
		<br>
		<table class="table table-striped table-hover table-bordered">
			
			<?php
 
				 $con = mysqli_connect("localhost","root","","login1");
				 $q = "select  id,fname,LNAME,MNO,STATE,mail,pass from ulogin where mail='{$adminlogin}'";

				 $query= mysqli_query($con,$q);
				 while ($res = mysqli_fetch_array($query)) {
				 	# code..


	?>
			<tr class="text-center">
          <td>FirstName</td>
				<td> <?php echo $res['fname']; ?> </td></tr>
			<tr class="text-center">
        <td>LastName</td>
      	<td> <?php echo $res['LNAME']; ?> </td></tr>
        <tr class="text-center">
          <td>Mobile Number</td>
				<td> <?php echo $res['MNO']; ?> </td></tr>
        <tr class="text-center">
              <td>State</td>
				<td> <?php echo $res['STATE']; ?> </td>	</tr>
        <tr class="text-center">
              <td>username</td>
				<td> <?php echo $res['mail']; ?> </td></tr>
        <tr class="text-center">
            <td>Password</td>
				<td> <?php echo $res['pass']; ?> </td>
      </tr>
      <tr class="text-center">
        <td>Update</td>
				<td> <button class="btn-primary "> <a href="User_profile_update.php?id=<?php echo $res['id'];?>" class="text-white"> Change Password</a> </button></td></tr>
				

				
	
			<?php 
                }
			?>
		</table>
	</div>
</div>

</div>



<?php 

if (isset($_POST['Logout'])){
  session_destroy();
  header("location:Login_User.php"); 
}
?>
  <script src="https://kit.fontawesome.com/a076d05399.js">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>