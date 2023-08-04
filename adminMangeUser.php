<?php 
session_start();
if (!isset($_SESSION['AdminLoginId'])) {
    header("location:Admin_login.php");
}
if (isset($_POST['Logout'])){
	session_destroy();
	header("location:Admin_login.php");	
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="admin_panel.css">
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		 <link rel="stylesheet" type="text/css" href="admin_panel.css">
		 <style>
			* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    font-family: 'Josefin Sans', sans-serif;
}

body {
    background-color: #f3f5f9;
}

.wrapper {
    display: flex;
    position: relative;
}

.wrapper .sidebar {
    width: 200px;
    height: 100%;
    background: #5ab4db;
    padding: 30px 0px;
    position: fixed;
}

.wrapper .sidebar h2 {
    color: #fff;
    text-transform: uppercase;
    text-align: center;
    margin-bottom: 30px;
}

.wrapper .sidebar ul li {
    padding: 15px;
    border-bottom: 1px solid #bdb8d7;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    border-top: 1px solid rgba(255, 255, 255, 0.05);
}

.wrapper .sidebar ul li a {
    color: black;
    display: block;
}

.wrapper .sidebar ul li a .fas {
    width: 25px;
}

.wrapper .sidebar ul li:hover a {
    color: purple;
	text-decoration: none;
}

.wrapper .sidebar ul li a.active {
    color: #fff;
    text-transform: uppercase;
}
.toggel span{
	font-size:30px;
	cursor:pointer;
	color:black;
	margin-left:15px;
}
.toggel{
	height: 70px;
	width:200px;
	background-color: #5ab4db;
	padding: 10px;
}

		</style>
</head>
<body><br>
<form method="POST">
	<button class="btn btn-primary" style="float: right; margin-right: 40px;" name="Logout">Logout</button>
</form>	
<div class="toggel">
<span  onclick="closeNav()">&#9776; </span> 
</div>
<div id="mySidenav"class="wrapper">
    <div class="sidebar">

        <ul>
			<li><a href="Admin_index.php">Reqest list</a></li>
  			<li><a class="active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Manage User
				<span class="sr-only">(current)</span>
    			</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          			<a class="dropdown-item" href="adminMangeUser.php">Mange Buyer</a>
          			<a class="dropdown-item" href="adminMangeFarmer.php">Mange Farmer</a>
        		</div>
			</li>
			<li><a  href="adminDeletProduct.php">Delet Product</a></li>
			<li>
				<a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Payment Detail
    			</a>
    			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
        			<a class="dropdown-item" href="adminPaymentDetail.php">Online Payment</a>
        			<a class="dropdown-item" href="adminCODPaymentDetail.php">Cash On Delievery</a>
    			</div>
			</li>
        </ul> 
        
    </div>
</div>
     <!-- Code for request list of product-->

<div class="container" style="margin-left: 15%;">
	<div class="col-lg-12"><br><br>
		<h1 class="text-warning text-center">Mange Buyer</h1>
		<br>
		<table class="table table-striped table-hover table-bordered">
			<tr class="bg-dark text-white text-center">
				<th>Type</th>
				<th>Name</th>
				<th>Mobile NO</th>
				<th>State</th>
				<th>Age</th> 
				<th>Mail</th>
				<th>Delet</th>
				
				
			
			</tr>
			
			<?php

				$con = mysqli_connect("localhost","root","","login1");
				 $q = "select  * from ulogin";
				 $query= mysqli_query($con,$q);
				 
				 while ($res=mysqli_fetch_array($query)) {
			?>
			<tr class="text-center">
				<td>Buyer</td>
				<td> <?php echo $res['Fname']," ",$res[ 'LNAME']; ?> </td>
				<td> <?php echo $res['MNO']; ?> </td>
				<td> <?php echo $res['STATE']; ?> </td>
				<td>  <?php $a=explode("-",$res['birthhd']);echo date("Y")-$a[0]; ?>  </td>
				<td> <?php echo $res['mail']; ?> </td>
				<td> <button class="btn btn-danger"  name="Reject" > <a href="delete_User.php?id=<?php echo $res['id'];?>&name=ulogin" class="text-white"> Delete</a></button></td>
			</tr>
				<?php 
                }
			?>
		</table>
	</div>
</div>
<script>
function closeNav() {
	var x = document.getElementById("mySidenav");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>