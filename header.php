<div class="header-area-style3" id="sticker">
                <div class="header-top">
                    <div class="header-top-inner-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="header-contact">
                                        <ul>
                                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="+1234567890"> + (021) 456 7890</a></li>
                                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> info@mamifood.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="account-wishlist">
                                        <ul>
                                            <li>
                                                <?php 
                                                    session_start();
                                                 ?>
                                                <a href="login-registration.php"><i class="fa fa-lock" aria-hidden="true"></i> 
                                                    <?php if (isset($_SESSION['username'])) {
                                                       echo $_SESSION['username'];} else {echo "Account";} ?>
                                                </a>
                                            </li>
                                            <li><a href="wishlist.html"><i class="fa fa-heart-o" aria-hidden="true"></i> Wishlist</a></li>
                                            <?php 
                                                if (isset($_SESSION['username'])) {
                                             ?>
                                            <li><a href="logout.php"><i class="" aria-hidden="true"></i> Logout</a></li>
                                            <?php 
                                                }
                                             ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-top-inner-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="logo-area">
                                        <!-- <a href="index.html"><img class="img-responsive" src="img/logo.png" alt="logo"></a> -->
                                        <b>Mami's Food</b>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                    <div class="search-area">
                                        <div class="input-group" id="adv-search">
                                            <input type="text" class="form-control" placeholder="Search Product" />
                                            <div class="input-group-btn">
                                                <div class="btn-group" role="group">
                                                    <div class="dropdown dropdown-lg">
                                                        <button type="button" class="btn btn-metro dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span>All Categories</span><i class="fa fa-caret-up" aria-hidden="true"></i><i class="fa fa-caret-down" aria-hidden="true"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                            <ul class="sidenav-nav">
                                                                <li><a href="#"><i class=""></i>Aneka Makanan</a></li>
                                                                <li><a href="#"><i class=""></i>Aneka Kue</a></li>
                                                                <li><a href="#"><i class=""></i>Aneka Minuman</a></li>
                                                                <li><a href="#"><i class=""></i>Coming Soon</a></li>
                                                                <li><a href="#"><i class=""></i>Coming Soon</a></li>
                                                                <li><a href="#"><i class=""></i>Coming Soon</a></li>
                                                                <li><a href="#"><i class=""></i>Coming Soon</a></li>
                                                                <li><a href="#"><i class=""></i>Coming Soon</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-metro-search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <ul class="header-cart-area">
                                        <li>
                                            <div class="cart-area">
                                                <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>2</span></a>
                                                <ul>
                                                    <li>
                                                        <div class="cart-single-product">
                                                            <div class="media">
                                                                <div class="pull-left cart-product-img">
                                                                    <a href="#">
                                                                        <img class="img-responsive" alt="product" src="img/best-seller/4.jpg">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body cart-content">
                                                                    <ul>
                                                                        <li>
                                                                            <h2><a href="#">Product Title Here</a></h2>
                                                                            <h3><span>Code:</span> STPT600</h3>
                                                                        </li>
                                                                        <li>
                                                                            <p>X 1</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>$49</p>
                                                                        </li>
                                                                        <li>
                                                                            <a class="trash" href="#"><i class="fa fa-trash-o"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="cart-single-product">
                                                            <div class="media">
                                                                <div class="pull-left cart-product-img">
                                                                    <a href="#">
                                                                        <img class="img-responsive" alt="product" src="img/best-seller/5.jpg">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body cart-content">
                                                                    <ul>
                                                                        <li>
                                                                            <h2><a href="#">Product Title Here</a></h2>
                                                                            <h3><span>Code:</span> STPT460</h3>
                                                                        </li>
                                                                        <li>
                                                                            <p>X 1</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>$75</p>
                                                                        </li>
                                                                        <li>
                                                                            <a class="trash" href="#"><i class="fa fa-trash-o"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span><span>Sub Total</span></span><span>$124</span>
                                                        <span><span>Discount</span></span><span>$30</span>
                                                        <span><span>Vat(20%)</span></span><span>$18.8</span>
                                                        <span><span>Sub Total</span></span><span>$112.8</span>
                                                    </li>
                                                    <li>
                                                        <ul class="checkout">
                                                            <li><a href="cart.html" class="btn-checkout"><i class="fa fa-shopping-cart" aria-hidden="true"></i>View Cart</a></li>
                                                            <li><a href="check-out.html" class="btn-checkout"><i class="fa fa-share" aria-hidden="true"></i>Checkout</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-4">
                                <div class="logo-area">
                                    <!-- <a href="index.html"><img class="img-responsive" src="img/logo.png" alt="logo"></a> -->
                                    <b>Mami's Food</b>
                                </div>
                                <div class="category-menu-area" id="category-menu-area">
                                    <h2 class="category-menu-title"><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>Categories</h2>
                                    <ul class="category-menu-area-inner">
                                        <li><a href="shop1.html"><i class=""></i>Aneka Makanan<span><i class="flaticon-next"></i></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Coming Soon</a></li>
                                                <li><a href="#">Coming Soon</a></li>
                                                <li><a href="#">Coming Soon</a></li>
                                                <li><a href="#">Coming Soon</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop2.html"><i class=""></i>Aneka Kue<span><i class="flaticon-next"></i></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Coming Soon</a></li>
                                                <li><a href="#">Coming Soon</a></li>
                                                <li><a href="#">Coming Soon</a></li>
                                                <li><a href="#">Coming Soon</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop3.html"><i class=""></i>Coming Soon<span><i class="flaticon-next"></i></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Coming Soon</a></li>
                                                <li><a href="#">Coming Soon</a></li>
                                                <li><a href="#">Coming Soon</a></li>
                                                <li><a href="#">Coming Soon</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop4.html"><i class=""></i>Coming Soon<span><i class="flaticon-next"></i></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Coming Soon</a></li>
                                                <li><a href="#">Coming Soon</a></li>
                                                <li><a href="#">Coming Soon</a></li>
                                                <li><a href="#">Coming Soon</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-8">
                                <div class="main-menu-area">
                                    <nav>
                                        <ul>
                                            <li class="active"><a href="#">Home</a></li>
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">How To Order</a></li>
                                            <li><a href="contact.html">FAQ</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu Area Start Here -->
                    
                    <!-- Mobile Menu Area End Here -->
                </div>
            </div>