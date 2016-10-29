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
 <form action="searchlist.php" method="POST" class="form nice-label">
</br></br></br></br>
                        <div class="form-row">
                          
                            <input list="browsers" name="browser" class="text-field green-field" placeholder="#Enter Product Name Here" style="font-size:15px;color:orange">
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
                     

                    
							
							  <input type="submit" value="Search" name="btnreg" class="button button-primary button-fill"/>

                        
                       


                    </form>
					 <div class="content-block mb-15">
					<div class="accordion-list">
                        <div class="accordion-item">
                            
                          
                       
				
					
					
					 </div>
						</div>
						</div>
					
					
					
					
					
					

                </div>
  
  
  
  
  
            </div>
        </div>
		
    </div>


</div>