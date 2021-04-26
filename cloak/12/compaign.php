<?php
$id=$_GET["id"];

$conn=mysqli_connect('localhost','id15832372_root','FBo$?wJTyzH0-%05','id15832372_daata');
  $q="SELECT * FROM `camps`";
	 $r=mysqli_query($conn,$q);
	 while($row=(mysqli_fetch_assoc($r)))
	 {
	     
	     if($row['id']==$id)
	     {
	         $host=$row['c_host'];
	     }
	 }
	 $c_id=$id;
?>


<html>
<head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<style>
h1.page-header {
    margin-top: -5px;
}


.sidebar {
	padding-left: 0;
}

.main-container { 
	background: #FFF;
	padding-top: 15px;
	margin-top: -20px;
}

.footer {
	width: 100%;
}  

:focus {
	outline: none;
}

.side-menu {
	position: relative;
	width: 100%;
	height: 100%;
	background-color: #f8f8f8;
	border-right: 1px solid #e7e7e7;
}
.side-menu .navbar {
	border: none;
}
.side-menu .navbar-header {
	width: 100%;
	border-bottom: 1px solid #e7e7e7;
}
.side-menu .navbar-nav .active a {
	background-color: transparent;
	margin-right: -1px;
	border-right: 5px solid #e7e7e7;
}
.side-menu .navbar-nav li {
	display: block;
	width: 100%;
	border-bottom: 1px solid #e7e7e7;
}
.side-menu .navbar-nav li a {
	padding: 15px;
}
.side-menu .navbar-nav li a .glyphicon {
	padding-right: 10px;
}
.side-menu #dropdown {
	border: 0;
	margin-bottom: 0;
	border-radius: 0;
	background-color: transparent;
	box-shadow: none;
}
.side-menu #dropdown .caret {
	float: right;
	margin: 9px 5px 0;
}
.side-menu #dropdown .indicator {
	float: right;
}
.side-menu #dropdown > a {
	border-bottom: 1px solid #e7e7e7;
}
.side-menu #dropdown .panel-body {
	padding: 0;
	background-color: #f3f3f3;
}
.side-menu #dropdown .panel-body .navbar-nav {
	width: 100%;
}
.side-menu #dropdown .panel-body .navbar-nav li {
	padding-left: 15px;
	border-bottom: 1px solid #e7e7e7;
}
.side-menu #dropdown .panel-body .navbar-nav li:last-child {
	border-bottom: none;
}
.side-menu #dropdown .panel-body .panel > a {
	margin-left: -20px;
	padding-left: 35px;
}
.side-menu #dropdown .panel-body .panel-body {
	margin-left: -15px;
}
.side-menu #dropdown .panel-body .panel-body li {
	padding-left: 30px;
}
.side-menu #dropdown .panel-body .panel-body li:last-child {
	border-bottom: 1px solid #e7e7e7;
}
.side-menu #search-trigger {
	background-color: #f3f3f3;
	border: 0;
	border-radius: 0;
	position: absolute;
	top: 0;
	right: 0;
	padding: 15px 18px;
}
.side-menu .brand-name-wrapper {
	min-height: 50px;
}
.side-menu .brand-name-wrapper .navbar-brand {
	display: block;
}
.side-menu #search {
	position: relative;
	z-index: 1000;
}
.side-menu #search .panel-body {
	padding: 0;
}
.side-menu #search .panel-body .navbar-form {
	padding: 0;
	padding-right: 50px;
	width: 100%;
	margin: 0;
	position: relative;
	border-top: 1px solid #e7e7e7;
}
.side-menu #search .panel-body .navbar-form .form-group {
	width: 100%;
	position: relative;
}
.side-menu #search .panel-body .navbar-form input {
	border: 0;
	border-radius: 0;
	box-shadow: none;
	width: 100%;
	height: 50px;
}
.side-menu #search .panel-body .navbar-form .btn {
	position: absolute;
	right: 0;
	top: 0;
	border: 0;
	border-radius: 0;
	background-color: #f3f3f3;
	padding: 15px 18px;
}
/* Main body section */
.side-body {
	margin-left: 310px;
}
/* small screen */
@media (max-width: 768px) {
	.side-menu {
		position: relative;
		width: 100%;
		height: 0;
		border-right: 0;
	}

	.side-menu .navbar {
		z-index: 999;
		position: relative;
		height: 0;
		min-height: 0;
		background-color:none !important;
		border-color: none !important;
	}
	.side-menu .brand-name-wrapper .navbar-brand {
		display: inline-block;
	}
	/* Slide in animation */
	@-moz-keyframes slidein {
		0% {
			left: -300px;
		}
		100% {
			left: 10px;
		}
	}
	@-webkit-keyframes slidein {
		0% {
			left: -300px;
		}
		100% {
			left: 10px;
		}
	}
	@keyframes slidein {
		0% {
			left: -300px;
		}
		100% {
			left: 10px;
		}
	}
	@-moz-keyframes slideout {
		0% {
			left: 0;
		}
		100% {
			left: -300px;
		}
	}
	@-webkit-keyframes slideout {
		0% {
			left: 0;
		}
		100% {
			left: -300px;
		}
	}
	@keyframes slideout {
		0% {
			left: 0;
		}
		100% {
			left: -300px;
		}
	}
	/* Slide side menu*/
	/* Add .absolute-wrapper.slide-in for scrollable menu -> see top comment */
	.side-menu-container > .navbar-nav.slide-in {
		-moz-animation: slidein 300ms forwards;
		-o-animation: slidein 300ms forwards;
		-webkit-animation: slidein 300ms forwards;
		animation: slidein 300ms forwards;
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}
	.side-menu-container > .navbar-nav {
		/* Add position:absolute for scrollable menu -> see top comment */
		position: fixed;
		left: -300px;
		width: 300px;
		top: 43px;
		height: 100%;
		border-right: 1px solid #e7e7e7;
		background-color: #f8f8f8;
		overflow: auto;
		-moz-animation: slideout 300ms forwards;
		-o-animation: slideout 300ms forwards;
		-webkit-animation: slideout 300ms forwards;
		animation: slideout 300ms forwards;
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}
	@-moz-keyframes bodyslidein {
		0% {
			left: 0;
		}
		100% {
			left: 300px;
		}
	}
	@-webkit-keyframes bodyslidein {
		0% {
			left: 0;
		}
		100% {
			left: 300px;
		}
	}
	@keyframes bodyslidein {
		0% {
			left: 0;
		}
		100% {
			left: 300px;
			
		}
	}
	@-moz-keyframes bodyslideout {
		0% {
			left: 300px;
		}
		100% {
			left: 0;
		}
	}
	@-webkit-keyframes bodyslideout {
		0% {
			left: 300px;
		}
		100% {
			left: 0;
		}
	}
	@keyframes bodyslideout {
		0% {
			left: 300px;
		}
		100% {
			left: 0;
		}
	}
	/* Slide side body*/
	.side-body {
		margin-left: 5px;
		margin-top: 70px;
		position: relative;
		-moz-animation: bodyslideout 300ms forwards;
		-o-animation: bodyslideout 300ms forwards;
		-webkit-animation: bodyslideout 300ms forwards;
		animation: bodyslideout 300ms forwards;
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}
	.body-slide-in {
		-moz-animation: bodyslidein 300ms forwards;
		-o-animation: bodyslidein 300ms forwards;
		-webkit-animation: bodyslidein 300ms forwards;
		animation: bodyslidein 300ms forwards;
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}
	/* Hamburger */
	.navbar-toggle-sidebar {
		border: 0;
		float: left;
		padding: 18px;
		margin: 0;
		border-radius: 0;
		background-color: #f3f3f3;
	}
	/* Search */
	#search .panel-body .navbar-form {
		border-bottom: 0;
	}
	#search .panel-body .navbar-form .form-group {
		margin: 0;
	}
	.side-menu .navbar-header {
		/* this is probably redundant */
		position: fixed;
		z-index: 3;
		background-color: #f8f8f8;
	}
	/* Dropdown tweek */
	#dropdown .panel-body .navbar-nav {
		margin: 0;
	}
}
</style>
</head>


