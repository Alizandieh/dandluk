<div class="km-pfull-image-2">
	<?php	if(!has_post_format('quote')):	
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
	<div class="km-pfull-left">
		<a href="<?php echo esc_url(get_day_link( get_the_time('Y'), get_the_time('m'), get_the_time('d'))); ?>" class="clst-hover">
			<i class="fa fa-calendar"></i>
			<div>
				<span><?php echo get_the_time("j"); ?></span> 			
				<span><?php echo get_the_time("M"); ?></span> 
				
			</div>
		</a>			
	</div>
	<div class="km-pfull-right">
		<h2 class="clst-hover km-p-title">
			<a href="<?php esc_url(the_permalink()); ?>"> <?php the_title(); ?> </a>		
		</h2>
		<div class="km-p-excerpt">
			 <?php the_excerpt(); ?>
		</div>
		<div class="km-p-bottom">
			<?php kameleon_post_information('not-all'); ?>
			<a href="<?php esc_url(the_permalink()); ?>" class="clst-hover km-pf-read-more"><?php echo esc_html__('Read More','kameleon'); ?></a>	
		</div>		
	</div>
	<?php endif; 
		if(has_post_format('quote')): 
			get_template_part('templates/post/post','quote');
		endif; 
	?>
</div>