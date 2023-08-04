<?php


 session_start();
$adminlogin = $_SESSION['UserLoginId'];
if (!isset($_SESSION['UserLoginId'])) {
    header("location:Login_User.php");
}


         
         $id = $_GET['id'];

         $con = mysqli_connect("localhost","root","","login1");

         $sql="select * from direct_buy where product_id= $id";
         $sqll=mysqli_query($con,$sql);
         $res=mysqli_fetch_array($sqll);
         $name=$res['name'];
         $price=$res['price'];
         $quantity=$res['p_quantity'];
         $final_price=bcmul($quantity,$price);
         $product="Buying $name";
        
       

        
        
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_2e8a918aefc9b1f3ab842d77140",
                  "X-Auth-Token:test_996645ff326c3fd7b9f9a1139af"));
$payload = Array(
    'purpose' => $product,
    'amount' => $final_price,
    'phone' => '9370934335',
    'buyer_name' =>'om',
    'redirect_url' => 'http://localhost/A/direct_buy_verification.php',
    'send_email' => true,
    'webhook' => 'http://www.example.com/webhook/',
    'send_sms' => true,
    'email' => 'vipulbelhekar20@gmail.com',
    'allow_repeated_payments' => false
);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch);
$response=json_decode($response); 
header("location:".$response->payment_request->longurl);
die();


?>