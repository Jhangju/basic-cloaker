<?php


$conn=mysqli_connect('localhost','id15832372_root','FBo$?wJTyzH0-%05','id15832372_daata');

?>
<html>
    
    <head>
  <title>Cloack me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/alertify.min.js"></script>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/alertify.min.css"/>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/default.min.css"/>
        
        

  <style>
.map-container-7{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container-7 iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}

	#loader { 
			border: 10px solid #6747c7; 
			border-radius: 50%; 
			border-top: 12px solid #bbb; 
			width: 70px; 
			height: 70px; 
			animation: spin 1s linear infinite; 
			
		} 
		
		@keyframes spin { 
			100% { 
				transform: rotate(360deg); 
			} 
		} 
		
		.center { 
			position: absolute; 
			top: 0; 
			bottom: 0; 
			left: 0; 
			right: 0; 
			margin: auto; 
		} 
		
		
  </style>
</head>
<body>
    
    <div id="loader" class="center"></div> 
    
    <script> 
		document.onreadystatechange = function() { 
			if (document.readyState !== "complete") { 
				document.querySelector( 
				"body").style.visibility = "hidden"; 
				document.querySelector( 
				"#loader").style.visibility = "visible"; 
			} else { 
				document.querySelector( 
				"#loader").style.display = "none"; 
				document.querySelector( 
				"body").style.visibility = "visible"; 
			} 
		}; 
	</script> 
    <script>
    function cme()
    {
        if(document.getElementById("form").style.display=="none")
        {
        
           // document.getElementById("form").style.display="block";
             $("#form").show(700);
            document.getElementById("btn").innerHTML="<i class='fa fa-ban' aria-hidden='true'></i> No new campaign";
            
        }
        else
        {
            $("#form").hide(700);
            //document.getElementById("form").style.display="none";
            document.getElementById("btn").innerHTML=" <i class='fa fa-plus' aria-hidden='true'></i> create a campaign";
        }
    }
    </script>
   
     <div class='col-md-12 row justify-content-center'  style=';width:100%;padding:0px;margin:0px'> 

<button class='btn btn-success col-md-5' id='btn' onclick='cme()' style='margin-top:5px;border-radius:0px;margin-bottom:5px;

'> 
    <i class='fa fa-plus' aria-hidden='true'></i> create a campaign
</button>

</div>
    <div class='col-md-12 row justify-content-center'  style='margin-top:5px;width:100%;padding:0px;margin:0px'> 
<div class='col-md-4'>

</div>
     <form action="action.php" method="POST" class="was-validated col-md-4 card-header card-footer" id="form" style="display:none;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
     
     border-radius:1%;">

  
    <div class="form-group" >
    <label for="uname">Name of Compaign:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter name" name="name" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  
  
    <div class="form-group">
    <label for="uname">Original Url:</label>
    <input type="url" class="form-control" id="uname" placeholder="Enter original url" name="url" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please write correct url.</div>
  </div>
  
  </script>
   <div class="form-group">
    <label for="uname">Enter a safe url:</label>
    <input type="url" class="form-control" id="host" placeholder="Enter host" name="host" onkeyup="createlink()" required>
  <script>
  function createlink(){
      var h=document.getElementById("host").value;
     // alert(h);
     h="https://scan-me.000webhostapp.com/cloak/12/url.php?id=#campaign_id#";
      document.getElementById("dom").innerHTML=h;
      
  }
  </script>
    <div class="valid-feedback" id="dom"></div>
    <div class="invalid-feedback">Please write a url.</div>
  </div>
  
  
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required> I agree on terms and condition.
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </label>
  </div>
  
    
   <button type="submit" class="btn btn-primary " style="padding-right:50px;padding-left:50px;">Save</button>

  </form> 
 
<div class='col-md-4'>
</div>
</div>

<hr>
  <h2 style="text-align:center">Current Campaigns</h2><hr>
    <div class='col-md-12 row justify-content-center' id="cap" style='margin-top:5px;width:100%;padding:0px;margin:0px;display:none;'> 
  
         <!-------------------------campaign card--------------->
         <?php
         $q="SELECT * FROM `camps`";
	 $r=mysqli_query($conn,$q);
	 while($row=(mysqli_fetch_assoc($r)))
	 {
	     $id=$row['id'];
	     $i1=$row['c_name'];
	     $i2=$row['c_url'];//c_host
	     $i3=$row['c_host'];//c_host
         ?>
        <div class='col-md-2 card container' style="padding:0px;margin:5px;border:1px solid green;">
            <div class="card-header" style="width:100%;">
                <pre  style="text-align:center"><small>campaign id </small>#<b><?php echo $id;  ?></b></pre>
                </div>
                <div class="card-body" style="float:right">
                Cloack link: <a href="https://scan-me.000webhostapp.com/cloak/12/url.php?id=<?php echo $id; ?>" target="_blank"><?php echo $i3; ?></a>
               <hr>
                Statistics: <a href="https://scan-me.000webhostapp.com/cloak/12/compaign.php?id=<?php echo $id; ?>" target="_blank"><?php echo $i3; ?></a>
                </div>
                <div class="card-footer" style="float:right">
            <small>    Original url : <i><?php echo $i2;?></i></small>
                </div>
            
        </div>
        <?php  
	 }
        ?>
         <!---------------------------------------->
    
        
    </div>
<br>

    <script>
        $("#cap").show(500);
         $("#cap").delay(100).animate({
    right: '60px',
    }, 200);
     $("#cap").delay(100).animate({
    left: '0px',
    }, 200);

        </script>
    </body>
    </html>