<?php
$id=$_GET['ip'];


	         echo "Blocking...";
$conn=mysqli_connect('localhost','id15832372_root','FBo$?wJTyzH0-%05','id15832372_daata');

$q="UPDATE `creds` SET `battle`='jail' WHERE `id`='$id'";
$r=mysqli_query($conn,$q);

  $q1="SELECT * FROM `creds`";
	 $r=mysqli_query($conn,$q1);
	 while($row=(mysqli_fetch_assoc($r)))
	 {
	     
	     if($row['id']==$id)
	     {
	         $cid=$row['c_id'];
	         break;
	     }
	 }


echo "<script>window.location.assign('compaign.php?id=$cid');</script>";
?>