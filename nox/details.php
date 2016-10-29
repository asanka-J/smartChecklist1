<?php
if(isset($_GET['sellerid']) && isset($_GET['pid'])){
$sellerid=$_GET['sellerid'];
?>
<div class="navbar navbar-clear">
    <div class="navbar-inner">
        <div class="left">
            <a href="products.php?sellerid=<?php echo $sellerid; ?>" class="link">
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
	
	<?php



$pid=$_GET['pid'];

					mysql_connect("localhost", "root", "") or die(mysql_error());
					
					mysql_select_db("group1") or die(mysql_error());
					
					$sql = mysql_query("SELECT * FROM products where uname='".$sellerid."' and id='".$pid."'")
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
					
					 
					 
					
?>
	
    <div class="pages">
        <div class="page no-toolbar" data-page="article">
            <div class="page-content navbar-fix">

                 <div class="full-page-image" style="background-image: url('http://localhost:8080/group1/seller/views/categories/<?php  echo $image;?>');">
                
				   <div class="article-data">
                        

                        <!--<small>
                            <span>30.03.2015</span>
                            <span class="ml-20">10 min read</span>
                        </small>-->

                        <h1 ><?php echo $name; ?></h1>
<div class="tags">
                            <span class="badge badge-primary badge-square text-uppercase"><?php echo $category; ?></span>
                        </div>
                        <hr>

                        <small style="font-size:25px">LKR <?php echo $price;?>/=</small>
                    </div>
                </div>
<div class="content-block">
              
            </div>
                <div class="content-block mt-5">
<h1 style="font-size:18px">Product</h1>
                    <p class="first-letter"><?php echo $description;?></p>
</br>


                   
                </div>
            </div>
        </div>
		
    </div>
	<?php
	
	}
	

}
	
	
	?>

</div>