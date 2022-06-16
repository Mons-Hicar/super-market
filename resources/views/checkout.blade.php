@extends('layouts.main')
@section('main-container')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Checkout Page</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- checkout -->
    <div class="checkout">
        <div class="container">
            <h2>Your shopping cart contains: <span>3 Products</span></h2>
            <div class="checkout-right">
                <table class="timetable_sub">
                    <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Product</th>
                            <th>Quality</th>
                            <th>Product Name</th>

                            <th>Price</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tr class="rem1">
                        <td class="invert">1</td>
                        <td class="invert-image"><a href="single.html"><img src="images/1.png" alt=" "
                                    class="img-responsive" /></a></td>
                        <td class="invert">
                            <div class="quantity">
                                <div class="quantity-select">
                                    <div class="entry value-minus">&nbsp;</div>
                                    <div class="entry value"><span>1</span></div>
                                    <div class="entry value-plus active">&nbsp;</div>
                                </div>
                            </div>
                        </td>
                        <td class="invert">Tata Salt</td>

                        <td class="invert">$290.00</td>
                        <td class="invert">
                            <div class="rem">
                                <div class="close1"> </div>
                            </div>
                            <script>
                                $(document).ready(function(c) {
                                    $('.close1').on('click', function(c) {
                                        $('.rem1').fadeOut('slow', function(c) {
                                            $('.rem1').remove();
                                        });
                                    });
                                });
                            </script>
                        </td>
                    </tr>
                    <tr class="rem2">
                        <td class="invert">2</td>
                        <td class="invert-image"><a href="single.html"><img src="images/2.png" alt=" "
                                    class="img-responsive" /></a></td>
                        <td class="invert">
                            <div class="quantity">
                                <div class="quantity-select">
                                    <div class="entry value-minus">&nbsp;</div>
                                    <div class="entry value"><span>1</span></div>
                                    <div class="entry value-plus active">&nbsp;</div>
                                </div>
                            </div>
                        </td>
                        <td class="invert">Fortune oil</td>

                        <td class="invert">$250.00</td>
                        <td class="invert">
                            <div class="rem">
                                <div class="close2"> </div>
                            </div>
                            <script>
                                $(document).ready(function(c) {
                                    $('.close2').on('click', function(c) {
                                        $('.rem2').fadeOut('slow', function(c) {
                                            $('.rem2').remove();
                                        });
                                    });
                                });
                            </script>
                        </td>
                    </tr>
                    <tr class="rem3">
                        <td class="invert">3</td>
                        <td class="invert-image"><a href="single.html"><img src="images/3.png" alt=" "
                                    class="img-responsive" /></a></td>
                        <td class="invert">
                            <div class="quantity">
                                <div class="quantity-select">
                                    <div class="entry value-minus">&nbsp;</div>
                                    <div class="entry value"><span>1</span></div>
                                    <div class="entry value-plus active">&nbsp;</div>
                                </div>
                            </div>
                        </td>
                        <td class="invert">Aashirvaad atta</td>

                        <td class="invert">$15.00</td>
                        <td class="invert">
                            <div class="rem">
                                <div class="close3"> </div>
                            </div>
                            <script>
                                $(document).ready(function(c) {
                                    $('.close3').on('click', function(c) {
                                        $('.rem3').fadeOut('slow', function(c) {
                                            $('.rem3').remove();
                                        });
                                    });
                                });
                            </script>
                        </td>
                    </tr>
                    <!--quantity-->
                    <script>
                        $('.value-plus').on('click', function() {
                            var divUpd = $(this).parent().find('.value'),
                                newVal = parseInt(divUpd.text(), 10) + 1;
                            divUpd.text(newVal);
                        });

                        $('.value-minus').on('click', function() {
                            var divUpd = $(this).parent().find('.value'),
                                newVal = parseInt(divUpd.text(), 10) - 1;
                            if (newVal >= 1) divUpd.text(newVal);
                        });
                    </script>
                    <!--quantity-->
                </table>
            </div>
            <div class="checkout-left">
                <div class="checkout-left-basket">
                    <h4>Continue to basket</h4>
                    <ul>
                        <li>Product1 <i>-</i> <span>$15.00 </span></li>
                        <li>Product2 <i>-</i> <span>$25.00 </span></li>
                        <li>Product3 <i>-</i> <span>$29.00 </span></li>
                        <li>Total Service Charges <i>-</i> <span>$15.00</span></li>
                        <li>Total <i>-</i> <span>$84.00</span></li>
                    </ul>
                </div>
                <div class="checkout-right-basket">
                    <a href="single.html"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue
                        Shopping</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //checkout -->
    <!-- //footer -->
    <div class="footer">
        <div class="container">
            <div class="w3_footer_grids">
                <div class="col-md-3 w3_footer_grid">
                    <h3>Contact</h3>

                    <ul class="address">
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block,
                            <span>New York City.</span>
                        </li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a
                                href="mailto:info@example.com">info@example.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Information</h3>
                    <ul class="info">
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.html">About Us</a></li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="contact.html">Contact Us</a></li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="short-codes.html">Short Codes</a>
                        </li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="faq.html">FAQ's</a></li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.html">Special
                                Products</a></li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Category</h3>
                    <ul class="info">
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="groceries.html">Groceries</a></li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="household.html">Household</a></li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="personalcare.html">Personal
                                Care</a></li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="packagedfoods.html">Packaged
                                Foods</a></li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="beverages.html">Beverages</a></li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Profile</h3>
                    <ul class="info">
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.html">Store</a></li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="checkout.html">My Cart</a></li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.html">Login</a></li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registered.html">Create
                                Account</a></li>
                    </ul>


                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <div class="footer-copy">

            <div class="container">
                <p>© 2017 Super Market. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
            </div>
        </div>

    </div>
    <div class="footer-botm">
        <div class="container">
            <div class="w3layouts-foot">
                <ul>
                    <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="payment-w3ls">
                <img src="images/card.png" alt=" " class="img-responsive">
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection
