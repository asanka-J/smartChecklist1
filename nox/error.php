<?php

session_start();

?>
<div class="navbar navbar-clear">
    <div class="navbar-inner">
        <div class="center sliding"></div>
    </div>
</div>

<div class="pages navbar-fixed toolbar-fixed">
    <div data-page="splash" class="page">
        <div class="page-content">

            <div class="nice-header header-fix-top">
                <div class="logo">
                     <span style="font-size:30px"><?php echo 'Hello '. $_SESSION['dog'];?></span>
                    <h2>You Entered Invalid User Name and Password!</h2>
                </div>

              
            </div>

            <div class="text-center splash">
                <div class="splash-welcome text-center">
                   
                   <center>  <a href="login.html" style="width:200px" class="button button-secondary button-fill">Please Try Again!</a></center>

                </div>

                <div class="la-ball-triangle-path">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</div>