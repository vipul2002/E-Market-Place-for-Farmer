<?php 
session_start();
$adminlogin = $_SESSION['UserLoginId'];
if (!isset($_SESSION['UserLoginId'])) {
    header("location:Login_User.php");
}

$con = mysqli_connect("localhost","root","","login1");
         $q = "select  fname from ulogin where mail ='{$adminlogin}'";

         $query= mysqli_query($con,$q);
         $res = mysqli_fetch_array($query)
?>
<?php
$id=$_GET['id'];
$con = mysqli_connect("localhost","root","","login1"); 
$sql="select * from address where username='$adminlogin' ";
$sq = mysqli_query($con,$sql);
$res = mysqli_fetch_array($sq);
$sql="SELECT * FROM `payment_success` WHERE id='$id' ";
$sq1 = mysqli_query($con,$sql);
$date=date("Y/m/d");
$total=$quantity=0;

require('fpdf/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();

$pdf->SetFont('Arial','B',14);


$pdf->Cell(80 ,5,'',0,0);
$pdf->Cell(59 ,5,'INVOICE',0,1);


$pdf->SetFont('Arial','',12);

$pdf->Cell(100 ,10,'',0,1);

$pdf->Cell(100 ,5,'Bill to',0,1);

$pdf->Cell(20 ,5,'Name:',0,0);
$pdf->Cell(90 ,5,join(" ",array($res['firstname'],$res['lastname'])),0,1);

$pdf->Cell(20 ,5,'Address:',0,0);
$pdf->Cell(90 ,5,join(" ",array($res['houseno'],$res['area'],$res['city'],$res['state'],$res['pincode'])),0,1);

$pdf->Cell(20 ,5,'Phone No:',0,0);
$pdf->Cell(90 ,5,$res['phno'],0,1);


$pdf->Cell(189 ,10,'',0,1);

$pdf->SetFont('Arial','B',12);

$pdf->Cell(130 ,5,'Product',1,0);
$pdf->Cell(25 ,5,'Quantity',1,0);
$pdf->Cell(34 ,5,'Amount',1,1);



$pdf->SetFont('Arial','',12);


$res1 = mysqli_fetch_array($sq1);
 $pdf->Cell(130 ,5,$res1['name'],1,0);
    $pdf->Cell(25 ,5,$res1['p_quantity'],1,0);
    $pdf->Cell(34 ,5,$res1['final_price']/$res1['p_quantity'],1,1,0);

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Subtotal',0,0);
$pdf->Cell(8 ,5,'rs',1,0);
$pdf->Cell(26 ,5,$res1['final_price'],1,1,'R');//end of line

$pdf->Output();
?>