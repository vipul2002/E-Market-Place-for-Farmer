<?php

$con = mysqli_connect("localhost","root","","login1");
session_start();
if (isset($_POST["add_to_cart"])) 
{
	if (isset($_SESSION["shooping_cart"])) 
	{
		$item_array_id = array_column($_SESSION["shooping_cart"], "item_id");
		if (!in_array($_GET["id"], $item_array_id)) 
		{
			$count = count($_SESSION["shooping_cart"]);
			$item_array =array(

       	'item_id'			=>$_GET["id"],
       	'item_name'			=>$_POST["hidden_name"],
       	'item_price'		=>$_POST["hidden_price"],
       	'item_quantity'		=>$_POST["quantity"]

       );
			$_SESSION["shooping_cart"] [$count] = $item_array;

		}
		else
		{
			echo '<script>alert("item alerady added")</script>';
			echo '<script>window.location="Farmer_product_view.php"</script>';

		}
	}
	else
	{
       $item_array =array(

       	'item_id'			=>$_GET["id"],
       	'item_name'			=>$_POST["hidden_name"],
       	'item_price'		=>$_POST["hidden_price"],
       	'item_quantity'		=>$_POST["quantity"]

       );

       $_SESSION["shooping_cart"][0]= $item_array;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	

<h3>order Details</h3>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr>
			
			<th>Item Name</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Total</th>
			<th>Action</th>
		</tr>
		<?php
         if (!empty($_SESSION["shooping_cart"]))
          {
            $total=0;
            foreach ($_SESSION["shooping_cart"] as $keys => $values) 
            {
            ?>
            <tr>
            	<td><?php echo $values["item_name"]; ?></td>
            	<td><?php echo $values["item_quantity"]; ?></td>
            	<td><?php echo $values["item_price"]; ?></td>
            	<td><?php echo number_format($values["item_quantity"]* $values["item_price"],2)?></td>
            	<td><a href="fun.php?action=deleted&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
            </tr>	
            <?php 
            $total= $total +($values["item_quantity"]* $values["item_price"]);
            }

            ?>
            <tr>
            	<td colspan="3" align="right">Total</td>
            	<td align="right">$<?php echo number_format($total,2);?></td>
            	<td></td>
            </tr>
            <?php
          }

          ?>


		
	</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script src="https://kit.fontawesome.com/a076d05399.js">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>

