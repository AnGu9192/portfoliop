<?php 

$projects = select('projects',['status'=>'active']);
?>

<!-- Slider area starts -->
<section id="slider" class="slider-area">
        <div class="table">
            <div class="table-cell">
                <div class="intro-text">
                    
                    <div class="container">
                        <div class="row">

                            <!-- intro image -->
                            <div class="col-md-12">
                                <h2>Mr. Michael Jackson</h2>
                                <div class="typejs"></div>
                                <div class="clearfix"></div>
                                <a href="#about" class="icon-btn smooth_scroll">
                                    <i class="fa fa-angle-double-down"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider area ends -->



    <!-- About area starts -->
    <section id="about" class="about-area section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2><span>About</span> Me</h2>
                        <p>The new common language will be more simple and regular than.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- About Image -->
                <div class="col-md-6">
                    <div class="me-image">
                   <img src="<?php echo BASE_URL; ?>img/about/about.jpg" alt="">
                    </div>
                </div>

                <!-- About Text -->
                <div class="col-md-6">
                    <div class="about-me">
                        <h3><span>A Quick</span> Bio</h3>       
                        <p>Web Bean has everything you need to get your new website running in no time. All of the templates, themes on Web Bean w3c valid error free code and easy to use. Web Bean has everything you'll need to get your new website up and well running in no time! All of the new templates and themes on Web Bean w3c valid error free code and easy to use. Web Bean has everything you need to get your new website up and running in no time! Web Bean w3c valid error free code and easy to use. All of the templates and themes on Web Bean w3c valid error free code and easy to use. Web Bean w3c valid error free code and easy to use. All of the error free code and easy to use.</p>

                        <a class="btn dark smooth_scroll" href="#contact">Hire Me Now</a>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- About area ends -->




    <!-- Service area starts -->
    <section id="service" class="service-area section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2><span>What I</span> Do</h2>
                        <p>The new common language will be more simple and regular than.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="service-box">
                        <span class="icon-laptop"></span>
                        <h3>Web Design</h3>
                        <p>The new common language will be more will be more simple and regular than. It will be more Occidental in fact.</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="service-box">
                        <span class="icon-layers"></span>
                        <h3>Graphic Design</h3>
                        <p>The new common language will be more will be more simple and regular than. It will be more Occidental in fact.</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="service-box">
                        <span class="icon-mobile"></span>
                        <h3>App Development</h3>
                        <p>The new common language will be more will be more simple and regular than. It will be more Occidental in fact.</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="service-box">
                        <span class="icon-lifesaver"></span>
                        <h3>24/7 Support</h3>
                        <p>The new common language will be more will be more simple and regular than. It will be more Occidental in fact.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Service area ends -->



    <!-- Work area starts -->
    <section id="work" class="works section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2><span>My</span> Works</h2>
                        <p>The new common language will be more simple and regular than.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Works filter -->
                <ul class="work filters">
                    <li class="filter" data-filter="all">
                        <span class="icon-presentation"></span> All
                    </li>
                    <li class="filter" data-filter=".web">
                        <span class="icon-browser"></span> Web
                    </li>
                    <li class="filter" data-filter=".app">
                        <span class="icon-mobile"></span> App
                    </li>
                    <li class="filter" data-filter=".graphic">
                        <span class="icon-camera"></span> Graphic
                    </li>
                </ul>
                <!-- / Works filter -->
            </div>

            <div class="portfolio">
                <div class="row work-items">

                    <!-- work item -->
                    <?php foreach($projects as $project){ ?>

                    <div class="col-md-4 col-sm-6 mix web">
                        <div class="item">

                            <a href="<?php echo BASE_URL; ?>img/works/<?php echo $project['image'];?>" class="work-popup">
                                <img src="<?php echo BASE_URL; ?>img/works/<?php echo $project['image'];?>" alt="" style="width:500px;height:200px">
                                <div class="overlay">
                                    <span class="icon-focus"></span>
                                </div>
                                <div class="title"><?php echo $project['title'];?></div>
                            </a>

                        </div>

                    </div>
                    <?php } ?>
      
                           
                </div>
            </div>

        </div>
    </section>
    <!-- Work area ends -->    



    <!-- Contact area starts -->
    <section id="contact" class="contact-area section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2><span>Contact</span> Me</h2>
                        <p>The new common language will be more simple and regular than.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-12">

                    <!-- Contact form starts -->
                    <div class="contact-form">

                        <form id="ajax-contact" action="https://infolook.net/tf_preview/profil/<?php echo BASE_URL; ?>/mailer.php" method="post">
                            <div class="form-group in_name">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name" required="required">
                            </div>
                            <div class="form-group in_email">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
                            </div>
                            <div class="form-group in_message">
                                <textarea rows="5" name="message" class="form-control" id="message" placeholder="Message" required="required"></textarea>
                            </div>
                            <div class="actions">
                                <input type="submit" value="Send Message" name="submit" id="submitButton" class="btn" title="Submit Your Message!">
                            </div>
                        </form>

                        <!-- Submition status -->
                        <div id="form-messages"></div>

                    </div>
                    <!-- Contact form ends-->
                </div>

            </div>

        </div>
    </section>
    <!-- Contact area ends -->



    <!-- Footer area starts -->
    <footer class="footer-area">
        <div class="container">

            <div class="address">
                <div class="address-box clearfix">
                    <p>1502 N Elm St, Fairmont, MN, 56031, United States</p>
                </div>
                <div class="address-box clearfix">
                    <p><a href="tel:015110022">+00 123-456-789</a></p>
                </div>
                <div class="address-box clearfix">
                    <p><a href="mailto:email@yourdomain.com">email@yourdomain.com</a></p>
                </div>
                <div class="address-box clearfix">
                    <p><a href="http://www.yourdomain.com/">www.yourdomain.com</a></p>
                </div>
            </div>

            <ul class="social-ul">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-googleplus"></span></a></li>
                <li><a href="#"><span class="icon-tumblr"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
            </ul>

            <p class="copyright">&copy; 2018 Copyright web_bean</p>

        </div>
    </footer>
    <!-- Footer area ends -->



    <!-- Latest jQuery -->
    <script src="<?php echo BASE_URL; ?>js/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="<?php echo BASE_URL; ?>js/bootstrap.min.js"></script>

    <!-- Owl Carousel js -->
    <script src="<?php echo BASE_URL; ?>js/owl.carousel.min.js"></script>

    <!-- Mixitup js -->
    <script src="<?php echo BASE_URL; ?>js/jquery.mixitup.js"></script>

    <!-- Magnific popup js -->
    <script src="<?php echo BASE_URL; ?>js/jquery.magnific-popup.min.js"></script>

    <!-- Waypoint js -->
    <script src="<?php echo BASE_URL; ?>js/jquery.waypoints.min.js"></script>

    <!-- Ajax Mailchimp js -->
    <script src="<?php echo BASE_URL; ?>js/jquery.ajaxchimp.min.js"></script>

    <!-- Typed js -->
    <script src="<?php echo BASE_URL; ?>js/typed.js"></script>



    <!-- Main js-->
    <script src="<?php echo BASE_URL; ?>/js/main_script.js"></script>
</body>


<!-- Mirrored from infolook.net/tf_preview/profil/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Mar 2023 15:16:25 GMT -->
</html>