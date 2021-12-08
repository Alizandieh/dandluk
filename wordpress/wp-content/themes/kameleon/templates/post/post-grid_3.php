w<div class="km-grid-3 km-grid-masonry">
	<?php if(!has_post_format('quote')):	
		switch(true) {
			case has_post_format('video'):
				kameleon_print_post_format('video','large-thumbnail');
				break;
			case has_post_format('audio'):
				kameleon_print_post_format('audio','large-thumbnail');					
				break;
			case has_post_format('gallery'):
				kameleon_print_post_format('gallery','large-thumbnail');					
				break;
			case has_post_format('quote'):
				kameleon_print_post_format('quote','large-thumbnail');					
				break;
			default:
				kameleon_print_post_format('image','large-thumbnail');					
		}
	?>
	<h2 class="clst-hover km-p-title">
		<a href="<?php esc_url(the_permalink()); ?>"> <?php the_title(); ?> </a>		
	</h2>
	<!-- <div class="km-grid-info">
	</div>-->
	<div class="km-p-excerpt">
		 <?php echo substr(get_the_excerpt(), 0,150); ?>
	</div>
	<div class="km-p-bottom">
		<?php kameleon_post_information('grid'); ?>		
		<a href="<?php esc_url(the_permalink()); ?>" class="clst-hover km-pf-read-more"><?php echo esc_html__('Read More','kameleon'); ?></a>	
	</div>

	<?php endif; 
		if(has_post_format('quote')): 
			get_template_part('templates/post/post','quote');
		endif; 
	?>
</div>