<body>

<nav class="navbar navbar-default navbar-static-top ">
    <div class="">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
			MENU
			</button>
		
			<a class="navbar-brand" href="#" style="nmargin-top:0px;text-align:left;">
				<p style="nmargin-top:0px;color:111;"><?php echo $host; ?></p>
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
			
		
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>  	
	
	<div class="" >
  		<div class="col-md-2 sidebar" =>
  			<div class="row ">
	<!-- uncomment code for absolute positioning tweek see top comment in css -->
	<div class="absolute-wrapper" > </div>
	<!-- Menu -->
	<div class="side-menu" >
		<nav class="navbar navbar-default"  role="navigation"  >
			<!-- Main Menu -->
			<div class="side-menu-container row" style="width:100%;">
				<ul class="nav navbar-nav row col-md-12" >
					<li  class="active"><a href="#" onclick="dassh()"><i class="fa fa-bar-chart" aria-hidden="true" style="margin-right:10px"></i> Statistics</a></li>
					<li class="active"><a href="#" onclick="vis()";><i class="fa fa-cog" aria-hidden="true" style="margin-right:10px"></i> Setting</a></li>
                    <script>
                    function dassh()
                    {
                        var dash=document.getElementById("dash");
                        var visits=document.getElementById("visits");
                        if(dash.style.display=="none")
                        {
                            dash.style.display="block";
                            visits.style.display="none";
                        }
                    }
                     function vis()
                    {
                        var dash=document.getElementById("dash");
                        var visits=document.getElementById("visits");
                        if(visits.style.display=="none")
                        {
                            dash.style.display="none";
                            visits.style.display="block";
                        }
                    }
                    </script>
					<!-- Dropdown-->
					

					

				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
