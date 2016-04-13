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
<?php if( !empty($redux_demo['footer-widget-on']) && $redux_demo['footer-widget-on'] == '1') { ?>
    <div class="footer">
        <div class="container">
            <div class="row">
				<?php 
				
				$footerColumns = (!empty($redux_demo['widget-columns'])) ? $redux_demo['widget-columns'] : '4'; 
				
				if($footerColumns == '2'){
					$footerColumnClass = 'col-md-6 col-sm-6';
				} else if($footerColumns == '3'){
					$footerColumnClass = 'col-md-4 col-sm-4';
				} else {
					$footerColumnClass = 'col-md-3 col-sm-3';
				}
				?>
                <div class="<?php echo $footerColumnClass;?> space-mobile">
                    <!-- Footer widget area 1 -->
		              <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Area 1') ) : else : ?>	
		              	  <div class="widget">		
						  	 <h2 class="widgettitle">Widget Area 1</h2>
						 	 <p class="no-widget-added"><a href="<?php echo admin_url('widgets.php'); ?>">Click here to assign a widget to this area.</a></p>
				     	  </div>
				     <?php endif; ?>
                </div>
                <div class="<?php echo $footerColumnClass;?> space-mobile">
                    <!-- Footer widget area 2 -->
		             <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Area 2') ) : else : ?>	
		                  <div class="widget">			
						 	 <h2 class="widgettitle">Widget Area 2</h2>
						 	 <p class="no-widget-added"><a href="<?php echo admin_url('widgets.php'); ?>">Click here to assign a widget to this area.</a></p>
				     	  </div>
				     <?php endif; ?>
                    <!-- END SUBSCRIBE -->                                    
                </div>
				<?php if($footerColumns == '3' || $footerColumns == '4') { ?>
					<div class="col <?php echo $footerColumnClass; ($footerColumnClass == '4') ? space-mobile : null?>">
						 <!-- Footer widget area 3 -->
			              <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Area 3') ) : else : ?>		
			              	  <div class="widget">			
							  	<h2 class="widgettitle">Widget Area 3</h2>
							  	<p class="no-widget-added"><a href="<?php echo admin_url('widgets.php'); ?>">Click here to assign a widget to this area.</a></p>
							  </div>		   
					     <?php endif; ?>
					     
					</div><!--/span_3-->
				<?php } ?>
				
				<?php if($footerColumns == '4') { ?>
					<div class="col <?php echo $footerColumnClass;?>">
						 <!-- Footer widget area 4 -->
			              <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Area 4') ) : else : ?>	
			              	<div class="widget">		
							    <h2>Widget Area 4</h2>
							    <p class="no-widget-added"><a href="<?php echo admin_url('widgets.php'); ?>">Click here to assign a widget to this area.</a></p>
							 </div><!--/widget-->	
					     <?php endif; ?>
					     
					</div><!--/span_3-->
				<?php } ?>
            </div>
        </div>
    </div>
    <!-- END FOOTER -->
<?php } //endif for enable main footer area ?>
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
						<?php  if(!empty($redux_demo['social-on']) && $redux_demo['social-on'] == 1) { ?>
						
							<?php  if(!empty($redux_demo['facebook-url'])) { ?><li><a target="_blank" href="<?php echo $redux_demo['facebook-url']; ?>"><i class="fa fa-facebook"></i> </a></li> <?php } ?>
							<?php  if(!empty($redux_demo['google-url'])) { ?><li><a target="_blank" href="<?php echo $options['google-url']; ?>"><i class="fa fa-google-plus"></i> </a></li> <?php } ?>
							<?php  if(!empty($redux_demo['dribbble-url'])) { ?><li><a target="_blank" href="<?php echo $redux_demo['dribbble-url']; ?>"><i class="fa fa-dribbble"></i> </a></li> <?php } ?>
							<?php  if(!empty($redux_demo['linkedin-url'])) { ?><li><a target="_blank" href="<?php echo $options['linkedin-url']; ?>"><i class="fa fa-linkedin"></i> </a></li> <?php } ?>
							<?php  if(!empty($redux_demo['twitter-url'])) { ?><li><a target="_blank" href="<?php echo $redux_demo['twitter-url']; ?>"><i class="fa fa-twitter"></i> </a></li> <?php } ?>
							<?php  if(!empty($redux_demo['skype-url'])) { ?><li><a target="_blank" href="<?php echo $options['skype-url']; ?>"><i class="fa fa-skype"></i> </a></li> <?php } ?>
							<?php  if(!empty($redux_demo['github-url'])) { ?><li><a target="_blank" href="<?php echo $redux_demo['github-url']; ?>"><i class="fa fa-github"></i> </a></li> <?php } ?>
							<?php  if(!empty($redux_demo['youtube-url'])) { ?><li><a target="_blank" href="<?php echo $options['youtube-url']; ?>"><i class="fa fa-youtube"></i> </a></li> <?php } ?>
							<?php  if(!empty($redux_demo['dropbox-url'])) { ?><li><a target="_blank" href="<?php echo $redux_demo['dropbox-url']; ?>"><i class="fa fa-dropbox"></i> </a></li> <?php } ?>
							
						<?php } ?>
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
    <script src="<?php echo get_template_directory_uri()?>/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/plugins/back-to-top.js"></script>    
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS(REQUIRED ONLY FOR CURRENT PAGE) -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>  
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/plugins/bxslider/jquery.bxslider.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/scripts/app.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/scripts/index.js"></script>    
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS(REQUIRED ONLY FOR CURRENT PAGE) -->    
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();    
            App.initBxSlider();
            Index.initRevolutionSlider();                    
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
	<?php wp_footer(); ?>
</body>
<!-- END BODY -->
</html>