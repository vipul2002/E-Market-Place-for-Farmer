<?php   
    $con = mysqli_connect("localhost","root","","login1");    
    $q = $_REQUEST["q"];
    $query = mysqli_query($con,"SELECT `name` FROM `product_final` WHERE `name` LIKE '%$q%'ORDER BY `name`");
    $hint =[];
 
// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  while($name=mysqli_fetch_array($query)) {
    if (stristr($q, substr($name[0],0,$len))) { 
      $hint[] = $name[0];
    }
  }
}
 
// Output "no suggestion" if no hint was found or output correct values
 
  foreach($hint as $h){
    echo "$h/";
  }
  
 
?>