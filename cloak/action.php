<?php
$conn=mysqli_connect('localhost','id15832372_root','FBo$?wJTyzH0-%05','id15832372_daata');
$name=$_POST["name"];
$url=$_POST["url"];
$host=$_POST["host"];

$q="INSERT INTO `camps`(`c_name`, `c_url`, `c_host`) VALUES ('$name','$url','$host')";
$res=mysqli_query($conn,$q);
	 
echo "Inserting..";
echo "<script>window.location.assign('comp.php');</script>";
?>