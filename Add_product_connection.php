<?php
 
$con = mysqli_connect("localhost","root","","login1");
 
if(isset($_POST['submit']))
 
        {​​​​​​​​
 

$name = $_POST['product-name'];
 
$type = $_POST['product'];
 
$image = $_FILES['image']['tmp_name'];
 
$imageName=$_FILES['image']['name'];
$var=explode('.', $imageName);
$imageExt=strtolower(end($var));
 
$fileExtStored=array('png','jpg','jpeg','img');
 
$price = $_POST['price'];
 
$quantity = $_POST['quantity'];
 
$address = $_POST['address'];
 
$progress=1;
 
$seen=0;
 
   if(in_array($imageExt,$fileExtStored)){​​​​​​​​
 
					$destinationFile='image/'.$imageName;
					 
					move_uploaded_file($image, $destinationFile);
					 
					$result = mysqli_query($con,"insert into product values('','$type','$name','$destinationFile','$price','$quantity','$address','$adminlogin','$progress','$seen')");
					 
					if($result)
					 
				  {​​​​​​​​
					echo'<script>window.alert("data entered");</script>'; 

				 }​​​​​​​​
					 
					else
					  {​​​​​​​​
					 
					echo'<script>window.alert("Something gone wrong");window.history.back();</script>'; 
					
					     }​​​​​​​​
				   }​​​​​​​​
					 

					 
					else
					            {​​​​​​​​
					 
					echo'<script>alert(" wrong");window.history.back();</script>'; 
					 
					            }​​​​​​​​
					 
					        }​​​​​​​​
					 
					?>