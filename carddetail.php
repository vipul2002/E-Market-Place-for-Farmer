








<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
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
	
	border-radius: 5px;
	margin-top: -10px;
	height: 60px;
	text-align: center;
	color: ;
	font-size: 30px;


}
.card{
	width:400px;
	margin-top: 200px;
	height: 70	0px;
	align-content: center;
	border-width: 2px;
	border-radius: 10px;
	box-shadow: 0px 0px 10px 0px   brown;
}
.super{
	width: 100%;
	border: 0;
	outline: none;
	border-bottom: 2px solid #ccc;
}
.super1{
	width: 50px;
	margin-left: 10px;
	border: 0;
	outline: none;
	border-bottom: 2px solid #ccc;
}

.btn2{
	
	color: black;
	background-color: #A3DD09;
	border: none;
	outline: none;

	height: 35px;
	margin-left: 550px;
	
	border-radius: 10px;
}
</style>

	</head>
<body>
    <section classe ="contact py-5">
      <form action="address.php" method="POST">
      <div class="container">
       <div class="row">
        <div class="col-1g-7 mx-auto">
          <div class="card">
            <div class="card-body">
              <header class="head"><b>Card Details</b></header>
                <div class="form p-3">
                	<div class="col-lg-7">
                		<label><b>Card Number</b></label>
            		<input type="varchar" name="cardnumber" class="super" placeholder="0000 0000 0000">

                	</div>
           		
            		<label style="margin-left: 10px"><b>Expire date</b> </label>
            		<label style="margin-left: 120px"><b>CVV</b></label>
            	
            	<div class="">
            		<input type="text" name="date" class="super1" placeholder="MM" >
            		<input type="text" name="date1" class="super1" placeholder="YY">
            		<input type="text" name="cvv" class="super1" placeholder="CVV" style="margin-left: 88px">
            	</div>
            		
            	</div>
            	<button type="submit" action="pbuy.php" class="btn2 "  style="width: 100px; margin-left:130px; ">Pay</button>
            </div>