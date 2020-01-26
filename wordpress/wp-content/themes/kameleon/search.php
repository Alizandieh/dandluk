<?php 	
	get_header(); 
	$sy_options = kameleon_get_options_name();
	$sb_active = $sy_options['sidebar_search_active'];
	$sb_position = "none";
	if($sb_active == 1){
		$sb_position = $sy_options['sidebar_search_position'];
	}

	
?>

<div id="km-content" >
	<div id="km-checker" data-sidebar-position="<?php echo esc_attr($sb_position); ?>">
		<div id="km-data" class="center-content">
			<?php 
				if ( have_posts() ) : 
					get_template_part('templates/post/post','loop');
				else:
			?>		
				<div class="noresult-found-container">
					<form action="<?php echo esc_url(home_url( '/' )); ?>" method="get">
						<input type="text" name="s" autocomplete="off" placeholder="<?php echo esc_html__('Search...','kameleon'); ?>">
					</form>	
					<span class="noresult-message"><?php echo esc_html__('Sorry we couldn\'t find hat you are looking for !','kameleon'); ?></span>
				</div>
			<?php endif; ?>
		</div>
		
		<?php if($sb_active == 1){ ?>
			<div id="kameleon-sidebar" >
				<?php get_sidebar(); ?>
			</div>
		<?php } ?>

	</div>
</div>




<?php get_footer();?>