<?php

session_start();
?>
<!DOCTYPE html>
<!--[if IE 7 ]>   <html lang="en" class="ie7 lte8"> <![endif]--> 
<!--[if IE 8 ]>   <html lang="en" class="ie8 lte8"> <![endif]--> 
<!--[if IE 9 ]>   <html lang="en" class="ie9"> <![endif]--> 
<!--[if gt IE 9]> <html lang="en"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head><!--[if lte IE 9 ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

<!-- iPad Settings -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" /> 
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
<!-- iPad Settings End -->

<title>Smart Checked List</title>

<link rel="shortcut icon" href="favicon.ico">

<!-- iOS ICONS -->
<link rel="apple-touch-icon" href="touch-icon-iphone.png" />
<link rel="apple-touch-icon" sizes="72x72" href="touch-icon-ipad.png" />
<link rel="apple-touch-icon" sizes="114x114" href="touch-icon-iphone4.png" />
<link rel="apple-touch-startup-image" href="touch-startup-image.png">
<!-- iOS ICONS END -->

<!-- STYLESHEETS -->

<link rel="stylesheet" href="css/reset.css" media="screen" />
<link rel="stylesheet" href="css/grids.css" media="screen" />
<link rel="stylesheet" href="css/ui.css" media="screen" />
<link rel="stylesheet" href="css/forms.css" media="screen" />
<link rel="stylesheet" href="css/device/general.css" media="screen" />
<!--[if !IE]><!-->
<link rel="stylesheet" href="css/device/tablet.css" media="only screen and (min-width: 768px) and (max-width: 991px)" />
<link rel="stylesheet" href="css/device/mobile.css" media="only screen and (max-width: 767px)" />
<link rel="stylesheet" href="css/device/wide-mobile.css" media="only screen and (min-width: 480px) and (max-width: 767px)" />
<!--<![endif]-->
<link rel="stylesheet" href="css/jquery.uniform.css" media="screen" />
<link rel="stylesheet" href="css/jquery.popover.css" media="screen">
<link rel="stylesheet" href="css/jquery.itextsuggest.css" media="screen">
<link rel="stylesheet" href="css/themes/lightblue/style.css" media="screen" />



<style type = "text/css">
    #loading-container {position: absolute; top:50%; left:50%;}
    #loading-content {width:800px; text-align:center; margin-left: -400px; height:50px; margin-top:-25px; line-height: 50px;}
    #loading-content {font-family: "Helvetica", "Arial", sans-serif; font-size: 18px; color: black; text-shadow: 0px 1px 0px white; }
    #loading-graphic {margin-right: 0.2em; margin-bottom:-2px;}
    #loading {background-color:#abc4ff; background-image: -moz-radial-gradient(50% 50%, ellipse closest-side, #abc4ff, #87a7ff 100%); background-image: -webkit-radial-gradient(50% 50%, ellipse closest-side, #abc4ff, #87a7ff 100%); background-image: -o-radial-gradient(50% 50%, ellipse closest-side, #abc4ff, #87a7ff 100%); background-image: -ms-radial-gradient(50% 50%, ellipse closest-side, #abc4ff, #87a7ff 100%); background-image: radial-gradient(50% 50%, ellipse closest-side, #abc4ff, #87a7ff 100%); height:100%; width:100%; overflow:hidden; position: absolute; left: 0; top: 0; z-index: 99999;}
</style>

<!-- STYLESHEETS END -->

<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script type="text/javascript" src="js/selectivizr.js"></script>
<![endif]-->

</head>
<body style="overflow: hidden;">
    <div id="loading"> 

        <script type = "text/javascript"> 
            document.write("<div id='loading-container'><p id='loading-content'>" +
                           "<img id='loading-graphic' width='16' height='16' src='images/ajax-loader-abc4ff.gif' /> " +
                           "Loading...</p></div>");
        </script> 

    </div> 

    <div id="wrapper">
        <header>
            <h1><a href="#">Seller Admin Panel</a></h1>
            <nav>
                <div class="container_12">
                    <div class="grid_12">
                      
                        <a href="login.html" title="Logout" class="button icon-with-text fr"><img src="images/navicons-small/129.png" alt=""/>Logout</a>
                        <div class="user-info fr">
                            Login as <a href="#">#Seller</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        
        <section>
            <!-- Sidebar -->

            <aside>
                <nav class="drilldownMenu">
                    <h1>
                        <span class="title">Main Menu</span>
                        <button title="Go Back" class="back">Back</button>
                    </h1>
                    <div class="clearfix" id="searchform">
					
                        <div class="searchcontainer">
						</br><span style="font-size:15px"><b>Hello <?php echo $_SESSION['dog']; ?></b></span>
                            <div class="searchbox" onclick="$(this).find('input').focus();">
                                <input type="text" name="q" id="q" autocomplete="off" placeholder="Search...">
                            </div>
                            <input type="button" value="Cancel" />
                        </div>
						</br></br>
                        <div class="search_results"></div>
                    </div>                        
                    <ul class="tlm">
                        <li class="current"><a href="#personal_details.php"><img src="images/navicons/111.png" alt=""/><span>My Account</span></a>
                            <ul>
                            	<li><a href="#personal_details.php" title="Users"><img src="images/navicons/111.png" alt=""/><span>Personal Details</span></a></li>
                                <li><a href="#business_details.php" title="Groups"><img src="images/navicons/112.png" alt=""/><span>Business Details</span></a></li>
                               
						   </ul>
                        </li>
                        
						<li class="hasul"><a href="#" title="Forms"><img src="images/navicons/139.png" alt=""/><span>Products</span></a>
                            <ul>
                                <li><a href="#add_products.php" title="Form Sample 1"><span>Upload Products</span></a></li>
                                <li><a href="#add_categories.php" title="Custom Form Elements"><span>Create Categories</span></a></li>
								<li><a href="#manage_products.php" title="Custom Form Elements"><span>Manage Products</span></a></li>
								<li><a href="#manage_category.php" title="Custom Form Elements"><span>Manage Categories</span></a></li>
                           
						   </ul>
                        </li>
                        <li><a href="#contacts.html" title="Contacts"><img src="images/navicons/123.png" alt=""/><span>Comments</span></a></li>
                        <li><a href="#media.html" title="Media"><img src="images/navicons/42.png" alt=""/><span>Promotions</span></a></li>
                        <li><a href="http://localhost:8080/group1/nox/#!/login.html" title="Media"><img src="images/navicons/42.png" alt=""/><span>Log Out</span></a></li>
                        
                        
                   
                    </ul>
                </nav>
            </aside>

            <!-- Sidebar End -->

            <section>
                <header>
                    <div class="container_12 clearfix">
                        <a href="#menu" class="showmenu button">Menu</a>
                        <h1 class="grid_12">Dashboard</h1>
                    </div>
                </header>
                <section id="main-content" class="clearfix">
                </section>
                <footer class="clearfix">
                    <div class="container_12">
                        <div class="grid_12">
                            Copyright &copy; 2016. <a target="_blank" href="#">BIT FINAL PROJECT</a>
                        </div>
                    </div>
                </footer>
            </section>

            <!-- Main Section End -->
        </section>
    </div>
    
    <!-- MAIN JAVASCRIPTS -->
    <script src="//code.jquery.com/jquery-1.7.min.js"></script>
    <script>window.jQuery || document.write("<script src='js/jquery.min.js'>\x3C/script>")</script>
    <script type="text/javascript" src="js/jquery.tools.min.js"></script>
    <script type="text/javascript" src="js/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.js"></script>
    <script type="text/javascript" src="js/jquery.ui.totop.js"></script>
    <script type="text/javascript" src="js/jquery.itextsuggest.js"></script>
    <script type="text/javascript" src="js/jquery.itextclear.js"></script>
    <script type="text/javascript" src="js/jquery.hashchange.min.js"></script>
    <script type="text/javascript" src="js/jquery.drilldownmenu.js"></script>
    <script type="text/javascript" src="js/jquery.popover.js"></script>
    
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/PIE.js"></script>
    <script type="text/javascript" src="js/ie.js"></script>
    <![endif]-->

    <script type="text/javascript" src="js/global.js"></script>
    <!-- MAIN JAVASCRIPTS END -->

    <!-- LOADING SCRIPT -->
    <script>
    $(window).load(function(){
        $("#loading").fadeOut(function(){
            $(this).remove();
            $('body').removeAttr('style');
        });
    });
    </script>
    <!-- LOADING SCRIPT -->
    
    <!-- POPOVERS SETUP-->
    <div id="activity-popover" class="popover">
        <header>
            Activity
        </header>
        <section>
            <div class="content">
                <nav>
                    <ul>
                        <li class="new"><a><span class="avatar"></span>John Doe created a new project</a></li>
                        <li class="read"><a><span class="avatar"></span>John Doe created a new project</a></li>
                        <li class="read"><a><span class="avatar"></span>Jane Doe updated a project</a></li>
                        <li class="read"><a><span class="avatar"></span>John Doe uploaded a document</a></li>
                        <li class="read"><a><span class="avatar"></span>John Doe deleted a project</a></li>
                        <li class="read"><a><span class="avatar"></span>John Doe marked a project as done</a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </div>
    <div id="notifications-popover" class="popover">
        <header>
            Notifications
        </header>
        <section>
            <div class="content">
                <nav>
                    <ul>
                        <li class="new"><a><span class="avatar"></span>John Doe created a new project</a></li>
                        <li class="new"><a><span class="avatar"></span>John Doe created a new project</a></li>
                        <li class="new"><a><span class="avatar"></span>Jane Doe updated a project</a></li>
                        <li class="read"><a><span class="avatar"></span>John Doe uploaded a document</a></li>
                        <li class="read"><a><span class="avatar"></span>John Doe deleted a project</a></li>
                        <li class="read"><a><span class="avatar"></span>John Doe marked a project as done</a></li>
                        <li><a href="#notifications.html" title="Notifications">See notification styles and growl like messages...</a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </div>
    <div id="settings-popover" class="popover">
        <header>
            Settings
        </header>
        <section>
            <div class="content">
                <nav>
                    <ul>
                        <li><a>Project Settings</a></li>
                        <li><a>Account Settings</a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </div>
    <script>
        $(document).ready(function() {
            $('#activity-button').popover('#activity-popover', {preventRight: true});
            $('#notifications-button').popover('#notifications-popover', {preventRight: true});
            $('#settings-button').popover('#settings-popover', {preventRight: true});

            /**
             * setup search
             */
            function googleSearch(q){
                $('#searchform .searchbox a').fadeOut()
                $.ajax({
                    url: 'php/google_search_results.php',
                    data: 'q='+encodeURIComponent(q),
                    cache: false,
                    success: function(response){
                        $('.search_results').html(response);
                    }
                });
            }

            // Set iTextSuggest
            $('#searchform .searchbox').length && $('#searchform .searchbox').find('input[type=text]').iTextClear().iTextSuggest({
                url: 'php/google_suggestions_results.php',
                onKeydown: function(query){
                    googleSearch(query);
                },
                onChange: function(query){
                    googleSearch(query);
                },
                onSelect: function(query){
                    googleSearch(query);
                },
                onSubmit: function(query){
                    googleSearch(query);
                },
                onEmpty: function(){
                    $('.search_results').html('');
                }
            }).focus(function(){
                $('#wrapper > section > aside > nav > ul').fadeOut(function(){
                    $('#searchform .search_results').show();
                });
                $(this).parents('#searchform .searchbox').animate({marginRight: 70}).next().fadeIn();
            });
            
            $('#searchform .searchcontainer').find('input[type=button]').click(function(){
                $('#searchform .search_results').hide();
                $('#searchform .searchbox').find('input[type=text]').val('');
                $('#searchform .search_results').html('');
                $('#wrapper > section > aside > nav > ul').fadeIn();
                $('.searchbox', $(this).parent()).animate({marginRight: 0}).next().fadeOut();
            });
        });
    </script>
    <!-- POPOVERS SETUP END-->

</body>
</html>