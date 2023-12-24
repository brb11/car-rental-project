<?php

include_once('include/header.php');

?>
            <div class="overlay"></div><!-- banner-area -->
            <section class="dark-section section-block">
                <div class="container">
                    <div class="section-space"></div>
                    <div class="row">
                        <div class="col-sm-6 offset-sm-1">
                            <div class="features-entry wow fadeInCdb">
                                <div class="image-holder">
                                    <h2 class="section-title">Get your information :</h2>
                                    <p><strong>Complete the form to request your car.</strong></p>
                                    <form accept-charset="UTF-8" action="/" class="require-validation" method="post">
                                        <div class="row">
                                            <div class="form-group col-sm-6"><label class="control-label">Contact
                                                    Name</label><input size="4" type="text"></div>
                                            <div class="form-group col-sm-6"><label
                                                    class="control-label">E-mail</label><input autocomplete="off"
                                                    type="text"></div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-6"><label class="control-label">Phone
                                                    Number</label><input autocomplete="off" size="20" type="text"></div>
                                            <div class="form-group col-sm-6"><label>Method of payment</label><select
                                                    name="arac" class="selectpicker">
                                                    <option value="1">Credet card</option>
                                                    <option value="2">Kuraimi Bank</option>
                                                    <option selected="selected" value="3">when arrived</option>
                                                </select></div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-12"><textarea name="mesajınız" rows="6"
                                                    class="margin-top-10" placeholder="Additional Details"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-12"><label>*How would you prefer we contact
                                                    you?</label><br>
                                                <div class="radio"><input id="radio-1" name="radio" type="radio"
                                                        checked=""><label for="radio-1"><span
                                                            class="radio-label"></span>Phone</label></div>
                                                <div class="radio margin-left-20"><input id="radio-2" name="radio"
                                                        type="radio"><label for="radio-2"><span
                                                            class="radio-label"></span>Email</label></div>
                                            </div>
                                        </div>
                                        <div class="row margin-top-30">
                                            <div class="col-sm-12"><button class="button"><a href="sucsuflly.html" style="color: white;">Submit</a></button></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12"><br />
                                                <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                                        laboris nisi ut aliquip ex ea commodo consequat.</small></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 offset-sm-1">
                            <div class="features-entry wow fadeInCdb">
                                <div class="image-holder"><img width="800" height="500"
                                        src="assets/img/about/about2.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="mid-space"></div>
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