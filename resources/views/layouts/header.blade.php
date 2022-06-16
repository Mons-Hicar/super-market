<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>Super Market an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home ::
        w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="{{ URL::asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="{{ URL::asset('assets/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="{{ URL::asset('assets/js/jquery-1.11.1.min.js') }}"></script>
    <!-- //js -->
    <link
        href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <link
        href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{ URL::asset('assets/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>
    <!-- header -->
    <div class="agileits_header">
        <div class="container">
            <div class="w3l_offers">
                <p>SALE UP TO 70% OFF. USE CODE "SALE70%" . <a href="{{ url('/products') }}">SHOP NOW</a></p>
            </div>
            <div class="agile-login">
                <ul>
                    <li><a href="{{ url('/registered') }}"> Create Account </a></li>
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/contact') }}">Help</a></li>

                </ul>
            </div>
            <div class="product_list_header">
                <form action="#" method="post" class="last">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="display" value="1">
                    <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down"
                            aria-hidden="true"></i></button>
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="logo_products">
        <div class="container">
            <div class="w3ls_logo_products_left1">
                <ul class="phone_email">
                    <li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+0123) 234 567</li>

                </ul>
            </div>
            <div class="w3ls_logo_products_left">
                <h1><a href="{{ url('/') }}">CHOR BAZAR</a></h1>
            </div>
            <div class="w3l_search">
                <form action="#" method="post">
                    <input type="search" name="Search" placeholder="Search for a Product..." required="">
                    <button type="submit" class="btn btn-default search" aria-label="Left Align">
                        <i class="fa fa-search" aria-hidden="true"> </i>
                    </button>
                    <div class="clearfix"></div>
                </form>
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //header -->
    <!-- navigation -->
    <div class="navigation-agileits">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                        data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ url('/') }}" class="act">Home</a></li>
                        <!-- Mega Menu -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Groceries<b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">
                                    <div class="multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <h6>All Groceries</h6>
                                            <li><a href="{{ url('/groceries') }}">Dals & Pulses</a></li>
                                            <li><a href="{{ url('/groceries') }}">Rice & Rice Products</a></li>
                                            <li><a href="{{ url('/groceries') }}">Cashews</a></li>
                                            <li><a href="{{ url('/groceries') }}">Dry Fruit</a></li>
                                            <li><a href="{{ url('/groceries') }}"> Mukhwas </a></li>
                                            <li><a href="{{ url('/groceries') }}">Almonds</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Household<b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">
                                    <div class="multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <h6>All Household</h6>
                                            <li><a href="{{ url('/household') }}">Cookware</a></li>
                                            <li><a href="{{ url('/household') }}">Dust Pans</a></li>
                                            <li><a href="{{ url('/household') }}">Scrubbers</a></li>
                                            <li><a href="{{ url('/household') }}">Dust Cloth</a></li>
                                            <li><a href="{{ url('/household') }}"> Mops </a></li>
                                            <li><a href="{{ url('/household') }}">Kitchenware</a></li>
                                        </ul>
                                    </div>


                                </div>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Personal Care<b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">
                                    <div class="multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <h6>Baby Care</h6>
                                            <li><a href="{{ url('/personalcare') }}">Baby Soap</a></li>
                                            <li><a href="{{ url('/personalcare') }}">Baby Care Accessories</a></li>
                                            <li><a href="{{ url('/personalcare') }}">Baby Oil & Shampoos</a></li>
                                            <li><a href="{{ url('/personalcare') }}">Baby Creams & Lotion</a></li>
                                            <li><a href="{{ url('/personalcare') }}"> Baby Powder</a></li>
                                            <li><a href="{{ url('/personalcare') }}">Diapers & Wipes</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Packaged Foods<b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">
                                    <div class="multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <h6>All Accessories</h6>
                                            <li><a href="{{ url('/packagedfoods') }}">Baby Food</a></li>
                                            <li><a href="{{ url('/packagedfoods') }}">Dessert Items</a></li>
                                            <li><a href="{{ url('/packagedfoods') }}">Biscuits</a></li>
                                            <li><a href="{{ url('/packagedfoods') }}">Breakfast Cereals</a></li>
                                            <li><a href="{{ url('/packagedfoods') }}"> Canned Food </a></li>
                                            <li><a href="{{ url('/packagedfoods') }}">Chocolates & Sweets</a></li>
                                        </ul>
                                    </div>


                                </div>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">
                                    <div class="multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <h6>Tea & Coeffe</h6>
                                            <li><a href="{{ url('/beverages') }}">Green Tea</a></li>
                                            <li><a href="{{ url('/beverages') }}">Ground Coffee</a></li>
                                            <li><a href="{{ url('/beverages') }}">Herbal Tea</a></li>
                                            <li><a href="{{ url('/beverages') }}">Instant Coffee</a></li>
                                            <li><a href="{{ url('/beverages') }}"> Tea </a></li>
                                            <li><a href="{{ url('/beverages') }}">Tea Bags</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </ul>
                        </li>
                        <li><a href="{{ url('/gourmet') }}">Gourmet</a></li>
                        <li><a href="{{ url('/offers') }}">Offers</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!-- //navigation -->
