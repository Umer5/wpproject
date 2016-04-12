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
			//echo '<pre>';
			//print_r($redux_demo);

		
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
<?php 
$fix_header = ($redux_demo['header-fix'] == 1) ? 'page-header-fixed' : null;

$top_phone = (!empty($redux_demo['phone']) && isset($redux_demo['phone'])) ? $redux_demo['phone'] : null;
$top_email = (!empty($redux_demo['email']) && isset($redux_demo['email'])) ? $redux_demo['email'] : null;
?>
<body <?php body_class();?>>
    <!-- BEGIN HEADER -->
	
    <div class="header navbar navbar-default navbar-static-top">
        <!-- BEGIN TOP BAR -->
        <div class="front-topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9">
                        <ul class="list-unstyled inline">
                            <li><i class="fa fa-phone topbar-info-icon top-2"></i>Call us: <span><?php echo $top_phone;?></span></li>
                            <li class="sep"><span>|</span></li>
                            <li><i class="fa fa-envelope-o topbar-info-icon top-2"></i>Email: <span><?php echo $top_email;?></span></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3 login-reg-links">                        
						<?php if(has_nav_menu('top_menu')) { ?>
							   <?php wp_nav_menu( array( 'theme_location' => 'top', 'menu_class' => 'list-unstyled inline' ) ); ?>
						<?php }	?>
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
				<?php if(has_nav_menu('primary_menu')) { ?>
					   <?php wp_nav_menu( array( 'theme_location' => 'primary_menu', 'menu_class' => 'nav navbar-nav' ) ); ?>
				<?php }	?>
				  
            </div>
            <!-- BEGIN TOP NAVIGATION MENU -->
		</div>
    </div>
    <!-- END HEADER -->