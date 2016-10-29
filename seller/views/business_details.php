<?php


$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.processor1.php';


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
					
					$sql = mysql_query("SELECT * FROM shops where uname='".$_SESSION['dog']."'")
					or die(mysql_error());  
					
					while($row = mysql_fetch_array($sql)){
					
					
					
					
					
					
					
					
			  
			  ?>
			  
			  <?php
				
				}
				?>
                <h1 class="page-title">Business Details</h1>
                <div class="container_12 clearfix leading">
                    <div class="grid_12">
                    	<form class="form has-validation" action="<?php echo $uploadHandler ?>" 
			 enctype="multipart/form-data" method="post">
 <div class="clearfix">

                               

                                <div class="form-input"><input type="hidden" id="form-name" name="txtuname" value="<?php echo $_SESSION['dog'];?>" required="required" placeholder="Enter your name" /></div>

                            </div>
                            <div class="clearfix">

                                <label for="form-name" class="form-label">Business Name <em>*</em></label>

                                <div class="form-input"><input type="text" id="form-name" value="<?php echo $row['name'];?>" name="txtname" required="required" placeholder="Enter your name" /></div>

                            </div>

                            <div class="clearfix">

                                <label for="form-email" class="form-label">Business Email <em>*</em></label>

                                <div class="form-input"><input type="email" value="<?php echo $row['email'];?>" name="txtemail" id="form-email" required="required" placeholder="A valid email address" /></div>

                            </div>
							
							 <div class="clearfix">

                                <label for="form-email" class="form-label">Address <em>*</em></label>

                                <div class="form-input"><input type="text" name="txtaddress" value="<?php echo $row['address'];?>" id="form-email" required="required" placeholder="A valid address" /></div>

                            </div>

                            

                           

                           

                            <div class="clearfix">

                                <label for="form-website" class="form-label">Website <em>*</em></label>

                                <div class="form-input"><input type="url" name="txtwebsite" value="<?php echo $row['website'];?>" id="form-website" required="required" placeholder="A valid URL" /></div>

                            </div>
							<div class="clearfix">

                                <label for="form-website" class="form-label">Contact No <em>*</em></label>

                                <div class="form-input"><input type="number" name="txttel" value="<?php echo $row['tel'];?>" id="form-website" required="required" placeholder="A valid No" /></div>

                            </div>

                            <div class="clearfix">

                                <label for="form-textarea" class="form-label">About Business <em>*</em></label>

                                <div class="form-input form-textarea"><textarea id="form-textarea" value="<?php echo $row['about'];?>" name="txtabout" required="required" rows="5" placeholder="Describe your business"></textarea></div>

                            </div>
                            
                            <div class="clearfix">

                                <label for="form-timezone" class="form-label">Town</label>

                                <div class="form-input"><select id="form-timezone" name="txttown" ><option><?php echo $row['town'];?></option><option>Colombo</option><option>Kandy</option></select></div>

                            </div>

                            <div class="clearfix">

                                <label for="form-upload" class="form-label">Cover Photo</label>

                                <div class="form-input"><input type="file" name="file" id="form-upload" placeholder="80x80 jpeg/png format" /></div>

                            </div>

                            

                           

                            <div class="form-action clearfix">

                                <input name="btnupdate" class="button" type="submit" value="Save">

                                <button class="button" type="reset">Reset</button>

                            </div>

                        </form>
                    </div>
                </div>
				