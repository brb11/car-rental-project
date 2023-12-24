<?php
include_once('include/header.php');
include_once('include/conn.php');

?>
            <div class="overlay"></div><!-- banner-area -->
            <section class="banner-section">
                <div class="section-bg" style="background-image: url('assets/img/parallax.jpg');"></div>
                <div class="container">
                    <div class="row">
                        <div class="page-banner-content col">
                            <a href="model.php"><h1 class="text-white">Log In</h1></a><!-- breadctumb -->
                            <ul class="page-breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li>Log In</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section><!-- content-area -->
            <section class="white-section section-block">
                <div class="container">
                    <div class="section-space"></div>
                    <div class="row">
                        <div class="col-xl-5 offset-xl-3">
                            <div class="login-register-area">
                                <div class="text-center margin-bottom-20">
                                    <h3 class="font-weight-600 no-margin">Sign In Account</h3><span>Don't have an
                                        account? <a href="sign up.php">Sign Up</a></span>
                                </div><!-- Form -->
<?php
if (isset($_REQUEST['login'])) {
    $email = $_REQUEST['emailaddress'];
    $passsword = $_REQUEST['password'];
    if (empty($email) || empty($passsword)) {
        echo "<span style= 'color:red; font-size:10px;'>
    User name and password required
    </span>";
    } elseif ($email == 'brhoombasha111@gmail.com' && $passsword == 1234) {
        echo "welcom Admin";
    }
}
else{
echo "<span style= 'color:red; font-size:10px;'>
User name or password are wrong
</span>";
}
?>

                                <form method="post" id="login-form">
                                    <input type="text" class="input-text with-border"
                                        name="emailaddress" id="emailaddress" placeholder="Email Address"
                                        required />
                                    <input type="password" class="input-text with-border" name="password"
                                        id="password" placeholder="Password" required /><a href="#"
                                        class="forgot-password">Forgot Password?</a></form>
                                        <!-- Button -->
                                    <button
                                    class="button dark full-width button-sliding-icon margin-top-10" type="submit"
                                    form="login-form" name="login"> <a href="model.php" style="color: white;"> Log In <i class="fa fa-angle-right"></i></a>
                                    </button>
                                <!-- Social Login -->
                                <div class="login-separator text-center"><span>or</span></div>
                                <div class="login-buttons"><button class="facebook-login"><i
                                            class="fa fa-facebook"></i>Log In via Facebook</button><button
                                        class="google-login"><i class="fa fa-google-plus"></i>Log In via
                                        Google+</button></div>
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