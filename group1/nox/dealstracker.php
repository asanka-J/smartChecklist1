<?php
session_start();

?>
<html>

<head>

 <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>NOX</title>

    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bower_components/framework7/dist/css/framework7.ios.min.css">
    <link rel="stylesheet" href="bower_components/swipebox/src/css/swipebox.css">
    <link rel="stylesheet" href="bower_components/owl-carousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="bower_components/owl-carousel/owl-carousel/owl.theme.css">

    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/themes//style.css" id="theme-style">
	
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<script type="text/javascript">

setTimeout(function () { 
//Check if browser supports W3C Geolocation API
if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
  } else {
  alert('Geolocation is required for this page, but your browser doesn&apos;t support it. Try it with a browser that does, such as Opera 10.60.');
}

function successFunction(position) {
  var lat = position.coords.latitude;
  var long = position.coords.longitude;
  //alert('Your latitude is '+lat+' and longitude is '+long);
 

 
 
  //document.write('Your latitude is '+lat);
   //document.write('longitude is '+long);
   window.location.href = "http://localhost:8080/group1/nox/dealstracker.php?lat1="+lat+"&lon="+long;
}

function errorFunction(position) {
  alert('Error!');
}
 }, 10000);


</script>
	
</head>
<body style="background-color:black">

<div class="navbar navbar-clear">
    <div class="navbar-inner">
        <div class="left">
            <a href="http://localhost:8080/group1/nox/#!/index.php"  class="link">
                <span class="icon-chevron-left"></span> <span>Back</span>
            </a>
        </div>
        <div class="center sliding"></div>
       
    </div>
</div>
</br></br></br></br>

<center><h1>Deals Tracker</h1><img src="motion.gif"/></center>

	<?php
if(isset($_GET['lat1']) && isset($_GET['lon'])){
$con=mysqli_connect("localhost","root","","group1");
						
						$lat=$_GET['lat1'];
						$lon=$_GET['lon'];
						
						$sql="insert into location
						(lat,lon)
						values('$lat','$lon')";
						
						//$_SESSION['cat']=$uname;
						
						if (!mysqli_query($con,$sql)) {
							die('Error: ' . mysqli_error($con));
						}



}
?>



<?php
						
							
							
							//$arr = array($ing1, $ing2,$ing3,$ing4,$ing5);
							mysql_connect("localhost", "root", "") or die(mysql_error());
					
							mysql_select_db("group1") or die(mysql_error());
				
				
				$sql = "SELECT * FROM list where uname='".$_SESSION['dog']."'";
				$result = mysql_query($sql) or die(mysql_error());

				$array = array();

while($row = mysql_fetch_assoc($result)) {
   $array[] = $row;
}
@$a0=$array[0]["name"];
@$a1=$array[1]["name"];
@$a2=$array[2]["name"];
@$a3=$array[3]["name"];
@$a4=$array[4]["name"];
@$a5=$array[5]["name"];
@$a6=$array[6]["name"];
@$a7=$array[7]["name"];
@$a8=$array[8]["name"];
@$a9=$array[9]["name"];


@$lat=$_GET['lat1'];
@$lon=$_GET['lon'];
$lat1=$lat-0.0111111;
$lat2=$lat+0.0111111;
$lon1=$lon-00.011111;
$lon2=$lon+00.011111;

$sql1 = mysql_query("select * from products where  lat BETWEEN $lat1 AND $lat2 AND lon BETWEEN $lon1 AND $lon2")
							or die(mysql_error());
			$con=mysqli_connect("localhost","root","","group1");				
				$msg;	$id;	$price;	$una;
		while($row1 = mysql_fetch_array($sql1)){
	

//echo $row1["name"];
echo'</br>';
$msg=$row1["name"];
$id=$row1["id"];
$price=$row1["price"];
$una1=$row1["uname"];
$una=$_SESSION['dog'];






						
						//$_SESSION['cat']=$uname;
						
						$sql11 = mysql_query("select * from list where uname='".$_SESSION['dog']."' AND name='".$msg."'")
							or die(mysql_error());
							$status;
							while($row2 = mysql_fetch_array($sql11)){		
							@$status=$row2['status'];
							
							
							
							
							
							$sql2="insert into deals(name,price,productid,uname,status)
							values('$msg','$price','$id','$una','1')";
						
							if (!mysqli_query($con,$sql2)) {
							die('Error: ' . mysqli_error($con));
						//}
						
							
							}
							
							//$sql113 = mysql_query("select MAX(id) as idd from reg_users ") or die(mysql_error());	
		
		
	
	
	$sql112 = mysql_query("select * from shops where uname='".$una1."'") or die(mysql_error());	
					//$shopname;	
	while($row21 = mysql_fetch_array($sql112)){	

	$shopname=$row21['name'];
	$address=$row21['address'];
	$tel=$row21['tel'];
						echo $shopname;	
							//while($row22 = mysql_fetch_array($sql113)){	
		//$regid=$row22['idd'];
		echo 'xxxx';
		
						echo '<script>window.location = "http://arkenaagras.com/php/device_sendmsg.php?regId='.$regid.'&message=Hello '.$una.' You can buy '.$msg.' from '.$shopname.' at '.$address.' for more details contact on '.$address.'";</script>';
	//}
							}
							
								
						//if($status==0 || $status==null){
					
						}
						
		}
							
							
							?>


</body>


</html>