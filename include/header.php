<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--font-awesome icon css-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--linear icons css-->
    <link rel="stylesheet" href="vendors/Linearicons/style.css">
    <link rel="stylesheet" type="text/css" href="css/etfont.css">
    <link rel="stylesheet" type="text/css" href="css/themify-icons.css">
    <!--owl carousel css-->
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="vendors/owl-carousel/animate.css">
    <link rel="stylesheet" type="text/css" href="css/magnifier.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <!--video css -->
    <link rel="stylesheet" href="vendors/video/video.css">
    <link rel="stylesheet" href="vendors/wow-js/animate.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
    <!--custom css-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/menubar.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/jquery.modal.css">
    <link rel="stylesheet" href="css/sweetalert.css">

    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body id="body">
    <!-- preeloader -->
    <!-- <div id="pre-loader">
        <div id="loader-logo"></div>
        <div id="loader-circle"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div> -->
    <!-- preeloader -->
    <!-- Header Start -->
    <header id="menu" class="header white-bg minimal header-sticky header-transparent">
        <nav class="navbar">
            <div class="menu-width container">
                <div class="menu-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                        <div class="navbar-hamburger">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-u"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </div>
                        <div class="navbar-close hidden" id="close">
                            <i class="ti-close"></i>
                        </div>
                    </button>
                    <div class="nav-tools">
                        <ul class="nav navbar-nav">
                            <li class="nav-item l-border">
                                
                            </li>
                        </ul>
                        <form action='#' id='search' method='get'>
                            <div class="search-input">
                                <div class="container">
                                    <input class="search" placeholder='Search...' type='text'>
                                    <button class="submit ti-search" type="submit" value="close"></button>
                                </div>
                            </div>
                            <button class="ti-close" id="close" type="reset"></button>
                        </form>
                    </div>
                    <div class="nav-logo l-normal">
                        <a href="/"><img class="logo" class="img-responsive" src="image/logo.png"></a>
                    </div>
                    <div class="nav-logo l-white" style="display:none">
                        <a href="/"><img class="logo" class="img-responsive" src="image/logo-white.png"></a>
                    </div>
                    <div class="nav-video hi-icon-wrap hi-icon-effect-8 hidden-xs">
                        <a class="hi-icon hi-icon-archive" href="https://www.youtube.com/embed/QDFixRoYwu0?autoplay=1&rel=0" data-fancybox><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="27px" height="20px" viewBox="0 0 27 20" enable-background="new 0 0 27 20" xml:space="preserve">
                        <path id="make-hover" fill-rule="evenodd" clip-rule="evenodd" fill="#4B4B4B" d="M25.921,4.271c0,3.917,0,7.838,0,11.759
                            c-0.013,0.068-0.021,0.135-0.036,0.204c-0.156,0.735-0.775,1.239-1.532,1.241c-0.223,0-0.446-0.002-0.671,0
                            c-0.051,0-0.087-0.015-0.123-0.051c-1.496-1.499-2.995-2.999-4.492-4.498c-0.026-0.024-0.051-0.048-0.089-0.08
                            c0,0.047,0,0.073,0,0.104c0,1.229,0,2.46-0.004,3.689c0,0.102-0.006,0.204-0.021,0.306c-0.087,0.616-0.575,1.135-1.188,1.263
                            c-0.08,0.016-0.165,0.027-0.245,0.042c-4.936,0-9.871,0-14.806,0c-0.042-0.006-0.083-0.012-0.125-0.018
                            c-0.623-0.087-1.128-0.539-1.281-1.146c-0.026-0.1-0.039-0.201-0.057-0.299c0-4.424,0-8.85,0-13.277
                            c0.006-0.042,0.012-0.084,0.018-0.126c0.083-0.628,0.569-1.158,1.188-1.293c0.081-0.018,0.162-0.03,0.243-0.042
                            c4.947,0,9.891,0,14.835,0c0.018,0.003,0.036,0.009,0.057,0.015c0.105,0.021,0.216,0.033,0.317,0.066
                            c0.644,0.203,1.065,0.793,1.069,1.485c0,1.248,0,2.493,0,3.737c0,0.03,0.002,0.057,0.002,0.099c0.036-0.033,0.061-0.054,0.081-0.075
                            c0.665-0.665,1.329-1.329,1.99-1.993c0.838-0.838,1.677-1.676,2.515-2.514c0.021-0.021,0.051-0.042,0.077-0.042
                            c0.296,0,0.593-0.012,0.887,0.012c0.658,0.051,1.208,0.548,1.346,1.191C25.893,4.112,25.905,4.189,25.921,4.271z M16.67,4.36
                            c-0.033-0.002-0.063-0.006-0.094-0.006c-4.31,0-8.619,0-12.929,0c-0.092,0-0.092,0-0.092,0.093c0,3.801,0,7.598,0,11.4
                            c0,0.027,0.003,0.057,0.006,0.087c4.373,0,8.739,0,13.109,0C16.67,12.073,16.67,8.218,16.67,4.36z M23.606,14.189
                            c0-2.691,0-5.388,0-8.076c-1.347,1.344-2.696,2.69-4.046,4.038C20.907,11.492,22.257,12.839,23.606,14.189z"></path>

                        </svg></a>
                    </div>
                    <div class="nav-number">
                        <a style="color:#555" href="tel:022 4023 2263"><i class="fa fa-phone" aria-hidden="true"></i> 022 4023 2263</a>
                    </div>
               </div>
                <div class="collapse navbar-collapse nav-collapse t-border">
                    <ul class="nav navbar-nav menu-list">
                        <li class="menu-n"><a href="index.php">HOME</a></li>
                        <li class="menu-n"><a href="work.php">WORK</a></li>
                        <li class="menu-n"><a href="service.php">SERVICE</a></li>
                        <li class="menu-n"><a href="about.php">ABOUT</a></li>
                        <li class="menu-n"><a href="contact.php">CONTACT</a></li>
                    </ul>
                    
                </div>
            </div>
        </nav>
    </header>
    