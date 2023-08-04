

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      
    <title>contact us</title>
  </head>

<style type="text/css">
  .navbar{
      background-color: #00141a!important;
    }

    .nav-link{
      margin-left:250px;
    }

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
  box-shadow: 0px 0px 6px 0px black;
}
.car{
  width: 100%;
  margin-top: 50px;
  box-shadow: 0px 0px 6px 0px black;
  border-radius: 10px;
}

.super{
  border: 0;
  outline: none;
  width: 100%;
  padding: 7px 0;
  border-bottom: 2px solid #ccc;
}
.super ~ .focus-border{
  position: absolute; 
  bottom:0;
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
.btn1{
  
  color: white;
  border: none;
  outline: none;
  width: 160px;
  height: 40px;
  margin-left: 110px;
  
  border-radius: 20px;
}
@media(max-width: 600px){
  .car{
    box-shadow: 0px 0px 0px 0px;
    margin-left: -10px;
  }
  .btn1{
    width: 50px;
    margin-left: 50px;
  }
}

</style>
  <body>

     <div class="cnt">
    <div class="img-11" style="height: 30px; width:100px;">
      <img src="Images/logo3.png">
    </div>
    
</div>
  


<br><br><br><br>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
         
        
        <li class="nav-item">
          <a class="nav-link" href="Unknow-about-us.php">About-us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contact-us.php">Contact-us</a>
        </li>
        
      
              </ul>
      
    </div>
  </div>
</nav
    <section classe ="contact py-5">
      <form action="" method="POST"name="myForm"onsubmit="return validateForm()">
      <div class="container">
       <div class="row">
        <div class="col-1g-7 mx-auto">
          <div class="car">
            <div class="card-body">
              <div class="row pb-3">
                <div class="col-lg-12">
                   <div class="head text-center text-white py-3">
                     <h1> CONTACT US</h1>
                      </div>
                    </div>
                  </div>
                 <div class="form p-3">
                    <div class="row my-5">
                      <div class="col-lg-6">
                  <label><b>First Name</b></label>
              <input type="text" class="super" id="firstname"name="firstname" placeholder="Enter First Name">
              <span class="focus-border"></span>
            </div>      
           <div class="col-lg-6">
              <label><b>Last Name</b></label>
              <input type="text" class="super" id="lastname" name="lastname" placeholder="Enter Last Name">
              <span class="focus-border"></span>
            </div>
                </div>
              <div class="row">
                <div class="col-lg-12">
                  <label><b>Email Address</b></label>
                  <input type="email" class="super"id="emailid" name="emailid" placeholder="Enter Email Address">
                   <span class="focus-border"></span>
              </div>
            </div>
              <div class="row">
                <div class="col-lg-12">
                  <label><b>Phone Number</b></label>
                  <input class="super"id="phno" name="phno" placeholder="Enter Phone Number" type="tel"pattern="[0-9]{10}" title="Enter '10' digits of number">
                   <span class="focus-border"></span>
            </div>
          </div>
               <div class="row pt-8">
                <div class="col-lg-12">
                  <label ><b>Text Area</b></label>
              <textarea type="text" class="super" id="text1" name="text1" placeholder="Enter Text"></textarea> 
               <span class="focus-border"></span>
              </div>
            </div>
            <div class="row pt-3">
              <div class="offset-2 col-leg-4">
                <input type="submit" name="sumbit" class="btn1 btn-primary btn-block" value="Send Message"> 
                
              </div>
              
            </div>
         </div>
       </div>
     </div>
   </div>
     </section>
     <br><br><br>

<script >
  function validateForm() {
  var x = document.forms["myForm"]["firstname"].value;
   var y = document.forms["myForm"]["lastname"].value;
   var z = document.forms["myForm"]["emailid"].value;
   var a = document.forms["myForm"]["phno"].value;
   var b = document.forms["myForm"]["text1"].value;
  if (x == "" || x == null) {
    alert("Please enter your First name");
    return false;
  }
  
  if (y == "" || y == null) {
    alert("Please enter your Last name");
    return false;
  }if (z == "" || z == null) {
    alert("Please enter your Email ID");
    return false;
  }if (a == "" || a == null) {
    alert("Please enter your Phone Number");
    return false;
  }if (b == "" || b == null) {
    alert("Please drop message for us");
    return false;
  }else{
    alert("Your message has been send to Admin");
  }
}
</script>
<?php
/*
$con = mysqli_connect("localhost","root","","login1");

if (isset($_POST['sumbit'])){

      $fname =$_POST['firstname'];
    $lname =$_POST['lastname'];
    $no=$_POST['phno'];
    $email=$_POST['emailid'];
    $msg=$_POST['text1'];
    
}


  ?>
*/

  

$conn = mysqli_connect("localhost","root","","login1");

if ($conn === false) {
  die("connection faild.". mysqli_connect_error());
}


if (isset($_POST['sumbit'])) {

$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$emailid =$_POST['emailid'];
$phno =$_POST['phno'];
$text1=$_POST['text1'];

  $stmt = "INSERT INTO contact_details(fname,lname,email,phno,msg)
VALUES('$firstname','$lastname','$emailid','$phno','$text1')";
if (mysqli_query($conn,$stmt)) {
  //echo "record sucessfully save";
}else{
  echo "error: could not able to execute $stmt.".mysqli_error($conn);
}
mysqli_close($conn);
}
?>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>



</html>

