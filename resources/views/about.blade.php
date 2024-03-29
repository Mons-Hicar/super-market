@extends('layouts.main')
@section('main-container')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">About</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- about -->
    <div class="about">
        <div class="container">
            <h3 class="w3_agile_header">About Us</h3>
            <div class="about-agileinfo w3layouts">
                <div class="col-md-8 about-wthree-grids grid-top">
                    <h4>Blanditiis praesentium deleniti atque corrupti quos </h4>
                    <p class="top">Gnissimos voluptatum deleniti atque corrupti quos dolores et quas molestias
                        excepturi. atque corrupti quos dolores et quas molestias excepturi sint occaecat officia deserunt
                        mollitia laborum et dolorum fuga</p>
                    <p>Dignissimos at vero eos et accusamus et iusto odio ducimus qui blanditiis praesentium voluptatum
                        deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecat officia deserunt
                        mollitia laborum et dolorum fuga. At vero eos et accusamus et iusto odio dignissimos ducimus qui
                        blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                        sint occaecat atque corrupti quos dolores et quas molestias excepturi sint occaecat officia deserunt
                        mollitia laborum et dolorum </p>
                    <div class="about-w3agilerow">
                        <div class="col-md-4 about-w3imgs">
                            <img src="images/p3.jpg" alt="" class="img-responsive zoom-img" />
                        </div>
                        <div class="col-md-4 about-w3imgs">
                            <img src="images/p4.jpg" alt="" class="img-responsive zoom-img" />
                        </div>
                        <div class="col-md-4 about-w3imgs">
                            <img src="images/p3.jpg" alt="" class="img-responsive zoom-img" />
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-4 about-wthree-grids">
                    <div class="offic-time">
                        <div class="time-top">
                            <h4>Praesentium :</h4>
                        </div>
                        <div class="time-bottom">
                            <h5>At vero eos </h5>
                            <h5>Accusamus et</h5>
                            <p>Dignissimos at vero eos et accusamus et iusto odio ducimus qui accusamus et. </p>
                        </div>
                    </div>
                    <div class="testi">
                        <h3 class="w3_agile_header">Testimonial</h3>
                        <!--//End-slider-script -->
                        <script src="js/responsiveslides.min.js"></script>
                        <script>
                            // You can also use "$(window).load(function() {"
                            $(function() {
                                // Slideshow 5
                                $("#slider5").responsiveSlides({
                                    auto: true,
                                    pager: false,
                                    nav: true,
                                    speed: 500,
                                    namespace: "callbacks",
                                    before: function() {
                                        $('.events').append("<li>before event fired.</li>");
                                    },
                                    after: function() {
                                        $('.events').append("<li>after event fired.</li>");
                                    }
                                });

                            });
                        </script>
                        <div id="top" class="callbacks_container">
                            <ul class="rslides" id="slider5">
                                <li>
                                    <div class="testi-slider">
                                        <h4>" I AM VERY PLEASED.</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu magna
                                            dolor, quisque semper.</p>
                                        <div class="testi-subscript">
                                            <p><a href="#">John Doe,</a>Adipiscing</p>
                                            <span class="w3-agilesub"> </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testi-slider">
                                        <h4>" I AM LOREM IPSUM.</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu magna
                                            dolor, quisque semper.</p>
                                        <div class="testi-subscript">
                                            <p><a href="#">elit semper,</a>Dolor Elit</p>
                                            <span class="w3-agilesub"> </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testi-slider">
                                        <h4>" CONSECTETUR PIMAGNA.</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu magna
                                            dolor, quisque semper.</p>
                                        <div class="testi-subscript">
                                            <p><a href="#">Amet Doe,</a>Suspendisse</p>
                                            <span class="w3-agilesub"> </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about -->
    <!-- about-slid -->
    <div class="about-slid agileits-w3layouts">
        <div class="container">
            <div class="about-slid-info">
                <h2>Lorem Ipsum is that it has a moreless normal</h2>
                <p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks on the Internet tend as
                    necessary, making this the first true generator on the Internet embarrassing hidden in the middle of
                    text Lorem Ipsum generators on the Internet tend to repeat predefinedchunks as necessary, making this
                    the first true generator on the.</p>
            </div>
        </div>
    </div>
    <!-- //about-slid -->
    <!-- about-team -->
    <div class="about-team">
        <div class="container">
            <h3 class="w3_agile_header">Meet Our Team</h3>
            <div class="team-agileitsinfo">
                <div class="col-md-3 about-team-grids">
                    <img src="images/t4.jpg" alt="" />
                    <div class="team-w3lstext">
                        <h4><span>ANDERSON,</span> Manager</h4>
                        <p>Odio dignissimos vero eos voluptatem accusantium doloremque laudantium reader will be distracted.
                        </p>
                    </div>
                    <div class="social-icons caption">
                        <ul>
                            <li><a href="#" class="fa fa-facebook facebook"> </a></li>
                            <li><a href="#" class="fa fa-twitter twitter"> </a></li>
                            <li><a href="#" class="fa fa-google-plus googleplus"> </a></li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class=" col-md-3 about-team-grids">
                    <img src="images/t2.jpg" alt="" />
                    <div class="team-w3lstext">
                        <h4><span>ELIFS,</span> Director</h4>
                        <p>Odio dignissimos vero eos voluptatem accusantium doloremque laudantium reader will be distracted.
                        </p>
                    </div>
                    <div class="social-icons caption">
                        <ul>
                            <li><a href="#" class="fa fa-facebook facebook"> </a></li>
                            <li><a href="#" class="fa fa-twitter twitter"> </a></li>
                            <li><a href="#" class="fa fa-google-plus googleplus"> </a></li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 about-team-grids">
                    <img src="images/t1.jpg" alt="" />
                    <div class="team-w3lstext">
                        <h4><span>JESSICA,</span> Supervisior</h4>
                        <p>Odio dignissimos vero eos voluptatem accusantium doloremque laudantium reader will be distracted.
                        </p>
                    </div>
                    <div class="social-icons caption">
                        <ul>
                            <li><a href="#" class="fa fa-facebook facebook"> </a></li>
                            <li><a href="#" class="fa fa-twitter twitter"> </a></li>
                            <li><a href="#" class="fa fa-google-plus googleplus"> </a></li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 about-team-grids">
                    <img src="images/t3.jpg" alt="" />
                    <div class="team-w3lstext">
                        <h4><span>RACKHAM,</span> Staff</h4>
                        <p>Odio dignissimos vero eos voluptatem accusantium doloremque laudantium reader will be distracted.
                        </p>
                    </div>
                    <div class="social-icons caption">
                        <ul>
                            <li><a href="#" class="fa fa-facebook facebook"> </a></li>
                            <li><a href="#" class="fa fa-twitter twitter"> </a></li>
                            <li><a href="#" class="fa fa-google-plus googleplus"> </a></li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about-team -->

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
