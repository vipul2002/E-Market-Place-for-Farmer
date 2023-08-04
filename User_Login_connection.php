<?php  
$con = mysqli_connect("localhost","root","","login1");


$name =$_POST['username'];
$pass =$_POST['password'];
if (isset($_POST['sumbit1'])) {
	 $query ="SELECT * FROM ulogin WHERE mail='{$name}' AND pass='{$pass}'";
	 $result=mysqli_query($con,$query);
	 if (mysqli_num_rows($result)==1){
         		
              session_start();
              $_SESSION['UserLoginId']=$_POST['username'];
              header('location:User_Home_Page.php');
         	}
         	else{
         		echo "<script>alert('Incorrect Credentials'); window.history.back();</script>";

         	}


}




?>