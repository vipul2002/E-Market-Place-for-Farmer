<?php 
   $id=$_GET['id'];
 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

   <style type="text/css">
    
    *{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
.bg{
  background-size: cover;

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

body{
  background-color: white;
}
.head{
  text-align: center;
  padding-top: 10px;
}
.car{
  width:800px;
  height: 350px;
  margin-top: 80px; 
  border-radius: 20px;
  border-style: 20px;
  
  box-shadow: 0px 0px 5px 0px black;
}
.r{
  margin-top: 15px;
  margin-left: -10px;
  font-size: 20px;
}
.a{
  margin-top: 15px;
  margin-left: 5px;
  font-size: 20px;

}

.btn{
  
  margin-left: 200px;
  margin-top: 50px;
  width: 120px;
  border-radius: 20px;
}

@media(max-width: 800px){
  .multistep-container .active-button li{
    display: inline-block;
    width: 125px;
  }
  .multistep-container .active-button li:not(:first-child) .round-btn:before{
       width: 95px;
    left: -98px;
  }
  .car{
    width: 121%;
    margin-left:  -50px;
  }
  }

@media(max-width: 700px){
   
  .multistep-container{
    
  }
  .multistep-container .active-button li{
    display: inline-block;
    width: 125px;
  }
  .multistep-container .active-button li:not(:first-child) .round-btn:before{
       width: 96px;
    left: -98px;
  }
  .car{
    width: 100%;
    margin-left: 10px;
  }
  .btn{
    margin-left: 140px;
  }
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
  .car{
    width: 460px;
    margin-left: 10px;
  }
  .btn{
    margin-left: 90px;
  }
}

@media(max-width: 480px){
  
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
  .car{
   margin-left: 10px;
    width: 100%;
    box-shadow: 0px 0px 0px 0px white;
  }
  .btn{
    margin-left: 80px;
  }
}

@media(max-width: 420px){
  
  .multistep-container .active-button li{
    display: inline-block;
    width: 75px;
  }
.multistep-container .active-button {
 
}
.multistep-container .active-button li:not(:first-child) .round-btn:before{
       width: 46px;
    left: -48px;
  }
  .car{
   margin-left: 10px;
    width: 100%;
    box-shadow: 0px 0px 0px 0px white;
  }
  .btn{
    margin-left: 80px;
  }
}
@media(max-width: 380px){
    .multistep-container{
    
  }
  .multistep-container .active-button li{
    display: inline-block;
    width: 80px;
  }

.multistep-container .active-button li:not(:first-child) .round-btn:before{
       width: 50px;
    left: -53px;
  }
  .car{
    margin-left: 0px;
    margin-top: 10px;
    box-shadow: 0px 0px 0px 0px;
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

  </style>
 <script type="text/javascript">
    
    function b1()
    {
      var rd1 =document.getElementById("rd1");
      var rd2 =document.getElementById("rd2");
     
     

      if (rd1.checked==true){
            document.getElementById("ok").action="Farmer_cash_delivery.php";
          }      else if(rd2.checked==true){
       document.getElementById("ok").action="Farmer_Direct_payment_option.php?id=<?php echo $id?>";
}      
      else    alert("Choice Payment method");

    }
  </script>
</head>
<body>
    <section class ="contact py-5">
      <form action="" method="post" id="ok">
      <div class="container">
       <div class="row">
        <div class="col-1g-7 mx-auto">
          <div class="car">
            <div class="card-body">



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
                     <li class="active">
                       <span class="round-btn"><div class="fa fa-credit-card"></div></span>
                     </li>
                     <li>
                      <span class="round-btn"><div class="fa fa-credit-card"></div></span>
                     </li>
                   </ul>
  </div>
</div>
</div>    
              <header class="head"><b>Payment Method</b></header>
               
                   <div class="col-lg-8">
                  <div class="a">
                     <input type="radio" name="cash" value="Cash On Delivery" id="rd1">
                      <label for="cash" >Cash On Delivery</label>
                    </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="r">
                      <input type="radio" name="cash" value="upi" id="rd2" style="margin-left: 16px">
                      <label for="cash" >card  </label><br>
                    </div>
                    </div>
                      
                     
              <div class="offset-1 col-leg-4">
           <button onclick="b1()" type="submit" class="btn btn-primary" >Continue</button><br>

       </div>   
            </div>

          </div>

        </div>
      </div>
    </form>
    </section>
  
</body>                  
</head>
</html>