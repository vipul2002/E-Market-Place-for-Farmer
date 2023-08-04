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
<link rel="stylesheet" type="text/css" href="verification_product.css">
<link rel="stylesheet" type="text/css" href="stylees.css">
 

</head>
<body>
 
      <form action="" method="POST">
     
     <div class="container">
       <div class="row">
           <div class="col-1g-7 mx-auto">
       <div class="multistep-container"> 
               <div class="multistep-form-area">
                 <div class="form-box">
                  <header><h3 align="center">Placed Order</h3></header>
                    <ul class="active-button">
                        <li class="active">
                           <span class="round-btn"><div class="fa fa-home"></div></span>
                        </li>    
                        <li class="active">
                         <span class="round-btn"><div class=" fa fa-check"></div>
                         </span>
                       </li>
                       <li class="active">
                         <span class="round-btn"><div class="fa fa-credit-card"></div></span>
                       </li>
                       <li >
                        <span class="round-btn"><div class="fa fa-credit-card"></div></span>
                       </li>
                     </ul>
                  </div>
                </div>
              </div>



             <?php 
  
          $con = mysqli_connect("localhost","root","","login1"); 
          $sql="select * from address ";
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

           
          <div class="card">
            <div class="card-body">

                  <div class="folder">
               <img src="<?php echo $res['image'] ?>" height="200px;" width="350px;">
                
                <div class="detail">
                    <div class="title"><b>Product Name</b><?php echo $res['name'] ?></div>
                    <div class="name"><b>Product Quantity</b><?php echo $res['p_quantity'] ?>:</div>
                    <div class="price"><b>Product Price</b><?php echo $res['price'] ?></div>


       <?php

       $p_quantity=$res['p_quantity'];
       $price = $res['price'];
       $final=bcmul($p_quantity,$price);
       $final_price= $final_price+$final;

        ?>
        </div>    
                </div>

 

            </div>
        </div>
        </div>
    </div>
  </div>
  
       <?php
   

    }
  }


   ?>

                <br><br><br>
                    
<div class="container">
  <div class="address">
      <h3> <b>Name:</b> <?php  echo" <br>";echo $firstname; echo" " ;echo $lastname; ?></h3>
       <h3> <b>Shipping Address:</b> <?php echo" <br>"; echo $houseno;echo" ,";echo $area; echo " ,";echo $city;echo " ,";echo $pincode; echo " ,";echo $state;?></h3>
       <h3><b>Phone Number:</b> <?php echo" <br>";  echo $phno; ?></h3>
       
  </div>
    <div class="totalamt">
       <label id="lb" >Total:</label>
       <h3> <?php echo $final_price;?></h3>
       <input type="text" name="finalprice" value="<?php echo $final_price?>" hidden="">
       </div>

                     
        <a href="pbuy.php">
          <input type="button" class=" btn2 btn btn-primary" name="" value="Pay">
         </a>
         </div>
  </form>


 

</body>
</html>