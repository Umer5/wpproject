<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage My_Theme
 * @since My Theme 2.0.2
 */
 global $redux_demo;
?>
		<?php 
			echo '<pre>';
			print_r($redux_demo);

		
		 ?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?> > <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta charset="<?php bloginfo( 'charset' );?>" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />  

	<?php if(!empty($redux_demo['media-fav']['url'])) { ?>
		<link rel="shortcut icon" href="<?php echo $redux_demo['media-fav']['url']; ?>" />
	<?php } ?>
   	
	<?php wp_head(); ?>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body>
    <!-- BEGIN HEADER -->
	
    <div class="header navbar navbar-default navbar-static-top">
		<!-- BEGIN TOP BAR -->
        <div class="front-topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9">
                        <ul class="list-unstyled inline">
                            <li><i class="fa fa-phone topbar-info-icon top-2"></i>Call us: <span>(1) 456 6717</span></li>
                            <li class="sep"><span>|</span></li>
                            <li><i class="fa fa-envelope-o topbar-info-icon top-2"></i>Email: <span>info@keenthemes.com</span></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3 login-reg-links">
                        <ul class="list-unstyled inline">
                            <li><a href="page_login.html">Login</a></li>
                            <li class="sep"><span>|</span></li>
                            <li><a href="page_signup.html">Signup</a></li>
                        </ul>
                    </div>
                </div>
            </div>        
        </div>
        <!-- END TOP BAR -->
		<div class="container">
			<div class="navbar-header">
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<button class="navbar-toggle btn navbar-btn" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- END RESPONSIVE MENU TOGGLER -->
				<!-- BEGIN LOGO (you can use logo image instead of text)-->
				<a class="navbar-brand logo-v1" href="<?php echo home_url(); ?>">
					<?php
						if(!empty($redux_demo['use-logo'])) {
							$logo_url = $redux_demo['use-logo']['url'];
							$height = (!empty($redux_demo['opt-height'])) ? $redux_demo['opt-height']['height'] : null;
							echo '<img src="'.$logo_url.'" id="logoimg" alt="" style="height:'.$height.'">';
						} else { echo get_bloginfo('name'); }
					 ?>
				</a>
				<!-- END LOGO -->
			</div>
		
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown active">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                        	Home
                        	<i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                        	<li class="active"><a href="index.html">Home Default</a></li>
                            <li><a href="page_home_fixed_header.html">Header Fixed</a></li>
                        	<li><a href="page_home2.html">Home with Top Bar</a></li>
                        </ul>
					</li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" data-delay="0" data-close-others="false" data-target="#" href="#">
                        Mega Menu 
                        <i class="fa fa-angle-down"></i>
                      </a>
                      <!-- BEGIN DROPDOWN MENU -->
                      <ul class="dropdown-menu" aria-labelledby="mega-menu">
                        <li>
                          <div class="nav-content">
                            <!-- BEGIN DROPDOWN MENU - COLUMN -->
                            <div class="nav-content-col">
                              <h3>Footwear</h3>
                              <ul>
                                <li><a href="#">Astro Trainers</a></li>
                                <li><a href="#">Basketball Shoes</a></li>
                                <li><a href="#">Boots</a></li>
                                <li><a href="#">Canvas Shoes</a></li>
                                <li><a href="#">Football Boots</a></li>
                                <li><a href="#">Golf Shoes</a></li>
                                <li><a href="#">Hi Tops</a></li>
                                <li><a href="#">Indoor and Court Trainers</a></li>
                              </ul>
                            </div>
                            <!-- END DROPDOWN MENU - COLUMN -->
                            <!-- BEGIN DROPDOWN MENU - COLUMN -->
                            <div class="nav-content-col">
                              <h3>Clothing</h3>
                              <ul>
                                <li><a href="#">Base Layer</a></li>
                                <li><a href="#">Character</a></li>
                                <li><a href="#">Chinos</a></li>
                                <li><a href="#">Combats</a></li>
                                <li><a href="#">Cricket Clothing</a></li>
                                <li><a href="#">Fleeces</a></li>
                                <li><a href="#">Gilets</a></li>
                                <li><a href="#">Golf Tops</a></li>
                              </ul>
                            </div>
                            <!-- END DROPDOWN MENU - COLUMN -->
                            <!-- BEGIN DROPDOWN MENU - COLUMN -->
                            <div class="nav-content-col">
                              <h3>Accessories</h3>
                              <ul>
                                <li><a href="#">Belts</a></li>
                                <li><a href="#">Caps</a></li>
                                <li><a href="#">Gloves, Hats and Scarves</a></li>
                              </ul>

                              <h3>Clearance</h3>
                              <ul>
                                <li><a href="#">Jackets</a></li>
                                <li><a href="#">Bottoms</a></li>
                              </ul>
                            </div>
                            <!-- END DROPDOWN MENU - COLUMN -->
                          </div>
                        </li>
                      </ul>
                      <!-- END DROPDOWN MENU -->
                    </li>
                    <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                            Pages
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="page_about.html">About Us</a></li>
                            <li><a href="page_services.html">Services</a></li>
                            <li><a href="page_prices.html">Prices</a></li>
                            <li><a href="page_faq.html">FAQ</a></li>
                            <li><a href="page_gallery.html">Gallery</a></li>
                            <li><a href="page_search_result.html">Search Result</a></li>
                            <li><a href="page_404.html">404</a></li>
                            <li><a href="page_500.html">500</a></li>
                            <li><a href="page_login.html">Login Page</a></li>
                            <li><a href="page_signup.html">Signup Page</a></li>
                            <li><a href="page_careers.html">Careers</a></li>
                            <li><a href="page_contacts.html">Contact</a></li>
                        </ul>
                    </li>
					<li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                        	Features
                        	<i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                        	<li><a href="feature_typography.html">Typography</a></li>
                        	<li><a href="feature_buttons.html">Buttons</a></li>
                        	<li><a href="feature_forms.html">Forms</a></li>
                        	<li><a href="feature_icons.html">Icons</a></li>
                        </ul>
					</li>                        
					<li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                        	Portfolio
                        	<i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                        	<li><a href="portfolio_4.html">Portfolio 4</a></li>
                        	<li><a href="portfolio_3.html">Portfolio 3</a></li>
                        	<li><a href="portfolio_2.html">Portfolio 2</a></li>
                        	<li><a href="portfolio_item.html">Portfolio Item</a></li>
                        </ul>
					</li>
					<li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                        	Blog
                        	<i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                        	<li><a href="blog.html">Blog Page</a></li>
                        	<li><a href="blog_item.html">Blog Item</a></li>
                        </ul>
					</li>					
                    <li><a href="http://www.keenthemes.com/preview/index.php?theme=metronic_admin&page=index.html" target="_blank">Admin Theme</a></li>
					<li class="menu-search">
                        <span class="sep"></span>
                        <i class="fa fa-search search-btn"></i>

                        <div class="search-box">
                            <form action="#">
                                <div class="input-group input-large">
                                    <input class="form-control" type="text" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn theme-btn">Go</button>
                                    </span>
                                </div>
                            </form>
                        </div> 
					</li>
				</ul>                           
			</div>
			<!-- BEGIN TOP NAVIGATION MENU -->
		</div>
    </div>
    <!-- END HEADER -->