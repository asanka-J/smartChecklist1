
<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

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
   window.location.href = "http://localhost:8080/gcm/geo.php?lat1="+lat+"&&lon="+long;
}

function errorFunction(position) {
  alert('Error!');
}
 }, 10000);


</script>


</head>
<body>
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
</p></body></html>