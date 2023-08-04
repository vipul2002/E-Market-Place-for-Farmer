
<!DOCTYPE html>
<html>
<head>
	<title>product</title>
</head>
<body>
	<?php
 
				$con = mysqli_connect("localhost","root","","login1");
				 $q = "select  id,name,type,image, price,quantity,username from product";

				 $query= mysqli_query($con,$q);
				 while ($res=mysqli_fetch_array($query)) {
				 	# code..


	?>


<div class="container">
  <div class="row">
    <div class="col-md3 col-sm-6" style="width: 300px;"> 
          <div class="card text-center">
            <div class="card-block">
              	 <img  src="<?php echo $res['image']; ?>" height="100px" width="100px"> 
              <div class="card-title">
                <h4>Grains</h4>
              </div>
              <div class="card-text">
                 
              </div>
              <a href="#" class="btn btn-success" style="margin-top: 10px;">See more</a>
            </div>
          </div>
    </div>
  </div>
</div>

<?php 
   }
?>

</body>
</html>