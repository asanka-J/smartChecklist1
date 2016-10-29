
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
	
 <div class="pages navbar-fixed toolbar-fixed ">
            <div data-page="index" class="page ">
                <div class="page-content">

<?php
if(isset($_GET['sellerid'])){

$sellerid=$_GET['sellerid'];

					mysql_connect("localhost", "root", "") or die(mysql_error());
					
					mysql_select_db("group1") or die(mysql_error());
					
					$sql = mysql_query("SELECT * FROM products where uname='".$sellerid."'")
					or die(mysql_error());  
					 
					$name;
					$uname;
					$image;
					
					while($row = mysql_fetch_array($sql)){
				
				$name=$row['name'];
					$image=$row['image'];
					$price=$row['price'];
					$description=$row['description'];
					$category=$row['category'];
					$pid=$row['id'];
					
					
					
					
					
					
					

			  ?>
                  

                    <article>
                        <div class="author">
                           </a><span>
                                LKR <br><?php  echo $price;?>
                            </span>
                        </div>
						
						
						
                        <div class="buttons">
                            <a href="#"><span class="icon-bubble-dots"></span></a>
                            <a href="#"><span class="icon-heart"></span></a>
                        </div>
                        <div class="text">
                            <h2>
							
                                <b><a href="details.php?sellerid=<?php echo $sellerid; ?>&pid=<?php echo $pid; ?>"><?php echo @$name;?></a></b>
                           </br> <?php echo @$category;?>
							</h2>
							
                           
                        </div>
                       <img  height="300px" class="article-bg" src="http://localhost:8080/group1/seller/views/categories/<?php  echo $image;?>" alt=""/>
                    </article>

              
               
                  <?php
				  
				  			  }
					
					
			  }
			 
				  
				  ?>

                </div>
            </div>
        </div>

</div>