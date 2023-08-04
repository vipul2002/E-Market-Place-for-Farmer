<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
</head>
<body>
  <style type="text/css">
    *{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
.bg{
  background-size: cover;

}
body{
  background-color: white;
}

.head{
  
  border-radius: 5px;
  margin-top: -10px;
  height: 60px;
  text-align: center;
  
  font-size: 30px;


}

.card{
  width:900px;
  margin-top: 90px;
  margin-left: 0px; 
  height: 70  0px;
  border-width: 2px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px 0px black;
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

#btn2{
  
  color: white;
  border: 2px solid;
  outline: none;
  width: 300px;
  height: 40px;
  margin-left:200px;
  border-radius: 20px;
}
@media (min-width: 900px){
  .col-1g-7 .mx-auto{
  width:900px; 
}
  </style>
    <section classe ="contact py-5">
      <form action="" method="POST">
      <div class="container">
       <div class="row">
        <div class="col-1g-7 mx-auto">
          <div class="card">
            <div class="card-body">
              <header class="head"><b>Address Detail</b></header>
                <div class="form p-3">
            <div class="row my-3">
                      <div class="col-lg-6">
                  <label><b>First Name*</b></label>
              <input type="text" class="super" id="firstname"name="firstname" placeholder="Enter First Name">
              <span class="focus-border"></span>
            </div>      
           <div class="col-lg-6">
              <label><b>Last Name*</b></label><br>
              <input type="text" class="super" class="" id="lastname" name="lastname" placeholder="Enter Last Name">
              <span class="focus-border"></span>
            </div>
                </div>
                
                <div class="col-lg-6">
                  <label><b>Phone Number*</b></label><br>
                  <input type="Number" class="super" id="phoneno" name="phoneno" placeholder="Enter Phone Number">
                   <span class="focus-border"></span>
                </div>
                <div class="col-lg-6">
                  <label><b>House No.,Building Name*</b></label><br>
                    <input type="text" class="super" id="address" name="address" placeholder="Enter House No.,Building Name">
                     <span class="focus-border"></span>
                </div>
                <div class="col-lg-6">
                    <label><b>Road Name,Area,Colony*</b></label><br>
                    <input type="text" class="super" id="address1" name="address1" placeholder="Enter RoadName,Area,Colony">
                    <span class="focus-border"></span>
                  </div>
                
                 <div class="col-lg-6">
                   <label><b>Pin Code*</b></label><br>
                    <input type="text" class="super" id="pincode" name="pincode" placeholder="Enter Pin Code">
                    <span class="focus-border"></span>

                 </div>  
                 <div class="col-lg-6">
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
                    <span class="focus-border"></span>
                 </div> 
                 <div class="col-lg-6">
                  <label><b>City*</b></label><br>
                    <input type="text" class="super" id="city" name="city" placeholder="Enter City">
                    <span class="focus-border"></span>   
                    </div><br>
                    <button id="btn2" class="btn btn-primary "formaction="payment_options.php">Next</button>


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

