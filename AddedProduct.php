<?php 
session_start();
if (!isset($_SESSION['FarmerLoginId'])) {
    header("location:Login_Farmer.php");
}
if (isset($_POST['Logout'])){
	session_destroy();
	header("location:Login_Farmer.php");	
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Added Product</title>	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">
		 
</head>
<body>
  <style type="text/css">
      
    
    .navbar{
      background-color: #00141a!important;
    }

    .nav-link{
      margin-left:50px;
    }
    .carousel-item{
      height: 400px;
      width:100%;
    }
    .d-flex{
  float: right;
  border-radius: 20px;
  
 }

.btn{
  margin-left: 20px;
  margin-right: 10px;
}
  </style>
  <div class="cnt">
    <div class="img-11" style="height: 30px; width:100px;">
      <img src="Images/logo3.png">
    </div>
    
</div>
  



<br><br><br><br>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="Farmer_Home_Page.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="Farmer_product_view_grains.php">Grains</a></li>
            <li><a class="dropdown-item" href="Farmer_product_view_vegetables.php">Vegetables</a></li>
            <li><a class="dropdown-item" href="Farmer_product_view_fruit.php">Fruits</a></li>
             <li><a class="dropdown-item" href="Farmer_product_view_flower.php">Flowers</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="AddProduct.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="AddedProduct.php">Product Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Farmer-aboutus.php">About-us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Farmer-contactus.php">Contact-us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Farmer_Mycart.php"><i class="fa fa-cart-plus" aria-hidden="true"></i> Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Farmer_Profile.php"><i class="fa fa-eye" aria-hidden="true"></i> View Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="F_Your_order.php"><i class="fa fa-eye" aria-hidden="true"> </i>  Your Orders</a>
        </li>

       
              </ul>
      
    </div>
  </div>
</nav>
 <!-- button-->
<br>
    <!-- Code for request list of product-->

<div class="container">
	<div class="col-lg-12"><br><br>
		<h1 class="text-warning text-center">Added product</h1>
		<br>
		<table class="table table-striped table-hover table-bordered">
			<tr class="bg-dark text-white text-center">
				<th>Usename</th>
				<th>Type</th>
				<th>ProductName</th>
		    <th>Productimg</th>
				<th>Price</th>
				<th>quantity</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
			
			<?php
 
                $con = mysqli_connect("localhost","root","","login1");
                $user=$_SESSION['FarmerLoginId'];
                $see=0;
                 $q = "SELECT * from product WHERE username='$user' AND seen='$see'";
				      $query= mysqli_query($con,$q);
				while ($res = mysqli_fetch_array($query)) {
			?>
			<tr class="text-center">
				<td> <?php echo $res['username']; ?> </td>
				<td> <?php echo $res['type']; ?> </td>
				<td> <?php echo $res['name']; ?> </td>
				<td> 
				 <img  src="<?php echo $res['image']; ?>" height="100px" width="100px">  
				</td>
				<td> <?php echo $res['price']; ?> </td>
				<td> <?php echo $res['quantity']; ?> </td>
                <td> <?php $progress=$res['progress'];
                if($progress=='0')echo('deleted');
                elseif($progress=='1'){echo('progress');}
                elseif($progress=='2'){echo('approved');}
                elseif($progress=='3'){echo('completed sold');}?> </td>
				<td> <button class="btn-danger"  name="Reject" > <a href="ok.php?id=<?php echo $res['id'];?>&progress=<?php echo $res['progress'];?>" class="text-white">ok</a></button></td>		
			</tr>
			
			<?php 
                } 
			?>
		</table>
	</div>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>