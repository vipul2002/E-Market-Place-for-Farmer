<!DOCTYPE html>
<html>
<head>
  <title> Login Form </title>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" type="text/css" href="footer.css">
</head>
<body>

  <div class="cnt">
    <div class="img-11">
      <img src="Images/logo3.png">
    </div>
    


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
  background-color: rgb(71, 209, 71);
  border-radius: 5px;
  width: 450px;
  margin-left: 25px; 
  margin-top: -40px;
  box-shadow: 0px -3px 10px 0px black;  
}
.car{
  width:500px;
  margin-top: 40px;
  height: 470px;
  border-width: 2px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px 0px black;
}

.super{
  border: 0;
  outline: none;
  width: 100%;
  padding: 5px 0px;
  border-bottom: 1px solid #ccc;
}
.super ~ .focus-border{
  position: absolute; bottom: 0;
  left: 50%;
  width: 0;
  height: 2px;
  background-color: #5CDB95;
  transition: 0.4s;
}
.super:focus ~ .focus-border{
  width: 100%;
  transition: 0.4s;
  left: 0 ;
}
.btn1{
  color: white;
  border: none;
  outline: none;
  width: 150px;
  height: 40px;
    margin-top: 20px;
  margin-left:79px;
  border-radius: 10px;
  cursor: pointer;
}
.btn1:hover {background-color: #3e8e91}

.btn1:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(3px);
}
@media(max-width: 800px){
  .car{
    width: 650px;
    margin-left: -60px;
    height: 450px;
  }
  .head{
    width: 600px;
  }
  .btn1{
    margin-left: 120px;
  }
}
@media(max-width: 700px){
  .car{
    width: 550px;
    margin-left: 1px;
  }
  .head{
    width: 500px;
  }
  .btn1{
    margin-left: 100px;
  }
}

@media(max-width: 600px){
  .head{
    margin-left: 10px;
  }
  .car{
    width: 100%;
    margin-top: 80px;
    padding: 20px; 
    box-shadow: 0px 0px 0px 0px;

  }
}
@media(max-width: 400px){
  .head{
    width: 350px;
    margin-left: 10px;
  }
  .car{
    width: 100%;
    margin-top: 80px;
    padding: 10px;
      
    box-shadow: 0px 0px 0px 0px;
  }
    .btn1{
      margin-left: 48px;
    }
}
  </style>
    <section classe ="contact py-5">
      <form method="POST" action="User_Login_connection.php">
     
      <div class="container">
       <div class="row">
        <div class="col-1g-7 mx-auto">
          <div class="car">
            <div class="car-body">
            <div class="row pb-3">
                <div class="col-lg-12">
                   <div class="head text-center text-white py-3">
                     <h1> USER LOGIN</h1>
                      </div>
                    </div>
                  </div>
                  <div class="form p-3">
          <div class="row">
                   <div class="col-lg-12">
                  <label ><b>Email Address</b></label>
                  <input type="email" class="super"id="emailid" name="username" placeholder="Enter Email Address" required="">
                   <span class="focus-border"></span>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-lg-12">
                <label><b>Password</b></label>
                <input type="Password" class="super"id="pass"name="password" placeholder="Enter Password" required="">
                 <span class="focus-border"></span>
                </div>
              </div>
<br>
              <div class="form-group">
              <a href="user_mail.php"> Forget passsword</a>
            </div>
              
            
            <div class="row pt-3">
              <div class="offset-2 col-leg-4">
                            
                             <input type="submit" name="sumbit1" class="btn1 btn btn-success" value="Login">  <br>

               </div> 
                </div>
                <div class="row ">
                 <div class="offset-2 col-leg-4">
                 <a href="Signup_User.php">
                 <input type="button" name="" class="btn1 btn btn-success" value="Signup"><br>
                   </a>
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

  
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>