</div>  		</div>
</div>
  		<div class="col-md-10 content" id="dash">
  			  <div class="panel panel-default">
	<div class="panel-heading">
		Statistics <small style="border-bottom:1px solid black;cursor:pointer" onclick="window.location.reload()"> refresh <i class="fa fa-refresh" aria-hidden="true"></i></small> <small style="float:right"><?php echo "Date ".date("d-m-y")." Time ".date("h-m-s-l"); ?></small>
	</div>
	<div class="panel-body">
		
<div class=" mt-3">
  <label>Search here</label>
  <input class="form-control" id="myInput" type="text" placeholder="Search anything here..">
  
  <table class="table table-bordered table-striped ">
    <thead class="thead-light">
      <tr>
	  <th>ID</th>
        <th>IP</th>
        <th>User Agent</th>
        <th>Region</th>
        <th>Came from</th>
        <th>Block</th>
      </tr>
    </thead>
    <tbody id="myTable">
     <?php
	 $i=0;
	 $q="SELECT * FROM `creds`";
	 $r=mysqli_query($conn,$q);
	 while($row=(mysqli_fetch_assoc($r)))
	{   if($c_id==$row['c_id'])
	    {
	    $i++;
		$id=$row['id'];
		$a=$row['agent'];
		$ip=$row['ip'];
		$rw=$row['region'];
		$cf=$row['came_from'];
		
		echo "<tr>";
		echo "<td>$i</td>
		<td>$ip</td>
		<td>$a</td>
		<td>$rw</td>
		<td>$cf</td>";
		if($row['battle']=="free")
		{
		    echo "<td><a href='blockip.php?ip=$id' style='text-decoration:none;'><i class='fa fa-trash' aria-hidden='true' style='color:red;font-size:30px'></i></a></td>";
		}
		else
		{
		   echo "<td><i class='fa fa-ban' aria-hidden='true' style='color:red;font-size:30px'></i></td>";
		}
		echo "</tr>";
	    }
	}
	 ?>
    
    </tbody>
	<span style="padding:0px;margin:0px;">There are total <h4 style="display:inline-block;"><?php echo $i;?></h4> entries.</span>
  </table>
  
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
	</div>
</div>
  		</div>
  		
  	<!--	////////////////////////////////////////////vis////////////////////////////////////////////////////-->
  		<div class="col-md-10 content" id="visits" style="display:none">
  			  <div class="panel panel-default">
  			      	<div class="panel-heading">
		<i class="fa fa-cog" aria-hidden="true" style="margin-right:10px"></i> Setting  <small style="float:right"><?php echo "Date ".date("d-m-y")." Time ".date("h-m-s-l"); ?></small>
	</div>
		<div class="panel-body">
		
<div class="mt-3">
    
  	<!--	////////////////////////////////////////////allow domain////////////////////////////////////////////////////-->
  <script>
  function blockcominfo(){
      
       if(document.getElementById("comingbody").style.display=="none")
        {
        
           // document.getElementById("form").style.display="block";
             $("#comingbody").show(700);
             $("#arrow").html("<i class='fa fa-arrow-up' aria-hidden='true'></i>");
            
        }
        else
        {
            $("#comingbody").hide(700);
             $("#arrow").html("<i class='fa fa-arrow-down' aria-hidden='true'></i>");
        }
  }
  </script>
