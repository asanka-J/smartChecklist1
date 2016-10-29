<?php

mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("group1") or die(mysql_error());


if(isset($_GET['id'])){

$id=$_GET['id'];

$sql=mysql_query("DELETE FROM products WHERE id='$id'");

if($sql){

header('Location:http://localhost:8080/group1/seller/#manage_products.php');
}

}
?>