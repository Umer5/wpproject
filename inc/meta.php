<?php //global $minti_data; ?>
<?php //if($minti_data['switch_metadata'] == '1') { ?>
	<ul class="blog-info">
		<li><i class="fa fa-calendar"></i> <?php the_time('d/m/Y'); ?></li>
		<?php if($minti_data['check_metadata']['comments'] == '1') { ?>
			<?php if ( comments_open() ) : ?><li class="fa fa-comments"><?php comments_popup_link(__('No Comments', 'minti'), __('1 Comment', 'minti'), __('% Comments', 'minti'), 'comments-link', ''); ?></li><?php endif; ?>
			<?php } ?>
		<li><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li>
		<?php if($minti_data['check_metadata']['tags'] == '1') { ?>
			<?php if(is_single()){ ?>
			<li class="fa fa-tags"><?php the_tags( '', ', ', ''); ?></li>
			<?php } ?>
		<?php } ?>
		<?php if($minti_data['check_metadata']['categories'] == '1') { ?>
			<li class="meta-category"><?php the_category(', '); ?></li>
		<?php } ?>
	</ul>
<?php //} ?>