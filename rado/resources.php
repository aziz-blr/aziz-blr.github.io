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

        <style type="text/css">
            thead.thead-default {
                background: #ff853f;
                color: #fff;
            }
        </style>

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
                                    <h3 class="text-white mt-10">Resources</h3>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section: Services -->
                <section id="services">
                    <div class="container">
                        <div class="section-title text-center">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2 class="text-uppercase title">Athelete <span class="text-black font-weight-300">Representatives</span></h2>
                                    <p class="text-uppercase letter-space-4">Lorem ipsum dolor sit amet dolor</p>
                                </div>
                            </div>
                        </div>
                        <div class="section-content">
                            <div class="row ml-md-0 multi-row-clearfix">
                                <div class="table-responsive">

                                    <table class="table table-striped table-schedule">
                                        <thead>
                                            <tr class="bg-theme-colored">
                                                <th>Title</th>
                                                <th>Last Modified</th>
                                                <th>Format</th>
                                                <th class="text-center" width="5%">Download</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>11 Jun 2017</td>
                                                <td>PDF</td>
                                                <td class="text-center"><i class="fa fa-cloud-download fa-2x"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>11 Jun 2017</td>
                                                <td>PDF</td>
                                                <td class="text-center"><i class="fa fa-cloud-download fa-2x"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>11 Jun 2017</td>
                                                <td>PDF</td>
                                                <td class="text-center"><i class="fa fa-cloud-download fa-2x"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>11 Jun 2017</td>
                                                <td>PDF</td>
                                                <td class="text-center"><i class="fa fa-cloud-download fa-2x"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>11 Jun 2017</td>
                                                <td>PDF</td>
                                                <td class="text-center"><i class="fa fa-cloud-download fa-2x"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
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

    </body>    
</html>