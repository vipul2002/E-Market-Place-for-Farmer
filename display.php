
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="admin_panel.css">
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style type="text/css">
	.nav2{
		background-color: blue;
	}
</style>

<body>




<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="bg-dark">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#" style="text-decoration: none; ">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Manage User</li>
  </ol>
</nav><br>
<div class="container">
	<div class="col-lg-12"><br><br>
		<h1 class="text-warning text-center">User Information Data</h1>
		<br>
		<table class="table table-striped table-hover table-bordered">
			<tr class="bg-dark text-white text-center">
				<th>FirstName</th>
				<th>LastName</th>
				<th>username</th>
				<th>Password</th>
				<th>Delete</th>
				
			
			</tr>
			<?php
 
				 $con = mysqli_connect("localhost","root","","login1");
				 $q = "select  id,fname,LNAME,mail, pass from flogin";

				 $query= mysqli_query($con,$q);
				 while ($res = mysqli_fetch_array($query)) {
				 	# code..


	?>
			<tr class="text-center">
				<td> <?php echo $res['fname']; ?> </td>
				<td> <?php echo $res['LNAME']; ?> </td>
				<td> <?php echo $res['mail']; ?> </td>
				<td> <?php echo $res['pass']; ?> </td>
				<td> <button class="btn-danger "> <a href="Delete.php?id=<?php echo $res['id'];?>" class="text-white"> Delete</a> </button></td>
				

				
			</tr>
			<?php 
                }
			?>
		</table>
	</div>
</div>


	<script src="https://kit.fontawesome.com/a076d05399.js">
<scriptsrc="https://code.jquery.com/jquery-3.5.1.slim.min.js"integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>