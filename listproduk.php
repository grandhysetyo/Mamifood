<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Metro | Shop 4 </title>
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
    <!-- Nouislider Style CSS -->
    <link rel="stylesheet" href="vendor/noUiSlider/nouislider.min.css">
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
                            <h1>Makanan</h1>
                            <ul>
                                <li><a href="#">Home</a> /</li>
                                <li><a href="#">Category</a> /</li>
                                <li>Makanan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Shop Page Area Start Here -->
        <div class="shop-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">
                                <div class="inner-shop-top-left">
                                    <div class="dropdown">
                                        <button class="btn sorting-btn dropdown-toggle" type="button" data-toggle="dropdown">Default Sorting<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Date</a></li>
                                            <li><a href="#">Best Sale</a></li>
                                            <li><a href="#">Rating</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                                <div class="inner-shop-top-right">
                                    <ul>
                                        <li class="active"><a href="#gried-view" data-toggle="tab" aria-expanded="false"><i class="fa fa-th-large"></i></a></li>
                                        <li><a href="#list-view" data-toggle="tab" aria-expanded="true"><i class="fa fa-list"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row inner-section-space-top">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active clear products-container" id="gried-view">
                                    <?php 
                                        $data=1; 
                                        while ($data<= 12) {
                                            $data++;
                                        
                                    ?>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                        <div class="product-box1">
                                            <ul class="product-social">
                                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <div class="product-img-holder">
                                                <a href="#"><img class="img-responsive" src="img/makanan/1.png" alt="product"></a>
                                            </div>
                                            <div class="product-content-holder">
                                                <h3><a href="#">Nasi Uduk Ikan Mujaer</a></h3>
                                                <span>Rp 15.000</span>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <?php } ?>
                                </div>
                                <!-- List Style -->
                                <div role="tabpanel" class="tab-pane clear products-container" id="list-view">
                                    <?php 
                                        $data=1; 
                                        while ($data<= 12) {
                                            $data++;
                                        
                                    ?>
                                    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-12">
                                        <div class="product-box2">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="img-responsive" src="img/makanan/1.png" alt="product" />
                                                </a>
                                                <div class="media-body">
                                                    <div class="product-box2-content">
                                                        <h3><a href="#">Nasi Uduk Ikan Mujaer</a></h3>
                                                        <span>Rp 15.000</span>
                                                        <p>Bag mply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and .</p>
                                                    </div>
                                                    <ul class="product-box2-cart">
                                                        <li><a href="#">Add To Cart</a></li>
                                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <ul class="mypagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="sidebar hidden-after-desk">
                            <h2 class="title-sidebar">SHOP CATEGORIES</h2>
                            <div class="category-menu-area sidebar-section-margin" id="category-menu-area-top">
                                <ul>
                                    <li><a href="shop1.html"><i class="flaticon-dress-1"></i>Women<span><i class="flaticon-next"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Women Sub Title 1</a></li>
                                            <li><a href="#">Women Sub Title 2</a></li>
                                            <li><a href="#">Women Sub Title 3</a></li>
                                            <li><a href="#">Women Sub Title 4</a></li>
                                            <li><a href="#">Women Sub Title 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop2.html"><i class="flaticon-polo"></i>Men<span><i class="flaticon-next"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Men Sub Title 1</a></li>
                                            <li><a href="#">Men Sub Title 2</a></li>
                                            <li><a href="#">Men Sub Title 3</a></li>
                                            <li><a href="#">Men Sub Title 4</a></li>
                                            <li><a href="#">Men Sub Title 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop3.html"><i class="flaticon-plug"></i>Electornics<span><i class="flaticon-next"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Electornics Sub Title 1</a></li>
                                            <li><a href="#">Electornics Sub Title 2</a></li>
                                            <li><a href="#">Electornics Sub Title 3</a></li>
                                            <li><a href="#">Electornics Sub Title 4</a></li>
                                            <li><a href="#">Electornics Sub Title 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop4.html"><i class="flaticon-necklace"></i>Jewellery<span><i class="flaticon-next"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Jewellery Sub Title 1</a></li>
                                            <li><a href="#">Jewellery Sub Title 2</a></li>
                                            <li><a href="#">Jewellery Sub Title 3</a></li>
                                            <li><a href="#">Jewellery Sub Title 4</a></li>
                                            <li><a href="#">Jewellery Sub Title 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop5.html"><i class="flaticon-screen"></i>Computer<span><i class="flaticon-next"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Computer Sub Title 1</a></li>
                                            <li><a href="#">Computer Sub Title 2</a></li>
                                            <li><a href="#">Computer Sub Title 3</a></li>
                                            <li><a href="#">Computer Sub Title 4</a></li>
                                            <li><a href="#">Computer Sub Title 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop6.html"><i class="flaticon-headphones"></i>Head Phone<span><i class="flaticon-next"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Head Phone Sub Title 1</a></li>
                                            <li><a href="#">Head Phone Sub Title 2</a></li>
                                            <li><a href="#">Head Phone Sub Title 3</a></li>
                                            <li><a href="#">Head Phone Sub Title 4</a></li>
                                            <li><a href="#">Head Phone Sub Title 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop1.html"><i class="flaticon-transport"></i>Toys<span><i class="flaticon-next"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Toys Sub Title 1</a></li>
                                            <li><a href="#">Toys Sub Title 2</a></li>
                                            <li><a href="#">Toys Sub Title 3</a></li>
                                            <li><a href="#">Toys Sub Title 4</a></li>
                                            <li><a href="#">Toys Sub Title 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop1.html"><i class="flaticon-fashion"></i>Shoes<span><i class="flaticon-next"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Shoes Sub Title 1</a></li>
                                            <li><a href="#">Shoes Sub Title 2</a></li>
                                            <li><a href="#">Shoes Sub Title 3</a></li>
                                            <li><a href="#">Shoes Sub Title 4</a></li>
                                            <li><a href="#">Shoes Sub Title 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop1.html"><i class="flaticon-dress"></i>Kid’s Wear<span><i class="flaticon-next"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Kid’s Wear Sub Title 1</a></li>
                                            <li><a href="#">Kid’s Wear Sub Title 2</a></li>
                                            <li><a href="#">Kid’s Wear Sub Title 3</a></li>
                                            <li><a href="#">Kid’s Wear Sub Title 4</a></li>
                                            <li><a href="#">Kid’s Wear Sub Title 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop1.html"><i class="flaticon-technology"></i>Mobile<span><i class="flaticon-next"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Mobile Sub Title 1</a></li>
                                            <li><a href="#">Mobile Sub Title 2</a></li>
                                            <li><a href="#">Mobile Sub Title 3</a></li>
                                            <li><a href="#">Mobile Sub Title 4</a></li>
                                            <li><a href="#">Mobile Sub Title 5</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <h2 class="title-sidebar">BEST PRODUCTS</h2>
                            <div class="best-products sidebar-section-margin">
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="Media Object" src="img/sidebar/1.jpg" class="img-responsive">
                                    </a>
                                    <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Product Title Here</a></h3>
                                        <p>$85</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="Media Object" src="img/sidebar/2.jpg" class="img-responsive">
                                    </a>
                                    <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Product Title Here</a></h3>
                                        <p>$85</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="Media Object" src="img/sidebar/3.jpg" class="img-responsive">
                                    </a>
                                    <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Product Title Here</a></h3>
                                        <p><span>$99</span>$85</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="Media Object" src="img/sidebar/4.jpg" class="img-responsive">
                                    </a>
                                    <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Product Title Here</a></h3>
                                        <p><span>$99</span>$85</p>
                                    </div>
                                </div>
                            </div>
                            <h2 class="title-sidebar">FILTER BY PRICE</h2>
                            <div id="price-range-wrapper" class="price-range-wrapper">
                                <div id="price-range-filter"></div>
                                <div class="price-range-select">
                                    <div class="price-range" id="price-range-min"></div>
                                    <div class="price-range" id="price-range-max"></div>
                                </div>
                                <button class="btn-services-shop-now" type="submit" value="Login">Filter</button>
                            </div>
                            <h2 class="title-sidebar">Product Tags</h2>
                            <div class="product-tags">
                                <ul>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Glamour</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="#">Dress</a></li>
                                    <li><a href="#">Kid’s</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Mobile</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Page Area End Here -->
        <!-- Footer Area Start Here -->
        <footer>
            <?php include 'footer.php'; ?>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Modal Dialog Box Start Here-->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-body">
                <button type="button" class="close myclose" data-dismiss="modal">&times;</button>
                <div class="product-details1-area">
                    <div class="product-details-info-area">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <div class="inner-product-details-left">
                                    <div class="tab-content">
                                        <div id="metro-related1" class="tab-pane fade active in">
                                            <a href="#"><img class="img-responsive" src="img/makanan/1.png" alt="single"></a>
                                        </div>
                                        <div id="metro-related2" class="tab-pane fade">
                                            <a href="#"><img class="img-responsive" src="img/makanan/2.png" alt="single"></a>
                                        </div>
                                        <div id="metro-related3" class="tab-pane fade">
                                            <a href="#"><img class="img-responsive" src="img/makanan/3.png" alt="single"></a>
                                        </div>
                                    </div>
                                    <ul>
                                        <li class="active">
                                            <a aria-expanded="false" data-toggle="tab" href="#metro-related1"><img class="img-responsive" src="img/makanan/1.png" alt="related1"></a>
                                        </li>
                                        <li>
                                            <a aria-expanded="false" data-toggle="tab" href="#metro-related2"><img class="img-responsive" src="img/makanan/2.png" alt="related2"></a>
                                        </li>
                                        <li>
                                            <a aria-expanded="false" data-toggle="tab" href="#metro-related3"><img class="img-responsive" src="img/makanan/3.png" alt="related3"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                <div class="inner-product-details-right">
                                    <h3>Nadi Uduk Ikan Tongkol</h3>
                                    <ul>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                    </ul>
                                    <p class="price">Rp 16.000</p>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tinc amet risus consectetur, non consectetur nisl finibus. Ut ac eros quis mi volutpat cursus vel non risus.</p>
                                    <div class="product-details-content">
                                        <p><span>SKU:</span> 0010</p>
                                        <p><span>Availability:</span> In stock</p>
                                        <p><span>Category:</span> Demo Products</p>
                                    </div>
                                    <ul class="product-details-social">
                                        <li>Share:</li>
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                    <ul class="inner-product-details-cart">
                                        <li><a href="#">Add To Cart</a></li>
                                        <li>
                                            <div class="input-group quantity-holder" id="quantity-holder">
                                                <input type="text" placeholder="1" value="1" class="form-control quantity-input" name="quantity">
                                                <div class="input-group-btn-vertical">
                                                    <button type="button" class="btn btn-default quantity-plus"><i aria-hidden="true" class="fa fa-plus"></i></button>
                                                    <button type="button" class="btn btn-default quantity-minus"><i aria-hidden="true" class="fa fa-minus"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Dialog Box End Here-->
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
    <!-- Actual Js -->
    <script src="js/jquery.actual.min.js" type="text/javascript"></script>
    <!-- Nouislider Js -->
    <script src="vendor/noUiSlider/nouislider.min.js" type="text/javascript"></script>
    <!-- wNumb Js -->
    <script src="js/wNumb.js" type="text/javascript"></script>
    <!-- Custom Js -->
    <script src="js/main.js" type="text/javascript"></script>
</body>

</html>
