<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="description" content="Tej-Onepage">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Title</title>

        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

        <!-- Common Stylesheets -->
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet">

        <!-- Testimonial Stylesheets -->
        <link type="text/css" href="css/owl.carousel.css" rel="stylesheet">
        <link type="text/css" href="css/owl.theme.css" rel="stylesheet">

        <!-- Gallery Stylesheet -->
        <link type="text/css" href="css/lightbox.css" rel="stylesheet">
        <!-- Main Stylesheet -->
        <link type="text/css" href="css/style.css" rel="stylesheet">
        <!-- Responsive Stylesheet -->
        <link type="text/css" href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Pre Loader-->
        <div id="preloader"></div>

        <!-- Header Section Starts-->
        <header id="top-header">
            <div class="top-header navbar-fixed-top">
                <div class="container">
                    <div class="row">


                        <!-- logo part starts -->
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="logo-holder">
                                <a href="#top-header" class="data-scroll">
                                    <img src="images/logo.png" width="80" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- logo part ends -->


                        <!-- Nav part starts -->
                        <div class="col-md-9 col-sm-12 col-xs-12">
                            <div class="custom-menu">
                                <div class="navbar">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
                                            <span class="icon-text-bar">Menu</span> 
                                            <span class="icon-bar"></span> 
                                            <span class="icon-bar"></span> 
                                            <span class="icon-bar"></span> 
                                        </button>
                                    </div>
                                    <div class="navbar-collapse collapse">
                                        <nav>
                                            <ul class="nav navbar-nav navbar-right custom-nav">
                                                <li><a href="#person-introduction" class="data-scroll">About Me</a></li>
                                                <li><a href="#services" class="data-scroll">My Skills </a></li>
                                                <li><a href="#work-gallery" class="data-scroll">Portfolio</a></li>
                                                <li><a href="#client-testimonials" class="data-scroll">Testimonial</a></li>
                                                <li><a href="#contact-form" class="data-scroll">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- logo part ends -->


                    </div>
                </div>
            </div>
            <div class="clearfix"></div>



            <!-- Short Information Slide starts -->
            <div class="shortinfo-slide">
                <div class="container">
                    <h1>
                        <a class="typewrite" data-period="1000" data-type='[]'></a>
                    </h1>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#modal" class="data-btn data-scroll">BUY NOW</a> 
                </div>
            </div>
            <!-- Short Information Slide ends -->

        </header>
        <!-- Header Section ends -->
        <div class="clearfix"></div>

        <!-- MODAL STARTS HERE -->
        <div class="fade modal" id="modal" data-backdrop="static">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <!-- form start -->
                    <form method="post" autocomplete="off" id="form">          
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Contact Details</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="title" class="control-label">Title</label>                                
                                    <input type="text" name="title" class="form-control" placeholder="Title">                                                                                                        
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name" class="control-label">Full Name</label>                                
                                    <input type="text" name="full_name" class="form-control" placeholder="Name">                                                                                                        
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="country" class="control-label">Country</label>                                
                                    <input type="text" name="country" class="form-control" placeholder="Country">                                                                                                        
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="city" class="control-label">City</label>                                
                                    <input type="text" name="city" class="form-control" placeholder="City">                                                                                                        
                                </div>
                            </div>                            
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label for="address" class="control-label">Address</label>
                                    <textarea class="form-control" rows="5" name="address" style="resize:none" placeholder="Address"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="email" class="control-label">Email ID</label>                                
                                    <input type="text" name="email_id" class="form-control" placeholder="Email ID">                                                                                                        
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone" class="control-label">Phone</label>                                
                                    <input type="text" name="phone" class="form-control" placeholder="Phone">                                                                                                        
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="code" class="control-label">Country</label>                                
                                    <input type="text" name="postal_code" class="form-control" placeholder="Postal Code">                                                                                                        
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="copies" class="control-label">Number of Copies</label>                                
                                    <input type="number" name="copies" class="form-control" placeholder="Number of Copies">                                                                                                        
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label for="note" class="control-label">Order Note</label>
                                    <textarea class="form-control" rows="3" name="order_note" style="resize:none" placeholder="Order Note"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary pull-right">Send</button>
                            <button type="button" class="btn btn-default pull-right" data-dismiss="modal" style="margin-right:15px">Cancel</button>
                        </div>
                    </form><!-- /.form end -->
                </div>
            </div>
        </div>
        <!-- MODAL ENDS HERE --> 


        <!-- Introduction Section Starts -->
        <section id="person-introduction" class="person-introduction">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 hidden-xs"> 
                        <img src="images/person.jpg" class="img-responsive" alt=""> 
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="title">
                            <h2>Hi, I am tej, a Web developer from your city. </h2>
                        </div>
                        <p>
                            Hi all, Its me tej, a <strong>creative, experienced and dynamic</strong> web-developer, can provide one stop solution regarding web. During my tenure as <strong>web developer</strong>, developed different websites with different special features. <br>
                            <br> I can build websites using <strong>latest technology</strong> for growing exposure. Satisfying my customer by fullfilling their expectation is my goal.
                        </p>                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Introduction Section ends -->
        <div class="clearfix"></div>


        <!-- Service Section Starts-->
        <section id="services" class="services">
            <div class="container">
                <div class="title">
                    <h2>what can i do</h2>
                </div>
                <div class="row">

                    <!-- Service Blog Starts-->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service-blog">
                            <img class="img-responsive" src="images/work/work-1.jpg" alt="">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                    <!-- Service Blog Ends-->

                    <!-- Service Blog Starts-->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service-blog">
                            <img class="img-responsive" src="images/work/work-1.jpg" alt="">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                    <!-- Service Blog Ends-->

                    <!-- Service Blog Starts-->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service-blog">
                            <img class="img-responsive" src="images/work/work-1.jpg" alt="">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                    <!-- Service Blog Ends-->

                </div>
            </div>
        </section>
        <!-- Service Section Ends-->
        <div class="clearfix"></div>


        <!-- Work Portfolio Section Starts -->

        <section id="work-gallery" class="work-gallery">
            <div class="container">
                <div class="title">
                    <h2>recent works</h2>
                </div>
                <div class="row">
                    <div class="work-controls">
                        <ul>
                            <li class="filter" data-filter="all">Show All</li>
                            <li class="filter" data-filter=".web">Web Design</li>
                            <li class="filter" data-filter=".app">App Development</li>
                            <li class="filter" data-filter=".photography">Photography</li>
                        </ul>
                    </div>
                </div>
                <div class="work-showcase">
                    <div class="row">

                        <!-- Work Portfolio Image and Caption -->
                        <div class="col-md-3 col-sm-6 col-xs-12 mix web app">
                            <a href="images/work/work-1.jpg" data-lightbox="image-1" class="gallery-effect" data-fresco-group="" data-title="Image Caption Here" data-fresco-caption=""> 
                                <img class="gallery-img" src="images/work/work-1.jpg" alt=""> 
                                <span class="gallery-overlay"></span> 
                                <span class="gallery-text">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </span> 
                            </a>
                        </div>

                        <!-- Work Portfolio Image and Caption -->
                        <div class="col-md-3 col-sm-6 col-xs-12 mix photography app">
                            <a href="images/work/work-2.jpg" data-lightbox="image-1" class="gallery-effect" data-fresco-group="" data-title="Image Caption Here" data-fresco-caption=""> 
                                <img class="gallery-img" src="images/work/work-2.jpg" alt="">
                                <span class="gallery-overlay"></span> 
                                <span class="gallery-text">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </span> 
                            </a>
                        </div>

                        <!-- Work Portfolio Image and Caption -->
                        <div class="col-md-3 col-sm-6 col-xs-12 mix web app photography">
                            <a href="images/work/work-3.jpg" data-lightbox="image-1" class="gallery-effect" data-fresco-group="" data-title="Image Caption Here" data-fresco-caption=""> 
                                <img class="gallery-img" src="images/work/work-3.jpg" alt="">
                                <span class="gallery-overlay"></span>
                                <span class="gallery-text">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </span> 
                            </a>
                        </div>

                        <!-- Work Portfolio Image and Caption -->
                        <div class="col-md-3 col-sm-6 col-xs-12 mix photography web">
                            <a href="images/work/work-4.jpg" data-lightbox="image-1" class="gallery-effect" data-fresco-group="" data-title="Image Caption Here" data-fresco-caption=""> 
                                <img class="gallery-img" src="images/work/work-4.jpg" alt=""> 
                                <span class="gallery-overlay"></span>
                                <span class="gallery-text">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </span> 
                            </a>
                        </div>

                        <!-- Work Portfolio Image and Caption -->
                        <div class="col-md-3 col-sm-6 col-xs-12 mix app photography web">
                            <a href="images/work/work-5.jpg" data-lightbox="image-1" class="gallery-effect" data-fresco-group="" data-title="Image Caption Here" data-fresco-caption=""> 
                                <img class="gallery-img" src="images/work/work-5.jpg" alt="">
                                <span class="gallery-overlay"></span>
                                <span class="gallery-text">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </span> 
                            </a>
                        </div>

                        <!-- Work Portfolio Image and Caption -->
                        <div class="col-md-3 col-sm-6 col-xs-12 mix web app">
                            <a href="images/work/work-6.jpg" data-lightbox="image-1" class="gallery-effect" data-fresco-group="" data-title="Image Caption Here" data-fresco-caption=""> 
                                <img class="gallery-img" src="images/work/work-6.jpg" alt="">
                                <span class="gallery-overlay"></span>
                                <span class="gallery-text">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </span> 
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Work Portfolio Section Ends -->
        <div class="clearfix"></div>


        <!-- Testimonials Section Starts-->
        <section id="client-testimonials" class="client-testimonials">
            <div class="container">
                <div class="title">
                    <h2>what people say</h2>
                </div>

                <div class="owl-carousel owl-theme testimonial-slide">

                    <!-- Testimonials-->
                    <div class="item">
                        <div class="testimonial-text">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <h5><span>- Graphic Designer</span> </h5>
                        </div>
                    </div>

                    <!-- Testimonials-->
                    <div class="item">
                        <div class="testimonial-text"> 
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <h5><span>- Project Manager</span> </h5>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Testimonials Section Ends -->
        <div class="clearfix"></div>

        <section class="buy-now">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h4>WANT TO GET YOUR BOOK DELIVERED IN KUWAIT  OR INTERNATIONAL DELIVERY</h4>
                    </div>
                    <div class="col-md-4">
                        <button type="button" data-toggle="modal" data-target="#modal" class="btn btn-default buy-btn">Buy Now</button>                        
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Contact Section Starts -->
        <section id="contact-form" class="contact-form">
            <div class="container">
                <div class="title">
                    <h2>contact me</h2>
                </div>
                <form name="form" class="form" method="post" action="mailer.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input required class="form-control" name="name" type="text" placeholder="Name" />
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input required class="form-control" name="address" type="text" placeholder="Address" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input required class="form-control" name="email" type="email" placeholder="Email Address" />
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" name="phone" type="text" placeholder="Contact Number" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input name="submit" class="btn btn-default custom-btn" type="submit" value="Send Message" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Contact Section Ends -->
        <div class="clearfix"></div>


        <!-- Footer Section Starts -->
        <footer>
            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <!-- Footer Copyright -->
                            <div class="copyright">
                                <p>
                                    © 2017 | All Rights Reserved.
                                </p>
                            </div>

                            <!-- Footer Social Link -->
                            <div class="social-link">
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/" class="facebook" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/" class="twitter" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://plus.google.com/" class="googleplus" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="https://www.linkedin.com/" class="linkedin" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section Ends -->


        <i class="fa fa-arrow-up return-to-top" aria-hidden="true"></i>

        <!-- Common Jquery -->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <!-- Testimonials Jquery -->
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>

        <!-- Gallery Jquery -->
        <script type="text/javascript" src="js/lightbox.min.js"></script>
        <script type="text/javascript" src="js/mixitup.min.js"></script>

        <!-- Custom Jquery -->
        <script type="text/javascript" src="js/custom.js"></script>

        <!-- Preloader Jquery -->
        <script type="text/javascript">
            $(window).on('load', function () {
                $('#preloader').fadeOut(300);
            });
        </script>
    </body>

</html>