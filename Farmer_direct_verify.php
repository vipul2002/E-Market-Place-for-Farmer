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

<!DOCTYPE html>
<html>
<head>
  <title>Product view </title>

     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
  <br><br>
<style type="text/css">
      
    
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
.multistep-container{
  
 margin-top: 20px;
  
}
.multistep-container .active-button{
  display: table;
  margin: auto;
  padding-left: 0;
  overflow: hidden;
}
.multistep-container .active-button li{
  display: inline-block;
  width: 175px;
}
.multistep-container .active-button li .round-btn{
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background-color: #ccc;
  display: block;
    color: #000;
  text-align: center;
  font-family: 'poppins';
  font-weight:500;
  line-height: 30px;
  max-width: 100%;
  margin: auto;
  position: relative;
  z-index: 1;
}
.active{
  color: var(--pink);
  border-color: pink;

}
.multistep-container .active-button li.active .round-btn{
  background-color: var(--pink);
  color:white;
}
.multistep-container .active-button li:not(:first-child) .round-btn:before{
  position: absolute;
  content: '';
  margin-left: 3px;
  width: 148px;
  height: 3px;
  background-color: #ccc;
  left: -148px;
    top : 50% ;
    transform: translateY(-100%);
    transform: 0.5s;
    z-index: -1;
  
  }
  .multistep-container .active-button li.active:not(:first-child) .round-btn:before{
    background-color: var(--pink);
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
 
  .multistep-container{
    
  }
  .multistep-container .active-button li{
    display: inline-block;
    width: 145px;
  }
  .multistep-container .active-button li:not(:first-child) .round-btn:before{
       width: 116px;
    left: -118px;
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

@media(max-width: 600px){
  
  .bCards{
    margin-top: 50px ;
    padding-left: 0px;
  }
  .cardImg{
    height: 250px;
    width: 100%;
  }
  .multistep-container .active-button li{
    display: inline-block;
    width: 95px;
  }
.multistep-container .active-button {
 
}
.multistep-container .active-button li:not(:first-child) .round-btn:before{
       width: 66px;
    left: -68px;
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
  .multistep-container .active-button li{
    display: inline-block;
    width: 76px;
  }
.multistep-container .active-button {
 
}
.multistep-container .active-button li:not(:first-child) .round-btn:before{
       width: 46px;
    left: -49px;
  }
}
@media(max-width: 280px){
   
  .multistep-container .active-button li{
    display: inline-block;
    width: 70px;
  }
.multistep-container .active-button {
 
}
.multistep-container .active-button li:not(:first-child) .round-btn:before{
       width: 40px;
    left: -43px;
  }
}
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
          <a class="nav-link active" aria-current="page" href="Farmer_Home_Page.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Categoary
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
          <a class="nav-link" href="F_Your_order.php"><i class="fa fa-eye" aria-hidden="true"> </i>  Your Orders</a>
        </li>

       
              </ul>
      
    </div>
  </div>
</nav>
<br><br><br>

  <?php 
  $id=$_GET['id'];
  $con =mysqli_connect("localhost","root","","login1");

  $sql ="SELECT `id`, `product_id`, `type`, `name`, `image`, `price`, `quantity`, `p_quantity`, `username` FROM `direct_buy` WHERE product_id= $id";
  $result =mysqli_query($con,$sql);
  $res = mysqli_fetch_array($result);
   $qu=$res['quantity'];
     ?>
      

<section class="bCards">
  <form action="Farmer_direct_buy_progress.php?id=<?php echo $id ;?>" method="POST">
    <div class="card mb-3 cardHover" style="max-width: 650px;">
  <div class="row g-0  ">
    <div class="col-md-4">
          <img src="<?php echo $res['image'] ?>" height="200px;" width="450px;"  class="cardImg">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><b>Product Name</b> :<?php echo $res['name'] ?></h5>
        <h6> &#8377;<?php echo $res['price'];  ?></h6>
        <p class="card-text"><b>Product Quantity</b></p>
         
        <input type="number"  id="quantity"name="quantity" min="0" max="50" value="<?php echo $res['p_quantity']; ?>" onchange="updateQ(this.value,<?php echo $res['product_id']; ?>,<?php echo $res['quantity'] ?>);"/><br>
    
      </div>
       <button class="btn btn-primary" id="buy" style="width:120px ;">Buy</button>
       <h4 style="opacity: 0;" id="msg" class="text-danger"> <i>out of stock </i></h4>
    </div>
  </div>
</div>
</form>
</section>



<script type="text/javascript">
  

  function updateQ(str,id,quantity){
 if (str<=quantity){
  
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","update1.php?id="+id+"&q="+str,true);
    xmlhttp.send();
   document.getElementById("buy").disabled = false;
    document.getElementById("msg").style.opacity = 0;
  }else{
    
    document.getElementById("buy").disabled = true;
    document.getElementById("msg").style.opacity = 1;
     
  }

}

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</div>





</body>
</html>