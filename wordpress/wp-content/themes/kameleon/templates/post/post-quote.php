<a href="<?php esc_url(the_permalink()); ?>" class="km-quote">
	<i class="fa fa-quote-right"></i>
	<div class="km-quote-content"><?php the_content(); ?></div>
	<?php if(get_post_meta(get_the_ID(),'quote_author',true) !="") ?>
	<div class="km-quote-author">
		<?php echo get_post_meta(get_the_ID(),'quote_author',true); ?>
	</div>	
</a>