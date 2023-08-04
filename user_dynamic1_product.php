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
	<title>Product view </title>

		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body >
	<br><br>
<style type="text/css">
      
    
    .navbar{
      background-color: #00141a!important;
    }

    .nav-link{
      margin-left:80px;
    }
    .carousel-item{
      height: 400px;
      width:100%;
    }
    .d-flex{
  float: right;
  border-radius: 20px;
  
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
          <a class="nav-link active" aria-current="page" href="User_Home_Page.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Categoary
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
         <li><a class="dropdown-item" href="Product_view_grains.php">Grains</a></li>
            <li><a class="dropdown-item" href="Product_view_vegetable.php">vegetables</a></li>
            <li><a class="dropdown-item" href="Product_view_fruit.php">Fruits</a></li>
             <li><a class="dropdown-item" href="Product_view_flower.php">Flowers</a></li>
          </ul>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="About-us-user.php">About-us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user-contact.php">Contact-us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="User_Profile.php"><i class="fa fa-eye" aria-hidden="true"></i>View Profile</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Languges
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="Product_view_grains.php">Grains</a></li>
            <li><a class="dropdown-item" href="Product_view_vegetable.php">vegetables</a></li>
            <li><a class="dropdown-item" href="Product_view_fruit.php">Fruits</a></li>
             <li><a class="dropdown-item" href="Product_view_flower.php">Flowers</a></li>
          </ul>
        </li>
              </ul>
      
    </div>
  </div>
</nav>
<br><br><br>
</div>
<link rel="stylesheet" type="text/css" href="dynamic.css">
<div class="main container">

  

  <div class="row">
  <?php 
  $con = mysqli_connect("localhost","root","","login1");
  $id = $_GET['id'];
  
  $sql ="select * from product_final where id='$id'";
  $queryfire = mysqli_query($con,$sql);

  $num=mysqli_num_rows($queryfire);


  if ($num >0) {
    
    
    while ($res = mysqli_fetch_array($queryfire)) {

      ?>
    <div class="row" style="text-align: justify;">
     <div class="img1">
    
     <img src=" <?php echo $res['image'];  ?>" alt="farmer" class="img-fluid mb-2" style="height: 300px; width:400px;">
    </div>
         <div class="Product">
           <h1 class="name"><?php echo $res['name'];  ?></h1>
             <p><b>Description: </b><br>
             chemical free and Natural ingradiants chemical free and Natural ingradiantschemical free and Natural ingradiantschemical free and Natural ingradiantschemical free and Natural ingradiantschemical free and Natural ingradiants </p>

     <h5 class="badge badge-success" style="font-size: 24px;">4.4<i class="fa fa-star "></i></h5><br><br>
     <h6 style="font-size: 20px;"> &#8377;<?php echo $res['price'];  ?> </h6><br><br>
      <button type="submit" class="btn btn-success" style="width: 130px;">Buy</button>
      <button type="submit" class="btn btn-success " style="width: 130px;">Add to cart<i class="fa fa-cart-plus"></i></button>
  
   

     </div>
    </div>
  </div>
  <?php
    
    }
  }


   ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script src="https://kit.fontawesome.com/a076d05399.js">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</div>





</body>
</html>