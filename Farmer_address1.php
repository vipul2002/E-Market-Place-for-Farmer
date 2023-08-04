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
<body>

    <section classe ="contact py-5">
      <form action="Farmer_address_connection.php" method="POST">
      <div class="container">
       <div class="row">
        <div class="col-1g-7 mx-auto">
          <div class="card">


            <div class="card-body">
              <header class="head"><b>Address Detail</b></header>
               <div class="multistep-container">
             
             <div class="multistep-form-area">
               <div class="form-box">
              
                 <ul class="active-button">
                     <li class="active">
                       <span class="round-btn"><div class="fa fa-home"></div></span>

                     </li>
                     <li>
                       <span class="round-btn"><div class=" fa fa-credit-card"></div>
                       </span>
                     </li>
                     <li>
                       <span class="round-btn"><div class="fa fa-check"></div></span>
                     </li>
                      <li>
                       <span class="round-btn"><div class="fa fa-check"></div></span>
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
               
                  <label><b>City*</b></label><br>
                    <input type="text" class="super" id="city" name="city" placeholder="Enter City" required="">  
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
                
                     <div class="offset-1 col-leg-4">
           <button type="submit" class="btn2 btn-primary btn-block">Proceed</button><br>
          </div>

          

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
