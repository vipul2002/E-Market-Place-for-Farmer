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


</head>
<style type="text/css">
  

  *{
 padding: 0; 
 margin: 0; 
 box-sizing: border-box;
 }
 .bg{ background-size:cover;

}
.bCards{
  margin-top: 50px ;
  padding-left: 400px;
}
.cardImg{
  height: 180px;
  width: 222px;
}
.cardHover{
  transition: .5s;
}
.cardHover:hover {
  transform: scale(1.1);
}


@media(max-width: 700px){
 
  .bCards{
    margin-top: 50px ;
    padding-left: 0px;
  }
  .cardImg{
    height: 250px;
    width: 100%;
  }

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
  
  .bCards{
    margin-top: 50px ;
    padding-left: 0px;
  }
  .cardImg{
    height: 250px;
    width: 100%;
  }
 
}
@media(max-width: 380px){
  .bCards{
    margin-top: 50px ;
    padding-left: 0px;
  }
  .cardImg{
    height: 250px;
    width: 100%;
  }
  
 
}
@media(max-width: 280px){
 
}

</style>
<body>


  <?php 
  
          $con = mysqli_connect("localhost","root","","login1"); 
          $sql="select * from address where username='$adminlogin' ";
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
  
  
  $sql ="SELECT * FROM payment_success where username='$adminlogin'";
  $queryfire = mysqli_query($con,$sql);

  $num=mysqli_num_rows($queryfire);
$final_price=0;

  if ($num >0) {
    ?>
  
    <?php
    while ($res = mysqli_fetch_array($queryfire)) {
 
      ?>

  <form action="" method="POST">

         <section class="bCards">
    <div class="card mb-3 cardHover" style="max-width: 650px;">
  <div class="row g-0  ">
    <div class="col-md-4">
    	 <h5 class="card-title" hidden=""><b>Product Name</b><?php echo $res['name'] ?></h5>
    	 <?php 
                  $pname=$res['name'];
                  $s="select * from Product_final where name='$pname'";
                  $ss=mysqli_query($con,$s);
                  $ress = mysqli_fetch_array($ss);
    	  ?>
          <img src="<?php echo $ress['image'] ?>" height="200px;" width="350px;"  class="cardImg">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><b>Product Name</b><?php echo $res['name'] ?></h5>
        <p class="card-text"><b>Product Quantity</b><?php echo $res['p_quantity'] ?>:</p>
        <p class="card-text"><small class="text-muted"><b>Product Price</b><?php echo $res['final_price'] ?></small></p>
       
    




	 <button class=" btn btn-danger " style="border-radius: 10px;"> <a href="recipt.php?paymentid=<?php echo $res['payment_id'];?>"class="text-white"> GET</a> </button>

</a>


        
      </div>
    </div>
  </div>
</div>
 


</section>

<?php
   

    }
  }


   ?>

</form>
  <br><br><br><br><br>  <br><br><br><br><br>  <br><br><br><br><br>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>