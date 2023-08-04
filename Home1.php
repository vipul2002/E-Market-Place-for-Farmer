<?php 
session_start();
$adminlogin = $_SESSION['AdminLoginId'];
if (!isset($_SESSION['AdminLoginId'])) {
    header("location:Login_Farmer.php");
}

$con = mysqli_connect("localhost","root","","login1");
         $q = "select  fname from flogin where mail ='{$adminlogin}'";

         $query= mysqli_query($con,$q);
         $res = mysqli_fetch_array($query)
?>


<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <link rel="stylesheet" type="text/css" href="Home1.css">
    <link rel="stylesheet" type="text/css" href="footer.css">

   
</head>
<body>
  <div class="container-fluid" style="background-color:  #00141a; height:60px; width:100%; padding: 7px 20px;"> 
    <h2 style="color: white;">Welcome <?php echo $res['fname']; ?> </h2>
  </div>
    <form method="POST">
  <button class="btn btn-primary" style="float: right; margin-right: 20px; margin-top: -50px;" name="Logout">Logout</button>
    <button class="btn btn-success" style="float: right; margin-right: 130px; margin-top: -50px;" name="profile">View profile</button>
  </form >
  
  
<div class="cnt">
    <div class="img-11" style="height: 30px; width:100px;">
      <img src="Images/logo3.png">
    </div>
    
  </div>



<nav class="navbar navbar-expand-lg navbar-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link  active" href="Home1.php" >Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" >Category </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="AddProduct.php" ><i class="fa fa-plus-circle" aria-hidden="true"></i>Add</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Abouts-us.php" > About-us</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="contact-us.php" >Contact-us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" ><i class="fa fa-cart-plus" aria-hidden="true"></i>  Cart</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown " role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Language
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" >Marathi</a>
          <a class="dropdown-item" href="#">Hindi</a>
          <a class="dropdown-item" href="#">English</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
 <!-- button-->
<br>


  
<br>
 <!-- Slider Of images-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images\slider-1.jpg" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="Images\slider-2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Images\slider-3.jpg" class="d-block w-100" alt="...">
    </div>

     <div class="carousel-item">
      <img src="Images\slider-4.jpeg" class="d-block w-100" alt="...">
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br><br>

<!-- Cards-->
<div class="container">
  <div class="row">
    <div class="col-md3 col-sm-6" style="width: 300px;"> 
          <div class="card text-center">
            <div class="card-block">
              <img src="Images/Grains.jpg" alt="" class="img-fluid">
              <div class="card-title">
                <h4>Grains</h4>
              </div>
              <div class="card-text">
                 
              </div>
              <a href="#" class="btn btn-success" style="margin-top: 10px;">See more</a>
            </div>
          </div>
    </div>

     <div class="col-md3 col-sm-6"> 
          <div class="card text-center">
            <div class="card-block">
              <img src="Images/Vegetables.jpg" alt="" class="img-fluid">
              <div class="card-title">
                <h4>Vegetables </h4>
              </div>
              <div class="card-text">
                 
              </div>
              <a href="#" class="btn btn-success" style="margin-top: 10px;">See more</a>
            </div>
          </div>
    </div>

<br> <br>

     <div class="col-md3 col-sm-6"> 
          <div class="card text-center">
            <div class="card-block">
              <img src="Images/Fruits.jpg" alt="" class="img-fluid">
              <div class="card-title">
                <h4>Fruits </h4>
              </div>
              <div class="card-text">
                 
              </div>
              <a href="#" class="btn btn-success" style="margin-top: 10px;">See more</a>
            </div>
          </div>
    </div>

     <div class="col-md3 col-sm-6"> 
          <div class="card text-center">
            <div class="card-block">
              <img src="Images/Flowers.jpg" alt="" class="img-fluid">
              <div class="card-title">
                <h4>Flowers</h4>
              </div>
              <div class="card-text">
                 
              </div>
              <a href="#" class="btn btn-success" style="margin-top: 10px;">See more</a>
            </div>
          </div>
    </div>
  </div>
</div>
<br>
 <!-- footer-->


<footer class="text-black text-right" style="margin-top: 50px; padding-bottom: 5px;">
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



<?php 

if (isset($_POST['Logout'])){
  session_destroy();
  header("location:Login_Farmer.php"); 
}
?>

<script src="https://kit.fontawesome.com/a076d05399.js">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>
</html>