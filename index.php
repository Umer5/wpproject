<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage My_Theme
 * @since My Theme 1.0
 */

get_header(); ?>

<div id="page-wrap" class="page-container">
		<!-- BEGIN CONTAINER -->   
		<div id="content" class="container <?php echo esc_attr($sidebarlayout); ?> min-hight">
			<!-- BEGIN BLOG -->
			<div class="row">
				<!-- BEGIN LEFT SIDEBAR -->            
				<div class="col-md-9 col-sm-9 blog-posts margin-bottom-40">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
							<?php get_template_part( 'inc/entry', get_post_format() ); ?>
					
						<?php endwhile; endif; ?>
				
					<?php get_template_part( 'inc/nav' ); ?>
				
				</div>
				<!-- END LEFT SIDEBAR -->  
				<?php if($sidebar != 'no-sidebar'){ ?>
						<?php get_sidebar(); ?>
				<?php } ?>
			</div>
			<!-- END BEGIN BLOG -->
		</div>
		<!-- END CONTAINER -->
	</div>

	
</div><!-- #main-content -->

<?php get_footer(); ?>