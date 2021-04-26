<?php

$d=$_GET["id"];
$c=$_GET["cid"];

	         echo "Deleting...";
$conn=mysqli_connect('localhost','id15832372_root','FBo$?wJTyzH0-%05','id15832372_daata');

$q="DELETE FROM `allow_country` WHERE `id`='$d'";
$r=mysqli_query($conn,$q);



echo "<script>window.location.assign('compaign.php?id=$c');</script>";
?>