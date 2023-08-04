	<?php  
$con = mysqli_connect("localhost","root","","login1");


$final_price = mysqli_real_escape_string($con,$_POST['finalprice']);


$query = mysqli_query($con,"UPDATE `add_cart` SET `progress`=2");

header("Location:payment_options.php?final_price=$final_price")

?>