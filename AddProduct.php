<?php 
session_start();
$adminlogin = $_SESSION['FarmerLoginId'];
if (!isset($_SESSION['FarmerLoginId'])) {
    header("location:Login_Farmer.php");
}
if (isset($_POST['Logout']))
		{
  			session_destroy();
 			header("location:Login_Farmer.php"); 
		}
?>


<html>
	<head>

		<title>Add product</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		

	</head>

	<body>
      <script>
  function validateForm() {
  var x = document.forms["myForm"]["product"].value;
   var y = document.forms["myForm"]["product-name"].value;
   var z = document.forms["myForm"]["image"].value;
   var a = document.forms["myForm"]["price"].value;
   var b = document.forms["myForm"]["quantity"].value;
   var c = document.forms["myForm"]["address"].value;
   var d = document.forms["myForm"]["des"].value;
  if (x == "" || x == null) {
    alert("Please select product type");
    return false;
  }if (y == "" || y == null) {
    alert("Please enter your product name ");
    return false;
  }if (z == "" || z == null) {
    alert("Add product image ");
    return false;
  }if (a == "" || a == null) {
    alert("Please enter your Product Price");
    return false;
  }if (b == "" || b == null) {
    alert("Please enter quantity of product");
    return false;
  }if (c =="" || c ==null) {
    alert("Please enter your Address");
    return false;
  }if (d =="" || d ==null) {
      alert("Please enter your Description");
      return false;
  }
  else{
    alert("Your product has been requested");
  }
}
  </script>

	<style type="text/css">
			*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}
.bg{
	background-size: cover;
 }
body{
	background-color: white;
}

.head{
	background-color: #A3DD09;
	border-radius: 5px;
	margin-top: -60px;
	box-shadow: 0px -3px 10px 0px black;
}
.card{
	width:500px;
	margin-top: 100px;
	height: 720px;
	border-width: 2px;
	border-radius: 10px;
	box-shadow: 0px 0px 10px 0px black;
}

.super{
	border: 0;
	outline: none;
	width: 100%;
	padding: 7px 0;
	border-bottom: 2px solid #ccc;
}
.super ~ .focus-border{
	position: absolute; bottom:0;
	left: 50%;
	width: 0;
	height: 2px;
	background-color: #A3DD09;
	transition: 0.4s;
}
.super:focus ~ .focus-border{
	width: 100%;
	transition: 0.4s;
	left: 0 ;
}
.btn1{
	background:;
	color: white;
	border: none;
	outline: none;
	width: 200px;
	height: 40px;
	margin-left: 120px;
	
	border-radius: 20px;
}


    .navbar{
      background-color: #00141a!important;
    }

    .nav-link{
      margin-left:40px;
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
  

<form class="d-flex" method="POST">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 20px;">
        <button class="btn btn-outline-success" type="submit" style="margin-left:20px;">Search</button>
         <button class="btn btn-primary" name="Logout">Logout</button>
      </form>

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
          <a class="nav-link active" href="AddProduct.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="AddedProduct.php">Product Details</a>
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
		<br>
    <section classe ="contact py-5">
      <form action="" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
      <div class="container">
       <div class="row">
        <div class="col-1g-7 mx-auto">
          <div class="card" style="width: 650px; margin-top: 50px">
            <div class="card-body">
              <div class="row pb-3">
                <div class="col-lg-12">
                   <div class="head text-center text-white py-3">
                     <h1> ADD  PRODUCT</h1>
                      </div>
                    </div>
                  </div>
                  <div class="form p-4">
                  	<div class="row my-0">
                  <label><b>Type of product</b></label><br>
              </div>
						
							<input class="form-check-input" value="grains" type="radio" id="grains" name="product">
							<label class="form-check-label"  for="grains">grains</label><br>
						
						
							<input class="form-check-input" value="vegetable" type="radio" id="vegetable" name="product">
							<label class="form-check-label" for="vegetable">vegetable</label><br>
						
							
							<input class="form-check-input" value="flower" type="radio" id="flower" name="product">
							<label class="form-check-label" for="flower">flower</label><br>

							<input class="form-check-input" value="fruit" type="radio" id="fruit" name="product">
							<label class="form-check-label" for="fruit">fruit</label><br>
						</div>
						<div class="row">
                			<div class="col-lg-12">
							<label for="product-name"><b>product name:</b></label>
						<input class="super" id="product-name" list="list" name="product-name" placeholder=" Enter product name">
						<span class="focus-border"></span>
						</div>
						</div>			
						<div class="row">
                			<div class="col-lg-12">
                			<label for="image"><b>image:</b></label>
						<input class="super" type="file" id="image" name="image" placeholder="Choose image"><br>
						<span class="focus-border"></span>
					</div>
				</div>
				<div class="row">
                			<div class="col-lg-12">
						<label for="price"><b>price(Rs):</b></label>
						<input type="text" class="super" id="price" name="price" placeholder="Enter your price"><br>
						<span class="focus-border"></span>
					</div>
				</div>
				<div class="row">
                			<div class="col-lg-12">
                				<label for="quantity"><b>quantity(kg):</b></label>
						<input type="text" class="super" id="quantity" name="quantity" placeholder="Enter quantity"><br>
						<span class="focus-border"></span>
					</div>
				</div>
					<div class="row">
                			<div class="col-lg-12">
                				<label><b>Address</b></label>
                				<input type="text" class="super" name="address" id="address" placeholder="Enter address">
                				<span class="focus-border"></span>
                				<br>
                			</div>
                		</div>
                		<div class="row pt-3">
              <div class="offset-2 col-leg-4">
                		<input type="submit" name="submit" value="submit" class="btn1 btn-primary btn-block">
                	</div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</form>
</section>


	
			<?php 
 
            $con = mysqli_connect("localhost","root","","login1");
 
        if(isset($_POST['submit']))
 
        {
 
            $name = $_POST['product-name'];
 
            $type = $_POST['product'];
 
            $image = $_FILES['image']['tmp_name'];
 
            $imageName=$_FILES['image']['name'];
            $var=explode('.', $imageName);
            $imageExt=strtolower(end($var));
 
            $fileExtStored=array('png','jpg','jpeg','img');
 
            $price = $_POST['price'];
 
            $quantity = $_POST['quantity'];
 
            $address = $_POST['address'];
 
            $progress=1;
 
            $see=0;
 
            if(in_array($imageExt,$fileExtStored)){
 
                $destinationFile='image/'.$imageName;
 
                move_uploaded_file($image, $destinationFile);
 
                $result = mysqli_query($con,"insert into product values('','$type','$name','$destinationFile','$price','$quantity','$address','$adminlogin','$progress','$see')");
 
                if($result)
 
                {
                    echo '<script>window.alert("data entered");</script>'; 
                        
                }
 
                else
                {
 
                    echo '<script>window.alert("Something gone wrong");window.history.back();</script>'; 
 
                }
            }
 
            
 
            else
            {
 
                echo '<script>alert(" wrong");window.history.back();</script>'; 
 
            }
 
        }
 
        ?>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

		

	</body>

</html>