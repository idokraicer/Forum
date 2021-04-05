<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IdoK</title>
	<h1>
	
	<?php
		
	?>
	<head>
    <!-- basic -->
    
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- End script -->
<!-- Start toolbar -->
</h1>
<div class="">

            <div class="container">
                
                <div class="row">
                    <div class="col-md-12 location_icon_bottum">
                       <div class="row">
                            <div class="col-md-8 ">
                                <div class="menu-area">
                                    <div class="limit-box">
                                        <nav class="main-menu s">
                                            <ul class="nav nav-tab">
                                                <li class="nav-item active" role="button" aria-haspopup="true" aria-expanded="false"> <a href="index.php">Home</a> </li>
                                                <li> <a href="#about" class="nav-item active" role="button" aria-haspopup="true" aria-expanded="false">About</a> </li>
                                                <?php
                                                if(!isset($_SESSION['login']) OR $_SESSION['login'] == "") {
                                                    echo '<li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                                        <form class="dropdown-menu" method="POST">
                                                            <nav>
                                                                <div class="nav nav-tabs ml-3 mr-3" id="nav-tab" role="tablist">
                                                                    <a class="nav-item nav-link active col" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-login" aria-selected="true">Login</a>
                                                                    <a class="nav-item nav-link col" id="nav-signup-tab" data-toggle="tab" href="#nav-signup" role="tab" aria-controls="nav-signup" aria-selected="false">Sign up</a>
                                                                </div>
                                                            </nav>
                                                        
                                                            <div class="tab-content" id="nav-tabContent">
                                                                <div class="tab-pane fade show active m-5" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">';
                                                                        
                                                                        include 'includes/login.inc.php';
                                                                        include 'includes/login-content.inc.php';
                                                                            
                                                                        
                                                                echo '</div>
                                                                <div class="tab-pane fade m-5" id="nav-signup" role="tabpanel" aria-labelledby="nav-signup-tab">';
                                                                        
                                                                        include 'includes/signup.inc.php';
                                                                        include 'includes/signup-content.inc.php';
                                                                        
                                                                echo '</div>
                                                            </div>
                                                        </form>  
                                                    </li>';
                                                } else {
                                                    echo '<li><a class="nav-link disabled" href="?signout=true">Hello '.$_SESSION['login'].'</a></li>';
                                                }
                                                
                                                ?>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <form class="search">
                                    <input class="form-control" type="text" placeholder="Search">
                                    <button><img src="images/search_icon.png"></button>
                                </form>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- End toolbar -->