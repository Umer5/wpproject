<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix row'); ?>>
    
    <?php if (!is_single() || (is_single() && get_post_meta( get_the_ID(), 'minti_hideimage', true ) == false)) { ?>
        <?php if ( has_post_thumbnail() ) { ?>
        <div class="col-md-4 col-sm-4">
            <?php if(is_single()){ ?>
                <?php $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'full', true); ?>
                <a href="<?php echo esc_url($thumb_url[0]); ?>" title="<?php the_title(); ?>" class="prettyPhoto" rel="bookmark">
					<?php the_post_thumbnail('blog', array('class' => 'img-responsive')); ?>
                </a>
            <?php } else { ?>
                <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', 'minti'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
                    <?php the_post_thumbnail('blog', array('class' => 'img-responsive')); ?>
                </a>
            <?php } ?>
        </div>
        <?php } ?>
    <?php } ?>
    	
    <div class="col-md-8 col-sm-8">
            <?php if(!is_single()){ ?>
                <h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', 'minti'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <?php } else { ?>
                <h1><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', 'minti'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            <?php } ?>
        
		<?php if(!is_single()){ ?>
        <div class="entry-meta">
            <?php get_template_part( 'inc/meta' ); ?>
        </div>
        <?php } ?>
		
		<?php if(!is_single()){ ?>
			<?php echo substr(get_the_excerpt(), 0,350); ?>
			<a class="more" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', 'minti'), the_title_attribute('echo=0') ); ?>" rel="bookmark">Read more <i class="icon-angle-right"></i></a>
		<?php } else { ?>
			<?php the_content(); ?>
		<?php } ?>
    </div>

</div><!-- #post -->
<hr class="blog-post-sep">