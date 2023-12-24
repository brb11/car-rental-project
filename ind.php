
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Car Rental Portal</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
</head>
<body>
    
<?php
include_once('include/header.php');

include_once('admin/includes/config.php');

?>
            <div class="overlay"></div>
            <!-- slider-area -->
            <section class="slider-area">
                <div class="slider-active">
                    <div class="single-slider slider-bg d-flex align-items-center"
                        style="background-image:url(assets/img/slider/blue-jeep-parking-public-zone.jpg)">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="slider-content">
                                        <h2 class="text-accent-color letter-spacing-n05px" data-animation="fadeInUp"
                                            data-delay=".2s">Gift your family a <br>
                                            <span>trusted</span>
                                            new car
                                        </h2>
                                        <p class="text-dark" data-animation="fadeInLeft" data-delay=".4s">We have more
                                            than a thousand cars for you to choose<br>.</p>
                                        <a href="#go" class="button button-sliding-icon" data-animation="fadeInUp"
                                            data-delay=".8s">
                                            get started
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
            </section>
            <!-- cars-area -->
            <section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Find the Best <span>CarForYou</span></h2>
      <p>Our Self-Drive cars come with all India permits, Road-Side Assistance (RSA), vehicle insurance and provision of multiple parking sites across the city.</p>
    </div>
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">New Car</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">
<?php $sql = "SELECT vihical.img1,vihical.name as 'vih_name', categories.name, vihical.price, vihical.speed, vihical.model_year, vihical.litter FROM vihical JOIN categories ON categories.id=vihical.cat_id";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  
?>  

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <img src="admin/img/vehicleimages/<?php echo htmlentities($result->img1);?>" class="img-responsive" alt="image">
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->vih_name);?></li>
<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result->model_year);?> Model</li>
<li><?php echo htmlentities($result->speed);?> speed</li>
</ul>
</div>
<div class="car-title-m">
<h6><?php echo htmlentities($result->vih_name);?> , <?php echo htmlentities($result->name);?></h6>
<span class="price">₹<?php echo htmlentities($result->price);?>$</span> 
</div>
</div>
</div>
<?php }}?>
     </div>
    </div>
  </div>
