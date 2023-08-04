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
<link rel="stylesheet" type="text/css" href="address.css">
<script type="text/javascript" src="detail.js"></script>
</head>
<style type="text/css">
  

   *{
 padding: 0; 
 margin: 0; 
 box-sizing: border-box;
 }
 .bg{ background-size:cover;

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

body{
  background: white ;
     
}


.head{
  
  border-radius: 5px;
  height: 60px;
  text-align: center;
  font-size: 30px;


}

.car{
  width:800px;
  margin-top: 30px;
  margin-bottom: 30px;
  margin-left: 170px; 
  height: 100%;
  border-width: 2px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px 0px black;
}
.container{
  border: 3px;
}

.super{
  border: 0;
  outline: none;
  width: 100%;
  padding: 7px 0;
  border-bottom: 2px solid #ccc;
}
.super ~ .focus-border{
  position: absolute; bottom:0;
  left: 50%;
  width: 0;
  height: 2px;
  background-color: #A3DD09;
  transition: 0.4s;
}
.super:focus ~ .focus-border{
  width: 100%;
  transition: 0.4s;
  left: 0 ;
}

.btn2{
  
  color: white;
  border: none;
  outline: none;
  width: 180px;
  height: 40px;
  margin-top: 30px;
  margin-left: 200px; 
  border-radius: 20px;
}

@media (max-width: 1000px){
  .col-1g-7 .mx-auto{
  width:  900px; 
}

.row .my-3{
  height: 180px;
}
.col-lg-13{
  height: 107px;
}
.super{
  height: 60px;
}
.car{
  height: 100%;
  margin-right: -10px;
  margin-left: -10px;
  margin-top: 30px;
}
.fa{
  font-size: 20px;
}
.btn{
  margin-left: 20px;
}

}
@media(max-width: 770px){
  .multistep-container .active-button li{
    display: inline-block;
    width: 95px;
  } 
  .multistep-container .active-button li:not(:first-child) .round-btn:before{
       width: 66px;
    left: -68px;
  }
  .col-1g-7 .mx-auto{
    width: 100%;
  }
  .car{
    box-shadow: 0px 0px 0px 0px;
    margin-left: -50px;
    margin-right: -67px;
  }
}

@media(max-width: 700px){
  .multistep-container{
    
  }
  .multistep-container .active-button li{
    display: inline-block;
    width: 140px;
  }
  .multistep-container .active-button li:not(:first-child) .round-btn:before{
       width: 110px;
    left: -113px;
  }
 .car{
  margin-right: -20px; 
  margin-left: -10px;
 }
 .btn2{
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
    margin-left: 10px;
    margin-right: 10px;
  }
  .btn2{
    margin-left: 90px;
  }
}
@media(max-width: 400px){
   .multistep-container .active-button li{
    display: inline-block;
    width: 74px;
  }
.multistep-container .active-button {
 
}
.multistep-container .active-button li:not(:first-child) .round-btn:before{
       width: 42px;
    left: -45px;
  }

}
@media(max-width: 380px){
   
  .multistep-container .active-button li{
    display: inline-block;
    width: 69px;
  }
.multistep-container .active-button {
 
}
.multistep-container .active-button li:not(:first-child) .round-btn:before{
       width: 43px;
    left: -43px;
  }
  .btn2{
    margin-left: 50px;
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
   .btn2{
    width: 140px;
    margin-left: 16px;
  }
}



</style>
<body>
  
      <section classe ="contact py-5">
         <?php
      $id=$_GET['id']; 
      ?>
      <form action="User_buy_address_connection.php?id=<?php echo$id;?>" method="POST">
      <div class="container">
       <div class="row">
        <div class="car">
        <div class="col-1g-7 mx-auto">
         <header class="head"><b>Address Detail</b></header>
    <div class="multistep-container">
             
             <div class="multistep-form-area">
               <div class="form-box">
             
                 <ul class="active-button">
                     <li class="active">
                       <span class="round-btn"><div class="fa fa-home"></div></span>

                     </li>   
                     <li >
                      <span class="round-btn"><div class="fa fa-credit-card"></div></span>
                     </li>

                     <li >
                       <span class="round-btn"><div class=" fa fa-check"></div>
                       </span>
                     </li>
                     
                     
                   </ul>
                </div>
              </div>
            </div>
         
              
                <div class="form p-3">
            <div class="row my-3">
                      <div class="col-lg-6">
                  <label class="fa fa-user "><b>First Name* </b></label>
              <input type="text" class="super"  id="firstname"name="firstname" placeholder="Enter First Name" required="" >

              
            </div>      
           <div class="col-lg-6" style="margin-top: -10px">
              <label><b>Last Name*</b></label><br>
              <input type="text" class="super" class="" id="lastname" name="lastname" placeholder="Enter Last Name" required="">
            </div>
               </div>
              
                 <div class="col-lg-13">
                  <label class="fa fa-phone"><b>Phone Number*</b></label><br>
                  <input type="Number" class="super" id="phno" name="phno" placeholder="Enter Phone Number" required="">
                   </div>
                 

                <div class="col-lg-13">
                  <label class="fa fa-home"><b>House No.,Building Name*</b></label>
                    <input type="text" class="super" id="address" name="address" placeholder="Enter House No.,Building Name" required="">

                </div>
                <div class="col-lg-13">
                    <label class=""><b>Road Name,Area,Colony*</b></label><br>
                    <input type="text" class="super" id="address1" name="address1" placeholder="Enter RoadName,Area,Colony" required="">
                  </div>
                
                 <div class="col-lg-13">
                   <label><b>Pin Code*</b></label><br>
                    <input type="text" class="super" id="pincode" name="pincode" placeholder="Enter Pin Code" required="">
                    

                 </div>  
                 <div class="col-lg-13">
                    <label><b>State*</b></label><br>
                    <select class="super" id="state" name="state">
                       <option>Andhra Pradesh</option>
                    <option>Arunachal Pradesh</option>
                    <option>  Assam</option>
                    <option>  Bihar</option>
                    <option>  Chhattisgarh</option>
                    <option>  Goa</option>
                    <option>Gujarat</option>
                    <option>Haryana</option>
                    <option>Himachal Pradesh</option>
                    <option>  Jharkhand</option>
                    <option>  Karnataka</option>
                    <option>  Kerala  </option>
                    <option>Madhya Pradesh</option>
                    <option>Maharashtra</option>
                    <option>  Manipur</option>
                    <option>Meghalaya</option>
                    <option>Mizoram</option>
                    <option>Nagaland</option>
                    <option>  Odisha</option>
                    <option>  Punjab</option>
                    <option>Rajasthan </option>
                    <option>  Sikkim</option>
                    <option>  Tamil Nadu</option>
                    <option>  Telangana</option>
                    <option>  Tripura</option>
                    <option>Uttar Pradesh</option>
                    <option>Uttarakhand</option>
                    <option>  West Bengal</option>
                   
                    <option>Andaman and Nicobar Islands</option>
                    <option>Chandigarh</option>
                    <option>Dadra & Nagar Haveli and Daman & Diu</option>
                    <option>Delhi</option>
                    <option>Jammu and Kashmir</option>
                    <option>Lakshadweep</option>
                    <option>Puducherry</option>
                    <option>Ladakh</option>
                    </select>
                 </div> 
                 <div class="col-lg-13">
               
                  <label><b>City*</b></label><br>
                    <input type="text" class="super" id="city" name="city" placeholder="Enter City" required="">  
                    </div>
                     <div class="offset-1 col-leg-4">
           <button type="submit" class="btn2 btn-primary btn-block">Proceed</button><br>
          </div>

                
              
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
