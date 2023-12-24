



<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<![endif]-->
<!--[if (gte IE 9)|!(IE)]>
<!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]-->
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <!--[endif]-->
    <title>ISA - CAR SELLER COMPANY

    </title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/icon/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/icon/apple-touch-icon-158-precomposed.png">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]-->
    <!-- <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> -->
    <!--[endif]-->
</head>

<body>
    <div class="animsition">
        <div class="site-wrapper header-top-with">
            <!-- header-area -->
            <header id="header" class="main-header fullwidth">
                <div class="header-top">
                    <div class="container">
                        <div class="top-left">
                            <ul class="clearfix">
                                <li>
                                    ISA is your reliable vehicle purchase!
                                </li>
                            </ul>
                        </div>
                        <div class="top-right clearfix">
                            <p><i class="fa fa-phone"></i>+967 734 050 875</p>
                            <div class="social">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
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
                <div class="container">
                    <a class="main-logo" href="index.php">
                        <img src="assets/icon/logo.png" alt="autoshow">
                    </a>
                    <ul class="header-buttons">
                        <li class="dropdown"><a class="user-trigger" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true">
                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu">
 <?php 
$email=$_SESSION['login'];
$sql ="SELECT name FROM users WHERE name=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{

	 echo htmlentities($result->FullName); }}?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Update Password</a></li>
            <li><a href="my-booking.php">My Booking</a></li>
            <li><a href="logout.php">Sign Out</a></li>
            <?php } else { ?>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Profile Settings</a></li>
              <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Update Password</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">My Booking</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Post a Testimonial</a></li>
          <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">My Testimonial</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Sign Out</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
            </div>
  <!-- Navigation end --> 
                            </ul>
                        </li>
                        <li>
                            <a class="search-trigger">Search<span></span></a>
                        </li>
                        <li>
                            <a class="nav-trigger">Menu<span></span></a>
                        </li>
                    </ul>
                    <nav class="nav">
                        <ul id="primary-nav" class="primary-nav is-fixed">
                            <li class="has-children">
                                <a href="">Models</a>
                            <li>
                                        <a href="#loginform" data-toggle="modal" data-dismiss="modal">sign in</a>
                            </li>
                            <li>
                                        <a href="pages-contact.php">Contact</a>
                            </li>
                            <li class="has-children">
                                <a>Pages</a>
                                <ul class="dropdown-nav is-hidden">
                                    <li class="go-back">
                                        <a href="#0">Menu</a>
                                    </li>
                                    <li>
                                        <a href="login/index.php">Sign In &amp; Register</a>
                                    </li>
                                    <li>
                                        <a href="pages-contact.php">Contact</a>
                                    </li>
                                    <li>
                                        <a href="pages-about.php">About Us</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="pages-about.php">About</a>
                            </li>
                        </ul>
                    </nav>
                    <div id="search" class="search">
                        <form>
                            <input type="search" placeholder="Search keywords">
                        </form>
                    </div>
                </div>
            </header>