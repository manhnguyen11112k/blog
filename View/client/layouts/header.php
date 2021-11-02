<!doctype html>
<html class="no-js" lang="">

    
<!-- Mirrored from www.radiustheme.com/demo/html/newsedge/newsedge/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Feb 2020 08:41:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>NewsEdge | Home 1</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="Public/client/img/favicon.png">
        <!-- Normalize CSS -->
        <link rel="stylesheet" href="Public/client/css/normalize.css">
        <!-- Main CSS -->
        <link rel="stylesheet" href="Public/client/css/main.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="Public/client/css/bootstrap.min.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="Public/client/css/animate.min.css">
        <!-- Font-awesome CSS-->
        <link rel="stylesheet" href="Public/client/css/font-awesome.min.css">
        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="Public/client/vendor/OwlCarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="Public/client/vendor/OwlCarousel/owl.theme.default.min.css">
        <!-- Main Menu CSS -->
        <link rel="stylesheet" href="Public/client/css/meanmenu.min.css">
        <!-- Magnific CSS -->
        <link rel="stylesheet" type="text/css" href="Public/client/css/magnific-popup.css">
        <!-- Switch Style CSS -->
        <link rel="stylesheet" href="Public/client/css/hover-min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="Public/client/style.css">
        <!-- For IE -->
        <link rel="stylesheet" type="text/css" href="Public/client/css/ie-only.css" />
        <!-- Modernizr Js -->
        <script src="Public/client/js/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <div id="preloader"></div>
        <?php  
            if (isset($error['username'])) {?>
                <div class="alert alert-danger" style="top: 155px; position: absolute; z-index: 5; width: auto; right: 0px;" role="alert">
                    <?php echo $error['username']?>
                </div>
            <?php } else if (isset($error['password'])) {?>
                <div class="alert alert-danger" style="top: 155px; position: absolute; z-index: 5; width: auto; right: 0px;" role="alert">
                    <?=$error['password']?>
                </div>
            <?php } else if (isset($error['full_name'])) {?>
                <div class="alert alert-danger" style="top: 155px; position: absolute; z-index: 5; width: auto; right: 0px;" role="alert">
                    <?=$error['full_name']?>
                </div>
            <?php } else if (isset($error['username_exist'])) {?>
                <div class="alert alert-danger" style="top: 155px; position: absolute; z-index: 5; width: auto; right: 0px;" role="alert">
                    <?=$error['username_exist']?>
                </div>
            <?php }
        ?>
        <!-- Preloader End Here -->
        <div id="wrapper" class="wrapper">
            <!-- Header Area Start Here -->
            <header>
                <div id="header-layout1" class="header-style1">
                    <div class="main-menu-area bg-primarytextcolor header-menu-fixed" id="sticker">
                        <div class="container">
                            <div class="row no-gutters d-flex align-items-center">
                                <div class="col-lg-2 d-none d-lg-block">
                                    <div class="logo-area">
                                        <a href="index.html">
                                            <img src="Public/client/img/logo.png" alt="logo" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-6 position-static min-height-none">
                                    <div class="ne-main-menu">
                                        <nav id="dropdown">
                                            <ul>
                                                <li class="active">
                                                    <a href="#">Home</a>
                                                    <ul class="ne-dropdown-menu">
                                                        <li class="active">
                                                            <a href="index.html">Home 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="index2.html">Home 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="index3.html">Home 3</a>
                                                        </li>
                                                        <li>
                                                            <a href="index4.html">Home 4</a>
                                                        </li>
                                                        <li>
                                                            <a href="index5.html">Home 5</a>
                                                        </li>
                                                        <li>
                                                            <a href="index6.html">Home 6</a>
                                                        </li>
                                                        <li>
                                                            <a href="index7.html">Home 7</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Post</a>
                                                    <ul class="ne-dropdown-menu">
                                                        <li>
                                                            <a href="post-style-1.html">Post Style 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="post-style-2.html">Post Style 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="post-style-3.html">Post Style 3</a>
                                                        </li>
                                                        <li>
                                                            <a href="post-style-4.html">Post Style 4</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-news-1.html">News Details 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-news-2.html">News Details 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-news-3.html">News Details 3</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Pages</a>
                                                    <ul class="ne-dropdown-menu">
                                                        <li>
                                                            <a href="author-post.html">Author Post Page</a>
                                                        </li>
                                                        <li>
                                                            <a href="archive.html">Archive Page</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-style-1.html">Gallery Style 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-style-2.html">Gallery Style 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="404.html">404 Error Page</a>
                                                        </li>
                                                        <li>
                                                            <a href="contact.html">Contact Page</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="post-style-1.html">Politics</a>
                                                </li>
                                                <li>
                                                    <a href="post-style-2.html">Business</a>
                                                </li>
                                                <li>
                                                    <a href="post-style-3.html">Sports</a>
                                                </li>
                                                <li>
                                                    <a href="post-style-4.html">Fashion</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-12 text-right position-static">
                                    <div class="header-action-item">
                                        <ul>
                                            <li>
                                                <form id="top-search-form" class="header-search-light">
                                                    <input type="text" class="search-input" placeholder="Search...." required="" style="display: none;">
                                                    <button class="search-button">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </li>
                                            <?php
                                                if (!empty($_SESSION['user'])) {?>
                                                    <li>
                                                        <button type="button" class="login-btn">
                                                            <i class="fa fa-user" aria-hidden="true"></i>
                                                            <?=$_SESSION['user']['username']?>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="login-btn">
                                                            <i class="fa fa-user" aria-hidden="true"></i>
                                                            <a href="?controller=logout" style="color: #fff">
                                                                Logout
                                                            </a>
                                                        </button>
                                                    </li>
                                                <?php } else {?>
                                                    <li>
                                                        <button type="button" class="login-btn" data-toggle="modal" data-target="#signup">
                                                            <i class="fa fa-user" aria-hidden="true"></i>
                                                            Signup
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="login-btn" data-toggle="modal" data-target="#myModal">
                                                            <i class="fa fa-user" aria-hidden="true"></i>Login
                                                        </button>
                                                    </li>
                                                <?php }
                                            ?>
                                            <li>
                                                <div id="side-menu-trigger" class="offcanvas-menu-btn">
                                                    <a href="#" class="menu-bar">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </a>
                                                    <a href="#" class="menu-times close">
                                                        <span></span>
                                                        <span></span>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Header Area End Here -->
            <!-- News Feed Area Start Here -->
            <section class="bg-accent border-bottom add-top-margin">
                <div class="container">
                    <div class="row no-gutters d-flex align-items-center">
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="topic-box topic-box-margin">Top Stories</div>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-8 col-6">
                            <div class="feeding-text-dark">
                                <ol id="sample" class="ticker">
                                    <li>
                                        <a href="#">McDonell Kanye West highlights difficulties for celebritiesComplimentary decor and
                                            design advicewith Summit Park homes</a>
                                    </li>
                                    <li>
                                        <a href="#">Magnificent Image Of The New Hoover Dam Bridge Taking Shape</a>
                                    </li>
                                    <li>
                                        <a href="#">If Obama Had Governed Like This in 2017 He'd Be the Transformational.</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- News Feed Area End Here -->
            <!-- News Info List Area Start Here -->
            <section class="bg-body">
                <div class="container">
                    <ul class="news-info-list text-center--md">
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>Australia</li>
                        <li>                                
                            <i class="fa fa-calendar" aria-hidden="true"></i><span id="current_date"></span></li>
                        <li>
                            <i class="fa fa-clock-o" aria-hidden="true"></i>Last Update 11.30 am</li>
                        <li>
                            <i class="fa fa-cloud" aria-hidden="true"></i>29&#8451; Sydney, Australia</li>
                    </ul>
                </div>
            </section>
            <!-- Đăng nhập-->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="title-login-form">Đăng nhập</div>
                        </div>
                        <div class="modal-body">
                            <div class="login-form">
                                <form method="post">
                                    <label>Tên đăng nhập *</label>
                                    <input name="username" type="text" placeholder="Tên đăng nhập" />
                                    <label>Mật khẩu *</label>
                                    <input name="password" type="password" placeholder="Mật khẩu" />
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox" type="checkbox" checked>
                                        <label for="checkbox">Nhớ mật khẩu</label>
                                    </div>
                                    <button type="submit" name="login" value="Login">Đăng nhập</button>
                                    <button class="form-cancel" type="submit" value="">Hủy</button>
                                    <label class="lost-password">
                                        <a href="#">Quên mật khẩu?</a>
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Đăng nhâp End-->
            <!-- Đăng ký-->
            <div class="modal fade" id="signup" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="title-login-form">Đăng ký </div>
                        </div>
                        <div class="modal-body">
                            <div class="login-form">
                                <form method="post">
                                    <label>Tên đăng nhập *</label>
                                    <input type="text" name="username" placeholder="Tên đăng nhập" />
                                    <label>Mật khẩu *</label>
                                    <input type="password" name="password" placeholder="Mật khẩu" />
                                    <label>Họ và tên *</label>
                                    <input type="text" name="full_name" placeholder="Họ tên" />
                                    <button type="submit" value="Login" name="signup">Đăng ký</button>
                                    <button class="form-cancel" type="submit" value="">Hủy</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Đăng ký End-->