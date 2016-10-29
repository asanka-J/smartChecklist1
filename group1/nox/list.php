<?php
session_start();

?>
<div class="navbar navbar-clear">
    <div class="navbar-inner">
        <div class="left">
            <a href="index.php" class="link">
                <span class="icon-chevron-left"></span> <span>Back</span>
            </a>
        </div>
        <div class="center sliding"></div>
        <div class="right">
            <a href="#" class="link icon-only open-panel" data-panel="right">
                <span class="kkicon icon-alarm"></span>
            </a>
        </div>
    </div>
</div>

<div class="view another-view navbar-fixed">
    <!-- Pages -->
	
	
	
    <div class="pages">
        <div class="page no-toolbar" data-page="article">
            <div class="page-content navbar-fix">
     <div class="page-content">
 <form action="newlist.php" method="POST" class="form nice-label">
</br></br></br></br>
                        <div class="form-row">
                          
                                                  <input list="browsers" name="txtname" class="text-field green-field" placeholder="#Enter Product Name Here" style="font-size:15px;color:orange">
							<datalist id="browsers" > 
 <?php
					mysql_connect("localhost", "root", "") or die(mysql_error());
					
					mysql_select_db("group1") or die(mysql_error());
					
					$sql = mysql_query("SELECT * FROM products order by id DESC")
					or die(mysql_error());  
					$id;
					while($row = mysql_fetch_array($sql)){
					$id=$row['id'];
						echo ' <a href="details.php?id='.$row['name'].'"><option value="'.$row['name'].'">By '.$row['uname'].'</option></a>';
						
						}
						?>
  
  
    
    

  </datalist>
               
                        </div>
                     

                    
							
							  <input type="submit" value="Add To My List" name="btnreg" class="button button-primary button-fill"/>

                        
                       


                    </form>
					 <div class="content-block mb-15">
					<div class="accordion-list">
                        <div class="accordion-item">
                            
                          
                       
				
					<?php
					
					
					mysql_connect("localhost", "root", "") or die(mysql_error());
					
					mysql_select_db("group1") or die(mysql_error());
					
					$sql = mysql_query("SELECT * FROM list where uname='".$_SESSION['dog']."'")
					or die(mysql_error());  
					 
				
					
					while($row = mysql_fetch_array($sql)){
				
				echo '<div class="accordion-item-toggle">'.$row['name'].'</div>';
				echo '<div class="accordion-item-content">
                               <a href="delete.php?id='.$row['id'].'">Delete From List</a>
                            </div>';
					}
					
					?>
					
					 </div>
						</div>
						</div>
					
					
					
					
					
					

                </div>
  
  
  
  
  
            </div>
        </div>
		
    </div>


</div>