<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Mami's Food| Login Registration </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png"> -->
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Flaticon CSS-->
    <link rel="stylesheet" type="text/css" href="css/font/flaticon.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Main Menu CSS-->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernizr Js -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="wrapper-area">
        <header>
            <?php include 'header.php'; ?>
        </header>
        <!-- Header Area End Here -->
        <!-- Inner Page Banner Area Start Here -->
        <div class="inner-page-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb-area">
                            <h1>My Account</h1>
                            <ul>
                                <li><a href="#">Home</a> /</li>
                                <li>Account</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Login Registration Page Area Start Here -->
        <div class="login-registration-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="login-registration-field">
                            <h2 class="cart-area-title">Login</h2>
                            <form action="Controller.php" method="POST">
                                <label>Username *</label>
                                <input type="text" placeholder="Username" name="username" />
                                <label>Password *</label>
                                <input type="password" placeholder="Password" name="password" />
                                <label class="check">Lupa password?</label>
                                <button class="btn-send-message disabled" type="submit" name="login">Login</button>
                                <span><input type="checkbox" name="remember"/>Ingat Saya</span>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="login-registration-field">
                            <h2 class="cart-area-title">Register</h2>
                            <form action="Controller.php" method="POST">
                                <label>User Name *</label>
                                <input type="text" placeholder="Name" name="username" />
                                <label>No Hp. *</label>
                                <input type="text" placeholder="No Hp." name="nohp" />
                                <label>Password *</label>
                                <input type="password" name="password" placeholder="Password" />
                                <button class="btn-send-message disabled" type="submit" name="Register">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Registration Page Area End Here -->
        <!-- Footer Area Start Here -->
        <footer>
            <?php include 'footer.php'; ?>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- jquery-->
    <script src="js/vendor/jquery-2.2.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Owl Cauosel JS -->
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <!-- Meanmenu Js -->
    <script src="js/jquery.meanmenu.min.js" type="text/javascript"></script>
    <!-- WOW JS -->
    <script src="js/wow.min.js" type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js" type="text/javascript"></script>
    <!-- Countdown js -->
    <script src="js/jquery.countdown.min.js" type="text/javascript"></script>
    <!-- Srollup js -->
    <script src="js/jquery.scrollUp.min.js" type="text/javascript"></script>
    <!-- Custom Js -->
    <script src="js/main.js" type="text/javascript"></script>
</body>

</html>
