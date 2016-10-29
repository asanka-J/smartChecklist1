
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
	
	<?php
if(isset($_GET['sellerid'])){

$sellerid=$_GET['sellerid'];
$shopid=$_GET['shopid'];

	mysql_connect("localhost", "root", "") or die(mysql_error());
					
					mysql_select_db("group1") or die(mysql_error());
					
					$sql = mysql_query("SELECT * FROM users where uname='".$sellerid."'")
					or die(mysql_error());  
					 
					$name;
					$uname;
					$image;
					
					while($row = mysql_fetch_array($sql)){
				
					$name=$row['name'];
					$image=$row['image'];
					$uname=$row['uname'];
					$about=$row['about'];
					 $sql1 = mysql_query("SELECT * FROM shops where uname='".$sellerid."'")
					or die(mysql_error()); 
			  $name1;
					$image1;
					$address1;
					$id;
					$town1;
					$email1;
					$website1;
					$tel1;
			  while($row1 = mysql_fetch_array($sql1)){
					$id=$row1['id'];
					$name1=$row1['name'];
					$image1=$row1['image'];
					$address1=$row1['address'];
					$about1=$row1['about'];
					$tel1=$row1['tel'];
					$website1=$row1['website'];
					$email1=$row1['email'];
					$town1=$row1['town'];
					
					
?>
	
    <div class="pages">
        <div class="page no-toolbar" data-page="article">
            <div class="page-content navbar-fix">

                <div class="full-page-image" style="background-image: url('http://localhost:8080/group1/seller/views/shops/<?php  echo $image1;?>');">
                    
					<div class="article-data">
                        

                        <!--<small>
                            <span>30.03.2015</span>
                            <span class="ml-20">10 min read</span>
                        </small>-->

                        <h1 ><?php echo $name1; ?></h1>
<div class="tags">
                            <span class="badge badge-primary badge-square text-uppercase"><?php echo $address1; ?></span>
                        </div>
                        <hr>

                        <small style="font-size:20px"><?php echo $sellerid;?></small>
                    </div>
                </div>
<div class="content-block">
                <p class="buttons-row">
                    <a href="#" class="button button-primary">Like Us</a>
                    
                    <a href="#" class="button button-primary">Un Like</a>
                </p>
            </div>
                <div class="content-block mt-5">
<h1 style="font-size:18px">About Shop</h1>
                    <p class="first-letter"><?php echo $about1;?></p>
</br>
  <h1 style="font-size:18px">About Seller</h1>
 <div class="author">
                            <a href="#"><img src="http://localhost:8080/group1/seller/views/images/<?php  echo $image;?>" alt=""/>
                            </a>
                        </div>  
                    <blockquote>
                       <?php echo $about;?>
                    </blockquote>

                    <p>
                       <a href="products.php?sellerid=<?php echo $sellerid; ?>" class="button button-primary button-fill button-big mb-10">Visit My Shop</a>
						
                             
							 <form action="new.php" method="POST"/>
							 <input type="hidden" value="<?php echo $tel1; ?>" name="txtcall"/>
							 <input type="hidden" value="<?php echo $email1; ?>" name="txtemail"/>
							 <input type="hidden" value="<?php echo $name1; ?>" name="txtmap"/>
							 <input type="hidden" value="<?php echo $website1; ?>" name="txtweb"/>
							 <input type="hidden" value="<?php echo $town1; ?>" name="txttown"/>
							 
							 <input type="submit" value="Call Us" class="button button-primary mb-10" name="call"/>
							 <input type="submit" value="Email Us" class="button button-primary mb-10" name="email"/>
							 <input type="submit" value="Our Location" class="button button-primary mb-10" name="map"/>
							 <input type="submit" value="Visit Website" class="button button-primary mb-10" name="web"/>
							 
							 
							 </form>
							
                            
                        

                        
                    </p>

                   
                </div>
            </div>
        </div>
		
    </div>
	<?php
	
	}}
	

}
	
	
	?>

</div>