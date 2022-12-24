<?php
$con=mysqli_connect ("localhost","root",'',"bidding_website-main");
if(!$con)
{ 
 die('could not connect:' .mysqli_error($conn));
}

mysqli_select_db($con,'bidding_website-main');
?>