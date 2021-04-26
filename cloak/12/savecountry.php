<?php

$d=$_GET["count"];
$c=$_GET["cid"];

	         echo "Inserting...";
$conn=mysqli_connect('localhost','id15832372_root','FBo$?wJTyzH0-%05','id15832372_daata');
$q="INSERT INTO `allow_country`( `allow_country`, `c_id`) VALUES ('$d','$c')";
$r=mysqli_query($conn,$q);

echo "<script>window.location.assign('compaign.php?id=$c');</script>";
?>