<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 

 <title>Sign-Up</title>
  </head>
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
  background-color: #A3DD09;
  border-radius: 5px;
  margin-top: -60px;
  box-shadow: 0px 0px 10px 0px black;
}

.card{
  width: 100%;
  height: 920px;
   margin-top: 155px;
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
.btn2{
  
  color: white;
  border: none;
  outline: none;
  width: 200px;
  height: 40px;
  margin-left: 150px;
  
  border-radius: 20px;
}
@media (min-width: 900px){
  .col-1g-7 .mx-auto{
  width:900px; 
}
}
@media(max-width: 800px){
  .card{
    height: 100%;
    margin-right: 0px;
    margin-top: 180px;
    margin-left: 0px;
  border-width: 0px;
  box-shadow: 0px 0px 0px 0px;
  }
  .btn2{
    width: 150px;
    margin-left: 70px;
  }
}



</style>
  <body>
    <div class="cnt">
    <div class="img-11" style="height: 30px; width:100px;">
      <img src="Images/logo3.png">
    </div>
    <section classe ="contact py-5">
      <form action="User_signup_connection.php" method="POST">
      <div class="container">
       <div class="row">
        <div class="col-1g-7 mx-auto">
          <div class="card" style="">
            <div class="card-body">
              <div class="row pb-3">
                <div class="col-lg-12">
                   <div class="head text-center text-white py-3">
                     <h1> SIGN-UP</h1>
                      </div>
                    </div>
                  </div>
            <div class="form p-3">
                    <div class="row my-3">
                      <div class="col-lg-6">
                  <label><b>First Name</b></label>
              <input type="text" class="super" id="firstname"name="firstname" placeholder="Enter First Name" required="">
              <span class="focus-border"></span>
            </div>      
           <div class="col-lg-6">
              <label><b>Last Name</b></label>
              <input type="text" class="super" id="lastname" name="lastname" placeholder="Enter Last Name" required="">
              <span class="focus-border"></span>
            </div>
                </div>
                 <div class="row">
                <div class="col-lg-12">
                  <label><b>Email Address</b></label>
                  <input type="email" class="super"id="emailid" name="email1" placeholder="Enter Email Address" required="">
                   <span class="focus-border"></span>
              </div>
            </div>
            <br>
              <div class="row">
                 <div class="col-lg-12">
                  <label for="mobileno"><b>Mobile Number</b></label>
              <input type="tel" class="super" id="mobileno" name="mobileno" placeholder="Enter Mobile Number"
                  pattern="[0-9]{10}" title="Enter '10' digits of number" required>           
            <span class="focus-border"></span>
            </div>
        </div>
        <br>
         <div class="row pt-8">
                <div class="col-lg-12">
                   <label for="exampleFormControlSelect1"><b>select state</b></label>
                   <select class="super" id="exampleFormControlSelect1" required="" name="state" >
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
            </div>
            <br>
            <div class="row">
                 <div class="col-lg-12">
              <label for="dateofbirth"><b>DOB</b></label>
              <input type="date" class="super" id="dateofbirth" required="" name="dateofbirth">
              <span class="focus-border"></span>
            </div>
          </div>
          <br>
           <div class="row">
                 <div class="col-lg-12">
              <label for="exampleInputPassword1"><b>Password</b></label>
              <input type="password" class="super"  name="pass"  id="exampleInputPassword1" required="" pattern ="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
              <span class="focus-border"></span>
            </div>
          </div>
          <br>
            <div class="row">
                 <div class="col-lg-12">
              <label for="exampleInputPassword2"><b>Confirm-Password</b></label>
              <input type="password" class="super" name="pass1"   id="exampleInputPassword2" required="" pattern ="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
              <span class="focus-border"></span>
            </div>
          </div>
          <br>
          <div class="row pt-3">
              <div class="offset-1 col-leg-4">
          <input type="submit" name="sumbit1" class="btn2 btn-primary btn-block" value="Sign-up">
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
