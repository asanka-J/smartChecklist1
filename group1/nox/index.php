<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/img/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>NOX</title>

    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bower_components/framework7/dist/css/framework7.ios.min.css">
    <link rel="stylesheet" href="bower_components/swipebox/src/css/swipebox.css">
    <link rel="stylesheet" href="bower_components/owl-carousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="bower_components/owl-carousel/owl-carousel/owl.theme.css">

    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/themes//style.css" id="theme-style">
</head>
<body class="">

<div class="statusbar-overlay"></div>
<div class="panel-overlay"></div>

<!-- Left panel -->
<div class="panel panel-left panel-reveal">
    <div class="line"></div>

    <div class="logo-box mt-10">
        <strong>SmartChecked List</strong>
        <div>Sri Lankan Deals Agregator</div>
    </div>

    <div class="list-block mt-15">
        <div class="list-group">
            <nav>
                <ul>
                    <li class="divider">
                        Menu
                    </li>
                   
					<li>
                                <a href="index.html" class="item-link close-panel item-content">
                                    <div class="item-media">
                                        <i class="icon-home"></i>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title">Home</div>
                                    </div>
                                </a>
                            </li>
									<li>
                                <a href="login.html" class="item-link close-panel item-content">
                                    <div class="item-media">
                                        <i class="fa fa-th"></i>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title">Login</div>
                                    </div>
                                </a>
                            </li>
							
									<li>
                                <a href="registration.html" class="item-link close-panel item-content">
                                    <div class="item-media">
                                        <i class="fa fa-th"></i>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title">Register</div>
                                    </div>
                                </a>
                            </li>
                    <li>
					
					
					
                                <a href="list.php" class="item-link close-panel item-content">
                                    <div class="item-media">
                                        <i class="icon-bullhorn"></i>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title">My List</div>
                                    </div>
                                </a>
                            </li>
                    <li>
					
					
					
                                <a href="#" onClick="MyWindow=window.open('http://localhost:8080/group1/nox/dealstracker.php','_top'); return false;" class="item-link close-panel item-content">
                                    <div class="item-media">
                                        <i class="icon-bullhorn"></i>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title">Deals Tracker</div>
                                    </div>
                                </a>
                            </li>
							
							 <!-- <li>
                                <a href="dashboard.html" class="item-link close-panel item-content">
                                    <div class="item-media">
                                        <i class="icon-binoculars"></i>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title">Special Promotions</div>
                                    </div>
                                </a>
                            </li> -->
							
							<li>
                                <a href="search.php" class="item-link close-panel item-content">
                                    <div class="item-media">
                                        <i class="icon-user-plus"></i>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title">Search Items</div>
                                    </div>
                                </a>
                            </li>

            </nav>
        </div>
    </div>

</div>

<!-- Right panel -->
<div class="panel panel-right panel-reveal">
    <div class="line"></div>

    <!--<div class="user-banner">-->
        <!--<span class="ava-box">-->
            <!--<img src="assets/img/tmp/ava4.jpg" alt="">-->
        <!--</span>-->
    <!--</div>-->

    <div class="welcome-msg">
        <h3>Hello <strong><?php echo $_SESSION['dog'];?></strong>!</h3>
        <h4>How is your day going?</h4>
    </div>

    <div class="list-block mt-15">
        <div class="list-group">
            <nav class="menu">
                <ul>
                    <li>
                        <a href="index.html" class="item-link close-panel item-content">
                            <div class="item-media">
                                <i class="icon-man"></i>
                            </div>
                            <div class="item-inner">
                                <div class="item-title">Profile</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="settings.html" class="item-link close-panel item-content">
                            <div class="item-media">
                                <i class="icon-cog"></i>
                            </div>
                            <div class="item-inner">
                                <div class="item-title">Settings</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="index.html" class="item-link close-panel item-content">
                            <div class="item-media">
                                <i class="icon-envelope"></i>
                            </div>
                            <div class="item-inner">
                                <div class="item-title">Messages</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="index.html" class="item-link close-panel item-content">
                            <div class="item-media">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="item-inner">
                                <div class="item-title">I Like It</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="index.html" class="item-link close-panel item-content">
                            <div class="item-media">
                                <i class="icon-group-work"></i>
                            </div>
                            <div class="item-inner">
                                <div class="item-title">Friends</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="index.html" class="item-link close-panel item-content">
                            <div class="item-media">
                                <i class="icon-exit-right"></i>
                            </div>
                            <div class="item-inner">
                                <div class="item-title">Logout</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

       
    </div>
</div>

<!-- Views -->
<div class="views">
    <div class="view view-main">

        <div class="navbar navbar-clear anim-navbar">
            <div class="navbar-inner">
                <div class="left">
                    <a href="#" class="link icon-only open-panel">
                        <span class="kkicon icon-menu"></span>
                    </a>
                </div>
                <div class="center sliding">
                    <span class="anim-logo-small" style="opacity: 0">Smart Checked List</span>
                </div>
                <div class="right">
                    <a href="#" class="link icon-only open-panel" data-panel="right">
                        <span class="kkicon icon-alarm"></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="pages navbar-fixed toolbar-fixed ">
            <div data-page="index" class="page ">
                <div class="page-content">

