<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>Index Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <link rel="stylesheet" type="text/css" href="footer.css">

   
</head>
<body>
  <br>
   <div class="cnt">
    <div class="img-11" style="height: 30px; width:100px;">
      <img src="Images/logo3.png">
    </div>
    
</div>

<br><br>
<button type="button" class="btn btn-primary " id="btn" data-toggle="modal" data-target="#staticBackdrop1">
  Sign-up
</button>
 <div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Sign-up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- my form-->
        <form class="form-container">
          <br>
            
          
            <button type="submit" class="btn btn-primary btn-block" style="width: 300px; margin-left: 80px;" formaction="Signup.php">Sign-up as Farmer</button><br>
            <button type="submit" class="btn btn-primary btn-block"style="width: 300px; margin-left:80px;"formaction="Signup_User.php">Sign-up as User</button><br>


        </form>
      </div>
      
    </div>
  </div>
</div>

<button type="button" class="btn btn-primary " id="btn" data-toggle="modal" data-target="#staticBackdrop">
  Login
</button><br>

 <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <!-- my form-->
        <form class="form-container">
          <br>
            <button type="submit" class="btn btn-primary btn-block" style="width: 300px; margin-left: 80px;" formaction="Login_Farmer.php">Login as Farmer</button><br>
            <button type="submit" class="btn btn-primary btn-block"style="width: 300px; margin-left:80px;"formaction="Login_User.php">Login as User</button><br>

        </form>
      </div>
      
    </div>
  </div>
</div>
 <!--Menu Bar-->
   
<br>    
<style type="text/css">
      #btn{
  float: right;
  margin-right:20px;
  width: 100px;
}
    
    .navbar{
      background-color: #00141a!important;
    }

    .nav-link{
      margin-left:250px;
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
  
}
  </style>

 <!-- button-->


<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        
        
        <li class="nav-item">
          <a class="nav-link" href="Unknow-about-us.php">About-us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Unknow-contact-us.php">Contact-us</a>
        </li>
       
        

              </ul>
      
    </div>
  </div>
</nav>

  

  
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
  <h2 class="text-center text-success">CATEGORY</h2><br><br> 
  <div class="row">
    <div class="col-lg-3 col-md4 col-sm-6"> 
          <div class="card text-center">
            <div class="card-block">
              <img src="Images/Grains.jpg" alt="" class="img-fluid">
              <div class="card-title">
                <h4>Grains</h4>
              </div>
              <div class="card-text">
                 
              </div>
              
              <button type="button" class="btn btn-success" style="margin-right: 70px;" id="btn" data-toggle="modal" data-target="#staticBackdrop">
                    See more
               </button>
            </div>
          </div>
    </div>

     <div class="col-lg-3 col-md4 col-sm-6"> 
          <div class="card text-center">
            <div class="card-block">
              <img src="Images/Vegetables.jpg" alt="" class="img-fluid">
              <div class="card-title">
                <h4>Vegetables </h4>
              </div>
              <div class="card-text">
                 
              </div>
               <button type="button" class="btn btn-success" style="margin-right: 70px;" id="btn" data-toggle="modal" data-target="#staticBackdrop">
                    See more
               </button>
            </div>
          </div>
    </div>

<br> <br>

     <div class="col-lg-3 col-md4 col-sm-6"> 
          <div class="card text-center">
            <div class="card-block">
              <img src="Images/Fruits.jpg" alt="" class="img-fluid">
              <div class="card-title">
                <h4>Fruits </h4>
              </div>
              <div class="card-text">
                 
              </div>
              <button type="button" class="btn btn-success" style="margin-right: 70px;" id="btn" data-toggle="modal" data-target="#staticBackdrop">
                    See more
               </button>
            </div>
          </div>
    </div>

     <div class="col-lg-3 col-md4 col-sm-6"> 
          <div class="card text-center">
            <div class="card-block">
              <img src="Images/Flowers.jpg" alt="" class="img-fluid">
              <div class="card-title">
                <h4>Flowers</h4>
              </div>
              <div class="card-text">
                 
              </div>
               <button type="button" class="btn btn-success" style="margin-right: 70px;" id="btn" data-toggle="modal" data-target="#staticBackdrop">
                    See more
               </button>
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
.admin a  {
                
                text-decoration: none;
               margin-right:1100px; 


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
       <li><a href="index.php">Home </a></li>
        <li><a href="Unknow-about-us.php">About-us</a></li>
        <li><a href="FAQ.php">FAQ</a></li>
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
          <div class="admin">
          <a href="Admin_login.php">
           <button style="background-color:#111; border:none;">ADMIN</button>
          </a>
          </div>
        </div>
  </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>
</html>