<?php 
    session_start();
 ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Y2K Consulting Lead Generation">
	<meta name="keywords" content="Y2K Consulting Lead Generation">
    <meta name="author" content="DGA">
    <title>Y2K Consulting Lead Generation</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/simple-line-icons/css/simple-line-icons.css">

    <!-- Preloader CSS -->
    <link rel="stylesheet" href="css/preloader.css">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Preloader -->
    <div id="preloader"> 
        <div id="wave"></div>
    </div>
    <div id="mask"></div><!-- End Of Preloader -->

    <!-- NavBar -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand Logo -->
            <div class="navbar-header">
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="img/logo.png" alt="LOGO">
                </a>
            </div>
        </div>
    </nav><!-- End Of Nav Bar -->


    <!-- Header -->
    <header id="page_top" class="car_loan">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="header-content">
                        <div class="header-content-inner">
                            <h1>Welcome to Y2K Consulting</h1>
                            <p>Your Perfect Training & Placement Partner.</p>
                            <p>Y2K Consulting has trained and placed more than 2000+ candidates till date.</p>
<p>We have tied up with more than 120+ companies and placed candidates registered at Y2K Consulting.
Register Today and Become the next lucky person to get hired by MNC's.
</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="form-container">
                        <div class="form-mockup row">
                            <h2 class="text-center">Register Now</h2>
                            <?php 
                                if (isset($_SESSION['msg'])) 
                                {
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                }
                             ?>
                            <form action="process/register_process.php" method="post">
                              <div class="form-group col-sm-6">
                                <input type="text" name="name" class="form-control" placeholder="Name" required="">
                              </div>
                              <div class="form-group col-sm-6">
                                <input type="email" name="email" class="form-control" placeholder="E-mail" required="">
                              </div>
                              <div class="form-group col-sm-12">
                                <input type="text" name="mob" class="form-control" placeholder="Mobile No" required="" pattern="[7896][0-9]{9}">
                              </div>
                              <div class="form-group col-sm-6">
                                <input type="text" name="location" class="form-control" placeholder="Location">
                              </div>
                              <div class="form-group col-sm-6">
                                <input type="text" name="edu" class="form-control" placeholder="Qualification">
                              </div>
                              <div class="form-group col-sm-6">
                                <select name="year_graduate"  class="form-control">
                                    <option>Year of Graduation</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                </select>
                              </div>
                              <div class="form-group col-sm-6">
                                <select name="joining_period"  class="form-control">
                                    <option value="When can you Join?">When can you Join?</option>
                                    <option value="Immediately">Immediately</option>
                                    <option value="Within one week">Within one week</option>
                                    <option value="Within one month">Within one month</option>
                                    <option value="More than a month">More than a month</option>
                                </select>
                              </div>
                              <div class="form-group col-sm-12">
                                <input type="text" name="refer" class="form-control" placeholder="Refer a friend">
                              </div>
                              <button type="submit" class="btn btn-default quote_btn col-sm-12">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- End Of Header -->
<!-- Section Testimonials -->
<section id="testimonials" class="text-center">

                    <h2 class="section-title text-center"> Client Reviews</h2>
    <div class="container">
    <div class="row">

        <div class="col-sm-12">         
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>   
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="item carousel-item active">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="testimonial">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
                                </div>
                                <div class="media">
                                    <div class="media-left d-flex mr-3">
                                        <img src="img/2.jpg" alt="">                                       
                                    </div>
                                    <div class="media-body">
                                        <div class="overview">
                                            <div class="name"><b>Paula Wilson</b></div>
                                            <div class="details">Media Analyst / SkyNet</div>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="testimonial">
                                    <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
                                </div>
                                <div class="media">
                                    <div class="media-left d-flex mr-3">
                                        <img src="img/2.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="overview">
                                            <div class="name"><b>Antonio Moreno</b></div>
                                            <div class="details">Web Developer / SoftBee</div>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>
                            </div>
                        </div>          
                    </div>
                    <div class="item carousel-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="testimonial">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
                                </div>
                                <div class="media">
                                    <div class="media-left d-flex mr-3">
                                        <img src="img/2.jpg" alt="">                                       
                                    </div>
                                    <div class="media-body">
                                        <div class="overview">
                                            <div class="name"><b>Michael Holz</b></div>
                                            <div class="details">Web Developer / DevCorp</div>                                          
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="testimonial">
                                    <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
                                </div>
                                <div class="media">
                                    <div class="media-left d-flex mr-3">
                                        <img src="img/2.jpg" alt="">                                       
                                    </div>
                                    <div class="media-body">
                                        <div class="overview">
                                            <div class="name"><b>Mary Saveley</b></div>
                                            <div class="details">Graphic Designer / MarsMedia</div>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>
                            </div>
                        </div>          
                    </div>
                    <div class="item carousel-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="testimonial">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
                                </div>
                                <div class="media">
                                    <div class="media-left d-flex mr-3">
                                        <img src="img/2.jpg" alt="">                                       
                                    </div>
                                    <div class="media-body">
                                        <div class="overview">
                                            <div class="name"><b>Martin Sommer</b></div>
                                            <div class="details">SEO Analyst / RealSearch</div>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="testimonial">
                                    <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
                                </div>
                                <div class="media">
                                    <div class="media-left d-flex mr-3">
                                        <img src="img/2.jpg" alt="">                                       
                                    </div>
                                    <div class="media-body">
                                        <div class="overview">
                                            <div class="name"><b>John Williams</b></div>
                                            <div class="details">Web Designer / UniqueDesign</div>
                                            <div class="star-rating">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>
                            </div>
                        </div>          
                    </div>
                </div>
                <!-- Carousel controls -->
            </div>
        </div>
    </div>
    </div>