</section>
            <!-- news-area -->
            <section class="white-section section-block">
                <div class="section-space"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 section-title-wrapper">
                            <h3 class="section-title">Latest News & Tips</h3>
                            <p>Discover all the features of our vehicles.</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <article class="post-entry">
                                <div class="post-image">
                                    <a href="#">
                                        <img width="600" height="430" src="assets/img/post/post1.jpg" alt="">
                                        <span class="filter-grayscale"></span>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <h4 class="post-title">
                                        <a href="#">Test Driving Days from AutoShow</a>
                                    </h4>
                                    <ul class="post-tags">
                                        <li>12 June 2018</li>
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                    </ul>
                                    <div class="description">
                                        <p>Podcasting operational change management inside of workflows to establish a
                                            framework....</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <article class="post-entry">
                                <div class="post-image">
                                    <a href="#">
                                        <img width="600" height="430" src="assets/img/post/post2.jpg" alt="">
                                        <span class="filter-grayscale"></span>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <h4 class="post-title">
                                        <a href="#">Quality and the New Perspective</a>
                                    </h4>
                                    <ul class="post-tags">
                                        <li>14 June 2018</li>
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                    </ul>
                                    <div class="description">
                                        <p>Podcasting operational change management inside of workflows to establish a
                                            framework....</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <article class="post-entry margin-bottom-0">
                                <div class="post-image">
                                    <a href="#">
                                        <img width="600" height="430" src="assets/img/post/post3.jpg" alt="">
                                        <span class="filter-grayscale"></span>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <h5 class="post-title">
                                        <a href="#">Cut Emissions, Save Costs and Win Business</a>
                                    </h5>
                                    <ul class="post-tags">
                                        <li>16 June 2018</li>
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <article class="post-entry margin-bottom-0">
                                <div class="post-image"><a href="#">
                                        <img width="600" height="430" src="assets/img/post/post4.jpg" alt="">
                                        <span class="filter-grayscale"></span>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <h5 class="post-title">
                                        <a href="#">Cut Emissions, Save Costs and Win Business</a>
                                    </h5>
                                    <ul class="post-tags">
                                        <li>12 June 2018</li>
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <article class="post-entry margin-bottom-0">
                                <div class="post-image">
                                    <a href="#">
                                        <img width="600" height="430" src="assets/img/post/post5.jpg" alt="">
                                        <span class="filter-grayscale"></span>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <h5 class="post-title">
                                        <a href="#">Cut Emissions, Save Costs and Win Business</a>
                                    </h5>
                                    <ul class="post-tags">
                                        <li>12 June 2018</li>
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <!-- counter-area -->
            <section class="counters white-section section-block">
                <div class="big-space"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 section-title-wrapper text-center">
                            <h3 class="section-title">Let the numbers speak for us</h3>
                            <p>Lorem Ipsum has been the industry’s standard dummy text.</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="number col-md-4 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration=".5s"
                            data-wow-delay=".3s">
                            <div class="numbers">
                                <div class="num-icon">
                                    <i class="fa fa-handshake-o"></i>
                                </div>
                                <div class="num-content">
                                    <h4 class="num-heading">
                                        <span class="accent" data-speed="3000" data-to="320"
                                            data-inviewport="yes">320</span>
                                    </h4>
                                    <h5>
                                        <strong>Successfully</strong>
                                        <br>completed selling
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="number col-md-4 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration=".5s"
                            data-wow-delay=".6s">
                            <div class="numbers">
                                <div class="num-icon">
                                    <i class="fa fa-group"></i>
                                </div>
                                <div class="num-content">
                                    <h4 class="num-heading">
                                        <span class="accent" data-speed="3000" data-to="26"
                                            data-inviewport="yes">26</span>
                                    </h4>
                                    <h5>
                                        <strong>Highly</strong>specialised<br>employees
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="number col-md-4 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration=".5s"
                            data-wow-delay=".9s">
                            <div class="numbers">
                                <div class="num-icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="num-content">
                                    <h4 class="num-heading">
                                        <span class="accent" data-speed="3000" data-to="127"
                                            data-inviewport="yes">127</span>
                                    </h4>
                                    <h5>
                                        <strong>Dealer</strong>
                                        <br>completed selling
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="big-space"></div>
            </section>
            <!-- features-area -->
            <section class="dark-section section-block">
                <div class="section-bg" style="background-image: url('assets/img/parallax.jpg');"></div>
                <div class="section-space"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 section-title-wrapper">
                            <h3 class="section-title">Featured</h3>
                            <p>Discover all the features of our vehicles.</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <article class="features-entry wow fadeInCdb" data-wow-duration="0.7s"
                                data-wow-delay="0.2s">
                                <div class="image-holder margin-bottom-0">
                                    <a href="#">
                                        <img width="800" height="500" src="assets/img/box/box1.jpg" alt="">
                                        <h4 class="features-title">Design</h4>
                                        <span class="features-overlay"></span>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <article class="features-entry wow fadeInCdb" data-wow-duration="0.7s"
                                data-wow-delay="0.4s">
                                <div class="image-holder margin-bottom-0">
                                    <a href="#">
                                        <img width="800" height="500" src="assets/img/box/box2.jpg" alt="">
                                        <h4 class="features-title">Performance</h4>
                                        <span class="features-overlay"></span>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <article class="features-entry wow fadeInCdb" data-wow-duration="0.7s"
                                data-wow-delay="0.6s">
                                <div class="image-holder margin-bottom-0">
                                    <a href="#">
                                        <img width="800" height="500" src="assets/img/box/box3.jpg" alt="">
                                        <h4 class="features-title">Comfort</h4>
                                        <span class="features-overlay"></span>
                                    </a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="section-space"></div>
            </section>
            <!-- testimonials-area -->
            <section class="light-section section-block">
                <div class="section-space"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 section-title-wrapper margin-bottom-0 text-center">
                            <h3 class="section-title">Our Testimonials</h3>
                            <p>Lorem Ipsum has been the industry’s standard dummy text.</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row wow fadeInUp animated">
                        <div class="col-md-8 offset-md-2 col-12 offset-0">
                            <div class="testimonials margin-top-20" data-auto="false" data-loop="false" data-column="1"
                                data-column2="1" data-column3="1" data-gap="60">
                                <div class="owl-carousel owl-theme">
                                    <div class="review-item clearfix">
                                        <div class="testimonial-box">
                                            <div class="testimonial">Efficiently unleash cross-media information without
                                                cross-media value. Quickly maximize timely deliverables for real-time
                                                schemas. Dramatically maintain clicks-and-mortar solutions without
                                                functional solutions.</div>
                                            <div class="testimonial-author">
                                                <h4>Sindy Forest</h4>
                                                <span>Dealer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-item clearfix">
                                        <div class="testimonial-box">
                                            <div class="testimonial">Completely synergize resource taxing relationships
                                                via premier niche markets. Professionally cultivate one-to-one customer
                                                service with robust ideas. Dynamically innovate resource-leveling
                                                customer service for state of the art.</div>
                                            <div class="testimonial-author">
                                                <h4>Tom Smith</h4>
                                                <span>Customer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-item clearfix">
                                        <div class="testimonial-box">
                                            <div class="testimonial">Completely synergize resource taxing relationships
                                                via premier niche markets. Professionally cultivate one-to-one customer
                                                service with robust ideas. Dynamically innovate resource-leveling
                                                customer service for state of the art.</div>
                                            <div class="testimonial-author">
                                                <h4>Sebastiano Piccio</h4>
                                                <span>Customer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-item clearfix">
                                        <div class="testimonial-box">
                                            <div class="testimonial">Collaboratively administrate turnkey channels
                                                whereas virtual e-tailers. Objectively seize scalable metrics whereas
                                                proactive e-services. Seamlessly empower fully researched growth
                                                strategies and interoperable sources.</div>
                                            <div class="testimonial-author">
                                                <h4>David Peterson</h4>
                                                <span>Customer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-item clearfix">
                                        <div class="testimonial-box">
                                            <div class="testimonial">Efficiently unleash cross-media information without
                                                cross-media value. Quickly maximize timely deliverables for real-time
                                                schemas. Dramatically maintain clicks-and-mortar solutions without
                                                functional solutions.</div>
                                            <div class="testimonial-author">
                                                <h4>Marcin Kowalski</h4>
                                                <span>Dealer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-space"></div>
            </section>
            <!-- brands-area -->
            <div class="white-section section-block">
                <div class="container">
                    <div class="section-space"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="partners" data-auto="false" data-loop="false" data-column="5" data-column2="3"
                                data-column3="2" data-gap="60">
                                <div class="owl-carousel owl-theme">
                                    <div class="partner-item clearfix">
                                        <div class="inner">
                                            <a target="_blank" href="#">
                                                <div class="thumb">
                                                    <img src="assets/img/partner/logo-1.png" alt="Image">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="partner-item clearfix">
                                        <div class="inner">
                                            <a target="_blank" href="#">
                                                <div class="thumb">
                                                    <img src="assets/img/partner/logo-2.png" alt="Image">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="partner-item clearfix">
                                        <div class="inner">
                                            <a target="_blank" href="#">
                                                <div class="thumb">
                                                    <img src="assets/img/partner/logo-3.png" alt="Image">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="partner-item clearfix">
                                        <div class="inner">
                                            <a target="_blank" href="#">
                                                <div class="thumb">
                                                    <img src="assets/img/partner/logo-4.png" alt="Image">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="partner-item clearfix">
                                        <div class="inner">
                                            <a target="_blank" href="#">
                                                <div class="thumb">
                                                    <img src="assets/img/partner/logo-5.png" alt="Image">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="partner-item clearfix">
                                        <div class="inner">
                                            <a target="_blank" href="#">
                                                <div class="thumb">
                                                    <img src="assets/img/partner/logo-6.png" alt="Image">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="partner-item clearfix">
                                        <div class="inner">
                                            <a target="_blank" href="#">
                                                <div class="thumb">
                                                    <img src="assets/img/partner/logo-7.png" alt="Image">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="partner-item clearfix">
                                        <div class="inner">
                                            <a target="_blank" href="#">
                                                <div class="thumb">
                                                    <img src="assets/img/partner/logo-8.png" alt="Image">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-space"></div>
                </div>
            </div>
            <!-- cta bar -->
            <div class="cta-bar">
                <ul>
                    <li>
                        <a href="#" class="back-to-top" title="Back to top">
                            <i class="fa fa-angle-up"></i>
                            Back to top
                        </a>
                    </li>
                </ul>
            </div>
            <!-- footer-area -->
<?php

include_once('include/footer.php');
?>
</body>
</html>