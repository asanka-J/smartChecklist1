<?php
						@session_start();
						if(isset($_POST['btnreg'])){
						
						
						$name=$_POST['txtname'];
						$email=$_POST['txtemail'];
						$username=$_POST['txtuname'];
						$tel=$_POST['txttel'];
						$password=$_POST['txtpassword'];
						$type=$_POST['txttype'];
						
						
						
						$con=mysqli_connect("localhost","root","","group1");
						
						
						
						$sql="insert into users
						(name,email,uname,tel,pword,type)
						values('$name','$email','$username','$tel','$password','$type')";
						
						//$_SESSION['cat']=$uname;
						
						if (!mysqli_query($con,$sql)) {
							die('Error: ' . mysqli_error($con));
						}

						
						
					header('Location:http://localhost:8080/group1/nox/#!/login.html');
						
						}
						
						?>