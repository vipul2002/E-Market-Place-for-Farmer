<?php 
session_start();
$adminlogin = $_SESSION['UserLoginId'];
if (!isset($_SESSION['UserLoginId'])) {
    header("location:Login_User.php");
}
if (isset($_POST['Logout'])){
  session_destroy();
  header("location:Login_User.php");
  
}
$con = mysqli_connect("localhost","root","","login1");  
         $q = "select  Fname from ulogin where mail ='{$adminlogin}'";

         $query= mysqli_query($con,$q);
         $res = mysqli_fetch_array($query)
?>


<!DOCTYPE html>
<html>
<head>
  <title> User Home Page</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="footer.css">


    
   
</head>
<body>
  <style type="text/css">
      
    
    
    .navbar{
      background-color: #00141a!important;
    }

    .nav-link{
      margin-left:70px;
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

main.content p {
    padding: 20px;
}

.main {
    display: flex;
    
}

.img-1 {
    margin: auto;
    padding: 20px;
}

.main.content {
    text-align: justify;
    font-size: 20px;
    font-family: serif;
    
}

.content {
    width: 700px;
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
          <a class="nav-link active" aria-current="page" href="Home1.php">Home</a>
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
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="User_Aboutus.php">About-us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact-us.php">Contact-us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Farmer_Profile.php"><i class="fa fa-eye" aria-hidden="true"></i>View Profile</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Languges
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Marathi</a></li>
            <li><a class="dropdown-item" href="#">English</a></li>
            <li><a class="dropdown-item" href="#">Hindi</a></li>
          </ul>
        </li>
              </ul>
      
    </div>
  </div>
</nav>
 <!-- button-->
 <br>
 <h1 align="center"> <b>About-us</b></h1>
<div class="main container">
  
    <div class="img-1" >
      <img src="Images/about-us2.jpg" >
    </div>
    <div class="content" >
      <p>Most farmers in developing countries face the challenge of marketing their product and most often meet the unpredictable market prices. How can technology help these farmers? So, we are here with a solution.<br>
     Our web application provides a platform for farmers to sell their product online & it will reduce the role of middlemen who are hindering the trading in the agriculture sector. These e-Market platforms are free of cost and can be accessed from anywhere and made available in understandable language to farmers. These platforms are the sweeping change for farmers.<br>
      In this online portal the farmer must create his account. Then the farmer can add his products (crops). As the farmer request for adding a product, the request will be sent to admin, then admin will verify the product & he will accept or reject that product.<br>
      Farmers can post their products and attract more buyers which will save precious time and money. They can get better profits than normal.
    </p>
    </div>
   </div>
</div>
</div>

<footer class="text-black text-right" style="margin-top: 50px; padding-bottom: 5px;margin-right: 30px;">
<div class="wrapper">

<p style="color: black; font-weight: bold;margin-top: 12px;"> Get Social :</p>
<div class="icon facebook">
<span><a href="#" class="fab fa-facebook-f"></a></span>
</div>
<div class="icon twitter">
<span><a href="#" class="fab fa-twitter"></a></span>
</div>
<div class="icon instagram">
<span><a href="#" class="fab fa-instagram"></a></span>
</div>

</div>
</footer>

<script src="https://kit.fontawesome.com/a076d05399.js">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 
<style type="text/css">
  
</style>
</body>
</html>