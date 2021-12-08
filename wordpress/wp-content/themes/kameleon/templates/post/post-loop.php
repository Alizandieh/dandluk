<?php 
	$sy_options = kameleon_get_options_name();
	$post_layout = ($sy_options['post_layout'] != null) ? $sy_options['post_layout'] : 'full_image';
 ?>
<div class="km-post-loop">	
<?php if ( have_posts() ) : 
		while ( have_posts() ) : the_post();

			get_template_part('templates/post/post',$post_layout);		
		
		endwhile; 
	endif; 
	kameleon_pagination();
?>		
</div>