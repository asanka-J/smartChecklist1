<script type="text/javascript" src="js/jquery.itextclear.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('input[type=text], input[type=password], input[type=url], input[type=email], input[type=number], textarea', '.form').iTextClear();
});
</script>
<?php

session_start();

?>
<?php


$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'category.upload.processor.php';


$max_file_size = 3000000; // size in bytes

?>
                <h1 class="page-title">Add Categories</h1>
                <div class="container_12 clearfix leading">
                    <div class="grid_12">
					
                    	<form class="form has-validation" action="<?php echo $uploadHandler ?>" 
			 enctype="multipart/form-data" method="POST">

                                <div class="form-input"><input type="hidden" id="form-name" name="txtuname" value="<?php echo $_SESSION['dog'];?>" required="required" placeholder="Enter your name" /></div>

                            <div class="clearfix">

                                <label for="form-name" class="form-label">Category Name <em>*</em></label>

                                <div class="form-input"><input type="text" id="form-name" name="txtname" required="required" placeholder="Enter your name" /></div>

                            </div>

                           
                            <div class="clearfix">

                                <label for="form-upload" class="form-label">Category Photo</label>

                                <div class="form-input"><input type="file" name="file" id="form-upload" placeholder="80x80 jpeg/png format" /></div>

                            </div>

                           


                            <div class="form-action clearfix">

                                <input type="submit" class="button" value="Upload" name="btnadd"/>
                            
                                <button class="button" type="reset">Reset</button>

                            </div>

                        </form>
                    </div>
                </div>