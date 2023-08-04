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

.btn{
  margin-left: 20px;
  margin-right: 10px;
}
.d-flex{
  float: right;
  margin-right: 30px;
  border-radius: 20px;
  
 }
  </style>

  <div class="cnt">
    <div class="img-11" style="height: 30px; width:100px;">
      <img src="Images/logo3.png">
    </div>
    
</div>
  
<form class="d-flex" method="POST">
      

         <div class="input-group">
<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 20px;" aria-describedby="search-addon"onkeyup="setInterval(showHint(),10);setInterval(dropdownfun(),10);"onblur="hide()"id="search">
  <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <ul></ul>
        </div>        
     </div>    
      </form>

 <?php
  if(ISSET($_POST['search'])){
    $keyword = $_POST['search'];
    if ($keyword==null) {
      
    }
  }


?>


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
          <a class="nav-link " aria-current="page" href="User_Home_Page.php">Home</a>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Category
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
          <a class="nav-link" href="Mycart.php"><i class="fa fa-cart-plus" aria-hidden="true"></i> Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="User_Profile.php"><i class="fa fa-eye" aria-hidden="true"></i>View Profile</a>
        </li>

          <li class="nav-item">
          <a class="nav-link" href="Your_orders.php"><i class="fa fa-eye" aria-hidden="true"></i>View Order</a>
        </li>

              </ul>
      
    </div>
  </div>
</nav>
<br><br><br>
<div class="container">
  

  <div class="row">
  <?php 
  $con = mysqli_connect("localhost","root","","login1");
  
  $sql ="SELECT id,name,image,price,quantity FROM product_final where type='grains'ORDER BY id ASC";
  $queryfire = mysqli_query($con,$sql);

  $num=mysqli_num_rows($queryfire);


  if ($num >0) {
    
    
    while ($res = mysqli_fetch_array($queryfire)) {

      ?>
      <div class="col-lg-3 col-md-6 colsm-12">
        <form>
          <div class="card">
            <h6 class="card-title text-center" style="font-size: 20px; text-transform: uppercase;margin-top: 10px;"> <?php echo $res['name'];  ?> </h6>
            <div class="card-body">
              <img src=" <?php echo $res['image'];  ?>" alt="farmer" class="img-fluid mb-2" style="height: 200px; width:300px;"><br>
              <h6> &#8377;<?php echo $res['price'];  ?></h6>
              <h6 class="badge badge-success">4.4<i class="fa fa-star"></i>
              </h6>
            </div>
            <div class="btn-group d-flex">
           <button class="btn btn-success"  name="buy" > <a href="direct_buy.php?id=<?php echo $res['id'];?>&name=<?php echo $adminlogin?> " class="text-white">Buy</a></button>
                <button class="btn btn-success"  name="add" > <a href="cart.php?id=<?php echo $res['id'];?>&name=<?php echo $adminlogin?> " class="text-white">Add to cart</a></button>
            </div>
          </div>
        </form>
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


<script>
function showHint() {
  var str=document.getElementById("search").value;
  var div = document.getElementById("dropdown-menu");
  if (str.length == 0) {
    var li = document.createElement('li');
    var ul=document.createElement('ul');
    
    li.className='dropdown-item';
    ul.id='dropdown-item';  
    div.replaceChild(li,div.firstChild);
  } 
  else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      var str1=this.responseText;
      var res = str1.split("/");
      if (this.readyState == 4 && this.status == 200) {
        var ul=document.createElement('div');
        res.forEach(myFunction);
        function myFunction(item,index) { 
          if(index==0&&item==""){
            var li = document.createElement('li');
            li.appendChild(document.createTextNode('not found'));
            li.className='dropdown-item';
            div.replaceChild(li,div.firstChild);
          }else{
            if(item!=""){ 
              var a = document.createElement('a');
              var li = document.createElement('li');
              a.setAttribute('id',index);
              a.href = 'dynamic_search_product.php?name='+item;
              a.style.textDecoration='none';
              li.innerText = item;
              li.className='dropdown-item';
              a.appendChild(li);
              ul.appendChild(a);
              div.replaceChild(ul,div.firstChild);   
            }
          }
        }   
      }
    }
    xmlhttp.open("GET","search.php?q=" + str, true);
    xmlhttp.send();
  }
}

function dropdownfun() {
  document.getElementById("dropdown-menu").classList.add("show");
 
}
function hide(){
  setTimeout(function(){ document.getElementById("dropdown-menu").classList.remove("show"); }, 300);
}
</script>


</body>
</html>