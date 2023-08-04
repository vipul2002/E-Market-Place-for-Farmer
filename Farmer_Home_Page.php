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
  <title>Home Page</title>
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
  <form class="d-flex" method="POST">
  <button class="btn btn-primary" name="Logout">Logout</button>
</form>
 

<form class="d-flex" method="POST">
        <div class="input-group">

<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 20px;" aria-describedby="search-addon"onkeyup="setInterval(showHint(),10);setInterval(dropdownfun(),10);"onblur="hide()"id="search">


  <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <ul></ul>
        </div>
         
     </div>


        
        
        
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
          <a class="nav-link active" aria-current="page" href="Farmer_Home_Page.php">Home</a>
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
          <a class="nav-link" href="F_Your_order.php"><i class="fa fa-eye" aria-hidden="true"> </i>  Your Orders</a>
        </li>

       
              </ul>
      
    </div>
  </div>
</nav>
 <!-- button-->


  
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
<style type="text/css">
.card{
  display: block;
  border-radius: 10px;
  cursor: pointer;
  transition: 0.2s;
}
.card:hover{
z-index: 1;
transform: scale(0.90);
 box-shadow: 0 0 10px 0 green;

}
.button{
  margin-bottom:  10px;
  cursor: pointer;
}
/*.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(3px);
}*/

</style>
<div class="container">

  <div class="row">

    <h2 class="text-center text-success">CATEGORY</h2><br><br>
   
    <div class=" col-lg-3 col-md4 col-sm-7"> 
          <div class="card text-center">
            <div class="card-block">
              <img src="Images/Grains.jpg" alt="" class="img-fluid">
              <div class="card-title">
                <h4>Grains</h4>
              </div>
              <div class="card-text">
                 
              </div>
              <a href="Farmer_product_view_grains.php"  class="button btn btn-success"  style="margin-top: 10px;">See more</a>
            </div>
          </div>
    </div>

     <div class="col-lg-3 col-md4 col-sm-7"> 
          <div class="card text-center">
            <div class="card-block">
              <img src="Images/Vegetables.jpg" alt="" class="img-fluid">
              <div class="card-title">
                <h4>Vegetables </h4>
              </div>
              <div class="card-text">
                 
              </div>
              <a href="Farmer_product_view_vegetables.php" class="button btn btn-success" style="margin-top: 10px;">See more</a>
            </div>
          </div>
    </div>

     <div class="col-lg-3 col-md4 col-sm-7"> 
          <div class="card text-center">
            <div class="card-block">
              <img src="Images/Fruits.jpg" alt="" class="img-fluid">
              <div class="card-title">
                <h4>Fruits </h4>
              </div>
              <div class="card-text">
                 
              </div>
              <a href="Farmer_product_view_fruit.php" class="button btn btn-success" style="margin-top: 10px;">See more</a>
            </div>
          </div>
    </div>

     <div class="col-lg-3 col-md4 col-sm-7"> 
          <div class="card text-center">
            <div class="card-block">
              <img src="Images/Flowers.jpg" alt="" class="img-fluid">
              <div class="card-title">
                <h4>Flowers</h4>
              </div>
              <div class="card-text">
                 
              </div>
              <a href="Farmer_product_view_flower.php" class="button btn btn-success" style="margin-top: 10px;">See more</a>
            </div>
          </div>
    </div>
  </div>
</div>

<br>
 <!-- footer-->


<style type="text/css">
  
*{
  margin:0;
  padding: 0;
  box-sizing: border-box;
}

body{
  
  flex-direction: column;
  
}

footer{
  position: relative;
  width: 100%;
  height: auto;
  padding: 50px 100px;
  background:#111;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

footer .container{
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  flex-direction: row;
}
footer .container .sec{
  margin-right: 30px;
}
footer .container .sec.aboutus{
  width: 40%;


}
footer .container  h2{
  position: relative;
  color: #fff;
  font-weight: 500;
  margin-bottom: 15px;
}
footer .container  h2:before{
  content: '';
  position: absolute;
  bottom: -5px;
  left: 0;
  width: 50px;
  height: 2px;
  background:#f00;
}
footer  p{
  color:#999;
 }
.sci{
  margin-top: 20px;
  display: flex;
}
.sci li{
  list-style: none;
}
.sci li a{
  display: inline-block;
  width: 40px;height: 40px;
  background:#222;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-right: 10px;
  text-decoration: none;
  border-radius: 4px; 
}
.sci li a:hover{
  background:#f00;
}
.sci li a .fa{
  color: white;
  font-size: 20px;  

}
.quickLinks{
  position: relative;
  width: 25%;
}
.quickLinks ul li{
  list-style: none;
}
.quickLinks ul li a {
  color: #999;
  text-decoration: none;
  margin-bottom: 10px;
  display: inline-block; 
}
.quickLinks ul li a:hover{
  color: #fff;
}

.contact{
  width: calc(35%-60px);
  margin-right: 0 !important;
}

.contact .info{
  position: relative;
}
.contact .info li{
  display: flex;
  margin-bottom: 16px;
}
.contact .info li span:nth-child(1){
  color:#fff;
  font-size: 20px;
  margin-right: 10px;
}
.contact .info li span{
  color: #999;
}
.contact .info li  a{
  color: #999;
  text-decoration: none;
}
.contact .info li span:hover{
  color: #fff;
}
.contact .info li  a:hover{
  color: #fff;
}

.copyright{
  width: 100%;
  background:#181818;
  padding: 8px 100px;
  text-align: center;
  color: #999;

}

@media(max-width: 991px){
  footer{
    padding: 40px;
  }
  footer .container{
    flex-direction: column; 
  }
  footer .container .sec{
    margin-right: 0;
    margin-bottom: 40px;
  }
  footer .container .sec .aboutus,.quickLinks,.contact{

  }

  .copyright{
    padding: 8px 40px;
  }
}
</style>

 <footer>
    <div class="container">
      <div class="sec aboutus">
        <h2>About-us</h2>
        <p> Our web application provides a platform for farmers to sell their product online & it will reduce the role of middlemen who are hindering the trading in the agriculture sector. These e-Market platforms are free of cost and can be accessed from anywhere and made available in understandable language to farmers.</p>
        <ul class="sci">
        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
      </ul>
      </div>

      <div class="sec quickLinks">
        <h2>Quick Links</h2>
        <ul>
       <li><a href="Farmer_Home_Page.php">Home </a></li>
        <li><a href="Farmer-aboutus.php">About-us</a></li>
        <li><a href="Farmer_FAQ.php">FAQ</a></li>
        <li><a href="#">Privarcy policy</a></li>
      </ul>
        
      </div>
      <div class="sec contact">
        <h2>Contact Info</h2>
        <ul class="info">
          
          <li>
            <span><i class="fa fa-phone" aria-hidden="true"></i></span>
            <p><a href="#">9370934335</a></p> 
          </li>
          <li>
            <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
            <span>support@emarketplace.com</span>
          </li>
        </ul>
      </div>
    
    </div>
  </footer>
  <div class="copyright">
    <p>copyright  <i class="fa fa-copyright" aria-hidden="true"></i> 2021 Vipul belhekar. All Rights Reserved.</p>
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
              a.href = 'Farmer_dynamic_search_product.php?name='+item;
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>
</html>