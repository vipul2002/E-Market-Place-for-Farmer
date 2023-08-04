<?php


 session_start();
$adminlogin = $_SESSION['FarmerLoginId'];
if (!isset($_SESSION['FarmerLoginId'])) {
    header("location:Login_Farmer.php");
}

         
         $final_price = $_GET['final_price'];
        
       

        
        
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_2e8a918aefc9b1f3ab842d77140",
                  "X-Auth-Token:test_996645ff326c3fd7b9f9a1139af"));
$payload = Array(
    'purpose' => 'buying',
    'amount' => $final_price,
    'phone' => '9370934335',
    'buyer_name' =>'om',
    'redirect_url' => 'http://localhost/A/Farmer_cart_payment_ackn.php',
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