<?php
					mysql_connect("localhost", "root", "") or die(mysql_error());
					
					mysql_select_db("group1") or die(mysql_error());
					
					$sql = mysql_query("SELECT * FROM users where type='".'Seller'."'")
					or die(mysql_error());  
					 
					$name;
					$uname;
					$image;
					
					while($row = mysql_fetch_array($sql)){
				
					$name=$row['name'];
					$image=$row['image'];
					$uname=$row['uname'];
					
					 $sql1 = mysql_query("SELECT * FROM shops where uname='".$uname."'")
					or die(mysql_error()); 
			  $name1;
					$image1;
					$address1;
					$id;
			  while($row1 = mysql_fetch_array($sql1)){
					$id=$row1['id'];
					$name1=$row1['name'];
					$image1=$row1['image'];
					$address1=$row1['address'];
					
					
					
					
					

			  ?>
                  

                    <article>
                        <div class="author">
                            <a href="about.php?sellerid=<?php echo $uname; ?>&shopid=<?php echo $id;?>"><img src="http://localhost:8080/group1/seller/views/images/<?php  echo $image;?>" alt=""/>
                            </a><span>
                                by<br><?php  echo $name;?>
                            </span>
                        </div>
						
						
						
                        <div class="buttons">
                            <a href="#"><span class="icon-bubble-dots"></span></a>
                            <a href="#"><span class="icon-heart"></span></a>
                        </div>
                        <div class="text">
                            <h2>
                                <b><a href="about.php?sellerid=<?php echo $uname; ?>&shopid=<?php echo $id;?>"><?php echo @$name1;?></a></b>
                           </br> <?php echo @$address1;?>
							</h2>
							
                            <span>300 likes</span>
                            <span>23 comments</span>
                          
                        </div>
                        <img  height="250px" class="article-bg" src="http://localhost:8080/group1/seller/views/shops/<?php  echo $image1;?>" alt=""/>
                    </article>

              
               
                  <?php
				  
				  			  }
					
					
			  }
			 
				  
				  ?>

                </div>
            </div>
        </div>

    </div>
</div>

<div class="popup popup-splash">
    <div class="content-block">
        <a href="#" class="close-popup">
            skip
        </a>

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide text-center">
                    <div class="slide-content">
                        <h2>Responsive</h2>

                        <h3>flexible layout</h3>
                        <img src="assets/img/tmp/slide1.png" alt=""/>
                    </div>
                </div>
                <div class="swiper-slide text-center">
                    <div class="slide-content">
                        <h2>Very Detailed</h2>

                        <h3>20+ page templates</h3>
                        <img src="assets/img/tmp/slide2.png" alt=""/>
                    </div>
                </div>
                <div class="swiper-slide text-center">
                    <div class="slide-content clearfix">
                        <h2>Call<br>Us Now</h2>

                        <h3>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis.
                            Maecenas malesuada elit lectus felis, malesuada ultricies.</h3>
                        <a href="#" class="button mt-50 mb-20">Click to call!</a>
                    </div>
                </div>
            </div>
            <div class="bottom-color"></div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</div>


<div class="popup popup-login">
    <div class="content-block">
        <a href="#" class="close-popup">
            skip
        </a>

        <div class="text-center mt-70">
            <h2>Hello!</h2>

            <h3>You wont to login?!</h3>
        </div>

        <div class="forms mt-50">
            <form method="post"
                  class="js-validate"
                  novalidate="novalidate">

                <div class="form-row">
                    <div class="input-text">
                        <input type="text" name="login" placeholder="Login" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-text">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-submit">
                        <a href="#" class="button button-big js-form-submit button-fill button-primary">Login</a>
                    </div>
                </div>
            </form>
        </div>

        <a href="#" class="more-info">I don't have a APP account.</a>
    </div>
</div>


<!-- Picker -->
<div class="picker-modal picker-social">
    <div class="toolbar">
        <div class="toolbar-inner">
            <div class="left"></div>
            <div class="right"><a href="#" class="close-picker">done</a></div>
        </div>
    </div>
    <div class="picker-modal-inner">
        <div class="content-block mt-15 mb-10">
            <h3>Sharing is sexy!</h3>

            <p>Duis ac nibh ac quam quam sagittis tortor. Cum sociis natoque penatibus et neque.</p>

            <div class="social-buttons">
                <a href="#" class="kkicon-twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="kkicon-facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="kkicon-pinterest"><i class="fa fa-pinterest"></i></a>
                <a href="#" class="kkicon-linkedin"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="kkicon-gplus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="kkicon-flickr"><i class="fa fa-flickr"></i></a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="bower_components/swipebox/src/js/jquery.swipebox.min.js"></script>
<script type="text/javascript" src="bower_components/framework7/dist/js/framework7.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="bower_components/Tweetie/tweetie.min.js"></script>
<script type="text/javascript" src="bower_components/chartjs/Chart.js"></script>
<script type="text/javascript" src="bower_components/scrollAnimate/jquery.scrollAnimate.js"></script>
<script src="bower_components/owl-carousel/owl-carousel/owl.carousel.min.js"></script>

<script type="text/javascript" src="assets/js/jflickrfeed.min.js"></script>
<script type="text/javascript" src="assets/js/min/app.js"></script>
<script type="text/javascript" src="assets/js/animations.js"></script>


</body>
</html>