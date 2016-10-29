<script type="text/javascript" src="js/jquery.itextclear.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('input[type=text], input[type=password], input[type=url], input[type=email], input[type=number], textarea', '.form').iTextClear();
});
</script>
<script type="text/javascript" src="./lib/tinymce/jquery.tinymce.js"></script>
<script type="text/javascript">
    $().ready(function() {
        $('textarea.tinymce').tinymce({
            // Location of TinyMCE script
            script_url : './lib/tinymce/tiny_mce.js',

            // General options
            theme : "advanced",
            plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist",

            // Theme options
            theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
            theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
            theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
            theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
            theme_advanced_toolbar_location : "top",
            theme_advanced_toolbar_align : "left",
            theme_advanced_statusbar_location : "bottom",
            theme_advanced_resizing : true,

            // Example content CSS (should be your site CSS)
            content_css : "css/content.css",

            // Drop lists for link/image/media/template dialogs
            template_external_list_url : "lists/template_list.js",
            external_link_list_url : "lists/link_list.js",
            external_image_list_url : "lists/image_list.js",
            media_external_list_url : "lists/media_list.js",

            // Replace values for the template plugin
            template_replace_values : {
                username : "Some User",
                staffid : "991234"
            }
        });
    });
</script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<script type="text/javascript">

setTimeout(function () { 
//Check if browser supports W3C Geolocation API
if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
  } else {
  alert('Geolocation is required for this page, but your browser doesn&apos;t support it. Try it with a browser that does, such as Opera 10.60.');
}

function successFunction(position) {
  var lat = position.coords.latitude;
  var long = position.coords.longitude;
  //alert('Your latitude is '+lat+' and longitude is '+long);
 
document.getElementById("latt").value=lat;
 document.getElementById("lonn").value=long;
 
  //document.write('Your latitude is '+lat);
   //document.write('longitude is '+long);
   //window.location.href = "http://localhost:8080/group1/nox/dealstracker.php?lat1="+lat+"&lon="+long;
}

function errorFunction(position) {
  alert('Error!');
}
 }, 30000);


</script>
<?php

session_start();

?>
<?php


$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'products.upload.processor.php';


$max_file_size = 3000000; // size in bytes

?>
                <h1 class="page-title">Add Packages</h1>
                <div class="container_12 clearfix leading">
                    <div class="grid_12">
                    	<form class="form has-validation" action="<?php echo $uploadHandler ?>" 
			 enctype="multipart/form-data" method="POST">

			 <div class="form-input"><input type="hidden" id="form-name" name="txtuname" value="<?php echo $_SESSION['dog'];?>" required="required" placeholder="Enter your name" /></div>

                            <div class="clearfix">

                                <label for="form-name" class="form-label">Product Name <em>*</em></label>

                                <div class="form-input"><input type="text" id="form-name" name="txtname" required="required" placeholder="Enter your name" /></div>

                            </div>

                             <div class="clearfix">

                                <label for="form-timezone" class="form-label">Category</label>

                                <div class="form-input"><select id="form-timezone" name="txtcat">
							<option>Please Select Category</option>;
								<?php
					mysql_connect("localhost", "root", "") or die(mysql_error());
					
					mysql_select_db("group1") or die(mysql_error());
					
					$sql = mysql_query("SELECT * FROM category")
					or die(mysql_error());  
					
					while($row = mysql_fetch_array($sql)){
					
					
					
					echo '<option>'.$row['name'].'</option>';
					
					
					
					}
			  
			  ?>
								
								
								</select></div>

								
                            </div>

                           

                           


                            <div class="clearfix">

                                <label for="form-textarea" class="form-label">Products Description<em>*</em></label>

                                 <textarea id="elm1" name="txtdesc" rows="25" cols="80" style="width: 100%" class="tinymce">
                &lt;p&gt;
                    This is some example text that you can edit inside the &lt;strong&gt;TinyMCE editor&lt;/strong&gt;.
              			  &lt;/p&gt;
               
            </textarea>
						  </div>
                            
                          <div class="clearfix">

                                <label for="form-name" class="form-label">Products Price <em>*</em></label>

                                <div class="form-input"><input type="text" id="form-name" name="txtprice" required="required" placeholder="Enter price" /></div>

                            </div>

                            <div class="clearfix">

                                <label for="form-upload" class="form-label">Photo</label>

                                <div class="form-input"><input type="file" name="file" id="form-upload" placeholder="80x80 jpeg/png format" /></div>

                            </div>

                             <div class="clearfix">

                                <label for="form-name" class="form-label">Lattitude<em>*</em></label>

                                <div class="form-input"><input type="text" id="latt" name="txtlat" required="required" placeholder="Enter Lattitude" /></div>

                            </div>
							
							 <div class="clearfix">

                                <label for="form-name" class="form-label">Longitude<em>*</em></label>

                                <div class="form-input"><input type="text" id="lonn" name="txtlon" required="required" placeholder="Enter Lattitude" /></div>

                            </div>

                            <div class="form-action clearfix">

                                <input type="submit" class="button" value="Save" name="btnsave"/>
                             

                                <button class="button" type="reset">Reset</button>

                            </div>

                        </form>
                    </div>
                </div>