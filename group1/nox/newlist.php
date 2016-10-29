<?php
					session_start();
					if(isset($_POST['btnreg'])){
						
						
						$name=$_POST['txtname'];
						
						$uname=$_SESSION['dog'];
						
						
						$con=mysqli_connect("localhost","root","","group1");
						
						
						
						$sql="insert into list
						(name,uname)
						values('$name','$uname')";
						
						//$_SESSION['cat']=$uname;
						
						if (!mysqli_query($con,$sql)) {
							die('Error: ' . mysqli_error($con));
						}

						
						
					header('Location:http://localhost:8080/group1/nox/#!/list.php');
						
						}
					
					
					?>