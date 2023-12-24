<?php
include_once('include/header.php');

?>
            <div class="overlay"></div><!-- banner-area -->
            <section class="banner-section">
                <div class="section-bg" style="background-image: url('assets/img/parallax.jpg');"></div>
                <div class="container">
                    <div class="row">
                        <div class="page-banner-content col">
                            <h1 class="text-white">Contact Us</h1><span>Get in Touch With Us</span><!-- breadctumb -->
                            <ul class="page-breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section><!-- content-area -->
            <section class="white-section section-block">
                <div class="container">
                    <div class="section-space"></div>
                    <div class="row justify-content-center">
                        <div class="col-md-5 col-lg-4 wow animated fadeInLeft text-center margin-bottom-20"><i
                                class="fa fa-home font-size-42 text-accent-color"></i>
                            <h3 class="font-weight-600 no-margin">Address</h3><span>Yemen, Sana'a,
                                Haddah</span>
                        </div>
                        <div class="col-md-5 col-lg-4 wow animated fadeInRight text-center margin-bottom-20"><i
                                class="fa fa-home font-size-42 text-accent-color"></i>
                            <h3 class="font-weight-600 no-margin">Phone Number</h3><span class="d-block"><a
                                    href="">+967 734 050 875</a>- <a href=""></a></span>
                        </div>
                    </div>
                    <div class="section-space"></div>
                </div>
            </section>
            <div class="white-section section-block">
                <div class="container-fluid">
                    <div class="contact-map wow fadeIn"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d788.1685311824108!2d-122.42355686092779!3d37.79767612754957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808580e839d7e541%3A0xf89b6220c55337a7!2sGreen+St%2C+San+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sro!4v1534933659099"
                            width="600" height="450" style="border:0" allowfullscreen></iframe></div>
                </div>
            </div>
            <section id="contact" class="light-section">
                <div class="container">
                    <div class="section-space"></div>
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 offset-xl-2 offset-lg-2">
                            <div class="content-area">
                                <h2>Any questions? Feel free to contact us!</h2>
                                <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit Perfer
                                    repudiandae nostrum alias quibusdam!</p>
                                <form method="post" name="contactform" id="contactform" autocomplete="on">
                                    <div class="row">
                                        <div class="col-md-6"><input class="with-border" name="name" type="text"
                                                id="name" placeholder="Your Name" required="required" /></div>
                                        <div class="col-md-6"><input class="with-border" name="email" type="email"
                                                id="email" placeholder="Email Address"
                                                pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$"
                                                required="required" /></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input class="with-border" name="subject" type="text"
                                                id="subject" placeholder="Subject" required="required" /></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><textarea class="with-border" name="comments" cols="40"
                                                rows="5" id="comments" placeholder="Message" spellcheck="true"
                                                required="required"></textarea></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="submit" class="submit button margin-top-15"
                                                id="submit" value="Submit Message" /></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="section-space"></div>
                </div>
            </section><!-- cta bar -->
            <div class="cta-bar">
                <ul>
                    <li><a href="#" class="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i>Back to
                            top</a></li>
                </ul>
            </div><!-- footer-area -->
            <?php

include_once('include/footer.php');

?>