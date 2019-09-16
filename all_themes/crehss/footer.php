<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package crehss
 */

?>

<!-- Main footer -->
<footer class="main-footer">
    <div class="container">

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">
                <!--Big Column-->
                <div class="big-column col-lg-4">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-md-12">
                            <div class="footer-widget about-widget">
                                <div class="footer-logo">
                                    <figure>
                                        <a href="index.html"><img src="images/logosticky.png" alt=""></a>
                                    </figure>
                                </div>
                                <div class="widget-content">
                                    <div class="text text-justify">CREHSS is an independent research organization aiming
                                        to serve in educational, health and social science sectors.
                                    </div>
                                    <ul class="social-icon-three">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-lg-8">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-md-7">
                            <div class="footer-widget posts-widget">
                                <h2 class="widget-title">Recent Posts</h2>
                                <div class="widget-content">
                                    <div class="posts">
                                        <div class="post">
                                            <figure class="post-thumb">
                                                <img src="images/resource/post-thumb-1.jpg" alt="">
                                                <a href="blog-single.html" class="overlay-link">
                                                    <span class="fa fa-link"></span>
                                                </a>
                                            </figure>
                                            <div class="desc-text">
                                                <a href="blog-single.html"> Lorem Ipsum is simply dummy text.</a>
                                            </div>
                                            <div class="time">Aug 2 , 2019</div>
                                        </div>

                                        <div class="post">
                                            <figure class="post-thumb">
                                                <img src="images/resource/post-thumb-2.jpg" alt="">
                                                <a href="blog-single.html" class="overlay-link">
                                                    <span class="fa fa-link"></span>
                                                </a>
                                            </figure>
                                            <div class="desc-text">
                                                <a href="blog-single.html">Lorem Ipsum is simply dummy text.</a>
                                            </div>
                                            <div class="time">Aug 8, 2019</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-md-5">
                            <div class="footer-widget contact-widget">
                                <h2 class="widget-title">Contact</h2>
                                <div class="widget-content">
                                    <ul class="contact-info-list">
                                        <li><i class="fas fa-map-marker-alt"></i>Chandragiri Municipality -13,Kathmandu
                                            Nepal
                                        </li>
                                        <li><i class="fas fa-phone"></i>Phone: +977- 014034387,015219888</li>
                                        <li><i class="fas fa-envelope-open"></i>Email: crehss.info@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="container">
            <div class="clearfix">
                <div class="float-sm-left">
                    <div class="copyright-text">
                        <p>Copyrights © 2019 <a href="index.html">CREHSS</a>. All rights reserved.</p>
                    </div>
                </div>
                <div class="float-sm-right">
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Sitemap</a></li>
                        <li><a href="#">Terms of Use </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


</div>
<!--End pagewrapper-->

<div id="donate-popup" class="donate-popup">
    <div class="close-donate theme-btn"><span class="flaticon-cross"></span></div>
    <div class="popup-inner">


        <div class="container">
            <div class="donate-form-area">
                <div class="section-title center">
                    <h2>Donation Information</h2>
                </div>

                <h4>How much would you like to donate:</h4>

                <form action="#" class="donate-form default-form">
                    <ul class="chicklet-list clearfix">
                        <li>
                            <input type="radio" id="donate-amount-1" name="donate-amount"/>
                            <label for="donate-amount-1" data-amount="1000">$1000</label>
                        </li>
                        <li>
                            <input type="radio" id="donate-amount-2" name="donate-amount" checked="checked"/>
                            <label for="donate-amount-2" data-amount="2000">$2000</label>
                        </li>
                        <li>
                            <input type="radio" id="donate-amount-3" name="donate-amount"/>
                            <label for="donate-amount-3" data-amount="3000">$3000</label>
                        </li>
                        <li>
                            <input type="radio" id="donate-amount-4" name="donate-amount"/>
                            <label for="donate-amount-4" data-amount="4000">$4000</label>
                        </li>
                        <li>
                            <input type="radio" id="donate-amount-5" name="donate-amount"/>
                            <label for="donate-amount-5" data-amount="5000">$5000</label>
                        </li>
                        <li class="other-amount">

                            <div class="input-container" data-message="Every dollar you donate helps end hunger.">
                                <span>Or</span><input type="text" id="other-amount" placeholder="Other Amount"/>
                            </div>
                        </li>
                    </ul>

                    <h3>Donor Information</h3>

                    <div class="form-bg">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <p>Your Name*</p>
                                    <input type="text" name="fname" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <p>Email*</p>
                                    <input type="text" name="fname" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <p>Address*</p>
                                    <input type="text" name="fname" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <p>Phn Num*</p>
                                    <input type="text" name="fname" placeholder="">
                                </div>
                            </div>

                        </div>
                    </div>

                    <ul class="payment-option">
                        <li>
                            <h4>Choose your payment method:</h4>
                        </li>
                        <li>
                            <div class="checkbox">
                                <label>
                                    <input name="pay-us" type="checkbox">
                                    <span>Paypal</span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <label>
                                    <input name="pay-us" type="checkbox">
                                    <span>Offline Donation</span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <label>
                                    <input name="pay-us" type="checkbox">
                                    <span>Credit Card</span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <label>
                                    <input name="pay-us" type="checkbox">
                                    <span>Debit Card</span>
                                </label>
                            </div>
                        </li>
                    </ul>

                    <div class="center">
                        <button class="theme-btn btn-style-one" type="submit">Donate Now</button>
                    </div>


                </form>
            </div>
        </div>

    </div>
</div>

<!-- Scroll Top Button -->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-angle-up"></span>
</button>


<?php wp_footer(); ?>

</body>
</html>
