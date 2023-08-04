<?php 
session_start();
$adminlogin = $_SESSION['FarmerLoginId'];
if (!isset($_SESSION['FarmerLoginId'])) {
    header("location:Login_Farmer.php");
}
if (isset($_POST['Logout'])){
  session_destroy();
  header("location:Login_Farmer.php");
  
}
$con = mysqli_connect("localhost","root","","login1");
         $q = "select  fname from flogin where mail ='{$adminlogin}'";

         $query= mysqli_query($con,$q);
         $res = mysqli_fetch_array($query)
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<style type="text/css">
  

  *{
 padding: 0; 
 margin: 0; 
 box-sizing: border-box;
 }
 .bg{ background-size:cover;

}
.bCards{
  margin-top: 50px ;
  padding-left: 400px;
}
.cardImg{
  height: 180px;
  width: 222px;
}
.cardHover{
  transition: .5s;
}
.cardHover:hover {
  transform: scale(1.1);
}
.navbar{
      background-color: #00141a!important;
    }

    .nav-link{
      margin-left:45px;
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

@media(max-width: 700px){
 
  .bCards{
    margin-top: 50px ;
    padding-left: 0px;
  }
  .cardImg{
    height: 250px;
    width: 100%;
  }

   .form-box .active1{
  margin-left: 100px; 
}
.form-box .active2{
  margin-left: 70px; 
}
.form-box .active3{
  margin-left: 70px; 
}
.form-box .active4{
  margin-left : 70px; 
}
 
 
}
@media(max-width: 650px){
   .form-box .active1{
  margin-left: 80px; 
}
.form-box .active2{
  margin-left: 60px; 
}
.form-box .active3{
  margin-left: 60px; 
}
.form-box .active4{
  margin-left : 60px; 
}
}
@media(max-width: 600px){
  
  .bCards{
    margin-top: 50px ;
    padding-left: 0px;
  }
  .cardImg{
    height: 250px;
    width: 100%;
  }
 
}
@media(max-width: 380px){
  .bCards{
    margin-top: 50px ;
    padding-left: 0px;
  }
  .cardImg{
    height: 250px;
    width: 100%;
  }
  
 
}

</style>
<body>

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
          <a class="nav-link active" href="F_Your_order.php"><i class="fa fa-eye" aria-hidden="true"> </i>  Your Orders</a>
        </li>

       
              </ul>
      
    </div>
  </div>
</nav>


  <?php 
  
          $con = mysqli_connect("localhost","root","","login1"); 
          $sql="select * from address where username='$adminlogin' ";
          $sq = mysqli_query($con,$sql);
          $res = mysqli_fetch_array($sq);
     ?>
     <?php 
  
  
  $sql ="SELECT * FROM payment_success where username='$adminlogin'";
  $queryfire = mysqli_query($con,$sql);

  $num=mysqli_num_rows($queryfire);
$final_price=0;

  if ($num >0) {
    
    while ($res = mysqli_fetch_array($queryfire)) {
 
      ?>

  <form action="" method="POST">

         <section class="bCards">
    <div class="card mb-3 cardHover" style="max-width: 650px;">
  <div class="row g-0  ">
    <div class="col-md-4">
       <h5 class="card-title" hidden=""><b>Product Name</b><?php echo $res['name'] ?></h5>
       <?php 
                  $pname=$res['name'];
                  $s="select * from Product_final where name='$pname'";
                  $ss=mysqli_query($con,$s);
                  $ress = mysqli_fetch_array($ss);
        ?>
          <img src="<?php echo $ress['image'] ?>" height="200px;" width="350px;"  class="cardImg">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><b>Product Name</b>: <?php echo $res['name'] ?></h5>
        <p class="card-text"><b>Product Quantity</b>: <?php echo $res['p_quantity'] ?></p>
        <p class="card-text"><b>Product Price</b> :<?php echo $res['final_price'] ?></p>
       
    




   <button class=" btn btn-primary " style="border-radius: 10px; margin-left: 250px;"> <a href="F_Recipt.php?id=<?php echo $res['id'];?>"class="text-white" style="text-decoration: none;"> GET INVOICE</a> </button>
   

</a>


        
      </div>
    </div>
  </div>
</div>
 


</section>

<?php
   

    }
  }
else{
   

  ?>
<h1 align="center" class="text-danger">No order History</h1>

  <?php
}

   ?>

</form>
  <br><br><br><br><br>  <br><br><br><br><br>  <br><br><br><br><br>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>