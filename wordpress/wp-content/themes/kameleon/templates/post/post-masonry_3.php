<div class="km-grid-3 km-grid-masonry">
	<?php if(!has_post_format('quote')):	
		switch(true) {
			case has_post_format('video'):
				kameleon_print_post_format('video','');
				break;
			case has_post_format('audio'):
				kameleon_print_post_format('audio','');					
				break;
			case has_post_format('gallery'):
				kameleon_print_post_format('gallery','');					
				break;
			case has_post_format('quote'):
				kameleon_print_post_format('quote','');					
				break;
			default:
				kameleon_print_post_format('image','');					
		}
	?>
	<h2 class="clst-hover km-p-title" data-type="masonry">
		<a href="<?php esc_url(the_permalink()); ?>"> <?php the_title(); ?> </a>		
	</h2>
	<?php endif; 
		if(has_post_format('quote')): 
			get_template_part('templates/post/post','quote');
		endif; 
	?>
</div>