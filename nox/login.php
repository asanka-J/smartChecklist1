<?php
						session_start();
						if(isset($_POST['btnreg'])){
						
						$uname=$_POST['txtuname'];
						$pword=$_POST['txtpword'];
						
						mysql_connect('localhost','root','') or die(mysql_error());
						mysql_select_db('group1') or die(mysql_error());
						
						$sql=mysql_query("SELECT * FROM users WHERE uname='".$uname."'
						AND pword='".$pword."' ")or die(mysql_error());
						//$res=mysql_fetch_row($sql);
						
						while($row = mysql_fetch_array($sql)){
						
						
						
						
						
							
						
						if($row['type']=='Seller'){
						$_SESSION['dog']=$uname;
						header('Location:http://localhost:8080/group1/seller/#menu');
						}else if($row['type']=='Buyer'){
						$_SESSION['dog']=$uname;
						header('Location:http://localhost:8080/group1/nox/');
						}
						//else if($row['uname']!=$uname || $row['pword']!=$pword){
						//$_SESSION['dog']=$uname;
						//header('Location:http://localhost:8080/group1/nox/#!/error.php');
						
						
						//}
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						}
						//$res=mysql_fetch_row($sql);
						//if(!$res){
						
						//}
						
						
						
						
						
						}
						
						
						?>