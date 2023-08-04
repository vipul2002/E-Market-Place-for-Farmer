<?php 

	$con = mysqli_connect("localhost","root","","login1");


	if (isset($_POST['sumbit1'])) 
	{	 $fname =$_POST['firstname'];
		$lname =$_POST['lastname'];
		$no=$_POST['mobileno'];
		$state=$_POST['state'];
		$db=$_POST['dateofbirth'];
		$mail=$_POST['email1'];
		$pass=$_POST['pass'];
		$pass1=$_POST['pass1'];

		if($pass==$pass1)
		{
			$sql="INSERT INTO `ulogin`( `Fname`, `LNAME`, `MNO`, `STATE`, `birthhd`, `mail`, `pass`) VALUES ('$fname',' $lname','$no','$state','$db','$mail','$pass')";
			$select = mysqli_query($con, "SELECT `mail` FROM `ulogin` WHERE `mail` = '$mail'");
			if(mysqli_num_rows($select)) {
				
				echo "<script>window.alert('email already exist!');window.history.back();</script>";
				
				
			}
			else
			{
				$result1=mysqli_query($con,$sql);
				if ($result1) {
					header("Location:Login_User.php");

				}else{
					echo "<script>window.alert('email already exist!');window.history.back();</script>";
					
				}
			}
		
		}

		else{
		echo "<script>window.alert('corfirm password is different!');window.history.back();</script>";
		}
	}
	?>