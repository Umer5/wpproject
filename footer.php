<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage My_Theme
 * @since My Theme 2.0.2
 */
global $redux_demo;
?>
<!-- BEGIN FOOTER -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 space-mobile">
                    <!-- BEGIN ABOUT -->                    
                    <h2>About</h2>
                    <p class="margin-bottom-30">Vivamus imperdiet felis consectetur onec eget orci adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper.</p>
                    <div class="clearfix"></div>                    
                    <!-- END ABOUT -->          

                    <h2>Photos Stream</h2>
                    <!-- BEGIN BLOG PHOTOS STREAM -->
                    <div class="blog-photo-stream margin-bottom-30">
                        <ul class="list-unstyled">
                            <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/people/img5-small.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/works/img1.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/people/img4-large.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/works/img6.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/pics/img1-large.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/pics/img2-large.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/works/img3.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/people/img2-large.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/works/img2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/works/img5.jpg" alt=""></a></li>
                        </ul>                    
                    </div>
                    <!-- END BLOG PHOTOS STREAM -->                              
                </div>
                <div class="col-md-4 col-sm-4 space-mobile">
                    <!-- BEGIN CONTACTS -->                                    
                    <h2>Contact Us</h2>
                    <address class="margin-bottom-40">
                        Loop, Inc. <br />
                        795 Park Ave, Suite 120 <br />
                        San Francisco, CA 94107 <br />
                        P: (234) 145-1810 <br />
                        Email: <a href="mailto:info@keenthemes.com">info@keenthemes.com</a>                        
                    </address>
                    <!-- END CONTACTS -->                                    

                    <!-- BEGIN SUBSCRIBE -->                                    
                    <h2>Monthly Newsletter</h2>  
                    <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
                    <form action="#" class="form-subscribe">
                        <div class="input-group input-large">
                            <input class="form-control" type="text">
                            <span class="input-group-btn">
                                <button class="btn theme-btn" type="button">SUBSCRIBE</button>
                            </span>
                        </div>
                    </form>

                    <!-- END SUBSCRIBE -->                                    
                </div>
                <div class="col-md-4 col-sm-4">
                    <!-- BEGIN TWITTER BLOCK -->                                                    
                    <h2>Latest Tweets</h2>
                    <dl class="dl-horizontal f-twitter">
                        <dt><i class="fa fa-twitter"></i></dt>
                        <dd>
                            <a href="#">@keenthemes</a>
                            Imperdiet condimentum diam dolor lorem sit consectetur adipiscing
                            <span>3 min ago</span>
                        </dd>
                    </dl>                    
                    <dl class="dl-horizontal f-twitter">
                        <dt><i class="fa fa-twitter"></i></dt>
                        <dd>
                            <a href="#">@keenthemes</a>
                            Sequat ipsum dolor onec eget orci fermentum condimentum lorem sit consectetur adipiscing
                            <span>8 min ago</span>
                        </dd>
                    </dl>                    
                    <dl class="dl-horizontal f-twitter">
                        <dt><i class="fa fa-twitter"></i></dt>
                        <dd>
                            <a href="#">@keenthemes</a>
                            Remonde sequat ipsum dolor lorem sit consectetur adipiscing
                            <span>12 min ago</span>
                        </dd>
                    </dl>                    
                    <dl class="dl-horizontal f-twitter">
                        <dt><i class="fa fa-twitter"></i></dt>
                        <dd>
                            <a href="#">@keenthemes</a>
                            Pilsum dolor lorem sit consectetur adipiscing orem sequat
                            <span>16 min ago</span>
                        </dd>
                    </dl>                    
                    <!-- END TWITTER BLOCK -->                                                                        
                </div>
            </div>
        </div>
    </div>
    <!-- END FOOTER -->

    <!-- BEGIN COPYRIGHT -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <p>
                        <span class="margin-right-10">
							<?php if(!empty($redux_demo['opt-copyright']) && isset($redux_demo['opt-copyright'])) { ?>
								<?php echo $redux_demo['opt-copyright']; ?>
							<?php } else { ?>
								&copy; <?php echo date('Y') . ' ' . get_bloginfo('name'); ?>. <?php if(!empty($redux_demo['opt-copyright'])) echo $redux_demo['opt-copyright']; ?> 
					<?php } ?>
						</span> 
                    </p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <ul class="social-footer">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-dropbox"></i></a></li>
                    </ul>                
                </div>
            </div>
        </div>
    </div>
    <!-- END COPYRIGHT -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS(REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri()?>/assets/plugins/respond.min.js"></script>  
    <![endif]-->  
    
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS(REQUIRED ONLY FOR CURRENT PAGE) -->
    <?php wp_footer(); ?>    
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();    
            App.initBxSlider();
            Index.initRevolutionSlider();                    
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>