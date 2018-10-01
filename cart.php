<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Metro | Cart </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
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
        <!-- Header Area Start Here -->
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
                            <h1>Keranjang Belanja</h1>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Cart Page Area Start Here -->
        <div class="cart-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cart-page-top table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <td class="cart-form-heading"></td>
                                        <td class="cart-form-heading">Product</td>
                                        <td class="cart-form-heading">Price</td>
                                        <td class="cart-form-heading">Quantity</td>
                                        <td class="cart-form-heading">Total</td>
                                        <td class="cart-form-heading"></td>
                                    </tr>
                                </thead>
                                <tbody id="quantity-holder">
                                    <tr>
                                        <td class="cart-img-holder">
                                            <a href="#"><img src="img/makanan/1.png" alt="cart" class="img-responsive"></a>
                                        </td>
                                        <td>
                                            <h3><a href="#">Nasi Uduk Ikan Tongkol</a></h3>
                                        </td>
                                        <td class="amount">Rp 12.000</td>
                                        <td class="quantity">
                                            <div class="input-group quantity-holder">
                                                <input type="text" name='quantity' class="form-control quantity-input" value="1" placeholder="1">
                                                <div class="input-group-btn-vertical">
                                                    <button class="btn btn-default quantity-plus" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                    <button class="btn btn-default quantity-minus" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="amount">Rp 12.000</td>
                                        <td class="dismiss"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="cart-img-holder">
                                            <a href="#"><img src="img/makanan/1.png" alt="cart" class="img-responsive"></a>
                                        </td>
                                        <td>
                                            <h3><a href="#">Nasi Uduk Ikan Tongkol Pedes</a></h3>
                                        </td>
                                        <td class="amount">Rp 13.000</td>
                                        <td class="quantity">
                                            <div class="input-group quantity-holder">
                                                <input type="text" name='quantity' class="form-control quantity-input" value="1" placeholder="1">
                                                <div class="input-group-btn-vertical">
                                                    <button class="btn btn-default quantity-plus" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                    <button class="btn btn-default quantity-minus" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="amount">Rp 13.000</td>
                                        <td class="dismiss"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="update-button">
                                <button class="btn-apply-coupon disabled" type="submit" value="Login">Update Keranjang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="cart-page-bottom-left">
                            <h2>Coupon</h2>
                            <form method="post">
                                <input type="text" id="coupon" name="coupon" placeholder="Enter your coupon code if you have one">
                                <button value="Coupon" type="submit" class="btn-apply-coupon disabled">Apply Coupon</button>
                            </form>
                        </div>
                    </div> -->
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="cart-page-bottom-right">
                            <h2>Total</h2>
                            <h3>Subtotal<span>Rp 25.000</span></h3>
                            <h3>Total<span>Rp 25.000</span></h3>
                            <div class="proceed-button">
                                <button class="btn-apply-coupon disabled" type="submit" value="Login">Konfirmasi Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Page Area End Here -->
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
