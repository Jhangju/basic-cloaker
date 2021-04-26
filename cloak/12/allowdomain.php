<?php

$d=$_GET["domain"];
$c=$_GET["cid"];

	         echo "Inserting...";
$conn=mysqli_connect('localhost','id15832372_root','FBo$?wJTyzH0-%05','id15832372_daata');
$q="INSERT INTO `allow_coming`( `domain`, `c_id`) VALUES ('$d','$c')";
$r=mysqli_query($conn,$q);

echo "<script>window.location.assign('compaign.php?id=$c');</script>";
?>