<div class="card"  style="border:2px solid #89A;">
    <div class="card-header" onclick="blockcominfo()" style="border-radius:0px;background:#89A;color:#fff;cursor:pointer"><h4>Allow <b>coming from<span id="arrow"  style="float:right;">
        <i class='fa fa-arrow-down' aria-hidden='true'></i>
    </span></b></h4></div>
    <div class="card-body" id="comingbody" style="display:none;">
        <form action="allowdomain.php" method="GET">
            <div class="form-group">
                <label for="host">Allow the domain for campaign</label>
                <input type="text" name="domain" class="form-control" placeholder="Enter domain to allow it." id="host" required>
                <input type="text" name="cid" style="display:none;" value="<?php echo $c_id; ?>">
            </div>
            <button type="submit" class="btn btn-primary" style="padding-left:3%;padding-right:3%;"><i class="fa fa-save blue-color " ></i>  Save</button>
        </form>
          
          <hr>
                <label for="host">Allowed domains</label>
                <br>
        <?php
            $q_allow="SELECT * FROM `allow_coming`";
            	 $r=mysqli_query($conn,$q_allow);
            	 $chkif=0;
            	 while($row=(mysqli_fetch_assoc($r)))
            	{   if($c_id==$row['c_id'])
            	    {
            	        $chkif=1;
            	        $d=$row['domain'];
            	        $aid=$row['id'];
                        echo"<div class='card-footer col-md-3' style='margin-top:10px;border-left:5px solid #fff;'><i>$d <a href='deldomain.php?id=$aid&cid=$c_id' style='font-size:15px;margin-left:10px;text-decoration:none;'><i class='fa fa-trash' aria-hidden='true'></i></a></i></div>";
            	        
            	    }
            	    
            	    
            	}
            	if($chkif==0)
            	{
            	    
                        echo"<div class='card-footer' style='margin-top:10px;'>Allowed for <i>all domains.</i></div>";
            	}
            
        ?>
    
    </div>
    
    </div>
 
  	<!--	////////////////////////////////////////////allow domain////////////////////////////////////////////////////-->
  	
  	<!--	////////////////////////////////////////////allow country////////////////////////////////////////////////////-->
  	  <script>
  function allowcountry(){
      
       if(document.getElementById("countrybody").style.display=="none")
        {
        
           // document.getElementById("form").style.display="block";
             $("#countrybody").show(700);
             $("#arrow2").html("<i class='fa fa-arrow-up' aria-hidden='true'></i>");
            
        }
        else
        {
            $("#countrybody").hide(700);
             $("#arrow2").html("<i class='fa fa-arrow-down' aria-hidden='true'></i>");
        }
  }
  </script>
<div class="card"  style="border:2px solid gray;margin-top:10px;">
    <div class="card-header" onclick="allowcountry()" style="border-radius:0px;background:gray;color:#fff;cursor:pointer"><h4>Allow <b>country<span id="arrow2"  style="float:right;">
        <i class='fa fa-arrow-down' aria-hidden='true'></i>
    </span></b></h4></div>
    <div class="card-body" id="countrybody" style="display:none;">
        <form action="savecountry.php" method="GET">
            <div class="form-group">
                <label for="host">Allow the country for campaign .</label>
                <select id="country"  class="form-control" name="count">
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
                <input type="text" name="cid" style="display:none;" value="<?php echo $c_id; ?>">
            </div>
            <button type="submit" class="btn btn-primary" style="padding-left:3%;padding-right:3%;"><i class="fa fa-save blue-color " ></i>  Save</button>
        </form>
          
          <hr>
                <label for="host">Allowed countries</label>
                <br>
        <?php
            $q_allowcountry="SELECT * FROM `allow_country`";
            	 $r12=mysqli_query($conn,$q_allowcountry);
            	 $chkifcountry=0;
            	 while($row=(mysqli_fetch_assoc($r12)))
            	{   if($c_id==$row['c_id'])
            	    {
            	        $chkifcountry=1;
            	        $d=$row['allow_country'];
            	        $aid=$row['id'];
                        echo"<div class='card-footer col-md-3' style='margin-top:10px;border-left:5px solid #fff;'><i>$d <a href='delcountry.php?id=$aid&cid=$c_id' style='font-size:15px;margin-left:10px;text-decoration:none;'><i class='fa fa-trash' aria-hidden='true'></i></a></i></div>";
            	        
            	    }
            	    
            	    
            	}
            	if($chkifcountry==0)
            	{
            	    
                        echo"<div class='card-footer' style='margin-top:10px;'>Allowed for <i>all countries.</i></div>";
            	}
            
        ?>
    
    </div>
    
    </div>
  	<!--	////////////////////////////////////////////allow country end////////////////////////////////////////////////////-->
  
</div>


	</div>
  		    </div>
  		    </div>
  		    
  	<!--	////////////////////////////////////////////vis////////////////////////////////////////////////////-->
  	</div>
	<script>
	$(function () {
  	$('.navbar-toggle-sidebar').click(function () {
  		$('.navbar-nav').toggleClass('slide-in');
  		$('.side-body').toggleClass('body-slide-in');
  		$('#search').removeClass('in').addClass('collapse').slideUp(200);
  	});

  	$('#search-trigger').click(function () {
  		$('.navbar-nav').removeClass('slide-in');
  		$('.side-body').removeClass('body-slide-in');
  		$('.search-input').focus();
  	});
  });
	</script>
</body>
</html>
