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
<link rel="stylesheet" type="text/css" href="stylees.css">
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
@media(max-width: 700px;){
  .fas{
    font-size: 145px;
  }
  .line{
    
  }
}
</style>
<body>
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

    <section classe ="contact py-5">
      <form method="post" id="ok" name="ok" action="direct_buy_payment_details_update.php" >
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

      <div class="container">
       <div class="row">
        <div class="col-1g-7 mx-auto">
          
              
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
   
   </form>
 </section>
</body>
</html>
