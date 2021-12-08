<?php 	
	get_header(); 
	$sy_options = kameleon_get_options_name();
	$post_id = get_the_ID();
	$sb_active = get_post_meta($post_id, 'sidebar_active',true);	
	$sb_position = "none";
	if($sb_active == 1){
		$sb_position = get_post_meta($post_id,'sidebar_position',true);
	}	

?>

<div id="km-content">
	<div id="km-checker" data-sidebar-position="<?php echo esc_attr($sb_position); ?>">
		<div id="km-data" class="center-content">
			<?php 
				while(have_posts()): the_post();
					 the_content();
				endwhile; 
			?>
			<div id="single-comments-list">
				<?php comments_template(); ?>
			</div>
		</div>
		
		<?php if($sb_active == 1){ ?>
			<div id="kameleon-sidebar" >
				<?php get_sidebar(); ?>
			</div>
		<?php } ?>

	</div>
</div>
<?php get_footer();?>