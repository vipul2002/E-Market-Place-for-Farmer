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
 
}@media(max-width: 650px){
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
<body>

  <form action="" method="POST">
    <div class="multistep-container">
  <div class="multistep-form-area">
    <div class="form-box">
      <ul class="active-button">
          <li class="active">
            <span class="round-btn"><div class="fa fa-home"></div></span>

          </li>   
          <li class="active">
            <span class="round-btn"><div class=" fa fa-check"></div>
            </span>
          </li>
          <li >
            <span class="round-btn"><div class="fa fa-credit-card"></div></span>
          </li>
          <li>
              <span class="round-btn"><div class="fa fa-credit-card"></div></span>
          </li>
        </ul>
     </div>
   </div>
 </div>

</form>
  <?php 
  
          $con = mysqli_connect("localhost","root","","login1"); 
          $sql="select * from address where username='$adminlogin' ";
          $sq = mysqli_query($con,$sql);
          $res = mysqli_fetch_array($sq);

          $firstname = $res['firstname'];
          $lastname = $res['lastname'];
          $phno = $res['phno'];
          $houseno = $res['houseno'];
          $area = $res['area'];
          $pincode = $res['pincode'];
          $state = $res['state'];
          $city = $res['city'];

         


        
     ?>
     <?php 
  
  
  $sql ="SELECT name,image,price,p_quantity FROM add_cart where progress=1 && username='$adminlogin'";
  $queryfire = mysqli_query($con,$sql);

  $num=mysqli_num_rows($queryfire);
$final_price=0;

  if ($num >0) {
    ?>
  
    <?php
    while ($res = mysqli_fetch_array($queryfire)) {
 
      ?>

  <form action="Farmer_progress_cart_update.php" method="POST">

         <section class="bCards">
    <div class="card mb-3 cardHover" style="max-width: 650px;">
  <div class="row g-0  ">
    <div class="col-md-4">
          <img src="<?php echo $res['image'] ?>" height="200px;" width="350px;"  class="cardImg">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><b>Product Name</b><?php echo $res['name'] ?></h5>
        <p class="card-text"><b>Product Quantity</b><?php echo $res['p_quantity'] ?>:</p>
        <p class="card-text"><small class="text-muted"><b>Product Price</b><?php echo $res['price'] ?></small></p>
      </div>
    </div>
  </div>
</div>
 <?php

       $p_quantity=$res['p_quantity'];
       $price = $res['price'];
       $final=bcmul($p_quantity,$price);
       $final_price= $final_price+$final;

        ?>


</section>

<?php
   

    }
  }


   ?>

         <section class="bCards">
            <div class="detail">

                <div class="card bg-light text-black cardHover"style="max-width: 650px;" >
            
            <div class="card-img-overlay">
              
              <p class="card-text"><b>Shipping Address:</b> <?php echo" <br>"; echo $houseno;echo" ,";echo $area; echo " ,";echo $city;echo " ,";echo $pincode; echo " ,";echo $state;?></p>
             
              
               <p class="card-text"> <b>Phone Number:</b><?php echo" <br>";  echo $phno; ?></p>

                <h3> <label id="" >Total:</label> <?php echo $final_price;?></h3>
                <input type="text" name="finalprice" value="<?php echo $final_price?>" hidden="">
               

               <input type="submit" name="submit" class="btn btn-primary" value="Buy">  
            </div>
          </div>
            
               
            </div>
          </section>
</form>
  <br><br><br><br><br>  <br><br><br><br><br>  <br><br><br><br><br>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>