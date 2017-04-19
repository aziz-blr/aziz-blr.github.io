<!DOCTYPE html>
<html dir="ltr" lang="en">    
    <head>

        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

        <!-- Page Title -->
        <title>Rado</title>
        <?php include 'template/meta.php'; ?>
    </head>
    <body class="">
        <div id="wrapper">
            <!-- preloader -->
            <div id="preloader">
                <div id="spinner">
                    <img src="images/preloaders/1.gif" alt="">
                </div>
                <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
            </div>

            <!-- Header -->
            <?php include 'template/header.php'; ?>

            <!-- Start main-content -->
            <div class="main-content">

                <!-- Section: inner-header -->
                <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-parallax-ratio="0.7" data-bg-img="images/bg/bg1.jpg" style="background-image: url(&quot;images/bg/bg1.jpg&quot;); background-position: 50% -43px;">
                    <div class="container pt-100 pb-50">
                        <!-- Section Content -->
                        <div class="section-content pt-20">
                            <div class="row"> 
                                <div class="col-sm-12 text-left xs-text-center">
                                    <h3 class="text-white mt-10">Contact US</h3>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Divider: Contact -->
                <section class="divider">
                    <div class="container pt-0">
                        <div class="row mb-60 bg-deep">
                            <div class="col-sm-12 col-md-4">
                            </div>
                            <div class="col-sm-12 col-md-4">
                            </div>
                            <div class="col-sm-12 col-md-4">
                            </div>
                        </div>
                        <div class="row pt-10">
                            <div class="col-md-7">
                                <h4 class="mt-0 mb-30 line-bottom">Interested in discussing?</h4>
                                <!-- Contact Form -->
                                <form id="contact_form" name="contact_form" class="" action="http://kodesolution.com/demo/health-beauty/health-zone/v2.0/includes/sendmail.php" method="post">

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="form_name">Name <small>*</small></label>
                                                <input  name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="form_email">Email <small>*</small></label>
                                                <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="form_name">Subject <small>*</small></label>
                                                <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                                            </div>
                                            <div class="form-group">
                                                <label for="form_phone">Phone</label>
                                                <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                                            </div>
                                            <div class="form-group">
                                                <label for="form_name">Message</label>
                                                <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                                                <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                            <div class="col-md-4 col-md-offset-1">
                                <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
                                    <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
                                    <h4>Call Us</h4>
                                    <h6 class="text-gray">Phone: +262 695 2601</h6>
                                </div>
                                <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
                                    <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                                    <h4>Email</h4>
                                    <h6 class="text-gray">you@yourdomain.com</h6>
                                </div>
                                <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
                                    <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                                    <h4>Address</h4>
                                    <h6 class="text-gray">121 King Street, Australia</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section>
                    <!-- Google Map HTML Codes -->
                    <div 
                        data-address="121 King Street, Melbourne Victoria 3000 Australia"
                        data-popupstring-id="#popupstring1"
                        class="map-canvas autoload-map"
                        data-mapstyle="style2"
                        data-height="400"
                        data-latlng="-37.817314,144.955431"
                        data-title="sample title"
                        data-zoom="12"
                        data-marker="images/map-marker.png">
                    </div>
                    <div class="map-popupstring hidden" id="popupstring1">
                        <div class="text-center">
                            <h3>HealthZone Office</h3>
                            <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                        </div>
                    </div>
                    <!-- Google Map Javascript Codes -->
                    <script src="http://maps.google.com/maps/api/js"></script>
                    <script src="js/google-map-init.js"></script>
                </section>
            </div>
            <!-- end main-content -->

            <!-- Footer -->
            <?php include 'template/footer.php'; ?>
            <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- end wrapper -->

        <!-- Footer Scripts -->
        <?php include 'template/script.php'; ?>
        <!-- JS | Custom script for all pages -->
        <script src="js/custom.js"></script>

        <!-- Contact Form Validation-->
        <script type="text/javascript">
            $("#contact_form").validate({
                submitHandler: function (form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                        dataType: 'json',
                        success: function (data) {
                            if (data.status == 'true') {
                                $(form).find('.form-control').val('');
                            }
                            form_btn.prop('disabled', false).html(form_btn_old_msg);
                            $(form_result_div).html(data.message).fadeIn('slow');
                            setTimeout(function () {
                                $(form_result_div).fadeOut('slow')
                            }, 6000);
                        }
                    });
                }
            });
        </script>

    </body>    
</html>