<?php


$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.processor.php';


$max_file_size = 3000000; // size in bytes

?>
<?php

session_start();

?>


<script type="text/javascript" src="js/jquery.itextclear.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('input[type=text], input[type=password], input[type=url], input[type=email], input[type=number], textarea', '.form').iTextClear();
});
</script>


<?php
					mysql_connect("localhost", "root", "") or die(mysql_error());
					
					mysql_select_db("group1") or die(mysql_error());
					
					$sql = mysql_query("SELECT * FROM users where uname='".$_SESSION['dog']."'")
					or die(mysql_error());  
					
					while($row = mysql_fetch_array($sql)){
					
					
					
					
					
					
					
					
			  
			  ?>


                <h1 class="page-title">Personal Details</h1>
                <div class="container_12 clearfix leading">
                    <div class="grid_12">
                    	<form class="form has-validation" action="<?php echo $uploadHandler ?>" 
			 enctype="multipart/form-data" method="POST">
 <div class="clearfix">

                                <label for="form-name" class="form-label">User ID </label>

                                <div class="form-input"><input type="text" name="txtid" value="<?php  echo $row['id'];?>" id="form-name" name="name" required="required" placeholder="Enter your name" /></div>

                            </div>
                            <div class="clearfix">

                                <label for="form-name" class="form-label">Name <em>*</em></label>

                                <div class="form-input"><input type="text" name="txtname" value="<?php  echo $row['name'];?>" id="form-name" name="name" required="required" placeholder="Enter your name" /></div>

                            </div>

                            <div class="clearfix">

                                <label for="form-email" class="form-label">Email <em>*</em></label>

                                <div class="form-input"><input type="email" name="txtemail" value="<?php  echo $row['email'];?>" id="form-email" required="required" placeholder="A valid email address" /></div>

                            </div>

                          

                            <div class="clearfix">

                                <label for="form-username" class="form-label">Username <em>*</em></label>

                                <div class="form-input"><input type="text" name="txtuname" value="<?php  echo $row['uname'];?>" id="form-username" name="username" required="required" maxlength="12" placeholder="Alphanumeric (max 12 char.)" /></div>

                            </div>
							
							   <div class="clearfix">

                                <label for="form-username" class="form-label">Tel <em>*</em></label>

                                <div class="form-input"><input type="text" name="txttel" value="<?php  echo $row['tel'];?>" id="form-username" name="username" required="required" maxlength="12" placeholder="Tel no" /></div>

                            </div>

                            <div class="clearfix">

                                <label for="form-password" class="form-label">Password</label>

                                <div class="form-input"><input type="password" name="txtpword" value="<?php  echo $row['pword'];?>" id="form-password" name="password" maxlength="30" placeholder="max. 30 char." /></div>

                            </div>

                           

                           

                            <div class="clearfix">

                                <label for="form-textarea" class="form-label">About you <em>*</em></label>

                                <div class="form-input form-textarea"><input type="text" id="form-textarea" value="<?php  echo $row['about'];?>" name="txtabout" required="required" rows="5" placeholder="Describe yourself"></textarea></div>

                            </div>
                            
                            <div class="clearfix">

                                <label for="form-timezone" class="form-label">Town</label>

                                <div class="form-input"><select id="form-timezone" name="txttown" ><option><?php  echo $row['town'];?></option><option>Colombo</option><option>Kandy</option><option>Kollupitiya</option></select></div>

                            </div>

                            <div class="clearfix">

                                <label for="form-upload" class="form-label">Photo</label>

                                <div class="form-input"><input type="file" id="form-upload" name="file" placeholder="80x80 jpeg/png format" /></div>

                            </div>

                            

                            

                            <div class="form-action clearfix">

                                <input type="submit" name="btnupdate" class="button" value="Update">

                                <button class="button" type="reset">Reset</button>

                            </div>

                        </form>
						<?php
						}
						?>
					
                    </div>
                </div>