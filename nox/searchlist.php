<?php
					
					
					if(isset($_POST['btnreg'])){
					
					
					$name=$_POST['browser'];
					header("Location:http://localhost:8080/group1/nox/#!/result.php?sellerid=".$name."");
					
					}
					
					?>