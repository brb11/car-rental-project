<footer class="site-footer dark">
                <div class="footer-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <div class="widget">
                                    <h3 class="widget-title">All Models</h3>
                                    <div class="quick-links">
                                        <ul>
                                            <li>
                                                <a href="index.php#cars">ISA Model 1</a>
                                            </li>
                                            <li>
                                                <a href="index.php#cars">ISA Model 2</a>
                                            </li>
                                            <li>
                                                <a href="index.php#cars">ISA Model 3</a>
                                            </li>
                                            <li>
                                                <a href="index.php#cars">ISA Model 4</a>
                                            </li>
                                            <li>
                                                <a href="index.php#cars">ISA Model 5</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <div class="widget">
                                    <h3 class="widget-title">Company Links</h3>
                                    <div class="quick-links">
                                        <ul>
                                            <li>
                                                <a href="./pages-about.php">About Us</a>
                                            </li>
                                            <li>
                                                <a href="./login.php">Sing In</a>
                                            </li>
                                            <li>
                                                <a href="./logout.php">Log Out</a>
                                            </li>
                                            <li>
                                                <a href="./pages-contact.php">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <div class="widget">
                                    <h3 class="widget-title">Helpful Links</h3>
                                    <div class="quick-links">
                                        <ul>
                                            <li>
                                                <a href="./pages-contact.php">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <div class="widget">
                                    <h3 class="widget-title">Account</h3>
                                    <div class="quick-links">
                                    <?php 
$email=$_SESSION['alogin'];
$sql ="SELECT name FROM users WHERE email=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{
        echo htmlentities($result->name); }}?>

                                        <ul>
                                        <?php if($_SESSION['alogin']){?>
                                        <li><a href="profile.php">Profile Settings</a></li>
                                            <li><a href="logout.php">Sign Out</a></li>
                                            <?php } else { ?>
                                            <li><a href="login.php"  >Profile Settings</a></li>
                                            <li><a href="login.php" >Sign Out</a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12">
                                <div class="dealerfinder">
                                    <h3 class="section-title">Find Dealer</h3>
                                    <p>Find your nearest authorized dealer for sales, expert advice and support.</p>
                                    <form>
                                        <div class="input-group">
                                            <input type="text" placeholder="Enter your city">
                                            <span class="input-group-btn">
                                                <button class="button" type="button">
                                                    <i class="fa fa-angle-right"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                    <div class="checkbox">
                                        <input type="checkbox" id="SelectAll">
                                        <label for="SelectAll">
                                            <span class="checkbox-icon"></span>
                                            Select All
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="RentCars">
                                        <label for="RentCars">
                                            <span class="checkbox-icon"></span>
                                            Rent Cars
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="PartsShop">
                                        <label for="PartsShop">
                                            <span class="checkbox-icon"></span>
                                            Parts Shop
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="copyright-text">
                                    THE RIGHT PLCE TO SELL.
                                    
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Javascript -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/animsition.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/countto.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.stickit.min.js"></script>
    <script src="assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <script src="assets/js/magnific.popup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>