</section>
    <!-- End Of Section Testimonials -->
    <!-- Section Brand -->
    <section id="brand_logo" style="background:#fff">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="setion-title text-center">Our Clients</h2>
                </div>
            </div>
            <div class="row mr_top_10">
                <div class="col-sm-12">
                    <ul class="list-inline list-logo">
                        <li class="">
                            <a href="#"><img src="img/brand-logo/1.png" alt="Brand Logo"></a>
                        </li>
                        <li class="">
                            <a href="#"><img src="img/brand-logo/2.png" alt="Brand Logo"></a>
                        </li>
                        <li class="">
                            <a href="#"><img src="img/brand-logo/3.png" alt="Brand Logo"></a>
                        </li>
                        <li class="">
                            <a href="#"><img src="img/brand-logo/4.png" alt="Brand Logo"></a>
                        </li>
                        <li class="">
                            <a href="#"><img src="img/brand-logo/1.png" alt="Brand Logo"></a>
                        </li>
                        <li class="">
                            <a href="#"><img src="img/brand-logo/2.png" alt="Brand Logo"></a>
                        </li>
                        <li class="">
                            <a href="#"><img src="img/brand-logo/3.png" alt="Brand Logo"></a>
                        </li>
                        <li class="">
                            <a href="#"><img src="img/brand-logo/4.png" alt="Brand Logo"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Of Section Brand -->
    <!-- Section Contact -->
    <section id="contact">
        <div class="container mr_top_10">
            <div class="row">
                <div class="col-sm-4">
                    <address>
                        <p class="address_icon"><i class="icon-home"></i></p>
                        <p class="lead">Address</p>
                        <p class="lead"><i class="icon-location-pin"></i> EasyLoan LLC.<br> Washington, DC 20301.</p>
                    </address>
                </div>
                <div class="col-md-4 text-center" style="margin:auto">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.259573758722!2d88.3531985143576!3d22.569392985184468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277a8d67831ad%3A0x1dbe3ea71e88f938!2sY2k+Consultancy+Services+Private+Limited!5e0!3m2!1sen!2sin!4v1545035124256" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-sm-4">
                    <address>
                        <p class="lead">Contact Details</p>
                        <p class="lead"><i class="icon-screen-smartphone"></i> Phone: 121-000-1234</p>
                        <p class="lead"><i class="icon-paper-plane"></i> Fax: 121-000-9876</p>
                        <p class="lead"><i class="icon-envelope-open"></i> Email: info@yourdomain.com</p>
                    </address>
                </div>
            </div>
        </div>
    </section>
    <!-- End Of Section Contact -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2017 Y2K Consulting. All Rights Reserved.</p>
        </div>
    </footer>
    <!-- End Of Footer -->

    <!-- jQuery -->
    <script src="assets/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.js"></script>
    <script src="js/jquery.counterup.js"></script>
    <script src="js/jquery.waypoints.js"></script>
    <script src="js/price.slider.js"></script>
        

    <!-- Theme JavaScript -->
    <script src="js/custom.js"></script>
    <script src="js/testimonials.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDgI2pfq_vtH_hOyGMZ7WM2PGcP72VJbYw"></script>


</body>

</html>
