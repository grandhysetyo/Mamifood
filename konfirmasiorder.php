<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Metro | Checkout </title>
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
                            <h1>Konfirmasi Order</h1>
                            <ul>
                                <li><a href="#">Home</a> /</li>
                                <li>Konfirmasi Order</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Checkout Page Area Start Here -->
        <div class="checkout-page-area">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="checkout-page-top">
                            <p><i class="fa fa-check" aria-hidden="true"></i><a href="#"> Returning customer? Click here to login</a></p>
                        </div>
                    </div>                    
                </div> -->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="billing-details-area">
                            <h2 class="cart-area-title">Kirim dengan alamat berbeda? <span><input type="checkbox" name="remember"/></span></h2>
                            <form id="checkout-form">
                                <div class="row">
                                    <!-- Country -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label" for="country">Country</label>
                                            <div class="custom-select">
                                                <select id="country" class='select2'>
                                                    <option value="0">Select your country</option>
                                                    <option value="1">Bangladesh</option>
                                                    <option value="2">Spain</option>
                                                    <option value="3">Belgium</option>
                                                    <option value="3">Ecuador</option>
                                                    <option value="3">Ghana</option>
                                                    <option value="3">South Africa</option>
                                                    <option value="3">India</option>
                                                    <option value="3">Pakistan</option>
                                                    <option value="3">Thailand</option>
                                                    <option value="3">Malaysia</option>
                                                    <option value="3">Italy</option>
                                                    <option value="3">Japan</option>
                                                    <option value="4">Germany</option>
                                                    <option value="5">USA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Address -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label">Address</label>
                                            <input type="text" id="address-line1" class="form-control">
                                            <input type="text" id="address-line2" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Town / City -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label" for="town-city">Town / City</label>
                                            <input type="text" id="town-city" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- District -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label" for="district">District *</label>
                                            <div class="custom-select">
                                                <select id="district" class='select2'>
                                                    <option value="0">Select Your District</option>
                                                    <option value="1">Dhaka</option>
                                                    <option value="2">Rajshahi</option>
                                                    <option value="4">Chittagong</option>
                                                    <option value="5">GAZIPUR</option>
                                                    <option value="6">GOPALGANJ</option>
                                                    <option value="7">JAMALPUR</option>
                                                    <option value="8">KISHOREGONJ</option>
                                                    <option value="9">MADARIPUR</option>
                                                    <option value="10">MANIKGANJ</option>
                                                    <option value="11">MUNSHIGANJ</option>
                                                    <option value="12">MYMENSINGH</option>
                                                    <option value="13">NARAYANGANJ</option>
                                                    <option value="14">NARSINGDI</option>
                                                    <option value="15">NETRAKONA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Postcode / ZIP -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label" for="postcode">Postcode / ZIP</label>
                                            <input type="text" id="postcode" class="form-control">
                                        </div>
                                    </div>
                                </div>                                
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="ship-to-another-area">
                            <h2 class="cart-area-title">Catatan</h2>
                            <label class="control-label">Order Notes</label>
                            <textarea class="form-control" style="min-width: 100%">Sambalnya ditambahin yang banyak ya teh</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="payment-option">
                            <div class="form-group">
                                <span><input type="checkbox" name="remember"/>Top-up</span>
                                <p>Pembayaran ini menggunakan saldo online yang ada pada account anda</p>
                            </div>                           
                            <div class="form-group">
                                <span><input type="checkbox" name="remember"/>CASH</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="order-sheet">
                            <h2>Total Pembayaran</h2>
                            <ul>
                                <li>01. Nasi Uduk Ikan Tongkol<span>Rp 12.000</span></li>
                                <li>02. Nasi Uduk Ikan Tongkol Pedes<span>Rp 13.000</span></li>
                            </ul>
                            <h3>Subtotal<span>Rp 25.000</span></h3>
                            <h3>Saldo(Top-up)<span>- Rp 10.000</span></h3>
                            <h3>Total<span>Rp 15.000</span></h3>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="pLace-order">
                            <button class="btn-send-message disabled" type="submit" value="Login">Konfirmasi</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Checkout Page Area End Here -->
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
    <!-- Select2 Js -->
    <script src="js/select2.min.js" type="text/javascript"></script>
    <!-- Custom Js -->
    <script src="js/main.js" type="text/javascript"></script>
</body>

</html>
