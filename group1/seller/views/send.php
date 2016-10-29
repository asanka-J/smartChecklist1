<?php

if(isset($_GET['id']) && isset($_GET['uname'])){

mysql_connect("localhost", "root", "") or die(mysql_error());
					
mysql_select_db("group1") or die(mysql_error());
				
$id=$_GET['id'];
$uname=$_GET['uname'];

$address;
$tel;
$shopname;
$proname;
$price;

	$sql1 = mysql_query("select * from shops where uname='".$uname."'") or die(mysql_error());	
					//$shopname;	
	while($row1 = mysql_fetch_array($sql1)){
$shopname=$row1['name'];
$address=$row1['address'];
$tel=$row1['tel'];

	}	
	
	$sql2 = mysql_query("select * from products where id='".$id."'") or die(mysql_error());	
					//$shopname;	
	while($row2 = mysql_fetch_array($sql2)){
$proname=$row2['name'];
$price=$row2['price'];


	}
	
	$sql3 = mysql_query("select * from reg_users") or die(mysql_error());	
					//$shopname;	
	while($row3 = mysql_fetch_array($sql3)){
$regid=$row3['gcm_regid'];

echo '<script>window.location = "http://nilwalawishwamali.com/group1/php/device_sendmsg.php?regId='.$regid.'&message=Special Promotion You can buy '.$proname.' for '.$price.' from '.$shopname.' at '.$address.' for more details contact on '.$tel.'";</script>';

	}






	

}



?>