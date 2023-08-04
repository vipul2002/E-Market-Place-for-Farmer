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


</head>
<body>


  <style type="text/css">
    
    h2{
      text-transform: uppercase;
      font-family: sans-serif;
      font-size: 30px;
      }
h3{
  font-size: 20px;
  font-family: sans-serif;
  text-transform: uppercase;
}


.multistep-container{
  
  margin: 0 auto;
  
}
.multistep-container .active-button{
  display: table;
  margin: auto;
  padding-left: 0;
  overflow: hidden;
}
.multistep-container .active-button li{
  display: inline-block;
  width: 180px;
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
  width: 154px;
  height: 3px;
  background-color: #ccc;
  left: -154px;
    top : 50% ;
    transform: translateY(-100%);
    transform: 0.5s;
    z-index: -1;
  
  }
  .multistep-container .active-button li.active:not(:first-child) .round-btn:before{
    background-color: var(--pink);
  }


  .add{
    padding: 20px;
    margin-left: 100px;
    height: 400px;
    width: 650px;
  }
 </style>

   <br><br>
    <h2 align="center">Verification</h2><br><br>
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
    

   
       <div class="multistep-container">
             
             <div class="multistep-form-area">
               <div class="form-box">
               <label class="active" style="margin-left:250px">Address</label>
                <label class="active" style="margin-left: 110px">Verification</label>
                 <label style="margin-left: 100px">Payment</label>
                 <label style="margin-left: 100px">Order placed</label>
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
       <form class="ver"action=" test_connection.php" method="POST">
    <div class="container">
       
        <div class="col-lg-7 mx-auto">
          <div class="card">
            <div class="card-body">

              <div class="img-fluid">
                <img src="<?php echo $res['image'] ?>" height="200px;" width="200px;"><br><br>
              </div>
              <div class="detail" style="float: right; display: block;margin-top: 50px;">
               
                 <h3 class="name"  ><b> <?php echo $res['name'] ?></b></h3>
                 <h3 name="product_q"><b>quantity:</b><?php echo $res['p_quantity'] ?></h3>
                 <h3 name="price"><b>Price:</b> <?php echo $res['price'] ?></h3>
             </div>
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
<br><br>
      
       
       <?php
   

    }
  }


   ?> <br><br><br>
<div class="add">
   <h2>Shipping Details</h2>
   



    <h3> <b>Name:</b> <?php echo $firstname; echo" " ;echo $lastname; ?></h3>
       <h3> <b>Shipping Address:</b> <?php echo $houseno;echo" ,";echo $area; echo " ,";echo $city;echo " ,";echo $pincode; echo " ,";echo $state;?></h3>
       <h3><b>Phone Number:</b> <?php echo $phno; ?></h3>
       <div class="totalamt">
  
  <label id="lb">Total:</label>
  <h3> <?php echo $final_price;?></h3>
  <input type="text" name="finalprice" value="<?php echo $final_price?>" hidden="">

 
  
    </div>
    <input type="submit" name="submit" value="proceed" class="btn btn-success">     
      </form>

</div>
<br><br>




</body>
<script src="https://kit.fontawesome.com/a076d05399.js">
<scriptsrc="https://code.jquery.com/jquery-3.5.1.slim.min.js"integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>
