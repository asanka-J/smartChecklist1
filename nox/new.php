 <?php
							 if(isset($_POST['call'])){
							 $call=$_POST['txtcall'];
							 header('Location:tel:+'.$call);
							 
							 }
							 if(isset($_POST['email'])){
							 $email=$_POST['txtemail'];
							 header('Location:mailto:'.$email);
							 
							 }
							 if(isset($_POST['web'])){
							 $web=$_POST['txtweb'];
							 header('Location:'.$web);
							 
							 }
							 if(isset($_POST['map'])){
							 $name=$_POST['txtmap'];
							 $town=$_POST['txttown'];
							 header('Location:https://www.google.lk/maps/place/'.$name.' '.$town);
							 
							 }
							 
							 ?>