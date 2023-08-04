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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  <script type="text/javascript">
    function submitForm() { // submits form
        document.getElementById("ok").submit();
    }
    function btnSearchClick()
    {
        if (document.getElementById("ok")) {
          $(".fas").animate({left: '400px' });
            setTimeout("submitForm()", 1000); // set timout 
       }
    }
    </script>

</head>
<style type="text/css">
  .card{
    width: 700px;
  border:0;
  height: 00px;
   
  }

  .fas{
    position: absolute;
    margin-top: 50px;
    margin-bottom: 50px;
    font-size:  200px;
  }
.btn2{
  margin-left: 200px;
}
.line{
  position: absolute;
  content: '';
  margin-left: 3px;
  margin-top: 273px; 
  width: 600px;
  height: 3px;
  background-color: gray;
  
    top : 50% ;
    transform: translateY(-100%);
    transform: 0.5s;
    z-index: -1;
  
}
*{
 padding: 0; 
 margin: 0; 
 box-sizing: border-box;
 }
 .bg{ background-size:cover;

}

.multistep-container{
  
 margin-top: 40px;
  
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
.active1{
  margin-left: auto; 
}
.active2{
  margin-left: auto; 
}
.active3{
  margin-left: auto; 
}
.active4{
  margin-left: auto; 
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
  margin-top: 100px;   
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


@media(max-width: 700px;){
  .fas{
    font-size: 145px;
  }
  .line{
    
  }
}
</style>
<body>
    <section classe ="contact py-5">
    <form method="post" id="ok" name="ok" action="Farmer_cash_details_update.php">
      <div class="container">
       <div class="row">
        <div class="col-1g-7 mx-auto">
          <div class="multistep-container"> 
               <div class="multistep-form-area">
                 <div class="form-box">
                  <header><h3 align="center">Order Placed </h3></header>
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
                       <li class="active">
                        <span class="round-btn"><div class="fa fa-credit-card"></div></span>
                       </li>
                     </ul>
                  </div>
                </div>
              </div>

             

              <?php 


  $con = mysqli_connect("localhost","root","","login1"); 
   $query="select * from direct_buy where progress=1";
    $q=mysqli_query($con,$query);

         while ($ress=mysqli_fetch_array($q)) {
      
      $name=$ress['name'];
      $quantity=$ress['p_quantity'];
      $username=$ress['username'];
      $price=$ress['price'];
     $final_price= bcmul($price,$quantity);

 ?>



   
      
  <div>
        <img src="<?php echo $ress['image'];?>" width="200px" height="200px"  hidden="">
    <h3 name="Paymentid" hidden=""><?php echo $Paymentid;  ?></h3>
    <h3 name="payment_status"  hidden=""><?php echo$payment_status; ?></h3>
    <h3 name="payment_request_id"  hidden="" hidden=""><?php echo $Payment_request_id;?></h3>

    <h3 hidden="" > Product name: <?php echo $ress['name'];;?></h3>
    <h3  hidden=""> Quantity: <?php echo $ress['p_quantity'];?></h3>
        <h3 hidden=""> Ammount: <?php echo $final_price;?></h3>
    
 </div>

<?php 
 }
?>
              
          <div class="card">
            <div class="card-body">
              <div class="fas fa-shipping-fast"></div>
              <span class="line"></span> 
              <p style="margin-top: 300px"><b>Thank You! Your product will be shipping on your address as soon as possible</b></p>
 <input class=" btn2 btn btn-primary"  onclick="btnSearchClick();" type="button" value="Continue shopping">        
              </div>
               </div>
             </div>
           </div>
         </div>
       </div>
   </form>
 </section>
</body>
</html>
      